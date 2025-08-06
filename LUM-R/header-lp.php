<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <!-- header -->
  <header class="site-header">
    <div class="container">
      <h1 class="logo-h1">
        <a href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/asset\lum-r_logo_mini.svg" alt="中古車オークションLUM入札会の新コーナーのLUM-R" class="logo">
        </a>
      </h1>
      <button class="hamburger" aria-label="メニューを開く">
        <span></span><span></span>
      </button>
      <nav class="nav-menu">
        <ul>
          <li><a href="#" class="menu current" data-index='1' id="top-menu">トップ</a></li>
          <li><a href="#ichisere" class="menu" data-index='2' id="ichisere-menu">イチセレ</a></li>
          <li><a href="#nicoren" class="menu" data-index='3' id="nicoren-menu">ニコレン</a></li>
          <li><a href="https://swat.spacemove.co.jp/bid/login" target="_blank" class="btn-bid">LUM-Rで入札する</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- バーガーメニュー -->
  <div class="ham-nav">
    <nav>
      <ul>
        <li><a href="#">トップ</a></li>
        <li><a href="#ichisere">イチセレ</a></li>
        <li><a href="#nicoren">ニコレン</a></li>
        <li><a href="https://swat.spacemove.co.jp/bid/login" target="_blank" class="btn-bid">LUM-Rで入札する</a></li>
      </ul>
    </nav>
  </div>
  