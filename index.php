<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Title -->
  <title>Blajev Style</title>
  <!-- Favicon -->
  
  <!-- Fontawesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <!-- Meta Links -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS File -->
  <link rel="stylesheet" href="/BlajevStyle/style.css">
</head>

<body>
  <?php
  session_start();
  $isAdmin = 0;
  if (isset($_SESSION['isAdmin'])) {
    $isAdmin = $_SESSION['isAdmin'];
  }
  ?>
  <!-- Navbar - НАЧАЛО -->
  <!-- Navigation Wrapper -->
  <div class="wrapper container">
    <nav class="nav">
      <!-- Navigation Logo [1] -->
      <div class="logo"><a href="/BlajevStyle/index.php">Blajev Style</a></div>
      <!-- Navigation Form [2] -->
      <form id="search">
        <svg width="29" height="29" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
          stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M19.25 19.25 15.5 15.5M4.75 11a6.25 6.25 0 1 1 12.5 0 6.25 6.25 0 0 1-12.5 0Z"></path>
        </svg>
        <input type="text" placeholder="| Какво търсите днес ?">
      </form>

      <!-- Navigation Links [3] -->
      <ul class="nav-list">
        <li><a href="/BlajevStyle/index.php">Начало</a></li>
        <li>
          <a href="" class="desktop-item">Магазин <span><i class="fas fa-chevron-down"></i></span></a>
          <label for="showdrop2" class="mobile-item"><span> <i class="fas fa-chevron-down"></i></span></label>
          <ul class="drop-menu2">
            <li><a href="/BlajevStyle/store page/men.php">Мъже</a></li>
            <li><a href="/BlajevStyle/store page/women.php">Жени</a></li>
            <li><a href="/BlajevStyle/store page/accessories.php">Аксесоари</a></li>
          </ul>
        </li>

        <li>
          <a href="" class="desktop-item">За нас <span><i class="fas fa-chevron-down"></i></span></a>
          <label for="showdrop2" class="mobile-item"><span><i class="fas fa-chevron-down"></i></span></label>
          <ul class="drop-menu2">
            <li><a href="#footer">Намерете ни</a></li>
            <li><a href="#footer">Контакти</a></li>
          </ul>
        </li>
      </ul>

      <!-- Profile SVG [4] -->
      <div class="navigation__services">
        <a href="/BlajevStyle/store page/SignUp Php/signUpForm.php">
          <svg width="46" height="35" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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

  <!-- Landing Page - НАЧАЛО -->
  <div class="landing__page">
    <div class="left">
      <h3>Ексклузивни продажби</h3>
      <h1>Пролетна Разпродаждба</h1>
      <small>Избери от новата пролетна колекция </small>
    </div>
  </div>
  <!-- Landing Page - КРАЙ -->

  <!-- Collection - НАЧАЛО -->
  <section class="section promotion">
    <div class="title">
      <h2>Колекция</h2>
      <span>Избери най-подходящото за твоят стил</span>
    </div>

    <!-- MEN - НАЧАЛО -->
    <div class="promotion-layout container">
      <div class="promotion-item">
        <img src="./images/maleModel.jpg" alt="" />
        <div class="promotion-content">
          <h3>МЪЖЕ</h3>
          <a href="/BlajevStyle/./store page/men.php">SHOP NOW</a>
        </div>
      </div>
      <!-- MEN - КРАЙ -->

      <!-- WOMEN - НАЧАЛО -->
      <div class="promotion-item">
        <img src="./images/femaleModel.jpg" alt="" />
        <div class="promotion-content">
          <h3>ЖЕНИ</h3>
          <a href="/BlajevStyle/./store page/women.php">SHOP NOW</a>
        </div>
      </div>
      <!-- WOMEN - КРАЙ -->

      <!-- ACCESSORIES - НАЧАЛО -->
      <div class="promotion-item">
        <img src="./images/accessories.jpg" alt="" />
        <div class="promotion-content">
          <h3>АКСЕСОАРИ</h3>
          <a href="/BlajevStyle/./store page/accessories.php">SHOP NOW</a>
        </div>
      </div>
      <!-- ACCESSORIES - КРАЙ -->
  </section>
  <!-- Collection - КРАЙ -->

  <!-- Footer - НАЧАЛО-->
  <footer class="footer" id="footer">
    <div class="contacts">
      <!-- Call -->
      <div class="svg__container">
        <svg width="36" height="36" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
          stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M8.893 4.75H6.068c-.728 0-1.318.59-1.318 1.318 0 7.28 5.902 13.182 13.182 13.182.728 0 1.318-.59 1.318-1.318v-2.825l-3.107-2.071-1.611 1.61c-.28.28-.698.368-1.05.186a11.093 11.093 0 0 1-2.518-1.796 8.726 8.726 0 0 1-1.836-2.542c-.16-.34-.067-.733.199-1l1.637-1.637L8.893 4.75Z">
          </path>
          <path d="M14 5.03a7.264 7.264 0 0 1 5 5.076"></path>
        </svg>
        <h2>+359 888 888 888</h2>
      </div>
      <!-- Email -->
      <div class="svg__container">
        <svg width="36" height="36" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
          stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M19.25 11.75 17.664 6.2a2 2 0 0 0-1.923-1.45H8.26A2 2 0 0 0 6.336 6.2L4.75 11.75"></path>
          <path
            d="M10.214 12.369c-.258-.336-.62-.619-1.043-.619H4.75v5.5a2 2 0 0 0 2 2h10.5a2 2 0 0 0 2-2v-5.5h-4.42c-.425 0-.786.283-1.044.619A2.246 2.246 0 0 1 12 13.25a2.246 2.246 0 0 1-1.786-.881Z">
          </path>
        </svg>
        <h2>blajevbusiness@gmail.com</h2>
      </div>
      <!-- Location -->
      <div class="svg__container">
        <svg width="36" height="36" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
          stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
          <a href="/BlajevStyle/store page/men.php">
            <li>Мъже</li>
          </a>
          <a href="/BlajevStyle/store page/women.php">
            <li>Жени</li>
          </a>
          <a href="/BlajevStyle/store page/accessories.php">
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

  <!-- Up button - НАЧАЛО-->
  <button onclick="topFunction()" id="myBtn" title="Go to top"><svg width="20" height="20" fill="none"
      stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg">
      <path d="M17.25 10.25 12 4.75l-5.25 5.5"></path>
      <path d="M12 19.25V5.75"></path>
    </svg></button>
  <script src="./js/upButton.js"></script>
  <!-- Up button - КРАЙ-->
</body>

</html>