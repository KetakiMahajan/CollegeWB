<?php
session_start();
if(!isset($_SESSION['student']))
{
    echo "<script>
        alert('you are not valid user!! please login to continue');
        window.location = '../student_login.php';
    </script>";
}
     
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student home</h1>
</body>
</html>