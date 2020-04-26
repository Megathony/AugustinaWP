<header class="banner">
  <div class="container">
  	<img class="fond" src="<?= App\asset_path('images/wallpaper.jpg'); ?>">
    <div class="blue">
      <a href="<?php echo e(home_url('/')); ?>">
        <img class="icon" src="<?= App\asset_path('images/logoPerso.svg'); ?>" alt="<?php echo e(get_bloginfo('name', 'display')); ?>">
      </a>
      <img class="anglehg" src="<?= App\asset_path('images/circleAngle.svg'); ?>">
      <img class="anglehd" src="<?= App\asset_path('images/circleAngle.svg'); ?>">
      <img class="anglebg" src="<?= App\asset_path('images/circleAngle.svg'); ?>">
      <img class="anglebd" src="<?= App\asset_path('images/circleAngle.svg'); ?>">
    </div>
  </div>
  <nav class="nav-primary">
    <a class="nav-option" href="<?php echo e(home_url('/')); ?>">
      <p>Acceuil</p>
    </a>
    <a class="nav-option" href="<?php echo e(home_url('/video/')); ?>">
      <p>Vidéo</p>
    </a>
    <a class="nav-option" href="<?php echo e(home_url('/program/')); ?>">
      <p>Programmation</p>
    </a>
    <a class="nav-option" href="<?php echo e(home_url('/graph/')); ?>">
      <p>Graphisme</p>
    </a>
    <a class="nav-option" href="<?php echo e(home_url('/contactez-moi')); ?>">
      <p>Contact</p>
    </a>
  </nav>
</header>
