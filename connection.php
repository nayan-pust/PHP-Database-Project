<?php
$server="localhost";
$username="root";
$password="";
$db="db3";
$conn=mysqli_connect($server,$username,$password,$db);

if($conn)
{
    ?>
    <script>
        alert("Successfully Done");
    </script>
    <?php

}
else
{

    ?>
    <script>
        alert("Have some error");
    </script>
    <?php
}

?>