<?php get_header(); ?>
<body>
<header class="header">
    <h1><?php bloginfo('name'); ?></h1>
    <h2><?php bloginfo('description'); ?></h2>
</header>
<section class="container single" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <header class="container__header">
    <h2><?php the_title(); ?></h2>
</header>
     <article class="single container__item">
     <figure>
         <?php the_post_thumbnail('large'); ?>

     </figure>
     <?php the_content(); ?>
     <footer>
         <strong><?php the_author(); ?></strong> - <small><?php the_date(); ?></small>
     </footer>

    </article>
     <?php endwhile; ?>
     <!-- post navigation -->
     <?php else: ?>
        <h4>No hemos encontrado resultados</h4>
     <!-- no posts found -->
     <?php endif; ?>
 </section>

<?php get_footer(); ?>