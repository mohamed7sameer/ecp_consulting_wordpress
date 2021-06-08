<?php
/*
Template Name: About-us

*/
?>




<?php
get_header()
?>







<section class="au-company-history">
      <div class="container"> 
        <h2 class="co-heading text-center main-heading"><?= the_field('company-history-title') ?></h2>
        <div class="row">
          <div class="col-md-6">
            <div class="sub-co">
              <?= the_field('company-history-content') ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="co-img">
              <?php
                $company_history_image = get_field('company-history-image');
                if($company_history_image){
              ?>
                <img class="w-100" src="<?= $company_history_image['url']?>" alt="<?= $company_history_image['alt'] ?>">
              <?php
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
    $our_vision_background_image_Ready = '';
    $our_vision_background_image = get_field('our-vision-background_image');
    if($our_vision_background_image){
      $our_vision_background_image_Ready = "background-image: url('". $our_vision_background_image['url']  ."')"; 
    }
    ?>
    <section class="au-our-vision" style="<?= $our_vision_background_image_Ready ?>">
      <div class="container">
        <div class="sub-co">
          <h2 class="co-heading text-center main-heading"><?= the_field('our-vision-title') ?></h2>
          <div class="para">
            <?= the_field('our-vision-content') ?>
          </div>
        </div>
      </div>
    </section>
    <?php
    $our_mission_background_image_ready = '';
    $our_mission_background_image = get_field('our_mission-background_image');
    if($our_mission_background_image){
      $our_mission_background_image_Ready = "background-image: url('". $our_mission_background_image['url']  ."')"; 
    }
    ?>
    <section class="au-our-mission" style="<?= $our_mission_background_image_Ready ?>">
      <div class="container">
        <div class="sub-co">
          <h2 class="co-heading text-center"><?= the_field('our_mission-title')?></h2>
          <div class="para">
            <?= the_field('our_mission-content') ?>
          </div>
        </div>
      </div>
    </section>
    <section class="au-core-values">
      <div class="container"> 
        <h2 class="co-heading text-center main-heading"><?= the_field('core-values-title') ?></h2>
        <div class="row">
          <?php
          if(have_rows('core-values-features')){
            while(have_rows('core-values-features')){
              the_row();
          ?>
          <div class="col-lg-6">
            <div class="co-item">
              <div class="co-img">
                <?php
                $core_values_features_sub_image = get_sub_field('image');
                if($core_values_features_sub_image){
                ?>
                <img class="w-100" src="<?= $core_values_features_sub_image['url'] ?>" alt="<?= $core_values_features_sub_image['alt'] ?>">
                <?php
                }
                ?>
              </div>
              <div class="co-content">
                <p class="para-1"><?= the_sub_field('title')?></p>
                <div class="para-2"><?= the_sub_field('description') ?></div>
              </div>
            </div>
          </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </section>








<?php
get_footer()
?>