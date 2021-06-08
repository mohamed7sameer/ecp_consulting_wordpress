<?php
/*
Template Name: Clients

*/
?>




<?php
get_header()
?>












<section class="cl-clients">
      <div class="container"> 
        <div class="co-main">
          <?php
            $image_clients = get_field('image_clients');
            if($image_clients){
              foreach($image_clients as $image_client){
          ?>
            <div class="co-img"><img class="h-100" src="<?= $image_client['url'] ?>" alt="<?= $image_client['alt'] ?>"></div>
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