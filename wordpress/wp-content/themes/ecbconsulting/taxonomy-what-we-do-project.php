



<?php 
get_header()
?>





<?php
$mo = 'what-we-do-project_'. get_queried_object()->term_id;
?>


<section class="what-we-do-1">
      <div class="container"> 
        <?php
        $heading_image = get_field('heading_image',$mo);
        if($heading_image){
        ?>
        <div class="co-img">
            <img class="w-100" src="<?= $heading_image['url'] ?>" alt="<?= $heading_image['alt'] ?>">
                
        </div>
        <?php
        }
        ?>
        <?php
        $background_image = get_field('background_image',$mo);
        $background_image_ready = '';
        if($background_image){
            $img = $background_image['url'];
            $background_image_ready = "background-image: url('$img')";
        }
        ?>
        <div class="co-content" style="<?= $background_image_ready ?>">
          <?= the_field('content',$mo)?>
        </div>
      </div>
    </section>
    <section class="">
      <div class="container">
        <div class="row">
			<?php 
            if ( have_posts() ){
			while ( have_posts() ) {
				the_post();
			?>
    	    <div class="col-lg-4 col-md-6">
				<a class="card mo-glob-card-project mb-4" href="<?= the_permalink()?>">
                <?php
                if(has_post_thumbnail()){
                ?>
				    <img class="card-img-top" src="<?= get_the_post_thumbnail_url() ?>" alt=""/>
                <?php
                }
                ?>
        	      <div class="card-body">
        	        <h5 class="card-title"><?= the_title()?></h5>
        	      </div>
        	      <p class="para-location"><?= the_field('location')?></p>
				</a>
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