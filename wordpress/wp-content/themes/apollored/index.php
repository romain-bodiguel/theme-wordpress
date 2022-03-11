<?php

get_header();

//bloginfo('name');



// the_title: affiche le titre du post en cours
// get_the_title: retourne la valeur du titre

// Exemple:

// the_title();

// echo get_the_title();

// the_content();

// $content = get_the_content();

// Liste les catégories
//wp_list_categories());

?>
<main class="right">
    <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
    <h2 class="right__title">Latest News</h2>
        <div class="posts">

        <?php
            if (have_posts()) {
                while (have_posts()) {
                    // Très important: va dire que tous les tags font référence au post en cours de lecture par la boucle
                    the_post(); 
        ?> 
        <article class="post">
            <a href="" class="post__category post__category--color-team">team</a>
            <h3><?php the_title(); ?></h3>
            <div class="post__meta">
                <img class="post__author-icon" src="../images/icon-dar.png" alt="">
                <strong class="post__author"><?php the_author(); ?></strong>
                <time datetime="2018-02-10">le 10 février 2018</time>
            </div>
            <p><?php the_excerpt(); ?></p>
            <a href="article.html" class="post__link">Continue reading</a>
        </article>
        <?php 
                }
            }
        ?>
</div>
</main>
<?php
get_footer();
?>
