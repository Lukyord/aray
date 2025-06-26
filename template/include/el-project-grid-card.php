<div class="card animate fadeIn" data-card="project-grid-card">
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
                    <h3 class="size-h1 uppercase"><?php echo $item["title"]; ?></h3>
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
        </div>
    </div>
</div>