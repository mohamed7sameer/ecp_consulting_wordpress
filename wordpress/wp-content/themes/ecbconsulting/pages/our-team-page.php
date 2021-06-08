<?php
/*
Template Name: Our Team

*/
?>




<?php
get_header()
?>
















<section class="co-our-team-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="co-left">
              <div class="card mo-com-1" href="#">
                <?php
                $our_teame_section_1_image = get_field('our-teame_section_1_image');
                if($our_teame_section_1_image){
                ?>
                <img class="card-img-top" src="<?= $our_teame_section_1_image['url'] ?>" alt="<?= $our_teame_section_1_image['alt'] ?>"/>
                <?php
                }
                ?>
                <div class="card-body">
                  <h5 class="card-title"><?= the_field('our_team_section_1_name')?></h5>
                  <p class="card-text"><?= the_field('our_team_section_1_job')?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="co-right">
              <p class="para-1"><b><?= the_field('our-teame_section_1_image_title') ?></b></p>
              <p class="para-2"><?= the_field('our-teame_section_1_image_content') ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="co-our-team-2">
      <div class="container">
        <div class="row">
          <?php
          if(have_rows('our-teame_section_2_add_team')){
            while(have_rows('our-teame_section_2_add_team')){
              the_row();
          ?>
          <div class="col-lg-4 col-md-6">
            <div class="card mo-com-1" href="#">
              <?php
                $image_team = get_sub_field('image');
                if($image_team){
              ?>
              <img class="card-img-top" src="<?= $image_team['url'] ?>" alt="<?= $image_team['alt'] ?>"/>
              <?php
              }
              ?>
              <div class="card-body">
                <h5 class="card-title"><?= the_sub_field('name')?></h5>
                <p class="card-text"><?= the_sub_field('job')?></p>
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