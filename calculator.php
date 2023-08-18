<!DOCTYPE html>
<html>

<head>

           <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="style.css">

</head>
    <body>
    <div id="formm">
    <form id="form" method="POST" action="calculator.php">
        <input type="number" value="number" name="number" placeholder="ENTER NUMBER"><br>
        <input type="number" value="number" name="number2" placeholder="ENTER NUMBER 2"><br>
       <div name="div2">
       <select name="operation">
            <option name="add" value="add">ADDITION</option>
            <option name="sub" value="sub">SUBSTRACT</option>
            <option name="mult" value="mult">MULTIPLICATION</option>
            <option name="divide" value="divide">DIVIDE</option>
            
        </select>

       </div>

        <div id="cls" name="cls">
        <input class="btn btn-primary" type="submit"  name="submit" value="Submit">

        <p id="out" name=""out></p>
            <?php
               if(isset($_POST['submit']))
               {
                $num=$_POST['number'];
                $num1=$_POST['number2'];
                $operation=$_POST['operation'];

                //echo"Two number is {$num},{$num1}";
                switch($operation)
                {
                     case "add" :
                        $sum=$num+$num1;
                        echo"Addition is {$sum}";
                        break;
                        case "sub" :
                            $sub=$num-$num1;
                            echo"Subtraction is {$sub}";
                            break;

                            case "mult" :
                                $mult=$num*$num1;
                                echo"Multiplication is {$mult}";
                                break;
                    
                                case "divide" :
                                    $divide=$num/$num1;
                                    echo"Divition is {$divide}";
                                    break;
                }
               }


            ?>
        </p>
        </div>
        


</form>
    </div>

    </body>
 



</html>