<?php get_header(); ?>

<body class="blog">
<header class="header">
    <h1><?php bloginfo('name'); ?></h1>
    <h2><?php bloginfo('description'); ?></h2>
</header>
<section class="container" role="main">
<header class="container__header">
    <h2>Esto es una categoría</h2>
</header>
    <?php rewind_posts(); ?>
    <?php include (TEMPLATEPATH . '/templates/the_loop.php'); ?>
 </section>
<?php get_footer(); ?>