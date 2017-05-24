<?php
/*
Template Name: Blog
Template Post Type: page
*/

get_header();
?>
    <main id="mainpage">
        <h2>Spring Summer 2017</h2>
        <div class="container">
            <section>
                <?php if ( have_posts() ) : ?>
                    <?php
                    $args = array('post_type' => 'post',
                                'orderby'     => 'title',
                                'order'       => 'ASC',
                                'posts_per_page' => 150,
                                'category_name' => 'Blog');
                    $posts = get_posts($args);
                        foreach ($posts as $post) {
                        ?>
                        <article class="<?php echo get_the_tags()[0]->name; ?> col-xs-4">
                            <a href="<?php echo get_permalink(); ?>">
                                <img src="http://lorempixel.com/150/200/" alt="randompicture">
                                <h2><?php the_title();?></h2>
                                <p><?php echo get_post_custom_values('Price')[0]; ?></p>
                            </a>
                        </article>
                    <?php };
            endif ?>
            </section>
        </div>
    </main>
<?php get_footer(); ?>
