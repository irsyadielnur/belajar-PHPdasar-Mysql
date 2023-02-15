<?php 
    // cek apakak submit sudah ditekan
    if ( isset ($_POST["submit"])) {
         // cek username dan password
         if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
            // jika bener
            header("Location: admin.php");
            exit;
         } else {
            // jika salah
            $error = true;
         }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Login Admin</h1>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style:italic;">username atau password salah!</p>
    <?php endif; ?>

    <ul>
        <form action="" method="post">
        <li>
            <label for="username">Usernama :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>

        <li>
            <button type="submit" name="submit">Submit</button>
        </li>
        </form>
    </ul>
</body>
</html>