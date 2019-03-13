<?php get_header(); ?>

<!-- Index Template -->


<main>
    <section id="home-cta">
        <div class="blurb">
            <?php echo get_option('home_cta'); ?>
        </div>
        <div class="button">
            <a href="<?php echo get_option('home_cta_link'); ?>">Learn More</a>
        </div>
    </section>
</main>


<?php get_footer(); ?>