<?php include('includes/header.php');?>
    
<div class="container">
    <div class="card main bg-light">
        <?php include('includes/logo.php');?>
        <?php include('includes/navigation.php');?>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card mt-4 p-1">
                    <div class="card-body">
                        <h5 class="card-header bg-dark text-white text-center"><i class="fa fa-sign-in"></i> Connexion</h5>
                        <?php 
                            if(isset($_POST['send'])){
                                $email = escape_string($_POST['email']);
                                $passe = escape_string(sha1($_POST['passe']));
                                $sql = "SELECT * FROM users WHERE email='$email' AND password = '$passe' LIMIT 1";
                                $result = query($sql);
                                $user = fetch_array($result);
                                if($user != null){
                                    $_SESSION['logged'] = true;
                                    $_SESSION['nom'] = $user['username'];
                                    $_SESSION['user_id'] = $user['user_id'];
                                    redirect("index.php");
                                }else{
                                    echo '<div class="alert alert-danger mt-2">Email ou mot de passe est incorrect.</div>';
                                }
                            }   
                        ?>
                        <form action="login.php" method="post" class="mt-4">
                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input type="email" required name="email" placeholder="Entrer votre email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="passe">Passe*</label>
                                <input type="password" required name="passe" placeholder="Entrer votre mot de passe" class="form-control">
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