<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blajev Style</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/BlajevStyle/store page/SignUp Php/signUpForm.css">
</head>

<body>
    <header class="logIn__header">
        <h1 class="logIn__header-logo">Blajev Style</h1>
        <ul class="logIn__links">
            <li><a href="/BlajevStyle/index.php">Home</a></li>
            <li><a href="/BlajevStyle/store page/men.php">Shop</a></li>
        </ul>
    </header>
    <section class="form__container">
        <form class="logIn__form" action="./signUpLogic.php" method="POST">
            <h1 class="logIn__title">Log in</h1>
            <input class="username" id="username" name="username" type="text" placeholder="Username" required>
            <input class="logIn" id="password" name="password" type="password" placeholder="Password" required>
            <div class="checkbox__container">
                <div class="checkbox">
                    <input class="c" type="checkbox">
                    <span>Remember me</span>
                </div>
                <a href="">Forgot Password?</a>
            </div>
            <button class="login__button" type="submit" required>Login</button>
            <?php
            session_start();
            if (isset($_SESSION['errors'])) {
                echo "<p>" . $_SESSION['errors'] . "</p>";
            }
            session_destroy();
            ?>
        </form>
    </section>
</body>

</html>