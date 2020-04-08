<?php namespace App\Controllers;
use App\Models\AdminModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\ThemeModel;

class Admin extends BaseController
{

	private $categorymodel = null;
	private $thememodel = null;
	private $prodmodel = null;


    public function __construct() {
        $session = \Config\Services::session();
        $session->start();
        $this->model = new CategoryModel();
		$this->thememodel = new ThemeModel();
		$this->prodmodel = new ProductModel();
    }
    
    public function index() {
        // if(!isset($_SESSION['username'])) {
        //  return redirect()->to('/admin/adminlogin');
        // }
        echo view('admin/adminHeader');
        echo view('admin/admin_view');
        echo view('admin/adminFooter');
    }

    public function adminlogin() {
        echo view('admin/adminHeader');
        echo view('admin/adminlogin_view');
        echo view('admin/adminFooter');
    }
    public function adminregister(){
            echo view('admin/adminHeader');
            echo view('admin/register_view');
            echo view('admin/adminFooter');
    }

    public function adminRegistration() {
        $validation =  \Config\Services::validation();
        $model = new AdminModel();

        if (!$this->validate($validation->getRuleGroup('adminregistervalidate')))
        {
            echo view('admin/adminHeader');
            echo view('admin/register_view');
            echo view('admin/adminFooter');
        }
        else
        {
            $model->save([
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getPost('password'),PASSWORD_DEFAULT)
            ]);
            echo view('admin/adminHeader');
            echo view('admin/success_view');
            echo view('admin/adminFooter');
        }
    }

    public function adminCheck() {
        $validation =  \Config\Services::validation();
        $model = new AdminModel();
        
        if (!$this->validate($validation->getRuleGroup('adminloginvalidate')))
        {
            

            echo view('admin/adminHeader');
            echo view('admin/adminlogin_view');
            echo view('admin/adminFooter');
        }
        else
        {
            $adminuser =$model->admincheck(
                $this->request->getVar('username'),
                $this->request->getVar('password')  
            );
            
            if ($adminuser) {
                $_SESSION['username'] = $adminuser;
                return redirect()->to('/admin'); 
            
            }
            else {
                $data = [
                'message' => 'Käyttäjänimi tai salasana on väärin'
                ];
               
                echo view('admin/adminHeader');
                echo view('admin/adminlogin_view',$data);
                echo view('admin/adminFooter');
            }
        }
    }

    public function logout() {
        session_destroy();
        return redirect()->to('/admin/adminlogin');
    }

    public function updateCategory() {
        // if(!isset($_SESSION['username'])) {
        //     return redirect()->to('/admin/adminlogin');
        // }
        $data['categories'] = $this->categorymodel->getCategories();

        echo view('admin/adminHeader');
		echo view('admin/updateCategory_view', $data);
        echo view('admin/adminFooter');
    }

    public function updateCat($id) {
        $data['categories'] = $this->categorymodel->getCategories();
        $data['id'] = $id;

        echo view('admin/adminHeader');
		echo view('admin/updateCat_view', $data);
        echo view('admin/adminFooter');

    }

    public function update() {
        
        
        $id = $this->request->getVar('id');

        $data = [
            'name' => $this->request->getVar('newname'),
            'parentID' => $this->request->getVar('category')
        ];
        //print_r($id);
        //print_r($data);
        $this->categorymodel->update($id, $data);
        return redirect()->to('/admin/updateCategory');

    }


    public function deleteCat($categoryID) {

        // toimii toistaiseksi vain kategorioissa jossa ei ole tuotteita

        $category_model = new CategoryModel();
        $category_model->delete($categoryID);
        
        /*echo view('admin/adminHeader');
		echo view('admin/updateCategory_view');
        echo view('admin/adminFooter');*/

		return redirect('admin');

    }

    public function insertCat($parentid) {
        $data['categories'] = $this->categorymodel->getCategories();
        $data['id'] = $parentid;

        echo view('admin/adminHeader');
		echo view('admin/insertCat_view', $data);
        echo view('admin/adminFooter');
    }

    public function addCat() {
        if ($this->request->getVar('parentid') === 'NULL') {
            $this->categorymodel->save([
                'name' => $this->request->getVar('name'),
            ]);
        } else {
        
            $this->categorymodel->save([
                'name' => $this->request->getVar('name'),
                'parentID' => $this->request->getVar('parentid')
            ]);
        }
        return redirect()->to('/admin/updateCategory');
    }

    public function updateProduct() {
        //  if(!isset($_SESSION['username'])) {
        //      return redirect()->to('/admin/adminlogin');
        //  }

        $data['categories'] = $this->categorymodel->getCategories();
        $data['themecategories'] = $this->thememodel->getThemeCategories();

        echo view('admin/adminHeader');
        echo view('admin/updateProduct_view', $data);
        echo view('admin/adminFooter');
        
    }
    
    public function editProduct() {

        $data['categories'] = $this->categorymodel->getCategories();
        $data['products'] = $this->productmodel->showProduct();

        echo view('admin/adminHeader');
        echo view('admin/editProduct_view', $data);
        echo view('admin/adminFooter');
    }

    public function editAmount(/*$id*/) {
        $category_model = new CategoryModel();
        $product_model = new ProductModel();
        $theme_model = new ThemeModel();
        $data['products'] = $product_model->showProduct();
       // $data['products'] = $product_model->getProduct();

        echo view('admin/adminHeader');
        echo view('admin/editAmount_view', $data);
        echo view('admin/adminFooter');
    }
}