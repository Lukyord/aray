<div class="project-scroll-item">
    <div class="item-media">
        <?php
        $section_cover = $item["media"][0]["pc"];
        $section_cover_m = $item["media"][0]["mb"];
        include("include/function-group.php");
        ?>
    </div>

    <div class="block-content-start">
        <div class="block-header">
            <div class="block-ttl">
                <h3 class="size-h2 uppercase c-brown"><?php echo $item["title"]; ?></h3>
            </div>

            <div class="block-subttl">
                <p class="block-location size-tagline uppercase c-brown"><?php echo $item["location"]; ?></p>
                <span class="divider"></span>
                <p class="block-date size-tagline uppercase c-brown"><?php echo $item["date"]; ?></p>
            </div>
        </div>

        <div class="block-desc">
            <p class="size-body"><?php echo $item["description"]; ?></p>
        </div>

        <div class="block-cta">
            <a href="<?php echo $root; ?>project-single.php" class="button">
                Explore More
            </a>
        </div>
    </div>
</div>