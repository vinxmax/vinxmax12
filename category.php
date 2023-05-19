<?php 
include('includes/header.php');
$id = escape_string($_GET['id']);
$sql = "SELECT * FROM  products WHERE product_category_id = '$id'";
$result = query($sql);
$product = fetch_array($result);
?>  
<div class="container">
    <div class="card main bg-light">
        <?php include('includes/logo.php');?>
        <?php include('includes/navigation.php');?>
        <?php 
            if($product != null):
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card-deck">
                    <div class="card mt-4 p-1">
                        <div class="card-body">
                            <h5 class="card-header bg-dark text-white"><i class="fa fa-list"></i> Boutique</h5>
                            <div class="card-deck">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-top">
                                            <img src=" <?php echo $product['product_image'];?>" class="img-fluid" alt="">
                                        </div>
                                        <h4 class="card-title"><?php echo $product['product_title'];?></h4>
                                        <p><span class="badge badge-success"><?php echo $product['product_price'].'dh';?></span>  <span class="text-danger"><strike><?php echo $product['old_price'].'dh';?></strike></span></p>
                                        <p class="lead card-text"><?php echo $product['product_description'];?></p>
                                        <p><a href="product.php?id=<?php echo $product['product_id'];?>" class="btn btn-outline-dark">Voir</a></p>
                                    </div>
                                 </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            else:
        ?>
        <div class="alert alert-info mt-2">Aucun produit trouvé.</div>
        <?php 
            endif;
        ?>
        <footer class="bg-dark text-white mt-2">
            <p class="lead text-center mt-2">DCoding&copy;2018</p>
        </footer>
    </div>
</div>

<?php include('includes/footer.php');?>