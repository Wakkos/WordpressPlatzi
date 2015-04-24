<?php get_header(); ?>
<body>

    <section class="page">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="container__item">
        <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <!-- post navigation -->
    <?php else: ?>
    <!-- no posts found -->
    <?php endif; ?>
    </article>
    </section>
<?php get_footer(); ?>