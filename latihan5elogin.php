<?php
require_once('validate.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if (validateLogin($username, $password)) {
        // Jika login sukses, redirect ke halaman admin
        header('Location: latihan5eadmin.php');
        exit();
    } else {
        // Jika login gagal, tampilkan pesan kesalahan
        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<?php if (isset($error)) : ?>
    <p style="color: red;"><?php echo $error; ?></p>
<?php endif; ?>

<form method="post" action="latihan5elogin.php">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>
    <br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <br>

    <button type="submit">Login</button>
</form>

</body>
</html>
