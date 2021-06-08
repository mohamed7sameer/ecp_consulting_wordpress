<?php
/*
Template Name: Contact

*/
?>




<?php
get_header()
?>











<?php
$contact_header_background_image= get_field('contact_header_background_image');
$contact_header_background_image_ready = '';
if($contact_header_background_image){
  $img = $contact_header_background_image['url'];
  $contact_header_background_image_ready = ",url('$img')";
}
?>

<section class="mo-com-2" style="
      background:
        linear-gradient(
          rgba(0, 0, 0, 0.4),
          rgba(0, 0, 0, 0.4)
        )<?= $contact_header_background_image_ready ?>;">
  <div class="container">
    <h3 class="co-heading"><?= the_field('contact_header_title') ?></h3>
    <p class="para"><?= the_field('contact_header_sub_title') ?></p><a class="co-link-arrow" href="#"><i class="fas fa-chevron-down"></i></a>
  </div>
</section>


<?php
$contact_offices_background_image= get_field('contact_offices_background_image');
$contact_offices_background_image_ready = '';
if($contact_offices_background_image){
  $img = $contact_offices_background_image['url'];
  $contact_offices_background_image_ready = ",url('$img')";
}
?>
<section class="mo-com-3" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7))<?= $contact_offices_background_image_ready ?>;">
  <div class="container">
    <h3 class="co-heading"><?= the_field('contact_offices_title') ?></h3>
    <p class="para"><?= the_field('contact_offices_sub_title')?></p>
  </div>
</section>
<!-- mo-reverse -->
<?php 
if(have_rows('add_offices','option')){
  $mo_reverse = ' mo-reverse ';
  while(have_rows('add_offices','option')){
    the_row();
    if($mo_reverse == ''){
      $mo_reverse = ' mo-reverse ';
    }else{
      $mo_reverse = '';
    }

?>
<section class="mo-com-4 <?= $mo_reverse ?>">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h4 class="co-heading"><?= the_sub_field('office_name') ?></h4>
        <div class="co-map">
          <?php
          $link_google_map = get_sub_field('link_google_map');
          if($link_google_map){
          ?>
          <iframe class="w-100" src="<?= $link_google_map ?>" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          <?php
          }  
          ?>
        </div>
      </div>
      <div class="col-md-5">
        <div class="co-mian-info">
          <div class="co-info">
            <div class="co-ico"><i class="far fa-map"></i></div>
            <div class="co-content">
              <p class="para"><b><?= the_sub_field('office_name') ?>:</b><br><?= the_sub_field('address') ?></p>
            </div>
          </div>
          <?php
          $email = get_sub_field('email');
          if($email){
          ?>
          <div class="co-info">
            <div class="co-ico"><i class="far fa-envelope"></i></div>
            <div class="co-content">
              <p class="para"><?= $email ?></p>
            </div>
          </div>
          <?php
          }
          ?>

          <?php
          $phone = get_sub_field('phone');
          if($phone){
          ?>
          <div class="co-info">
            <div class="co-ico"><i class="fas fa-phone"></i></div>
            <div class="co-content">
              <p class="para"><?= $phone ?></p>
            </div>
          </div>
          <?php
          }
          ?>

          <?php
          $fax = get_sub_field('fax');
          if($fax){
          ?>
          <div class="co-info">
            <div class="co-ico"><i class="fas fa-fax"></i></div>
            <div class="co-content">
              <p class="para"><?= $fax ?></p>
            </div>
          </div>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
  }
}
?>


<?php
$contact_form_background_image= get_field('contact_form_background_image');
$contact_form_background_image_ready = '';
if($contact_form_background_image){
  $img = $contact_form_background_image['url'];
  $contact_form_background_image_ready = ",url('$img')";
}
?>
<section class="mo-com-3" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7))<?= $contact_form_background_image_ready ?>;">
  <div class="container">
    <h3 class="co-heading"><?= the_field('contact_form_title') ?></h3>
    <p class="para"><?= the_field('contact_form_sub_title') ?></p>
  </div>
</section>
<section class="co-main-contact-last">
  <div class="container">
    <?= the_field('contact_form_content')?>
  </div>
</section>



















<?php
get_footer()
?>