

<?php 
get_header()
?>






	
	
    
    
    <h3 class="co-heading main-heading text-center my-5"><?= single_cat_title() ?></h3>

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