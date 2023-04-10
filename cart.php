<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<?php require 'inc/cartManager.php'; ?>
<a href="?empty=true">Empty Cart</a>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($_SESSION['cart'] as $cookie => $quantity) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $cookie; ?>.jpg" alt="<?= $catalog[$cookie]['name'] ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $catalog[$cookie]['name'] . " x" . $quantity; ?></h3>
                        <p><?= $catalog[$cookie]['description']; ?></p>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
