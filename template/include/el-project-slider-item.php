<div class="project-slider-item">
    <?php
    if (count($item["media"]) > 1) {
    ?>
        <div class="item-media-slider swiper">
            <div class="swiper-wrapper">
                <?php
                foreach ($item["media"] as $media) {
                ?>
                    <div class="swiper-slide">
                        <div class="media <?php if (isset($media["dark-media"])) echo "dark"; ?>">
                            <?php
                            $section_cover = $media["pc"];
                            $section_cover_m = $media["mb"];
                            include("include/function-group.php");
                            ?>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="swiper-nav">
                <div class="media-swiper-button-prev clickable"></div>
                <div class="media-swiper-pagination custom"></div>
                <div class="media-swiper-button-next clickable"></div>
            </div>
        </div>
    <?php } else { ?>
        <div class="item-media">
            <?php
            $section_cover = $item["media"][0]["pc"];
            $section_cover_m = $item["media"][0]["mb"];
            include("include/function-group.php");
            ?>
        </div>
    <?php } ?>


    <div class="block-content-center">
        <div class="block-header">
            <div class="block-ttl">
                <h3 class="size-h2 uppercase c-dark-brown"><?php echo $item["title"]; ?></h3>
            </div>

            <div class="block-subttl">
                <p class="size-tagline uppercase c-brown"><?php echo $item["subtitle"]; ?></p>
                <span class="divider"></span>
                <p class="block-date size-tagline uppercase c-brown"><?php echo $item["date"]; ?></p>
            </div>
        </div>

        <div class="block-desc">
            <p class="size-body"><?php echo $item["description"]; ?></p>
        </div>

        <div class="block-cta">
            <a href="<?php echo $item["link"]; ?>" class="button">
                Explore More
            </a>
        </div>
    </div>
</div>