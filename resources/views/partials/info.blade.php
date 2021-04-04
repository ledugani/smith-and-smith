<!-- there's probably a way to define itemscope from a parent .blade.php file -->
<div class="container pt-5 info" itemscope itemtype="https://schema.org/LegalService">
    <h3 
        class="text-center" 
        itemprop="additionalType" 
        itemscope 
        itemtype="https://schema.org/Thing"
    >
        Personal Injury Lawyers
    </h3>

    <div 
        class="row p-5"
        itemscope 
        itemtype="https://schema.org/Thing"
    >
        <div class="col">
            <h5 itemprop="additionalType">Slip & Fall Attorneys</h5>
            <p>
                <small itemprop="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a sollicitudin nibh, et pellentesque lorem. Nam sollicitudin, elit non porta fringilla, magna mi eleifend lacus, in sagittis mauris nunc ut nisi. Donec facilis mollis tortor non felis suscipit dignissim. Morbi convallis leo est, vel interdum dolor placerat porttitor. Sed suscipit quis lorem quis elementum. Ut nulla ex, egestas ut tincidunt nec, cursus in mauris.
                </small>
            </p>
            <div class="text-center">
                <button 
                    class="btn btn-primary btn-lg text-uppercase info-btn" 
                    href="#" 
                    role="button"
                >
                    <small>Contact Us</small>
                </button>
            </div>
        </div>
        
        <div class="col text-center">
            <img 
                src="<?= get_template_directory_uri(); ?>/assets/images/caution-wet-floor.png"
                class="info-img"
                alt="wet walkway caution wet floor sign"
            >
        </div>
    </div>
</div>