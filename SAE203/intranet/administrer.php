<?php

session_start();
include('../functions.php');
vitrine_head();
intranet_navbar();

$users_list = json_decode(file_get_contents('../data/users.json'), true);


echo "<div class=' container text-center mt-5'>";
echo "<table class='table table-striped table-bordered'>";

echo "
<tr>
<td>Identifiant</td>
<td>Identité</td>
<td>Email</td>
<td>Télépone</td>
<td>Service</td>
<td>Rôle</td>
<td>Gérer</td>
</tr> ";
$current_index = 0;
foreach ($users_list as $users) {
            

            echo"
                    <tr>
                    <td>".$users['idrh']."</td>
                    <td>".$users['name']." ".$users['surname']."</td>
                    <td>".$users['mail']."</td>
                    <td>".$users['telephone']."</td>
                    <td>".$users['service']."</td>
                    <td>".$users['role']."</td>
                    <td>

                    <form method='POST' action='../functions.php'>
                        <input type='hidden' name='action' value='supprimer'>
                        <input type='hidden' name='index' value='".$current_index."'>
                        <input type='hidden' name='idrh' value='$users[idrh]'>
                        <button type='submit' class='btn btn-danger btn-sm'>Supression</button>
                    </form>
                    <br>
                    <form action='../functions.php' method='POST'>
                    <input type='hidden' name='action' value='changer'>
                    <select id='role' name='role'>
                      <option value='user'> Utilisateur </option>
                      <option value='admin'> Administrateur </option>
                    </select>
                    <input type='hidden' name='idrh' value='$users[idrh]'>
                    <br>
                    <button type='submit' class='btn btn-success'>Changer</button>
                    </form>
                    </td>
                    </tr>

                ";

    $current_index += 1;
    }
    echo "</table>";
    echo "</div>";



?>
