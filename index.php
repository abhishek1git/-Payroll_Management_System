<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/styleOfindex.css">
    <title>Login page</title>
</head>
<body>
    <div id="container">
        <form action="index.php" method="post">
            <h1>Payroll Login</h1><br>
                <input id="id" type="number" placeholder="employee_Id" name="id" required><br>
                <input id="pass" type="password" placeholder="Password" name="password" required><br>
                <button id="login" type="submit" name="login" value="Login">Login</button>
        </form>
    </div>
</body>
</html>
<?php
    $id=$_POST['id'];
    $password=$_POST['password'];
    $con=mysqli_connect('localhost','root');
    mysqli_select_db($con,'payrollmanagementsystem');
    $q="select * from admin where id='$id' and password='$password'";
    $result=mysqli_query($con,$q);
    $num=mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);
    if($row['id']==$id && $row['password']==$password){
            echo "login successful welcome ".$row['uname'];
            
    }
    else{
            echo "login failed";
    }
?>
