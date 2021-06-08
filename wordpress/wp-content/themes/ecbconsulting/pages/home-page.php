<?php
/*
Template Name: Home

*/
?>




<?php
get_header()
?>





<?php
$header_slider = get_field('header_slider');
if($header_slider){
?>

<header class="co-header">
    <div class="co-carousel">
        <ul class="carousel-header">
            <?php
                foreach($header_slider as $value){
            ?>
                <li class="co-list-carousel"><img class="w-100" src="<?= $value['url'] ?>" alt="<?= $value['title'] ?>"></li>
            <?php
                }
            ?>
        </ul>
    </div>
</header>

<?php
}
?>

<?php


$visible_services = get_field('visible_services');
if($visible_services){
$background_image_services = get_field('background_image_services');
$exe_background_image_services = '';
if($background_image_services){
    $exe_background_image_services = get_field('background_image_services')['url'];
}


?>
    <section class="co-2" style="background-image: url('<?= $exe_background_image_services  ?>');">
      <div class="container">
        <ul class="co-main-list-links">
          <?php 
            $services_project = get_categories(array(
              'taxonomy' => 'services-project'
            ));
            if($services_project){
              foreach($services_project as $value){
                $value2 = $value->taxonomy . '_' . $value->term_id;
                
                
                
          ?>
            <li class="co-list-links">
              <a class="co-links" href="<?= get_category_link($value)?>">
                <?php
                $icon = get_field('icon',$value2); 
                if($icon){
                ?>
                  <img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>">
                <?php
                  }
                ?>
                <span class="para content-anchor"><?= $value->name ?></span>
              </a>
            </li>
          <?php
              }
            }
          ?>
          
          
        </ul>
      </div>
    </section>
<?php
}
?>

    <?php
    $visible_home_intro = get_field('visible_home_intro');
    $title_home_intro = get_field('title_home_intro');
    $description_home_intro = get_field('description_home_intro');
    if($visible_home_intro){
    ?>
    <section class="co-3">
      <div class="container">
        <div class="co-main">
          <h3 class="co-heading main-heading"><?= $title_home_intro ?></h3>
          <p class="para"><?= $description_home_intro ?></p>
        </div>
      </div>
    </section>
    <?php
    }
    ?>

    <section class="co-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="co-left">
              <h3 class="co-heading main-heading">Find our offices</h3>
              <div class="co-img" id="hotspotImg"><img class="img-responsive" src="<?= get_template_directory_uri() ?>/assets/imgs/Map.png" alt="">
                <?php
                if(have_rows('add_offices','option')){
                    while(have_rows('add_offices','option')){
                        the_row();
                ?>
                <div class="hot-spot" y="<?= get_sub_field('y') ?>" x="<?= get_sub_field('x') ?>">
                  <div class="circle"></div>
                  <div class="tooltip">
                    <div class="text-row">
                      <p><?= get_sub_field('office_name') ?>: <?= get_sub_field('address') ?></p>
                    </div>
                  </div>
                </div>
                <?php
                        }
                    }
            
                ?>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="co-right">
              <h3 class="co-heading main-heading">Latest Projects</h3>
              <ul class="carousel-mo-2">
                <?php

                    $project = new WP_Query(array(
                        'post_type' => 'project',
                        'orderby' => 'date', // default
                        'posts_per_page' => 5, // default
                        'order' => 'asc' // default
                    )
                    );
                    if($project->have_posts()){
                        while($project->have_posts()){
                            $project->the_post();
                ?>
                <li class="co-list-link">
                    <a class="card" href="<?= the_permalink()?>">
                        <img class="card-img-top" src="<?= the_post_thumbnail_url()?>" alt="">
                        <div class="card-body">
                          <h5 class="card-title"><?= the_title() ?></h5>
                        </div>
                    </a>
                </li>
                <?php
                        }
                    }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>









<?php
get_footer()
?>