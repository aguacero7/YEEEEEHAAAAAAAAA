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
<td>Rôle<td>
<td>Action</td>
</tr> ";

for ($i=0; $i < count($users_list); $i++){
            $current_index = $i;

            echo"
                    <tr>
                    <td>".$users_list[$i]['idrh']."</td>
                    <td>".$users_list[$i]['name']." ".$users_list[$i]['surname']."</td>
                    <td>".$users_list[$i]['email']."</td>
                    <td>".$users_list[$i]['telephone']."</td>
                    <td>".$users_list[$i]['service']."</td>
                    <td>".$users_list[$i]['role']."</td>
                    <td>



                    <form method='post' action='../functions.php'>
                        <input type='hidden' name='action' value='changerole'>
                        <input type='hidden' name='index' value='".$i."'>
                        <button type='button' class='btn btn-success btn-sm open-modal' data-bs-toggle='modal' data-bs-target='#myModalRight".$i."'>Changer le rôle</button>
                        <div class='modal' id='myModalRight".$i."'>
                        <div class='modal-dialog'>
                          <div class='modal-content'>
                      
                            <!-- Modal Header -->
                            <div class='modal-header'>
                              <h4 class='modal-title'>Modifier'</h4>
                              <button type='button' class='btn-close' data-bs-dismiss='modal'></button>
                            </div>
                      
                            <!-- Modal body -->
                            <div class='modal-body'>
                    
                    
                            <form method='post' action='../functions.php'>
                            <input type='hidden' name='action' value='elever'>
                            <p><span id='modalUsername'></span></p>
                            <div class='form-group'>
                            <label for='role'>Rôle</label>
                            <select name='role' id='role'>
                                <option value='user'>Utilisateur</option>
                                <option value='admin'>Administrateur</option>
                                <option value='shareholder'>Actionnaire</option>
                            </select>
                           </div>
                    
                    
                            <br>
                            <button type='submit' class='btn btn-primary btn-sm'>Envoyer</button>
                            </div>
                      
                            <!-- Modal footer -->
                            <div class='modal-footer'>
                              <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
                            </div>
                      
                          </div>
                        </div>
                      </div>
                      </form>";



                    echo "
                    
                    <br>
                    <form method='post' action='../functions.php'>
                        <input type='hidden' name='action' value='supprimer'>
                        <input type='hidden' name='index' value='".$current_index."'>
                        <button type='submit' class='btn btn-danger btn-sm'>Supression</button>
                    </form>
                    </td>
                    </tr>

                ";

        
    }
    echo "</table>";
    

    echo "<br>";
    echo "<button type='submit' class='btn btn-primary btn-lg btn-outline-light' data-bs-toggle='modal' data-bs-target='#myModal'>Ajouter</button>";
    echo "
    <div class='modal' id='myModal'>
    <div class='modal-dialog'>
      <div class='modal-content'>
  
        <!-- Modal Header -->
        <div class='modal-header'>
          <h4 class='modal-title'>Ajouter</h4>
          <button type='button' class='btn-close' data-bs-dismiss='modal'></button>
        </div>
  
        <!-- Modal body -->
        <div class='modal-body'>


        <form method='post' action='../functions.php'>
        <input type='hidden' name='action' value='ajouter'>

      
        <div class='form-group'>
          <label>Prénom de l'utilisateur</label>
          <input type='text' class='form-control' name='name' placeholder='Prénom' required>
        </div>
        <br>

        <div class='form-group'>
          <label>Nom de l'utilisateur</label>
          <input type='text' class='form-control' name='surname' placeholder='Nom' required>
        </div>
        <br>

        <div class='form-group'>
          <label>Service</label>
          <input type='text' class='form-control' name='service' required>
        </div>
        <br>

        <div class='form-group'>
          <label>IDRH</label>
          <input type='text' class='form-control' name='idrh' required>
        </div>
        <br>

        <div class='form-group'>
          <label>E-Mail</label>
          <input type='text' class='form-control' name='mail' placeholder='E-mail' required>
        </div>
        <br>

        <div class='form-group'>
          <label>Téléphone</label>
          <input type='text' class='form-control' name='telephone' placeholder='Téléphone' required>
        </div>
        <br>

        <div class='form-group'>
          <label>Mot de passe</label>
          <input type='password' class='form-control' name='motdepasse' required>
        </div>
       <br>

        <div class='form-group'>
        <label for='role'>Rôle</label>
        <select name='role' id='role'>
            <option value='user'>Utilisateur</option>
            <option value='admin'>Administrateur</option>
            <option value='shareholder'>Actionnaire</option>
        </select>
       </div>


        <br>
        <button type='submit' class='btn btn-primary btn-sm'>Envoyer</button>
        </div>
  
        <!-- Modal footer -->
        <div class='modal-footer'>
          <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
        </div>
  
      </div>
    </div>
  </div>";
    
    echo "<br>";
    echo "<br>";
    echo "</div>";



?>
