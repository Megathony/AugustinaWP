<header class="banner">
  <div class="container">
  	<img class="fond" src="@asset('images/wallpaper.jpg')">
    <div class="blue">
      <a href="{{ home_url('/') }}">
        <img class="icon" src="@asset('images/logoPerso.svg')" alt="{{ get_bloginfo('name', 'display') }}">
      </a>
      <img class="anglehg" src="@asset('images/circleAngle.svg')">
      <img class="anglehd" src="@asset('images/circleAngle.svg')">
      <img class="anglebg" src="@asset('images/circleAngle.svg')">
      <img class="anglebd" src="@asset('images/circleAngle.svg')">
    </div>
  </div>
  <nav class="nav-primary">
    <a class="nav-option" href="{{ home_url('/') }}">
      <p>Acceuil</p>
    </a>
    <a class="nav-option" href="{{ home_url('/video/') }}">
      <p>Vidéo</p>
    </a>
    <a class="nav-option" href="{{ home_url('/program/') }}">
      <p>Programmation</p>
    </a>
    <a class="nav-option" href="{{ home_url('/graph/') }}">
      <p>Graphisme</p>
    </a>
    <a class="nav-option" href="{{ home_url('/contactez-moi') }}">
      <p>Contact</p>
    </a>
  </nav>
</header>
