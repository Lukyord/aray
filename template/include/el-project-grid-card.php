<div class="card animate fadeIn clickable" data-card="project-grid-card">
    <a href="<?php echo $item["link"]; ?>" class="link-overlay"></a>

    <div class="card-image">
        <?php
        $section_cover = $item["media"][0]["pc"];
        $section_cover_m = $item["media"][0]["mb"];
        include("include/function-group.php");
        ?>
    </div>

    <div class="card-content">
        <div class="block-content-start">
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
        </div>
    </div>
</div>