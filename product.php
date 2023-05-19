<?php include('includes/header.php');?>
    
<div class="container">
    <div class="card main bg-light">
        <?php include('includes/logo.php');?>
        <?php include('includes/navigation.php');?>
        <div class="row">
            <div class="col-md-8">
                <?php 
                    $id = escape_string($_GET['id']);
                    $query = "SELECT * FROM products WHERE product_id = '$id'";
                    $result = query($query);
                    $row = fetch_array($result);
                ?>
                <div class="card mt-4 p-1 mx-1">
                    <div class="card-body">
                        <h5 class="card-header bg-dark text-white"><i class="fa fa-list"></i> Boutique</h5>
                        <div class="card-img-top mt-2">
                            <img src="<?php echo $row['product_image'];?>" class="w-100 img-fluid" alt="">
                        </div>
                        <h4 class="card-title"><?php echo $row['product_title'];?></h4>
                        <p><span class="badge badge-success"><?php echo $row['product_price'].'dh';?></span>  <span class="text-danger"><strike><?php echo $row['old_price'].'dh';?></strike></span></p>
                        <p class="lead card-text"><?php echo $row['product_description'];?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <form action="checkout.php" method="post">
                    <div class="form-group">
                        <label for="qte">Qté*</label>
                        <input type="number" name="qte" style="width:20%;" class="form-control" value="1">
                        <input type="hidden" name="product" value="<?php echo $row['product_title'];?>">
                        <input type="hidden" name="id" value="<?php echo $row['product_id'];?>">
                    </div>
                    <button type="submit" class="btn btn-primary"> <i class="fa fa-shopping-cart"></i> Ajouter au panier</button>
                </form>
            </div>
        </div>
        <footer class="bg-dark text-white mt-2">
            <p class="lead text-center mt-2">DCoding&copy;2018</p>
        </footer>
    </div>
</div>

<?php include('includes/footer.php');?>