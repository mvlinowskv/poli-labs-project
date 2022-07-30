<section class="box-animation">
    
    <h4 class="box-animation__h4"><?php the_field('h'); ?></h4>

    <div class="box-animation__container">
<?php
    if( have_rows('boxes-icon') ):
        $i =0;

// Loop through rows.
while( have_rows('boxes-icon') ) : the_row();

    // Load sub field value.
    $icon_an = get_sub_field('icon');
    $h_an = get_sub_field('h'); ?>
    <div class="box-animation__box <?Php if($i == 0): echo 'active'; endif; ?>" data-btn="text-<?php echo $i; ?>">
        <div class="boxes-animation__icon">
            <?php echo $icon_an; ?>
        </div>
        <p class="box-animation__hp"><?php echo $h_an; ?></p>
   
    </div>
    <?php $i++; ?>
    <?php endwhile; endif; ?>
    </div>

    <?php
    if( have_rows('boxes-icon') ):
        $j =0; ?>

<div class="box-animation__background">
<div class="box-animation__container-info">
<?php // Loop through rows.
while( have_rows('boxes-icon') ) : the_row(); ?>
        <div class="box-animation__info" data-text="text-<?php echo $j; ?>"
        style="<?php if ($j >0): ?>
                opacity: 0;
                visibility: hidden;
                height: 0px;
                padding: 0px;
                transition: opacity 0.4s ease-out 0s;
                <?php endif; ?>
                "
                    >
<?php
    if( have_rows('description') ):
        

        // Loop through rows.
        while( have_rows('description') ) : the_row();

        $icon_description = get_sub_field('icon');
        $sentence = get_sub_field('sentence'); ?>
        <div class="box-animation__box-info">
            <div class="box-animation__small-icon">
                <?php echo $icon_description; ?>
            </div>
            <div class="box-animation__sentence">
                <?php echo $sentence; ?>
            </div>
        </div>
        

   <?php endwhile;
endif;

$j++; 
?>
</div>



 <?php   endwhile; endif;
    ?>
    </div>
    </div>
</section>