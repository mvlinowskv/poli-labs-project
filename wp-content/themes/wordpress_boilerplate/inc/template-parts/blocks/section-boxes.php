<section class="boxes">

<?php

// Check rows exists.
if( have_rows('boxes-info') ):

    // Loop through rows.
    while( have_rows('boxes-info') ) : the_row();

        // Load sub field value.
        $box_h = get_sub_field('box-h');
        $box_icon = get_sub_field('box-icon');
        $box_info = get_sub_field('box-info');

        $field = get_sub_field_object('box-color');
        $color = $field['value'];
        // echo $color;
        ?>
        <div class="box" style="background-color: <?php echo esc_attr($color); ?>">
            <h2 class="box__h2">
                <?php echo $box_h; ?>
            </h2>
            <div class="box__container">
                <div class="box__icon">
                    <?php echo $box_icon; ?>
                </div>
                <div class="box__info">
                    <?php echo $box_info; ?>
                </div>
                
            </div>
        </div>

        <?php
    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>

</section>