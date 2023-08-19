
 <!doctype html>
    <html>
    <head>
    <link rel="stylesheet" href="https://fontawesome.com/icons/lock?f=classic&s=solid">
            <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="style.css">
 
    </head>
    <body>
        <h1 align="center">DATA TABLE FROM DATABASE :</h1>
        <div class="container">
            <div class="table_responsive">
                <table name="tables" border=1px>
                    <thead border=1px>
                        <tr border=1px>
                            <th>
                                ID
                            </th>
                            <th>
                                USERNAME
                            </th>
                            <th>
                                EMAIL
                            </th>
                            <th>
                                PASSWORD
                            </th>
                            <th>
                                RETYPEPASS
                            </th>
                            <th>
                             OPERATION
                            </th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        <?php

                               include'connection.php';

                             $selectquery = " select * from signupform";
                             $query = mysqli_query($conn,$selectquery);
                             $nums = mysqli_num_rows($query);
                             //echo"$nums";
                             while($res = mysqli_fetch_array($query))
                                           {
                                            ?>

                                        <tr>
                                            <td><?php   echo $res['id'] ." "; ?></td>
                                            <td><?php   echo $res['username'] ." "; ?></td>
                                            <td><?php   echo $res['email'] ." "; ?></td>
                                            <td><?php   echo $res['pass'] ." "; ?></td>
                                            <td><?php   echo $res['pass1'] ." "; ?></td>
                                            <td> <a href="update.php?id=<?php echo $res['id'] ." "; ?>" data-toggle="tooltip" data-placement="top" title="UPDATE"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                            <td> <a href="delete.php" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa-solid fa-trash"></i></a></td>

                                    
                                        </tr>
                                        <?php

                                           }

                                           

                        ?>
                     
                    </tbody>


                </table>
            </div>
        </div>
        <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
        
    </body>




    </html>

    
