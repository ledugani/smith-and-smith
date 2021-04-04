<!-- there's probably a way to define itemscope from a parent .blade.php file -->
<div 
    id="info-section"
    class="container info" 
    itemscope 
    itemtype="https://schema.org/LegalService"
>
    <div class="row" id="info-title-container">
        <h2
            id="info-title"
            itemscope
            itemtype="https://schema.org/Thing"
        >
            <span itemprop="additionalType">Personal Injury Lawyers</span>
        </h2>
    </div>

    <div 
        class="row"
        itemscope
        itemtype="https://schema.org/Thing"
    >
        <div class="col-md-6">
            <h5 itemprop="additionalType">Slip & Fall Attorneys</h5>

            <p class="info-description">
                <small itemprop="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a sollicitudin nibh, et pellentesque lorem. Nam sollicitudin, elit non porta fringilla, magna mi eleifend lacus, in sagittis mauris nunc ut nisi. Donec facilis mollis tortor non felis suscipit dignissim. Morbi convallis leo est, vel interdum dolor placerat porttitor. Sed suscipit quis lorem quis elementum. Ut nulla ex, egestas ut tincidunt nec, cursus in mauris.
                </small>
            </p>

            <button 
                class="btn btn-primary btn-lg text-uppercase info-btn" 
                href="#" 
                role="button"
            >
                <small>Contact Us</small>
            </button>
        </div>

        <div class="col-md-6 text-center">
            <img
                src="<?= get_template_directory_uri(); ?>/assets/images/caution-wet-floor.png"
                class="info-img"
                alt="wet walkway caution wet floor sign"
            >
        </div>
    </div>
</div>