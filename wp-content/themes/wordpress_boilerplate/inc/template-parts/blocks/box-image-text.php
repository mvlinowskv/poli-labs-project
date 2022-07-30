<?php $h3 = get_field('heading'); 
                $text = get_field('text'); 
                $order = get_field_object('floating-box');
                $order_val = $order['value'];
            ?>

<section class="container-elements">
    <div class="container-elements__image" style="<?php if($order_val == 1): ?> order:2 <?php else: ?> order: 1; <?php endif; ?>">
    <?php 
        $image = get_field('image');
        if( !empty( $image ) ): ?>
            <img class="container-elements__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        </div>


<div class="container-elements__text" style="order: <?php echo esc_attr($order_val); ?>">
    <h3 class="container-elements__h3"><?php echo $h3; ?></h3>
    <p class="container-elements__p">
        <?php echo $text; ?>
    </p>
</div>

</section>