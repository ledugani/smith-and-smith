<nav class="navbar navbar-expand-md navbar-dark bg-dark container">
  <div class="row">
    <div class="col-sm-12">
      <img 
        src="<?= get_template_directory_uri(); ?>/assets/images/s&s_logo_white.png" 
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

    <div class="col-sm-12">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu($primarymenu) !!}
      @endif
    </div>
    
    <div class="col-sm-12">
      <span style="color: white">Copyright &copy;2021 Whitehardt, Inc.</span>
    </div>
  </div>
</nav>
