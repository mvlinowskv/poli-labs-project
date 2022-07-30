<?php
$bg = get_field('bg');
$tel = get_field('tel');
$h_contact = get_field('heading')
?>

<section class="contact" style="background-image: url('<?php echo esc_url($bg['url']); ?>">
    <p class="contact__h">
        <?php echo $h_contact; ?>
    </p>
    <a href="tel: <?php echo $tel; ?>" class="button button--white contact__button">
    <?php echo $tel; ?>
</a>
</section>