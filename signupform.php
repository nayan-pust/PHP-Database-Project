


<!doctype html>
    <html>
        <head>

            <link rel="stylesheet" href="https://fontawesome.com/icons/lock?f=classic&s=solid">
            <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="style.css">


    

            <title>Registration form fill</title>
            
        </head>
        <body>
            <div id="form" align="center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                        <form align="center" action="signupform.php" method="POST">
                    <h1 name="signup">SignUp Form</h1>
                    <hr class="mb-3">
                <i class="fa-sharp fa-solid fa-user"></i>
                    <input type="text" name="user" id="user"placeholder="Enter the user name"required><br>
                    <hr class="mb-3">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" id="email"placeholder="Email"required><br>
                    <hr class="mb-3">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="pass" id="pass"placeholder="Set password"required><br>
                    <hr class="mb-3">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="pass1" id="pass1" placeholder="Re-type password"required><br>
                    <hr class="mb-3">
                    <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Submit"><br>

                </form>

                        </div>

                    </div>
                </div>
               
            </div>
            <?php 
            include 'connection.php';
            $username=$_POST['user'];
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            $pass1=$_POST['pass1'];

            if($pass===$pass1)
            {

                if(isset($_POST['submit']))
                {
                    $username=$_POST['user'];
                    $email=$_POST['email'];
                    $pass=$_POST['pass'];
                    $pass1=$_POST['pass1'];
    
                   
                        $insertquery = "insert into signup1(username,email,pass,pass1) values('$username','$email','$pass','$pass1')";
                        $res = mysqli_query($conn,$insertquery);
                        if($res)
                        {
                            ?>
                            <script>
                                alert("Data inserted Successfully");
                            </script>
                            <?php
            
                        }
                        else
                        {
                            
                            ?>
                            <script>
                                alert("Data is not inserted Successfully");
                            </script>
                            <?php
            
                        }
                        
    
    
            }

         
                if($pass!=$pass1)
                {
                    ?>
                    <script>
                        alert("Password are not matching");
                    </script>
                    <?php
                }
                 
            
    
    


            }
            ?>
          


        </body>
        <td></td>
    </html>