<?php
    $host = "localhost";
    $user = "god";
    $pass = "123456";
    $dbnm = "map";

    $sql = mysqli_connect($host, $user, $pass, $dbnm);

    if (isset($_POST['reg'])) {
        $login = $_POST['email'];
        $password = $_POST['passw'];
        $add = mysqli_query($sql, "INSERT INTO `users` (`email`, `password`) VALUES ('$login', '$password');");
    }
    echo '<p style="font-size:50px">Регистрация прошла успешно <a href="../index.html">вернуться на главную страницу</a></p>'

?>