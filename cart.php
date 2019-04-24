<?php require 'inc/head.php'; ?>
<?php
if(empty($_SESSION['login'])){
    header('Location: login.php');
}
$panier = [
    46 => "Pecan nuts",
    36 => "Chocolate chips",
    58 => "Chocolate cookie",
    32 => "M&M's&copy; cookies"
];


?>
<section class="cookies container-fluid">
    <?php if (isset($_SESSION['cart']))

        foreach($_SESSION['cart'] as $id => $value){ ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <figcaption class="caption">
                        <h3><?= $panier[$id] ?></h3>
                        <p> <?= $value ?></p>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
</section>




<?php require 'inc/foot.php'; ?>
