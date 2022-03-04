<?php
include 'header.php';
?>

<body>
    <form method="POST">
        <h2>name</h2>
        <input name="name" type="text">
        <h2>age</h2>
        <input name="age" type="date">
        <h2>email</h2>
        <input name="email" type="email">
        <h2>password</h2>
        <input name="pass" type="password">
        <button type="submit" name="send">Send</button>
    </form>
    <?php

    include 'config.php';
    if (isset($_POST['send'])) {
        # code...

        $name = $_POST['name'];
        // echo $name;
        $age = $_POST['age'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $shhPassword = sha1($pass);
        $sql = "INSERT INTO users(NAME,AGE,EMAIL,PASSWORD) VALUES('$name','$age','$email','$shhPassword')";

        if (mysqli_query($conn, $sql) === true) {
            echo 'the data has send';
        }
    }
    ?>
</body>

</html>