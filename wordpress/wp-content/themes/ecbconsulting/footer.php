<footer>
      <div class="container"> 
        <div class="row">
          <div class="col-sm-6">
             <div class="co-left">
                <?php 
                   if(is_active_sidebar('footer-col-1')){
                       dynamic_sidebar('footer-col-1');
                   }
                ?>  
            </div>
            
          </div>
          <div class="col-sm-6">
            <div class="co-right">
                <?php 
                   if(is_active_sidebar('footer-col-2')){
                       dynamic_sidebar('footer-col-2');
                   }
                ?>  
            </div>
          </div>
        </div>
        <p class="co-main-bottom">
          <a href="<?= the_field('add_made_by_link','option') ?>"><?= the_field('add_made_by_text','option') ?></a>
        </p>
      </div>
    </footer>
    <?php
        wp_footer()
    ?>
  </body>
</html>