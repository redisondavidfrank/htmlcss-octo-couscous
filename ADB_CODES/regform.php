<?php
require_once('config.php');
?>
<!DOCTYPE html>

<html>
<head>
        <title>My Page</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
    <body>
        
        <div>
            <?php 
           
            ?>
            
        </div>
        <div><center>
            <form action="regform.php" method="post">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-sm-3">
                    <h1>STUDENT FORM</h1>
                    <p>Fill up required informations.</p>
                    <hr class="mb-3">
                    <label for="email"><b>Email Address</b></label>
                    <input class="form-control" id="email" type="email" name="email" required>
                    
                    <label for="firstname"><b>First Name</b></label>
                    <input class="form-control" id="firstname" type="text" name="firstname" required>
                    
                    <label for="lastname"><b>Last Name</b></label>
                    <input class="form-control" id="lastname" type="text" name="lastname" required>
                    
                    <label for="concern"><b>Concern Box:</b></label>
                    <textarea class="form-control" id="concern" name="concern" rows="4" cols="65">
                    </textarea>
                            
                    <hr class="mb-3">
                    <input class="btn btn-primary" type="submit" id='send' name="create" value="Send">
                        </div>
                </div>
             </div>
        </form>
            </center>
            </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type = "text/javascript">
            $(function(){
               $('#send').click(function(e){
                   var valid = this.form.checkValidity();
                   if(valid){
                    var email       = $('#email').val();
                    var firstname   = $('#firstname').val();
                    var lastname    = $('#lastname').val();
                    var concern     = $('#concern').val();
                       
                       e.preventDefault();
                       
                       $.ajax({
                            type: 'POST',
                            url: 'details.php',
                            data: {email: email, firstname: firstname,lastname: lastname, concern: concern},
                            success: function(data){
                            Swal.fire({
                            'title': 'Welcome Student',
                            'text': data,
                            'icon': 'success'
                            })
                            },
                            error: function(data){
                            Swal.fire({
                            'title': 'Error in Data',
                            'text': 'Check entered information',
                            'icon': 'error'
                            })
                       }
                       });
                   }else{
                       
                   }
                   
    
               });
                
            });
        </script>
</body>
</html>








