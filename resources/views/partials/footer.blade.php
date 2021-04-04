<footer class="navbar navbar-expand-md navbar-dark bg-dark" id="footer-nav">
  <div class="row" id="footer-container">
    <div class="col-sm-12 text-center">
      <img 
        src="<?= get_template_directory_uri(); ?>/assets/images/s&s_logo_white.png" 
        height="34" 
        alt="Smith and Smith Logo"
      >
    </div>

    <div class="col-sm-12">
      <!-- @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu($primarymenu) !!}
      @endif -->
      <ul class="navbar-nav justify-content-center" id="footer-li">
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