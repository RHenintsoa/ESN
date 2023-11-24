<?php 
    include('Database.php');
    $data = new Database('localhost','root','','esn');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/bootstrap/css/bootstrap.min.css">
    <title>Insérer un nouveau</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                    <div class="form-group">
                        <label for="input-name"class="form-label">Nom</label>
                        <input type="text" name="name" id="input-name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="input-firstname" class="form-label">Prénom</label>
                        <input type="text" name="firstname" id="input-firstname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="input-occupation"class="form-label">Occupation</label>
                        <input type="text" name="occupation" id="input-occupation" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="input-category" class="form-label">Catégorie</label>
                        <input type="text" name="category" id="input-category" class="form-control">
                    </div>  
                    <div class="form-group">
                        <label for="input-contact" class="form-label">Contact</label>
                        <input type="text" name="contact" id="input-contact" class="form-control">
                    </div> 
                    <div class="form-group">
                        <label for="input-address" class="form-label">Adresse</label>
                        <input type="text" name="address" id="input-address" class="form-control">
                    </div> 
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit"> Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>