<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="module--header">

	<header> 
		<div class="module--header__logo">
			<div>Adoptme</div>
			<img src="https://i.ibb.co/gRjNPjY/image-18-1.png" alt="">
		</div>
		<ul>
			<li>Home</li>
			<li>Adoption</li>
			<li>Comminity</li>
			<li>Stories with pet</li>
			<li>FAQ</li>
		</ul>
		<div class="module--header__buttons">
		<i class="fa-solid fa-magnifying-glass"></i>
			<button>Sing in</button>
			<button>Sing up</button>
		</div>
		<div class="module--header__mobile-bars">
		<i class="fa-solid fa-bars"></i>
		</div>
	</header>

</div>