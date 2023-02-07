<?php
require_once('config.php');
?>
<?php

 if(isset($_POST)){
                $email          = $_POST['email'];
                $firstname      = $_POST['firstname'];
                $lastname       = $_POST['lastname'];
                $concern        = $_POST['concern'];
                /*$password       = sha1($_POST['password']);*/
                
                $sql = "INSERT INTO students_info (students_email, firstname, lastname, concern) VALUES(?,?,?,?)";
                $stmtinsert = $db->prepare($sql);
                
                $result = $stmtinsert->execute([$email, $firstname, $lastname, $concern]);
                if($result){
                    echo 'Sent successfully.';
                }
                else{
                    echo 'Data ERROR.';
                }
            }else{
                echo 'No Input';
 }