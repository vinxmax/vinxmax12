<div class="row">
    <div class="col-md-4 mt-2">
        <a href="index.php" class="btn btn-link">
            <span class="text-primary display-3">Hanouti</span>
            <span class="text-danger display-4">.com</span>
        </a>
    </div>
    <div class="col-md-8 mt-4">
        <div class="float-right">
            <div class="dropdown">
                <a class="btn btn-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Compte
                </a>
                <?php 
                    if(isset($_SESSION['logged']) && $_SESSION['logged'] == true):
                ?>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item"><i class="fa fa-user"></i>
                        <?php echo $_SESSION['nom'];?> 
                    </a>
                    <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out"></i> Déconnexion</a>
                </div>
                <?php 
                    else:
                ?>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="register.php"><i class="fa fa-user-plus"></i> Inscription</a>
                    <a class="dropdown-item" href="login.php"><i class="fa fa-sign-in"></i> Connexion</a>
                </div>
                <?php 
                    endif;
                ?>
            </div>
        </div>
        <div class="float-right">
            <div class="dropdown">
                <a class="btn btn-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-shopping-cart"></i> Panier
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="cart.php"> <?php echo !empty($_SESSION['count']) ? $_SESSION['count'] : 0?> produit(s)</a>
                </div>
            </div>
        </div>
    </div>
</div>