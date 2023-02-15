<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-lg-6">
            <?php if ($img = get_field('person_block_image')): ?>
                <?php echo wp_get_attachment_image($img['ID'], 'full', false, [
                    'class' => 'img-fluid'
                ]) ?>
            <?php endif; ?>
        </div>
        <div class="col-lg-6">
            <h1><?php the_field('person_block_title'); ?></h1>
            <p><?php the_field('person_block_description'); ?></p>
            <a href="" class="btn btn-primary"><?php the_field('person_block_button_text'); ?></a>
        </div>
    </div>
</div>
