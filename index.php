<?php get_header() ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
<article class="text-light">
<div class="flipJKPM col-12">
    <div class="flipJKPM__card">
        <div class="flipJKPM__card__front">
            <div class="card bg-dark">
                <div class="card-body p-0">
                    <?php the_post_thumbnail(array(3500,6000)); ?>
                    <div class="card-body card-img-overlay">
                        <h3 class="text-light"><?php the_title(); ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="flipJKPM__card__back">
            <div class="card">
                <div class="cardJKPM card-body w-100 bg-light text-dark text-center">
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
</article>
<?php endwhile; else: ?>
    <p>Aucun article :(</p>
<?php endif; ?>

<?php get_footer() ?>