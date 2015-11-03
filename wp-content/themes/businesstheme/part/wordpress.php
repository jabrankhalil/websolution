<?php
$args=array(
    'post_type'=>'wordpress',
    'post_per_pages'=>-1,
);

$wordpress=get_posts($args);
?>
<section id="wordpress" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?php the_field('wpheading','options');?></h2>
                <h3 class="section-subheading text-muted"><?php the_field('wpsubheading','options');?></h3>
            </div>
        </div>

        <div class="row">
            <?php foreach($wordpress as $wordpresss) : ?>
                <div class="col-md-6" >

                    <h4><?php echo get_the_title($wordpresss->ID); ?></h4>
                    <p><?php the_field('wpdescritpion',$wordpresss->ID); ?></p>

                </div>
                <div class="col-md-6">
                    <?php the_field('tech_heading',$wordpresss->ID);?>
                    <?php if(have_rows('technologies',$wordpresss->ID)): ?>

                        <?php while(have_rows('technologies',$wordpresss->ID)):the_row();?>

                            <h6><?php the_sub_field('name',$wordpresss->ID);?></h6>
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