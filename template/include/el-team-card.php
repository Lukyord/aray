<div class="card animate fadeIn" data-card="team">
    <?php if (isset($card["media"])) { ?>
        <div class="card-media">
            <?php
            $section_cover = $card["media"]["pc"];
            $section_cover_m = $card["media"]["mb"];
            include("include/function-group.php");
            ?>
        </div>
    <?php } ?>

    <div class="card-content">
        <div class="card-ttl">
            <h3 class="size-h3">
                <?php echo $card["name"]; ?>
            </h3>
        </div>

        <div class="card-subttl">
            <p class="size-body"><?php echo $card["position"]; ?></p>
        </div>
    </div>
</div>