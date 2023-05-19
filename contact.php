<?php include('includes/header.php');?>
    
<div class="container">
    <div class="card main bg-light">
        <?php include('includes/logo.php');?>
        <?php include('includes/navigation.php');?>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card mt-4 p-1">
                    <div class="card-body">
                        <h5 class="card-header bg-dark text-white text-center"><i class="fa fa-envelope"></i> Contact</h5>
                        <form action="contact.php" method="post" class="mt-4">
                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input type="email" name="email" placeholder="Entrer votre email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="message">Message*</label>
                                <textarea name="message" class="form-control" id="" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Valider</button>
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