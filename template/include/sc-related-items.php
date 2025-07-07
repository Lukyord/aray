<section data-section="related-items">
    <div class="sc-inner sc-inner--bottom-extra sc-inner--top-extra">
        <div class="container">
            <div class="sc-header justify-between">
                <h2 class="sc-ttl size-h1">
                    <?php echo $related_items["title"]; ?>
                </h2>

                <a href="<?php echo $related_items["all"]["link"]; ?>" class="button">
                    <?php echo $related_items["all"]["text"]; ?>
                </a>
            </div>

            <div class="card-container" data-card-layout="slider">
                <div class="swiper auto">
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($related_items["items"] as $item) {
                        ?>
                            <div class="swiper-slide">
                                <?php include("include/el-project-grid-card.php"); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>