
<?php
        include('./php/connexion.php');
        
        if ($_POST){

            if(isset($_POST['modifUser'])) {
                $data = [
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'id' => $_POST['id'],
                    'status' => $_POST['status']
                ];

                $UserUpdate = $bdd->prepare("UPDATE usertable set name = :name, email = :email, status = :status WHERE id = :id");
                $UserUpdate->execute($data);

            }elseif(isset($_POST['deletUser'])) {

                $id = $_POST['id'];
                $UserDelet = $bdd->prepare("DELETE FROM usertable WHERE id = '$id' ");
                $UserDelet->execute();
            }

            else{
                    // gestion de la secu sql
                $_POST['name'] = addslashes($_POST['name']);
                // gestion de la secu html
                $_POST['name'] = htmlspecialchars($_POST['name']);
                // gestion hash pwd
                $_POST['pwd'] = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
                // insertion Sql
                $bdd->exec("INSERT INTO usertable (name, email, password, status) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[pwd]', 'visitor')");
            }
            
        }

        $request = $bdd->prepare("SELECT * FROM usertable");
        $request->execute();
        $User_list = $request->fetchAll(PDO::FETCH_ASSOC);
        ?>
        
        <table class="tableau">
            <thead>
                <tr class="tableau_title" >
                    <th>Name</th>
                    <th>Email</th> 
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
        <?php 
            foreach($User_list as $User) {
        ?>
            <tr class="tableau_donnee">
                <form action="" method="post">
                    
                    <td>
                        <input type="hidden" name="id" value="<?= $User["id"]?> ">
                        <input type="text" name="name" value="<?= $User["name"]?> ">
                    </td>
                    <td><input type="text" name="email" value="<?= $User["email"]?> "></td>
                    <td>
                        <select name="status" class="status">
                            <option value="admin" <?php if($User['status'] == 'admin') { echo 
                                'selected'; } ?> > Admin </option>
                            <option value="editor" <?php if($User['status'] == 'editor') { echo 
                                'selected'; } ?> > Editor </option>
                            <option value="visitor" <?php if($User['status'] == 'visitor') { echo 
                                'selected'; } ?> > Visitor </option>
                        </select>
                    </td>
                    <td><input type="submit" name='modifUser' class="send-btn" value='Modif'></td>
                    <td><input type="submit" name='deletUser' class="send-btn" value='Delete'></td>
                </form>
            </tr>
        <?php 
        } 
        ?>
            </tbody>
        </table>

