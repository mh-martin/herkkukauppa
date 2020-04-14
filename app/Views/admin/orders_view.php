<div class="row">
    <div class="col">
        <h1>Tehdyt tilaukset:</h1>
        <table class="table table-striped table-sm">

        <tr>
            <th>Etunimi</th>
            <th>Sukunimi</th>
            <th>Tilauspäivämäärä</th>
            <th>Tila</th>
            <th></th>
        </tr>
            
        <?php foreach ($orders as $order): 
            ?>
                <tr>
                <td class="m-3"><?=$order['firstname'] ?></td>
                    <td class="m-3"><?=$order['lastname'] ?></td>
                    <td class="m-3"><?=$order['orderDate'] ?></td>
                    <td class="m-3"><?=$order['status'] ?></td>
                    <td class="m-3"><?= anchor('admin/showOrder/' . $order['id'], ' <button>Näytä tilaus</button>')?></td>
                </tr>            
                <?php endforeach ?>     
        </table>
    </div>
</div>