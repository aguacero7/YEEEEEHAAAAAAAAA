<?php 
session_start();
include('../functions.php');
vitrine_head();
intranet_navbar();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organigramme</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">ORGANIGRAMME</h1>

        <div class="row"style="margin-bottom: 20px;">
            <div class="col-12">
                <div class="card text-center">
                    <div class="card-header">
                        <span>Monsieur X</span>
                    </div>
                    <div class="card-body">
                        <p>Directeur général</p>
                        <img class="card-img-top" src="../image/pdg.jpg" alt="" style="width:10%">
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-bottom: 20px;">
            <div class="col-6">
                <div class="card text-center">
                    <div class="card-header">
                        <span>Monseur Y</span>
                    </div>
                    <div class="card-body">
                        <p>Directeur des opérations</p>
                        <img class="card-img-top" src="../image/portrait3.jpg" alt="" style="width:20%">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card text-center">
                    <div class="card-header">
                        <span>Madame Y</span>
                    </div>
                    <div class="card-body">
                        <p>Directrice financière</p>
                        <img class="card-img-top" src="../image/portrait2.jpg" alt="" style="width:20%">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="card text-center">
                    <div class="card-header">
                        <span>Monseur Z</span>
                    </div>
                    <div class="card-body">
                        <p>Responsable marketing</p>
                        <img class="card-img-top" src="../image/portrait4.jpg" alt="" style="width:25%">

                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card text-center">
                    <div class="card-header">
                        <span>Madame A</span>
                    </div>
                    <div class="card-body">
                        <p>Responsable des ventes</p>
                        <img class="card-img-top" src="../image/portrait5.jpg" alt="" style="width:25%">

                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card text-center">
                    <div class="card-header">
                        <span>Madame B</span>
                    </div>
                    <div class="card-body">
                        <p>Responsable des ressources humaines</p>
                        <img class="card-img-top" src="../image/portrait6.jpg" alt="" style="width:25%">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXsvmniqer/xHnY9QWSqazUh3jAW6QjL6gchPqOIwhU74tYbu40LCj7oYOqT7m" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9pIG2fRB2CkNu1tF1om17z6tGmB7z6xUnF6i54lQ4drHIC43K18O+YdMfH43/sd" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-kX1F036qJSpB4nE
<?php
intranet_footer();
?>
