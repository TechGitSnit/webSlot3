<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="fname" placeholder="First Name">
        <input type="email" name="mail" placeholder="pp@gmail.com">
        <input type="number" name="age" >
        <input type="submit" name="btn">

    </form>
</body>
</html>
<?php
    if(isset($_POST['btn']))
    {
            $nam=$_POST['fname'];
            $mail=$_POST['mail'];
            $age=$_POST['age'];
            $qr="insert into student(fname,mail,age)values('$nam','$mail','$age')";
            $con=mysqli_connect('localhost','root' ,'','studentdb');
            mysqli_query($con,$qr);
            echo "inserted";


    }
?>