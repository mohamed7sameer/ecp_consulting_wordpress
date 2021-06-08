<?php 
get_header()
?>





<section class="co-main-project">
    <div class="container">
    <h2 class="co-main-title"><?= the_title()?> - <?= the_field('location')?></h2>
    <div class="row">
        <div class="col-lg-7">
        <div class="co-carousel-project">
            <?php
            $images_slider = get_field('images_slider');
            if($images_slider){
                foreach($images_slider as $img){
            ?>
            <div class="co-img"><img class="w-100" src="<?= $img['url']?>" alt="<?= $img['alt'] ?>"></div>
            <?php
                }
            }
            ?>
        </div>
        </div>
        <div class="col-lg-5">
        <div class="co-right">
            <div class="co-content">
            <h4 class="co-title">client</h4>
            <div class="co-text"><p><?= the_field('client') ?></p></div>
            </div>
            <div class="co-content">
            <h4 class="co-title">Services</h4>
            <div class="co-text">
                <ul>
                    <?php
                        $terms = get_the_terms(get_the_ID(),'what-we-do-project');
                        if($terms){
                            foreach($terms as $term){
                    ?>
                    <li><?= $term->name ?></li>
                    <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="co-content">
        <h4 class="co-title">Project Description</h4>
        <div class="co-text">
    <ul>
        <?php
        
        if(have_rows('project_description')){
            while(have_rows('project_description')){
                the_row();
        ?>
        <li><?= the_sub_field('add_project_description') ?></li>
        <?php
            }
        }
        ?>
    </ul>
    </div>
            </div>
        </div>
        </div>
    </div>
    <div class="text-center"><a class="btn btn-danger" href="javascript:history.back()">Go Back</a></div>
    </div>
</section>








<?php 
get_footer()
?>