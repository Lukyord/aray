<section data-section="media-slider" data-bg-color="dark">
    <?php if (isset($media_slider_ttl)) { ?>
        <div class="sc-ttl">
            <h2 class="size-tagline c-white">
                <?php echo $media_slider_ttl; ?>
            </h2>
        </div>
    <?php } ?>

    <div class="swiper auto fade autoplay" data-autoplay-interval="4000">
        <div class="swiper-wrapper">
            <?php
            foreach ($media_slider as $media) {
            ?>
                <div class="swiper-slide">
                    <div class="media">
                        <?php
                        $section_cover = $media["image"]["pc"];
                        $section_cover_m = $media["image"]["mb"];
                        include("include/function-group.php");
                        ?>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="swiper-nav">
            <div class="swiper-button-prev clickable"></div>
            <div class="swiper-pagination custom"></div>
            <div class="swiper-button-next clickable"></div>
        </div>
    </div>
</section>