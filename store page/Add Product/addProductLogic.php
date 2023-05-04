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
    var_dump($_POST);
    // Connection
    $sServername = "localhost";
    $sUsername = "root";
    $sPassword = "";
    $sDbname = "blajevstyle";

    try {
        // Connection
        $oConn = new PDO("mysql:host=$sServername;dbname=$sDbname", $sUsername, $sPassword);
        // set the PDO error mode to exception
        $oConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $stmt = $oConn->prepare("INSERT INTO products(price,name,sizes,colors,category) VALUES (:v1,:v2,:v3,:v4,:v5)");

    $v1 = $_POST['productPrice'];
    var_dump($v1);
    $v2 = $_POST['productName'];
    $size = "";
    if (isset($_POST['size1'])) {
        $size = $size . "XS,";
    }
    if (isset($_POST['size2'])) {
        $size = $size . "S,";
    }
    if (isset($_POST['size3'])) {
        $size = $size . "M,";
    }
    if (isset($_POST['size4'])) {
        $size = $size . "L,";
    }
    if (isset($_POST['size5'])) {
        $size = $size . "XL,";
    }
    if (isset($_POST['size6'])) {
        $size = $size . "XXL,";
    }

    if (substr($size, -1) == ',') {
        $size = substr($size, 0, -1);
    }
    $v3 = $size;
    $color = "";
    if (isset($_POST['color1'])) {
        $color = $color . "black,";
    }
    if (isset($_POST['color2'])) {
        $color = $color . "red,";
    }
    if (isset($_POST['color3'])) {
        $color = $color . "white,";
    }
    if (isset($_POST['color4'])) {
        $color = $color . "green,";
    }
    if (isset($_POST['color5'])) {
        $color = $color . "blue,";
    }
    if (isset($_POST['color6'])) {
        $color = $color . "yellow,";
    }

    if (substr($color, -1) == ',') {
        $color = substr($color, 0, -1);
    }
    $v4 = $color;
    $v5 = $_POST['category'];

    $stmt->bindValue(':v1', $v1);
    $stmt->bindValue(':v2', $v2);
    $stmt->bindValue(':v3', $v3);
    $stmt->bindValue(':v4', $v4);
    $stmt->bindValue(':v5', $v5);
    $stmt->execute();

    $stmt1 = $oConn->query("SELECT product_id FROM products ORDER BY product_id DESC LIMIT 1");
    $iProductId = $stmt1->fetchAll(PDO::FETCH_ASSOC);
    $iProductId = $iProductId[0]['product_id'];

    $stmt = $oConn->prepare("INSERT INTO images(url,indication) VALUES(:v1,:v2)");
    $stmt->bindValue(':v1', $_POST['mainImage']);
    $stmt->bindValue(':v2', 1);
    $stmt->execute();

    $stmt1 = $oConn->query("SELECT image_id FROM images ORDER BY image_id DESC LIMIT 1 ");
    $iImageId = $stmt1->fetchAll(PDO::FETCH_ASSOC);
    $iImageId = $iImageId[0]['image_id'];

    $stmt = $oConn->prepare("INSERT INTO link (image_id,product_id,TYPE) VALUES(:v1,:v2,:v3)");
    $stmt->bindValue(':v1', $iImageId);
    $stmt->bindValue(':v2', $iProductId);
    $stmt->bindValue(':v3', 1);
    $stmt->execute();

    for ($i = 0; $i < count($_POST['galeryImage']); $i++) {
        $stmt = $oConn->prepare("INSERT INTO images(url,indication) VALUES(:v1,:v2)");
        $stmt->bindValue(':v1', $_POST['galeryImage'][$i]);
        $stmt->bindValue(':v2', 1);
        $stmt->execute();
        $stmt1 = $oConn->query("SELECT image_id FROM images ORDER BY image_id DESC LIMIT 1 ");
        $iImageId = $stmt1->fetchAll(PDO::FETCH_ASSOC);
        $iImageId = $iImageId[0]['image_id'];

        $stmt = $oConn->prepare("INSERT INTO link (image_id,product_id,TYPE) VALUES(:v1,:v2,:v3)");
        $stmt->bindValue(':v1', $iImageId);
        $stmt->bindValue(':v2', $iProductId);
        $stmt->bindValue(':v3', 2);
        $stmt->execute();
    }

    if ($_POST['category'] === 'male') {
        header('Location: /BlajevStyle/store page/men.php');
    } else if ($_POST['category'] === 'female') {
        header('Location: /BlajevStyle/store page/woman.php');
    } else if ($_POST['category'] === 'accessories') {
        header('Location: /BlajevStyle/store page/accessories.php');
    }
    ?>
</body>

</html>