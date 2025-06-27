<div
    data-marker="<?php echo $item['title'] ?>"
    class="timeline-marker animate fadeIn <?php echo $index == 0 ? 'active' : '' ?>">
    <p class="text-wrapper">
        <?php
        if (isset($item['title'])) {
        ?>
            <span class="title"><?php echo $item['title'] ?></span>
        <?php
        }
        ?>

        <?php
        if (isset($item['subtitle'])) {
        ?>
            <span class="subtitle"><?php echo $item['subtitle'] ?></span>
        <?php
        }
        ?>
    </p>
</div>