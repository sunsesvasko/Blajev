<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Blajev Style</title>
    <!-- Meta Links -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Link -->
    <link rel="stylesheet" href="/BlajevStyle/store page/storePage.css">
    <link rel="stylesheet" href="/BlajevStyle/style.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body>
    <?php
    session_start();
    $isAdmin = 0;
    if (isset($_SESSION['isAdmin'])) {
        $isAdmin = $_SESSION['isAdmin'];
    }
    ?>
    <header class="header">
        <div class="wrapper container">
            <nav class="nav">
                <!-- Navigation Logo [1] -->
                <div class="logo"><a href="/BlajevStyle/index.php">Blajev Style</a></div>
                <!-- Navigation Form [2] -->
                <form>
                    <svg width="29" height="29" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.25 19.25 15.5 15.5M4.75 11a6.25 6.25 0 1 1 12.5 0 6.25 6.25 0 0 1-12.5 0Z"></path>
                    </svg>
                    <input type="text" placeholder="| Какво търсите днес ?">
                </form>

                <!-- Navigation Links [3] -->
                <ul class="nav-list">
                    <li><a href="/BlajevStyle/index.php">Начало</a></li>
                    <li>
                        <a href="" class="desktop-item">Магазин <span><i class="fas fa-chevron-down"></i></span></a>
                        <label for="showdrop2" class="mobile-item"><span> <i
                                    class="fas fa-chevron-down"></i></span></label>
                        <ul class="drop-menu2">
                            <li><a href="/BlajevStyle/store page/men.php">Мъже</a></li>
                            <li><a href="/BlajevStyle/store page/women.php">Жени</a></li>
                            <li><a href="/BlajevStyle/store page/accessories.php">Аксесоари</a></li></ul>
                    </li>

                    <li>
                        <a href="" class="desktop-item">За нас <span><i class="fas fa-chevron-down"></i></span></a>
                        <label for="showdrop2" class="mobile-item"><span><i
                                    class="fas fa-chevron-down"></i></span></label>
                        <ul class="drop-menu2">
                            <li><a href="#footer">Намерете ни</a></li>
                            <li><a href="">Контакти</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Profile SVG [4] -->
                <div class="navigation__services">
                    <a href="/BlajevStyle/store page/SignUp Php/signUpForm.php">
                        <svg width="46" height="35" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 4.75a3.25 3.25 0 1 0 0 6.5 3.25 3.25 0 1 0 0-6.5z"></path>
                            <path
                                d="M6.848 19.25h10.305c1.141 0 2.021-.982 1.488-1.992C17.856 15.773 16.068 14 12 14s-5.856 1.773-6.64 3.258c-.534 1.01.346 1.992 1.487 1.992Z">
                            </path>
                        </svg>
                    </a>
                </div>

                <!-- Responsive Bars [5] -->
                <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
        </div>
        </nav>
        <!-- Navbar - КРАЙ -->
    </header>

    <main class="main">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar  Container-->
            <div id="sidebar">
                <!-- Cart Icom -->
                <h3><svg width="39" height="39" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.75 7.75h11.5l-1.637 6.958a2 2 0 0 1-1.947 1.542h-4.127a2 2 0 0 1-1.933-1.488L7.75 7.75Zm0 0-.75-3H4.75">
                        </path>
                        <path fill="currentColor" stroke="none" d="M10 18a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
                        <path fill="currentColor" stroke="none" d="M17 18a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
                    </svg></h3>
                <!-- If cart is empty -->
                <div id="cart">
                    <span class="empty">Количката е празна.</span>
                </div>

                <h3>Категории</h3>
                <div class="checklist categories">
                    <ul>
                        <li><a class="btn active" href=""><span></span>Нови</a></li>
                        <li><a href="btn"><span></span>Дънки</a></li>
                        <li><a href="btn"><span></span>Блузи</a></li>
                        <li><a href="btn"><span></span>Ризи</a></li>
                        <li><a href="btn"><span></span>Якета</a></li>
                        <li><a href="btn"><span></span>Панталони</a></li>
                        <li><a href="btn"><span></span>Тениски</a></li>
                    </ul>
                </div>

                <h3>Цветове</h3>
                <div class="checklist colors">
                    <ul>
                        <li><a href=""><span></span>Бежово</a></li>
                        <li><a href=""><span style="background:#222"></span>Черно</a></li>
                        <li><a href=""><span style="background:#6e8cd5"></span>Синьо</a></li>
                        <li><a href=""><span style="background:#f56060"></span>Кафяво</a></li>
                        <li><a href=""><span style="background:#44c28d"></span>Зелено</a></li>
                    </ul>

                    <ul>
                        <li><a href=""><span style="background:#999"></span>Сиво</a></li>
                        <li><a href=""><span style="background:#f79858"></span>Оранжево</a></li>
                        <li><a href=""><span style="background:#b27ef8"></span>Лилаво</a></li>
                        <li><a href=""><span style="background:#f56060"></span>Червено</a></li>
                        <li><a href=""><span
                                    style="background:#fff;border: 1px solid #e8e9eb;width:13px;height:13px;"></span>Бяло</a>
                        </li>
                    </ul>
                </div>

                <h3>PRICE RANGE</h3>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/price-range.png" alt="" />
            </div>


            <h1 class="collection__title">| Пролетна Колекция</h1>
            <?php
            if ($isAdmin == 1) {
                $_SESSION['accessories'] = 0;
                echo '<form style="border:none;" action="/BlajevStyle/store page/Add Product/addProductForm.php" method="post">
                <button type="submit" name="men">Добави продукт</button>
            </form>';
            }
            ?>
            <div id="flex">
                <?php
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

                $oProductsSize = $oConn->query("SELECT DISTINCT product_id,price,name,sizes,colors FROM products
                WHERE category = 'male'");
                $aProductsRows = $oProductsSize->fetchAll(PDO::FETCH_ASSOC);
                $products = [];
                $items = [];
                $images = [];
                foreach ($aProductsRows as $productRow) {
                    array_push($items, $productRow['price']);
                    array_push($items, $productRow['name']);
                    array_push($items, $productRow['colors']);
                    array_push($items, $productRow['sizes']);
                    array_push($items, $productRow['product_id']);

                    $oImagesSize = $oConn->query("SELECT images.url,images.indication,link.type FROM link
                    JOIN images ON link.image_id = images.image_id
                    WHERE link.product_id = " . $productRow['product_id']);
                    // var_dump($productRow['product_id']);
                
                    $aImagesRows = $oImagesSize->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($aImagesRows as $imageRow) {
                        array_push($images, $imageRow['url']);
                    }

                    array_push($items, $images);
                    $products[$productRow['product_id']] = $items;
                    $items = [];
                    $images = [];
                }

                foreach ($products as $product) {
                    echo "<div class = \"product\">";
                    echo "<div class = \"info-large\">";
                    echo "<button class = \"add-cart-large\">Add To Cart</button>";
                    echo "</div>";
                    echo "<div class = \"make3D\">";
                    echo "<div class = \"product-front\">";
                    echo "<div class = \"shadow\"></div>";
                    echo "<img src=" . $product['5']['0'] . " alt = \"\">";
                    echo "<div class = \"image_overlay\"></div>";
                    if ($isAdmin == 1) {
                        echo "<div class = \"add_to_cart\">Редактирай</div>";
                    } else {
                        echo "<div class = \"add_to_cart\">Добави в количка</div>";
                    }
                    echo "<div class = \"view_gallery\">Виж галерия</div>";
                    echo "<div class = \"stats\">";
                    echo "<div class = \"stats-container\">";
                    echo "<span class = \"product_price\">" . $product['0'] . "лв.</span>";
                    echo "<span class = \"product_name\">" . $product['1'] . "</span>";
                    echo "<p>Spring Collection</p>";
                    echo "<div class = \"product-options\">";
                    echo "<strong>SIZES</strong>";
                    $splittedSizes = str_replace(",", ", ", $product['3']);
                    echo "<span>" . $splittedSizes . "</span>";
                    echo "<strong>COLORS</strong>";
                    $colorArr = explode(",", $product['2']);
                    echo "<div class = \"colors\">";
                    foreach ($colorArr as $color) {
                        if ($color === 'blue') {
                            echo "<div class = \"c-blue\"><span></span></div>";
                        } else if ($color === 'red') {
                            echo "<div class = \"c-red\"><span></span></div>";
                        } else if ($color === 'white') {
                            echo "<div class = \"c-white\"><span></span></div>";
                        } else if ($color === 'green') {
                            echo "<div class = \"c-green\"><span></span></div>";
                        } else if ($color === 'black') {
                            echo "<div class = \"c-black\"><span></span></div>";
                        } else if ($color === 'yellow') {
                            echo "<div class = \"c-yellow\"><span></span></div>";
                        }
                    }
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class = \"product-back\">";
                    echo "<div class = \"shadow\"></div>";
                    echo "<div class = \"carousel\">";
                    echo "<ul class = \"carousel-container\">";
                    for ($i = 0; $i < count($product['5']); $i++) {
                        echo "<li><img src=\"" . $product['5']["$i"] . "\" alt = \"\"></li>";
                    }
                    echo "</ul>";
                    echo "<div class = \"arrows-perspective\">";
                    echo "<div class = \"carouselPrev\">";
                    echo "<div class = \"y\"></div>";
                    echo "<div class = \"x\"></div>";
                    echo "</div>";
                    echo "<div class = \"carouselNext\">";
                    echo "<div class = \"y\"></div>";
                    echo "<div class = \"x\"></div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class = \"flip-back\">";
                    echo "<div class = \"cy\"></div>";
                    echo "<div class = \"cx\"></div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
    </main>

    <!-- Footer - НАЧАЛО-->
    <footer class="footer" id="footer">
        <div class="contacts">
            <!-- Call -->
            <div class="svg__container">
                <svg width="36" height="36" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.893 4.75H6.068c-.728 0-1.318.59-1.318 1.318 0 7.28 5.902 13.182 13.182 13.182.728 0 1.318-.59 1.318-1.318v-2.825l-3.107-2.071-1.611 1.61c-.28.28-.698.368-1.05.186a11.093 11.093 0 0 1-2.518-1.796 8.726 8.726 0 0 1-1.836-2.542c-.16-.34-.067-.733.199-1l1.637-1.637L8.893 4.75Z">
                    </path>
                    <path d="M14 5.03a7.264 7.264 0 0 1 5 5.076"></path>
                </svg>
                <h2>+359 888 888 888</h2>
            </div>
            <!-- Email -->
            <div class="svg__container">
                <svg width="36" height="36" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.25 11.75 17.664 6.2a2 2 0 0 0-1.923-1.45H8.26A2 2 0 0 0 6.336 6.2L4.75 11.75"></path>
                    <path
                        d="M10.214 12.369c-.258-.336-.62-.619-1.043-.619H4.75v5.5a2 2 0 0 0 2 2h10.5a2 2 0 0 0 2-2v-5.5h-4.42c-.425 0-.786.283-1.044.619A2.246 2.246 0 0 1 12 13.25a2.246 2.246 0 0 1-1.786-.881Z">
                    </path>
                </svg>
                <h2>blajevbussiness@gmail.com</h2>
            </div>
            <!-- Location -->
            <div class="svg__container">
                <svg width="36" height="36" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="m4.75 6.75 4.5-2v12.5l-4.5 2V6.75Z"></path>
                    <path d="m14.75 6.75 4.5-2v12.5l-4.5 2V6.75Z"></path>
                    <path d="m14.75 6.75-5.5-2v12.5l5.5 2V6.75Z"></path>
                </svg>
                <h2>ул. „5006“ № 2, 1528 НПЗ Искър, София</h2>
            </div>
        </div>
        <!-- Divider -->
        <div class="divider"></div>

        <div class="columns">
            <div class="footer__column">
                <h2 class="column__title">За нас</h2>
                <ul>
                    <a href="">
                        <li>История</li>
                    </a>
                    <a href="">
                        <li>Награди</li>
                    </a>
                    <a href="">
                        <li>Екип</li>
                    </a>
                </ul>
            </div>
            <div class="footer__column">
                <h2 class="column__title">Магазин</h2>
                <ul>
                    <a href="">
                        <li>Мъже</li>
                    </a>
                    <a href="">
                        <li>Жени</li>
                    </a>
                    <a href="">
                        <li>Аксесоари</li>
                    </a>
                </ul>
            </div>
            <div class="footer__column">
                <h2 class="column__title">Ресурси</h2>
                <ul>
                    <a href="">
                        <li>Блог</li>
                    </a>
                    <a href="">
                        <li>Бюлетин</li>
                    </a>
                    <a href="">
                        <li>Политика за поверителност</li>
                    </a>
                </ul>
            </div>
            <div class="footer__form">
                <h2 class="column__title">Абонирай се</h2>
                <input type="text" placeholder="Email..."><br>
                <span>Нашите актуализации и промоции във вашата пощенска кутия</span>
            </div>
        </div>
    </footer>
    <div class="legal">
        <!-- Socials -->
        <ul class="socials__wrapper">
            <li class="icon facebook">
                <span class="tooltip">Facebook</span>
                <span><i class="fab fa-facebook-f"></i></span>
            </li>
            <li class="icon twitter">
                <span class="tooltip">Twitter</span>
                <span><i class="fab fa-twitter"></i></span>
            </li>
            <li class="icon instagram">
                <span class="tooltip">Instagram</span>
                <span><i class="fab fa-instagram"></i></span>
            </li>
            <li class="icon github">
                <span class="tooltip">Github</span>
                <span><i class="fab fa-github"></i></span>
            </li>
        </ul>
        <span class="legal__text">Copyright © 2023 <a href="">Blajev Style</a>. All Rights Reserved.</span>
    </div>
    <!-- Footer - КРАЙ-->

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- partial -->
    <script src="../js/cart.js"></script>

</body>

</html>