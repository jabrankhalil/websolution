<?php
$args=array(
    'post_type'=>'ecommerce',
    'post_per_pages'=>-1,
);

$ecommerce=get_posts($args);
?>
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?php the_field('heading','options');?></h2>
                <h3 class="section-subheading text-muted"><?php the_field('subheading','options');?></h3>
            </div>
        </div>

            <div class="row">
                <?php foreach($ecommerce as $ecommerces) : ?>
                    <div class="col-md-6" >

                        <h4><?php echo get_the_title($ecommerces->ID); ?></h4>
                        <p><?php the_field('e-commerce_description',$ecommerces->ID); ?></p>

                    </div>
                             <div class="col-md-6">

                                 <?php the_field('tech_heading',$ecommerces->ID);?>
                                    <?php if(have_rows('technologies',$ecommerces->ID)): ?>

                                        <?php while(have_rows('technologies',$ecommerces->ID)):the_row();?>

                                            <h6><?php the_sub_field('name',$ecommerces->ID);?></h6>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                    <span class="sr-only">100% Complete</span>
                                                </div>
                                            </div>

                                        <?php endwhile; endif;?>

                            </div>

                <?php endforeach;?>

            </div>


    </div>
</section>