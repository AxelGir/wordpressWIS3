<?php /* Template Name: articles */ ?>

<?php get_header() ?>

<main id="<?php the_ID(); ?> main" class="container mt-5" <?php post_class(); ?>>

    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>

            <div class="card text-bg-danger text-color-white mb-3" style="max-width: 72rem;" align="center">
                <div class="card-header"><b><?php the_title(); ?></b></div>
                <div class="card-body">

                    <?php the_post_thumbnail('large', [
                        'class' => 'img-fluid w-100',
                        'style' => 'object-fit: cover; object-position: top;'
                    ]); ?>
                    <?php the_content(); ?>

                </div>
            </div>


        <?php endwhile; ?>
    <?php endif; ?>


</main>

<?php get_footer() ?>
