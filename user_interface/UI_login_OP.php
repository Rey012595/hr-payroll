<?php
    require_once('../php/classes/payrollClass.php');
    $classPayroll->loginOperator();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Operator | Symtech</title>
    <link rel="stylesheet" href="../css/loginOP.css">
</head>

<body id="body1">

    <div class="container">
        <form action="" method="post">
        <p id="p1">OPERATOR</p>
        <input class="user" type="text" name="op_username" id="op_username" placeholder="Username"><br><br>
        <input class="pass" type="password" name="op_password" id="op_password" placeholder="Password"><br>
        <input type="checkbox" onclick="myFunction()">Show Password <br><br>            <!--  this checkbox is for show password -->   
        <button class="login-btn" type="submit" name="op_login" id="login-button"> Login </button>
        <h6> <a href="">GO TO ADMIN-DASHBOARD</a></h6>
        <h6>Forgot Password?</h6>
        </form>
    </div>
    <div>
        <table>
            <h5>Don't have an account? <a href="UI_register_OP.php">Sign up</a></h5>
        </table>
    </div>

</body>


        <script>
            function myFunction() 
            {
                var x = document.getElementById("op_password");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }           
        </script>


</html>
