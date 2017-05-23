<?php
/*
Template Name: Sundays
*/

get_header();
?>
    <main id="mainpage">
        <h2>Spring Summer 2017</h2>
        <section>
            <?php if ( have_posts() ) : ?>
                <?php
                $args = array('post_type' => 'post',
                            'orderby'     => 'title',
                            'order'       => 'ASC',
                            'posts_per_page' => 150);
                $posts = get_posts($args);
                    foreach ($posts as $post) {
                        $category = get_the_category();
                        $price = get_post_custom_values('Price');
                        ?>
                    <article class="<?php echo $category[0]->name; ?>">
                        <a href="#">
                            <img src="http://lorempixel.com/150/200/" alt="randompicture">
                            <h2><?php echo $category[0]->name; ?></h2>
                            <p><?php the_title();?></p>
                            <?php foreach ($price as $value) { ?>
                            <p><?php echo $value; ?></p>
                            <?php }; ?>
                        </a>
                    </article>
                    <?php };
            endif ?>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <section class="col-xs-12 col-md-3">
                    <h3>Quick links</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </section>
                <section class="col-xs-12 col-md-3">
                    <h3>Contact us</h3>
                    <ul>
                        <li><i class="fa fa-twitter" aria-hidden="true"></i>
                            <p>@californiatheme</p>
                        </li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <p>support@smallvictories.co</p>
                        </li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                            <p>+1 917 (123) 4567</p>
                        </li>
                    </ul>
                </section>
                <section class="col-xs-12 col-md-3">
                    <h3>Newsletter</h3>
                    <input type="email" placeholder="Your email...">
                    <button type="button" name="button">OK</button>
                </section>
                <section class="col-xs-12 col-md-3">
                    <h3>Follow us</h3>
                    <ul>
                        <li><i class="fa fa-pinterest" aria-hidden="true"></i>
                            <p>Pinterest</p>
                        </li>
                        <li><i class="fa fa-instagram" aria-hidden="true"></i>
                            <p>Instagram</p>
                        </li>
                        <li><i class="fa fa-vimeo" aria-hidden="true"></i>
                            <p>Vimeo</p>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </footer>

    <script src="static/external/jquery/dist/jquery.min.js" charset="utf-8"></script>
    <script src="static/external/bootstrap/dist/js/bootstrap.min.js" charset="utf-8"></script>
</body>

</html>
