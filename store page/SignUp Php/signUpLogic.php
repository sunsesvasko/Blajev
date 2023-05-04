<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    // Getting username from Form
    session_start();
    $userNameFromForm = $_POST['username'];
    var_dump($userNameFromForm);
    // Getting Password From Form
    $passwordFromForm = $_POST['password'];
    // Hashing the password
    $heshedPassword = hash('sha256', $passwordFromForm);
    session_destroy();

    // s - string
    $sServername = "localhost";
    $sUsername = "root";
    $sPassword = "";
    $sDbname = "blajevstyle";

    try {
        // Connection
        $oConn = new PDO("mysql:host=$sServername;dbname=$sDbname", $sUsername, $sPassword);
        // set the PDO error mode to exception
        $oConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $oStmt = $oConn->query("SELECT * FROM users");
    // Arr List
    $aRows = $oStmt->fetchAll(PDO::FETCH_ASSOC);
    $bExcistingAcc = false;
    session_start();
    foreach ($aRows as $row) {
        $rowPassword = $row['password'];
        $rowUsername = $row['username'];

        if ($rowUsername === $userNameFromForm && $rowPassword === $heshedPassword) {
            $_SESSION['isAdmin'] = $row['is_admin'];
            $bExcistingAcc = true;
            break;
        }
    }
    if ($bExcistingAcc == true) {
        header('Location: /BlajevStyle/index.php');
    } else {
        $_SESSION['errors'] = 'Не съществува такъв акаунт.';
        header('Location: /BlajevStyle/store page/SignUp Php/signUpForm.php');
    }
    ?>
</body>

</html>