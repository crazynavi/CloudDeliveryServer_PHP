<?php
session_start();

include_once('../conn/connection.php');

if (isset($_POST['login'])) {


    $username = $_POST['user_email'];
    $user_password = md5($_POST['user_password']);



    if ($_POST["remember"] == '1' || $_POST["remember"] == 'on') {
        $hour = time() + 3600 * 24 * 30;
        setcookie('user_email', $username, $hour);
        setcookie('user_password', $user_password, $hour);
    } else {
        if (isset($_COOKIE["user_email"])) {

            setcookie("user_email", "");

        }

        if (isset($_COOKIE["user_password"])) {

            setcookie("user_password", "");

        }

    }


    $stmt = $conn->prepare("SELECT user_email, user_password FROM users WHERE user_email=? AND user_password=? ");
    $stmt->bind_param('ss', $username, $user_password);
    $stmt->execute();
    $stmt->bind_result($username, $user_password);
    $stmt->store_result();
    if ($stmt->num_rows > 0) //To check if the row exists
    {
        $stmt->fetch();
        $_SESSION['user_email'] = $username;
        header("location:/");
    } else {
        $_SESSION['invalid_details'] = "Username or password is not valid";
        header('location:/');
    }
    $stmt->close();
}

?>