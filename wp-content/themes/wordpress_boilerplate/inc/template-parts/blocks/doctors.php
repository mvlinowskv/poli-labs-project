<section class="doctors">
    <div class="doctors__container">
        <h5 class="doctors__h5"><?php the_field('h5');?></h5>
        <p class="doctors_p"><?php the_field('description'); ?></p>


        <div class="doctors__cont">
            <?php
 
// The Query

$args = array(
    'post_type' => 'doctors',
    'posts_per_page' => '-1'
);
$the_query = new WP_Query( $args );
 
// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
    ?>
            <div class="doctors__box">

                <?php the_post_thumbnail();  ?>
                <p class="doctors__h">
                    <?php
                    $title = get_the_title();
                    $array_str = str_word_count($title, 1);

                    for($i =0; $i <= count($array_str)-1; $i++) { ?>
                                <?php  if($i == count($array_str)-1) {
                            echo "<span class='doctors__span'>".$array_str[$i]."</span>";

                        } else {
                            echo $array_str[$i];
                        }
                        }    
                    
                    ?></p>

                <p class="doctors__function"><?php echo get_post_meta(get_the_ID(), 'function', true); ?></p>
            </div>
            <?php }} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();


?>
        </div>
    </div>
</section>