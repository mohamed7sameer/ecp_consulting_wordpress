<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?= bloginfo('charset')?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?= bloginfo('name')?>
    </title>
    <?php
        wp_head()
        
    ?>
  </head>
  <body> 
    <nav class="navbar navbar-expand-lg navbar-light" id="top-nav">
      <div class="container">
        <?php
        $main_nav_icon = get_field('main_nav_icon','option');
        if($main_nav_icon){
        ?>
        <a class="navbar-brand" href="<?= home_url() ?>">
          <img class="w-100" src="<?= $main_nav_icon['url'] ?>" alt="<?= $main_nav_icon['title'] ?>"/>
        </a>
        <?php
        }
        ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?= get_menu() ?>
          <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= get_template_directory_uri() ?>/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= get_template_directory_uri() ?>/aboutus.html">About Us</a></li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               What We Do  </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?= get_template_directory_uri() ?>/whatwedo/project_management.html">Project Management</a></li>
                <li><a class="dropdown-item" href="<?= get_template_directory_uri() ?>/whatwedo/design_services.html">Design Services</a></li>
                <li><a class="dropdown-item" href="<?= get_template_directory_uri() ?>/whatwedo/site_supervision.html">Site Supervision</a></li>
                <li><a class="dropdown-item" href="<?= get_template_directory_uri() ?>/whatwedo/value_engineering.html">Value Engineering</a></li>
                <li><a class="dropdown-item" href="<?= get_template_directory_uri() ?>/whatwedo/leed_consultancy.html">LEED Consultancy</a></li>
                <li><a class="dropdown-item" href="<?= get_template_directory_uri() ?>/whatwedo/real_estate_appraisal.html">Real-Estate Appraisal</a></li>
                <li><a class="dropdown-item" href="<?= get_template_directory_uri() ?>/whatwedo/feasibility_studies.html">Feasibility Studies</a></li>
                <li><a class="dropdown-item" href="<?= get_template_directory_uri() ?>/whatwedo/client_representation.html">Client Representation</a></li>
                <li><a class="dropdown-item" href="<?= get_template_directory_uri() ?>/whatwedo/fire_engineering.html">Fire Engineering</a></li>
                <li><a class="dropdown-item" href="<?= get_template_directory_uri() ?>/whatwedo/facade_engineering.html">Facade Engineering</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?= get_template_directory_uri() ?>/clients.html">CLients</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= get_template_directory_uri() ?>/portfolio.html">Portfolio</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= get_template_directory_uri() ?>/ourteam.html">Our Team</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= get_template_directory_uri() ?>/career.html">Careers</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= get_template_directory_uri() ?>/contact.html">Contact</a></li>
          </ul> -->
        </div>
      </div>
    </nav>