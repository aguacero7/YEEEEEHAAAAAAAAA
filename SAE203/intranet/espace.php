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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h1>Bienvenue dans le gestionnaire de fichiers partagés</h1>
    <br>
    <br>

    <div class="row">
        <div class="col-md-6">
            <h2>Nouveau fichier :</h2>
            <br>
            <form action="espace.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="file" name="file" required class="form-control-file">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Upload</button>
            </form>
            <?php
            if (isset($_FILES['file'])) {
                $file = $_FILES['file'];
                $fileName = $file['name'];
                $fileTmpName = $file['tmp_name'];
                $fileError = $file['error'];
 
                if ($fileError === 0) {
                    $destination = 'uploads/' . $fileName;
                    move_uploaded_file($fileTmpName, $destination);

                    $files = json_decode(file_get_contents('files.json'), true);
                    $files[] = $fileName;
                    file_put_contents('files.json', json_encode($files));

                    header("Location: espace.php");
                    exit();
                } else {
                    echo "Une erreur est survenue lors de l'upload du fichier.";
                }
            }
            ?>
        </div>
        <div class="col-md-6">
            <h2>Fichiers disponibles :</h2>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom du fichier</th>
                        <th>Télécharger</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($_GET['file'])) {
                        $filename = $_GET['file'];
                        $filepath = 'uploads/' . $filename;

                        if(file_exists($filepath)) {
                            header('Content-Type: application/octet-stream');
                            header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
                            readfile($filepath);
                            exit;
                        } else {
                            echo 'Le fichier demandé n\'existe pas.';
                        }
                    }

                        if (isset($_POST['delete_file'])) {
                             $deleteFile = $_POST['delete_file'];
                             $files = json_decode(file_get_contents('files.json'), true);
                             $index = array_search($deleteFile, $files);
                            if ($index !== false) {
                                 unset($files[$index]);
                                 file_put_contents('files.json', json_encode(array_values($files)));
                                 echo "<div class='alert alert-success'>Fichier supprimé avec succès.</div>";
                                }
                    }


                    $files = json_decode(file_get_contents('files.json'), true);
                    foreach ($files as $file) {
                        echo "<tr>";
                        echo "<td>$file</td>";
                        echo "<td><a href=\"espace.php?file=$file\" target=\"_blank\" class=\"btn btn-primary\">Télécharger</a></td>";
                        echo "<td>
                                <form method='post' action=''>
                                    <input type='hidden' name='delete_file' value='$file'>
                                    <button type='submit' class='btn btn-danger'>Supprimer</button>
                                </form>
                              </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


</body>
</html>
<?php
intranet_footer();
?>
