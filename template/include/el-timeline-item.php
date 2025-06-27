<div class="timeline-item" id="<?php echo $item['title'] ?>">
    <span class="marker-circle"></span>

    <?php
    if (isset($item['title'])) {
    ?>
        <div class="timeline-ttl">
            <h3 class="size-h2 c-light-brown"><?php echo $item['title'] ?></h3>
        </div>
    <?php
    }
    ?>

    <?php
    if (isset($item['subtitle'])) {
    ?>
        <div class="timeline-subttl">
            <h4 class="size-h3 c-brown"><?php echo $item['subtitle'] ?></h4>
        </div>
    <?php
    }
    ?>

    <?php
    if (isset($item['content'])) {
    ?>
        <div class="entry-content">
            <?php echo $item['content'] ?>
        </div>
    <?php
    }
    ?>

    <?php
    if (isset($item['media'])) {
    ?>
        <div class="timeline-image-wrapper template-<?php echo $item['media']['template'] ?>">
            <?php
            foreach ($item['media']['items'] as $index => $item) {
            ?>
                <div class="media">
                    <div class="media-src">
                        <?php
                        $section_cover = $item["src"];
                        $section_cover_m = $item["src"];
                        include("include/function-group.php");
                        ?>
                    </div>

                    <?php
                    if (isset($item['title'])) {
                    ?>
                        <div class="media-ttl">
                            <h4 class="size-h4"><?php echo $item['title'] ?></h4>
                        </div>
                    <?php
                    }
                    ?>

                    <?php
                    if (isset($item['subtitle'])) {
                    ?>
                        <div class="media-subttl">
                            <p class="size-sub-2"><?php echo $item['subtitle'] ?></p>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
            ?>
        </div>
    <?php
    }
    ?>
</div>