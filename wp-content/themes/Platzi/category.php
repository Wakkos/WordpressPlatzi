<?php get_header(); ?>
<body>
<header class="header">
    <h1><?php bloginfo('name'); ?></h1>
    <h2><?php bloginfo('description'); ?></h2>
</header>
<section class="container" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

     <article class="container__item">
     <header>
         <h4><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h4>
     </header>
     <figure>
         <?php the_post_thumbnail('thumbnail'); ?>
     </figure>
     <?php the_excerpt(); ?>
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
<?php get_footer('negro'); ?>