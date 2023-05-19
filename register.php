<?php include('includes/header.php');?>
    
<div class="container">
    <div class="card main bg-light">
        <?php include('includes/logo.php');?>
        <?php include('includes/navigation.php');?>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card mt-4 p-1">
                    <div class="card-body">
                        <h5 class="card-header bg-dark text-white text-center"><i class="fa fa-user-plus"></i> Inscription</h5>
                        <?php 
                            if(isset($_POST['send'])){
                                $nom = escape_string($_POST['nom'].' '.$_POST['prenom']);
                                $email = escape_string($_POST['email']);
                                $password = escape_string(sha1($_POST['passe']));
                                $sql = "INSERT INTO users VALUES ('','$nom','$email','$password')";
                                if(query($sql)){
                                    echo '<div class="alert alert-success mt-2">Compte crée.</div>';
                                }else{
                                    echo '<div class="alert alert-danger mt-2">Erreur veuillez réessayer.</div>';
                                }
                            }   
                        ?>
                        <form action="register.php" method="post" class="mt-4">
                            <div class="form-group">
                                <label for="nom">Nom*</label>
                                <input type="text" name="nom" placeholder="Entrer votre nom" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénom*</label>
                                <input type="text" name="prenom" placeholder="Entrer votre prénom" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input type="email" name="email" placeholder="Entrer votre email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="passe">Passe*</label>
                                <input type="password" name="passe" placeholder="Entrer votre mot de passe" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="send" class="btn btn-primary">Valider</button>
                            </div>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
        <footer class="bg-dark text-white mt-2">
            <p class="lead text-center mt-2">DCoding&copy;2018</p>
        </footer>
    </div>
</div>

<?php include('includes/footer.php');?>