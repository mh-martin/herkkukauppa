
<div class="row">
  <div class="form-group col-3 mb-0 mt-2">
    <select id="inputState" class="form-control text-center">
      <option selected>Järjestä</option>
      <option>...</option>
    </select>
  </div>
</div>


<div class="row">
<?php foreach ($product as $prod): ?>
    <?php if ($id === $prod['category_id'] || $id === $prod['theme_id']) { ?>
    <div class="col-lg-3 col-md-4 card mt-3 mb-1">
      <a href="<?=site_url('shop/show_product/' . $prod['id'])?>" ><img class="img-fluid" src="<?=base_url($prod['image'] . '.png')?>">
    <div class="card-body text-center">
      <h5 class="card-title"><?= $prod['name'] ?></h5>
      <p class="card-text"><?= $prod['price'] . '€/100G' ?></p></a>
      <form method="post" action="<?= site_url('cart/insert')?>">
      <input type="hidden" name="product" value="<?= $prod['id'] ?>">
      <input type="hidden" name="amount" value="1">
      <?php 
      if (is_array($_SESSION['basket'])) {
        $amount = 0;
        foreach ($_SESSION['basket'] as $key => $value):
        if ($value == $prod['id']) {
            $amount++;
        }
        endforeach;
        if (($prod['stock'] - $amount) < 1) {?>
          <button class="btn mt-2" disabled>Ei varastossa</button>
        <?php } 
        else {?>
          <button class="btn mt-2">Lisää ostoskoriin</button>
        <?php
         }
    }
    else if ($prod['stock'] < 1){ ?>
        <button class="btn mt-2" disabled>Ei varastossa</button>
<?php
    } else {?>
          <button class="btn mt-2">Lisää ostoskoriin</button>
<?php
    }?>
      </form>
    </div>
  </div>
  <?php } endforeach; ?>
</div>