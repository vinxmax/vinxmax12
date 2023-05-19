<?php 
$sql = "SELECT * FROM categories";
$result = query($sql);
?> 
<nav class="navbar navbar-expand-lg text-white mt-4 navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Accueil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Catégories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <?php while($categorie = fetch_array($result)):?> 
                    <a class="dropdown-item bg-light" href="category.php?id=<?php echo $categorie['cat_id'];?>"><?php echo $categorie['cat_title'];?></a>
                <?php endwhile;?> 
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="products.php">Produits <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
        <form action="search.php" method="post" class="form-inline my-2 my-lg-0 ml-auto">
            <input type="text" name="search" placeholder="Recherche" class="mr-sm-2 form-control">
            <button class="btn btn-light"><i class="fa fa-search"></i></button>
        </form>
    </div>
</nav>