<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Sundays
 * @since Sundays 0.0001a
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Integration Sass II</title>
    <link rel="stylesheet" href="static/external/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/external/bootstrap/dist/css/bootstrap.min.css">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="wp-content/themes/sundays/style.css">
    <!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div class="row">
                <nav>
                    <ul>
                        <li><a href="#">Catalog</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Stores</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                    <i class="fa fa-search" aria-hidden="true"></i>
                </nav>
            </div>
            <div class="row">
                <section id="headerContent">
                    <h1>SUNDAYS</h1>
                    <h2>We craft ocean <br>friendly apparel</h2>
                    <button type="button" name="button">BROWSE OUR PRODUCTS</button>
                </section>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </div>
        </div>
    </header>
