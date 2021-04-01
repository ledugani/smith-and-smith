<header class="banner">
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
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
    </div>
  </nav>
</header>