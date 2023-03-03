<!DOCTYPE html>
<?php 
session_start();

$servername = 'localhost';
$username = 'Root';
$password = '';
$db = 'users';
$conn = new mysqli($servername, $username, $password, $db);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css ">
    <title>Document</title>
</head>
<body>
    <div class="main_block">
        <h1>Sign In</h1>
        <form method="post" action="login.php">
            <div class="center_cont">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="password">
            <br>
            <label for="StayLogged"> Stay signed in</label>
            <input type="checkbox" name="StayLogged"><br>
            <input type="submit" name="login" value="Sign-In"> 
            </div>
        </form>
    </div>

    <?php 
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = hash('sha256',$_POST['password']);


        $mailchk = "SELECT * FROM users WHERE email = '$email'";
        $chkmail = $conn->query($mailchk);
        $row = $chkmail->fetch_assoc()'
        if($email == $row['email']){

        }
    }
    
    ?>
</body>
</html>
