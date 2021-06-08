<?php
/*
Template Name: Portfolio

*/
?>




<?php
get_header()
?>










<ul class="nav nav-portfolio">
      <li class="nav-item active">
        <button class="nav-link" href="#" data-filter="*">All</button>
      </li>
    <?php 
    $navigations = get_categories(array(
      'taxonomy' => 'services-project'
    ));
    if($navigations){
      foreach($navigations as $navigation){
            ?>
      <li class="nav-item">
        <button class="nav-link" href="#" data-filter=".filter-<?= $navigation->slug ?>"><?= $navigation->name ?></button>
      </li>
    <?php
      }
    }
    ?>
    </ul>
    <section class="portfolio-co-cards">
      <div class="container">
        <div class="row co-grid">
          <?php
          $projects = new WP_Query(array(
            'post_type' => 'project',
            'orderby' => 'date', // default
            'post_per_page' => -1, // default
            'order' => 'asc' // default        
          ));
          if($projects->have_posts()){
            while($projects->have_posts()){
              $projects->the_post();
              $terms = get_the_terms(get_the_ID(),'services-project');
              $class_terms = '';
              if($terms){
                foreach($terms as $term){
                  $class_terms .= ' filter-'.$term->slug;
                }
              }
              

          ?>
          <div class="col-lg-4 col-md-6 filter-item <?= $class_terms ?>">
            <a class="card mo-glob-card-project mb-4" href="<?= the_permalink() ?>">
              <img class="card-img-top" src="<?= the_post_thumbnail_url()?>" alt="..."/>
              <div class="card-body">
                <h5 class="card-title"><?= the_title() ?></h5>
              </div>
              <p class="para-location"><?= the_field('location')?></p>
            </a>
          </div>
          <?php
            }
          }
          wp_reset_postdata();
          ?>
          
          
          

        </div>
      </div>
    </section>












<?php
get_footer()
?>