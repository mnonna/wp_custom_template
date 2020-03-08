<?php get_header();?>
    <?php
    echo do_shortcode('[smartslider3 slider=2]');
    ?>

    <div class="offer-pricing-container">
      <p class="offer-pricing-title" id="offer-title">Poznaj naszą ofertę</p>
      <div class="offer-pricing-wrapper" id="offer">
        <div class="offer-card" id="offer1"><p><h2>Serwis sprzętu IT</h2></p>
            <span>
                Prowadzimy usługi serwisu sprzętu IT. Serwisujemy laptopy, komputery PC, monitory.
            </span>
            <div class="offer-check-more">
                <a href="<?php echo get_home_url(); ?>/oferta"><button>Więcej...</button></a>
            </div>
            <div class="offer-price"><div class="offer-price-span"><span>Cena: W zależności od wady sprzętowej</span></div></div>
        </div>
        
        <div class="offer-card" id="offer2"><p><h2>Projektowanie stron internetowych</h2></p>
            <span>
                Nasi programiści chętnie zajmą się napisaniem strony wizytówki, serwisu internetowego czy landing page'y.
                Napiszemy także bloga oraz sklep internetowy. 
            </span>
            <div class="offer-check-more">
                <a href="<?php echo get_home_url(); ?>/oferta"><button>Więcej...</button></a>
            </div>
            <div class="offer-price"><div class="offer-price-span"><span>Cena minimalna: 800zł</span></div></div>
        </div>
        <div class="offer-card" id="offer3"><p><h2>Spersonalizowane aplikacje desktopowe</h2></p>
            <span>
                Napiszemy dla Ciebie aplikację okienkową. Ty decydujesz za co dany program ma być odpowiedzialny.
            </span>
            <div class="offer-check-more">
                <a href="<?php echo get_home_url(); ?>/oferta"><button>Więcej...</button></a>
            </div>
            <div class="offer-price"><div class="offer-price-span"><span>Cena minimalna: 500zł</span></div></div>
        </div>
      </div>
    </div>
<?php get_footer();?>