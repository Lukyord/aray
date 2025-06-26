<div class="icon-list">
    <?php foreach ($icon_list as $item) { ?>
        <div class="icon-item">
            <div class="icon-illus-<?php echo $item["icon"]; ?> animate fadeIn">
            </div>
            <div class="icon-ttl animate fadeIn">
                <h3 class="size-h4"><?php echo $item["title"]; ?></h3>
            </div>
            <div class="icon-desc animate fadeIn">
                <p class="size-sub-2"><?php echo $item["description"]; ?></p>
            </div>
        </div>
    <?php } ?>
</div>