<?php
/*
Template Name: Careers

*/
?>




<?php
get_header()
?>
















<?php 
$career_header_background_image = get_field('career_header_background_image');
$career_header_background_imageReady = '';
if($career_header_background_image){
  $career_header_background_imageReady = $career_header_background_image['url'];
  $career_header_background_imageReady = ",url('$career_header_background_imageReady')";
}
?>

<section class="mo-com-2" style="
      background:
        linear-gradient(
          rgba(0, 0, 0, 0.4),
          rgba(0, 0, 0, 0.4)
        )<?= $career_header_background_imageReady ?>
        ">
  <div class="container">
    <h3 class="co-heading"><?= the_field('career_header_title')?></h3>
    <p class="para"><?= the_field('career_header_sub_title')?></p><a class="co-link-arrow" href="#"><i class="fas fa-chevron-down"></i></a>
  </div>
</section>
<?php 
$carrer_content_background_image = get_field('carrer_content_background_image');
$carrer_content_background_imageReady = '';
if($carrer_content_background_image){
  $carrer_content_background_imageReady = $carrer_content_background_image['url'];
  $carrer_content_background_imageReady = "background-image:url('$carrer_content_background_imageReady');";
}
?>
<section class="co-career-2" style="<?= $carrer_content_background_imageReady ?>">
  <div class="container">
    <?= the_field('carrer_content_add_content')?>
  </div>
</section>














<?php
get_footer()
?>