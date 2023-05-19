<?php 
include('includes/header.php');
//session_destroy();
?>
<div class="container">
    <div class="card main bg-light">
        <?php include('includes/logo.php');?>
        <?php include('includes/navigation.php');?>
        <div class="row">
            <div class="col-md-12">
                <?php 
                    $item_name = 1;
                    $item_number = 1;
                    $amount = 1;
                    $quantity = 1;
                    if(isset($_GET['message'])){
                        echo '<div class="alert alert-danger p-2 mt-2">'.$_GET['message'].'</div>';
                    }   
                ?>
                <div class="card mt-2 mb-3 mx-2">
                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="business" value="votre email sandbox">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Produit</th>
                                <th>Prix</th>
                                <th>Quantité</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            foreach($_SESSION as $name => $product):      
                        ?>
                        <?php 
                            if(substr($name,0,9) == "products_"):   
                        ?>
                            <tr>
                                <td>
                                    <?php echo !empty($product['product']) ? $product['product'] : ""?>
                                </td>
                                <td>
                                    <?php echo !empty($product['price']) ? $product['price'] : ""?>
                                </td>
                                <td>
                                    <?php echo !empty($product['qte']) ? $product['qte'] : ""?>
                                </td>
                                <td>
                                    <?php echo !empty($product['total']) ? $product['total'] : ""?>
                                </td>
                                <td>
                                    <a href="cancel_cart.php?id=<?php echo !empty($product['id']) ? $product['id'] : ""?>&price=<?php echo !empty($product['total']) ? $product['total'] : ""?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <input type="hidden" name="item_name_<?php echo $item_name?>" value="<?php echo !empty($product['product']) ? $product['product'] : ""?>">
                            <input type="hidden" name="item_nubmer_<?php echo $item_number?>" value="<?php echo !empty($product['id']) ? $product['id'] : ""?>">
                            <input type="hidden" name="amount_<?php echo $amount?>" value="<?php echo !empty($product['price']) ? $product['price'] : ""?>">
                            <input type="hidden" name="quantity_<?php echo $quantity?>" value="<?php echo !empty($product['qte']) ? $product['qte'] : ""?>">
                            <?php 
                                $item_name++;
                                $item_number++;
                                $amount++;
                                $quantity++;
                            ?>
                            <?php 
                                endif;  
                            ?>
                            <?php 
                                endforeach;  
                            ?>
                      </tbody>
                    </table>  
                    <?php 
                        if(isset($_SESSION['totaux']) && $_SESSION['totaux'] > 0):
                    ?>
                    <button type="submit" name="upload" class="btn btn-success mx-3"><i class="fa fa-credit-card"></i> Valider vos achat</button>
                    <?php 
                        endif;
                    ?>
                    </form>
                    <div class="row">
                        <div class="col-md-4 ml-auto">
                            <table class="table table-bordered">
                                <thead>
                                    <th>Produits</th>
                                    <th>Total HT</th>
                                </thead>
                                <tbody>
                                    <td>
                                        <?php echo !empty($_SESSION['count']) ? $_SESSION['count'] : ""?>
                                    </td>
                                    <td class="text-danger font-weight-bold"><?php echo !empty($_SESSION['totaux']) ? $_SESSION['totaux'].' DH' : ""?></td>
                                </tbody>
                            </table>
                        </div>
                    </div>     
                </div>
            </div>   
        </div>
        <footer class="bg-dark text-white mt-2">
            <p class="lead text-center mt-2">DCoding&copy;2018</p>
        </footer>   
    </div>
</div>