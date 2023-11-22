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
    <title>Entreprise</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <!-- <th>Photo</th> -->
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Occupation</th>
                            <th>Catégorie</th>
                            <th>Salaire</th>
                            <!-- <th>Adresse</th>
                            <th>Contact</th> -->
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
</html>