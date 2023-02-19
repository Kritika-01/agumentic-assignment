<?php
session_start();

include 'connect.php';
if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $sql_login = "SELECT * FROM `admin_table` WHERE `admin_username` = '$username' AND `admin_password` = '$password'";
    $result_login = mysqli_query($connect, $sql_login);
    $num_login = mysqli_num_rows($result_login);
    $info_login = mysqli_fetch_assoc($result_login);

    if ($num_login == 1) {
        $a_id = $info_login['admin_id'];

        $_SESSION['a_id'] = $a_id;
        header("location:admin.php");
    } else {
        echo "incorrect username and password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <form action="#" method="POST">
        <h2>
            <center>Login Form</center>
        </h2>
        <div class="form">
            <center>
                <div class="form-box">
                    <div class="username">
                        <label for="">Username:</label>
                        <input type="text" name="username" required>
                    </div>
                    <div class="password">
                        <label for="">Password:</label>
                        <input type="password" name="password" required>
                    </div>
                    <div class="submit_btn">
                        <input type="submit" name="submit" value="Login">
                    </div>
                </div>
            </center>
        </div>
    </form>
</body>

</html>