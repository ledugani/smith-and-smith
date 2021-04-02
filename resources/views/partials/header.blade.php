<header class="banner">
  <nav class="navbar navbar-expand-md navbar-light bg-light container">
    <div class="row">
      <div class="col-sm-4">
        <img 
          src="<?= get_template_directory_uri(); ?>/assets/images/s&s_logo.png" 
          height="30" 
          alt=""
        >
        <button 
          class="navbar-toggler" 
          type="button" 
          data-toggle="collapse" 
          data-target="#navbar-primary" 
          aria-controls="navbar-primary" 
          aria-expanded="false" 
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon">
            <i class="fa fa-bars"></i>
          </span>
        </button>
      </div>
      <div class="col-sm-8">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu($primarymenu) !!}
        @endif
      </div>
    </div>
  </nav>
</header>

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img 
      src="<?= get_template_directory_uri(); ?>/assets/images/s&s_logo.png" 
      height="34" 
      alt=""
    >
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Our Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Practice Areas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Results</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav> -->