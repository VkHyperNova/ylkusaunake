<?php get_header(); ?>


<!-- Content -->
<div class="container page-content">





<h1>Coming soon</h1>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum enim nobis porro obcaecati, iure nesciunt assumenda. Fugiat eum necessitatibus rem cupiditate iste, dolore, iusto nihil adipisci cumque nobis nisi minus!</p>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
</div>



<?php get_footer(); ?>