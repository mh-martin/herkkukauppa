<?php namespace App\Controllers;
use App\Models\CategoryModel;
use App\Models\ThemeModel;
use App\Models\ProductModel;
use App\Models\LoginModel;
class Login extends BaseController
{
    public function __construct() {
        $session = \Config\Services::session();
        $session->start();
        $this->model = new CategoryModel();
		$this->thememodel = new ThemeModel();
        $this->prodmodel = new ProductModel();
        $this->loginmodel = new LoginModel();

    }

    public function index() {

		$data['categories'] = $this->model->getCategories();
		$data['themecategories'] = $this->thememodel->getThemeCategories();
		

		echo view('templates/header',$data);
		echo view('customer_view');
        echo view('templates/footer');

    }
    public function register() {
        $data['categories'] = $this->model->getCategories();
        $data['themecategories'] = $this->thememodel->getThemeCategories();
        
        echo view('templates/header',$data);
		echo view('register_view');
        echo view('templates/footer');
    }

}