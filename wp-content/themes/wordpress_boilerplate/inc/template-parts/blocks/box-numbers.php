<?php
$bg = get_field('background');

?>

<section class="numbers" style="background-image: url('<?php echo esc_url($bg['url']); ?>">
    <div class="numbers__container">
    <?php if( have_rows('numbers') ):

    // Loop through rows.
    while( have_rows('numbers') ) : the_row();

        // Load sub field value.
        $numb = get_sub_field('number');
        $h = get_sub_field('heading'); ?>
    <div class="numbers__box">
        <h4 class="numbers__h4"><?php echo $numb; ?></h4>
        <p class="numbers__p"><?php echo $h; ?></p>
    </div>


<?php endwhile; endif; ?>
    </div>
</section>