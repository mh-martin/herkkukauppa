<div class="row">
    <div class="col">
        <h1>Muokkaa tuotteiden määrää varastossa</h1>

        <table class="table table-striped table-sm">
            <?php foreach ($products as $product):?>
                            
            
                <tr>
                    
                    <th><?=$product['name']?></th>
                    <th><?=$product['stock']?></th>
                    <td><?= anchor('admin/updateAmo/' . $product['id'], ' <button>Muuta</button>')?></td>
                    
                </tr>

              
            <?php  endforeach; ?>

        </table>

    </div>
</div>