<?php
    $host = "localhost";
    $user = "god";
    $pass = "123456";
    $dbnm = "map";

    $sql = mysqli_connect($host, $user, $pass, $dbnm);

    if (isset($_POST['auth'])) {
        $login = $_POST['email'];
        $password = $_POST['passw'];
        $ext = mysqli_query($sql, "SELECT * FROM `users` WHERE `email` = '$login';");
        while ($data=mysqli_fetch_assoc($ext)) {
            if ($password === $data['password']) {
                echo '<p style="font-size:50px>Вход в учетную запись выполнен <a href="../index.html">вернуться на главную страницу</a></p>';
            }
        }
    }

    if (isset($_POST['delete'])) {
        $login = $_POST['email'];
        $password = $_POST['password'];
        $ext = mysqli_query($sql, "DELETE FROM `users` WHERE `email` = '$login';");
    }

    if (isset($_POST['change'])) {
        $login = $_POST['email'];
        $password = $_POST['password'];
        $ext = mysqli_query($sql, "UPDATE `users`
        SET  `email` = `admin`, `password` = `123456` 
        WHERE `email` = '$login';");
    }
?>