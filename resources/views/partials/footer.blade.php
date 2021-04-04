<footer class="navbar navbar-expand-md navbar-dark bg-dark p-5" id="footer-nav">
  <div class="row">
    <div class="col-sm-12 text-center pt-3">
      <img 
        src="<?= get_template_directory_uri(); ?>/assets/images/s&s_logo_white.png" 
        height="34" 
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

    <div class="col-sm-12 pb-3">
      <!-- @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu($primarymenu) !!}
      @endif -->
      <ul class="navbar-nav justify-content-center">
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
    
    <div class="col-sm-12 text-center">
      <span style="color: white">
        <small>
          Copyright &copy;2021 Whitehardt, Inc.
        </small>
      </span>
    </div>
  </div>
</footer>