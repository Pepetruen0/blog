<?php get_header(); ?>



<div class="mainContainer">

            <div class="content">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <!-- start article-->

                    <article class="post">
                        <a title="title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?> </a>

                        <div class="meta">

                            <time>2015-01-20</time> <span class="catSpan"><a href="#">Category</a></span>

                            <?php the_category(); ?>

                            <h1><a href="<?php the_permalink(); ?>"><?php the_title_attribute(); ?></a></h1>

                            <cite>By <?php the_author_posts_link(); ?>  </cite>

                            <p class="excerpt"> <?php the_excerpt(); ?> </p>

                            <p class="readmore"><a href="#">Read more &raquo;</a></p>
                        </div>

                    </article>
                    <!-- End article-->



                <?php endwhile; ?>

                <?php else : ?>

                    <h2><?php _e('Not Found') ?></h2>

                <?php endif; ?>


            </div>

    <?php get_sidebar(); ?>

    <?php wp_link_pages(); ?>

</div><!--End maincontainer-->

<?php get_footer(); ?>