<div class="row">
    <div class="col">
    <?php foreach ($products as $product): ?>
        
                <?php
                if ($product['id'] === $id) {
            ?>
            <h3 class="mt-3 mb-3">Muokkaa tuotteen "<?=$product['name']?>" määrää varastossa</h3>
        <div class="col-5">
            <form method="post" action="<?= site_url('admin/update2')?>" class="mb-5">
            <input type="hidden" name="id" value="<?=$product['id']?>">
                <div class="form-row">
                    <div class="col">
                        <label class="m-3" for="newAmount">Uusi määrä: </label>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" id="newAmount" name="newAmount"></input>
                    </div>
                </div>
                <button>Muokkaa</button>
                <?php } 
    endforeach; ?>

            </form>
        </div>
    </div>
</div>