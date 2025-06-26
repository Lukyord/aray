<section data-section="full-screen-slide" data-bg-color="dark">
    <div class="sc-billboard full-screen">
        <div class="sc-ttl">
            <h2 class="size-tagline uppercase c-white"><?php echo $full_screen_slides_title; ?></h2>
        </div>
        <div class="swiper auto fade autoplay" data-autoplay-interval="4000">
            <div class="swiper-wrapper">
                <?php foreach ($full_screen_slides as $slide) : ?>
                    <div class="swiper-slide">
                        <a href="<?php echo $root; ?>project-single.php" class="link-overlay"></a>

                        <div class="slide-image">
                            <?php
                            $section_cover = $slide["image"]["pc"];
                            $section_cover_m = $slide["image"]["mb"];
                            include("include/function-group.php");
                            ?>
                        </div>

                        <div class="block-content-center">
                            <div class="block-header">
                                <a href="<?php echo $root; ?>project-single.php" class="block-ttl clickable">
                                    <h3 class="size-h1 uppercase c-white"><?php echo $slide["title"]; ?></h3>
                                </a>

                                <div class="block-subttl">
                                    <p class="block-location size-tagline uppercase"><?php echo $slide["location"]; ?></p>
                                    <span class="divider"></span>
                                    <p class="block-date size-tagline uppercase"><?php echo $slide["date"]; ?></p>
                                </div>
                            </div>

                            <div class="block-desc">
                                <p class="size-body"><?php echo $slide["description"]; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="swiper-nav bracket">
                <div class="swiper-button-prev clickable"></div>
                <div class="swiper-pagination custom"></div>
                <div class="swiper-button-next clickable"></div>
            </div>
        </div>
    </div>
</section>