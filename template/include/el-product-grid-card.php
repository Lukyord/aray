<div class="card" data-card="product-grid-card">
    <div class="card-container animate fadeIn" data-card-layout="slider">
        <div class="swiper auto">
            <div class="swiper-wrapper">
                <?php
                foreach ($item["media"] as $media) {
                ?>
                    <div class="swiper-slide">
                        <div class="media">
                            <?php
                            $section_cover = $media["pc"];
                            $section_cover_m = $media["mb"];
                            include("include/function-group.php");
                            ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="block-content-start">
        <div class="block-header">
            <a class="block-ttl animate fadeIn clickable" href="<?php echo $item["link"]; ?>">
                <h3 class="size-h2 uppercase c-brown"><?php echo $item["title"]; ?></h3>
            </a>

            <div class="block-subttl animate fadeIn">
                <p class="size-tagline uppercase c-brown"><?php echo $item["subtitle"]; ?></p>
                <span class="divider"></span>
                <p class="block-date size-tagline uppercase c-brown"><?php echo $item["date"]; ?></p>
            </div>
        </div>

        <div class="block-desc animate fadeIn">
            <p class="size-body"><?php echo $item["description"]; ?></p>
        </div>
    </div>
</div>