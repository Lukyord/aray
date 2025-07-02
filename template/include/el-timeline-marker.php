<?php
$item_id = trim(preg_replace('/[^a-z0-9]+/', '-', strtolower($item['title'])), '-');
?>

<div
    data-marker="<?php echo $item_id ?>"
    class="timeline-marker animate fadeIn clickable <?php echo $index == 0 ? 'active' : '' ?>">
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