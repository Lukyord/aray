<section data-section="hero-banner" data-bg-color="dark">
    <div class="sc-billboard full-screen">
        <div class="banner-media">
            <?php
            $section_cover = $banner["media"]["pc"];
            $section_cover_m = $banner["media"]["mb"];
            include("include/function-group.php");
            ?>
        </div>

        <div class="block-content-center">
            <div class="block-header animate fadeInUp">
                <?php if (isset($banner["title"])) { ?>
                    <div class="block-ttl">
                        <h1 class="size-h1 uppercase"><?php echo $banner["title"]; ?></h1>
                    </div>
                <?php } ?>

                <?php if (isset($banner["subtitle"]) && isset($banner["date"])) { ?>
                    <div class="block-subttl">
                        <p class="size-tagline uppercase"><?php echo $banner["subtitle"]; ?></p>
                        <span class="divider"></span>
                        <p class="block-date size-tagline uppercase"><?php echo $banner["date"]; ?></p>
                    </div>
                <?php } ?>
            </div>

            <?php if (isset($banner["description"])) { ?>
                <div class="block-desc animate fadeInUp">
                    <p class="size-body"><?php echo $banner["description"]; ?></p>
                </div>
            <?php } ?>
        </div>

        <div class="scroll-arrow show-sm">
            <i class="ic ic-arrow-down"></i>
        </div>
    </div>
</section>