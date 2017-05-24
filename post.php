<?php
/*
Template Name: Produit
Template Post Type: post
*/
get_header();
if ( have_posts() ) :
?>
    <main id="product">
        <div class="container">
            <div class="row">
                <section id="descriproduct">
                    <div class="row">
                        <div class="col-xs-6">
                            <img src="http://lorempixel.com/300/400/" alt="mainpicture">
                        </div>
                        <div class="col-xs-6">
                            <h1><?php echo the_title(); ?></h1>
                            <p><?php echo get_post_field('post_content'); ?> </p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="row">
                <section id="price">
                    <a href="panier.html">Ajouter au panier</a>
                    <span><?php echo get_post_custom_values('Price')[0];?> </span>
                    <p><?php echo get_the_tags()[0]->name ?> </p>
                </section>
            </div>
        </div>
    </main>
<?php
    endif;
    get_footer();
?>
