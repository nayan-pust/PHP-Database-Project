


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


                       
                        <form align="center" action="signupform.php" method="POST">
                        <div class="row">
                    <?php 
            include 'connection.php';
            $ids= $_GET['id'];
            $showquery = "select * from signupform where id={$ids}";
            $showdata = mysqli_query($conn,$showquery);
            $aarrdat = mysqli_fetch_array($showdata);

                if(isset($_POST['submit']))
                {
                    $username=$_POST['user'];
                    $email=$_POST['email'];
                    $pass=$_POST['pass']; 
                    $pass1=$_POST['pass1'];

                    //$pass = password_hash($pass,PASSWORD_BCRYPT);
                   // $pass1 = password_hash($pass1,PASSWORD_BCRYPT);

    
                   
                        $insertquery = "insert into signupform(username,email,pass,pass1) values('$username','$email','$pass','$pass1')";
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
                        
    
    

            
    
    

            ?>
                  <div class="col-sm-3">
                    <h1 name="signup">SignUp Form</h1>
                    <hr class="mb-3">
                <i class="fa-sharp fa-solid fa-user"></i>
                    <input type="text" name="user" id="user"placeholder="Enter the user name"value="<?php   echo $aarrdat['username'] ." "; ?>"required><br>
                    <hr class="mb-3">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" id="email"placeholder="Email" value="<?php   echo $aarrdat['email'] ." "; ?>" required><br>
                    <hr class="mb-3">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="pass" id="pass"placeholder="Set password" value="<?php   echo $aarrdat['pass'] ." "; ?>" required><br>
                    <hr class="mb-3">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="pass1" id="pass1" placeholder="Re-type password" value="<?php   echo $aarrdat['pass1'] ." "; ?>" required><br>
                    <hr class="mb-3">
                    
                    <div class="check" name="table-check">
                    <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Submit">
                       <a href="table.php" class="btn btn-primary">Form Check</a>
                    </div>

                </form>

                        </div>

                    </div>
                </div>
               
            </div>
            
           
          


        </body>
        
    </html>

   