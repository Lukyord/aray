<section data-section="list-item-template">
    <div class="sc-inner">
        <div class="container">
            <div class="sc-ttl">
                <h2 class="size-h1 uppercase"><?php echo $list_item['title']; ?></h2>
            </div>

            <div class="tab-container">
                <div class="tab-links type">
                    <?php
                    $unique_types = [];

                    if (isset($list_item["all-filter"]) && $list_item["all-filter"] === "true") {
                        $unique_types[] = "all";
                    }

                    foreach ($list_item['items'] as $item) {
                        if (!in_array($item['type'], $unique_types)) {
                            $unique_types[] = $item['type'];
                        }
                    }
                    ?>
                    <div class="tab-links-list">
                        <?php foreach ($unique_types as $index => $type): ?>
                            <div class="tab clickable">
                                <a href="#<?php echo $type; ?>" class="underline-hover active-trigger <?php echo $index === 0 ? 'active' : ''; ?>">
                                    <span class="size-sub uppercase"><?php echo ucfirst($type); ?></span>
                                </a>
                            </div>
                            <span class="divider">/</span>
                        <?php endforeach; ?>
                    </div>

                    <?php
                    if (isset($list_item["view-all"]) && $list_item["view-all"]["link"] !== "") {
                    ?>
                        <div class="view-all">
                            <a href="<?php echo $list_item["view-all"]["link"]; ?>" class="button"><?php echo $list_item["view-all"]["text"]; ?></a>
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <div class="tab-contents">
                    <?php foreach ($unique_types as $index => $type) { ?>
                        <div
                            class="tab-content <?php echo $index === 0 ? 'active' : ''; ?> <?php echo (isset($list_item["enable_view_toggle"]) && $list_item["enable_view_toggle"] === "true") ? 'view-toggle' : ''; ?>"
                            id="<?php echo $type; ?>">
                            <?php if (isset($list_item["enable-view-toggle"]) && $list_item["enable-view-toggle"] === "true") { ?>
                                <div class="tab-container">
                                    <div class="tab-links view-toggle">
                                        <p class="size-sub uppercase c-brown">View By:</p>
                                        <div class="tab clickable">
                                            <a href="#<?php echo $type; ?>-grid-view" data-view="grid" class="underline-hover active-trigger">
                                                <span class="grid-view-icon"></span>
                                            </a>
                                        </div>
                                        <div class="tab clickable">
                                            <a href="#<?php echo $type; ?>-project-view" data-view="project" class="underline-hover active-trigger active">
                                                <span class="project-view-icon"></span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="tab-contents">
                                        <div class="tab-content" id="<?php echo $type; ?>-grid-view">
                                            <div class="grid-container">
                                                <?php foreach ($list_item['items'] as $item) {
                                                    if ($item['type'] === $type || $type === "all") {
                                                        if ($list_item["item-type"] === "project") {
                                                            include("include/el-project-grid-card.php");
                                                        } else if ($list_item["item-type"] === "product") {
                                                            include("include/el-product-grid-card.php");
                                                        }
                                                    }
                                                } ?>
                                            </div>

                                            <div class="load-more">
                                                <a href="javascript:;" class="button">Load More</a>
                                            </div>
                                        </div>
                                        <div class="tab-content <?php echo $index === 0 ? 'active' : ''; ?>" id="<?php echo $type; ?>-project-view">
                                            <div class="project-view">
                                                <div class="project-scroll-wrapper">
                                                    <div class="project-scroll show-sm">
                                                        <?php
                                                        foreach ($list_item['items'] as $item) {
                                                            if ($item['type'] === $type || $type === "all") {
                                                                include("include/el-project-scroll-item.php");
                                                            }
                                                        } ?>
                                                    </div>

                                                    <div class="counter-text">
                                                        <p class="size-sub uppercase">
                                                            <span class="c-light-brown">[&nbsp;&nbsp;</span>
                                                            <span class="current">0</span>/<span class="total">0</span>
                                                            <?php echo $type; ?>
                                                            <?php echo $list_item["counter-text"]; ?>
                                                            <span class="c-light-brown">&nbsp;&nbsp;]</span>
                                                        </p>
                                                    </div>

                                                    <div class="scroll-arrow">
                                                        <i class="ic ic-arrow-down"></i>
                                                    </div>
                                                </div>

                                                <div class="project-slider hidden-device-sm">
                                                    <div class="swiper auto autoplay" data-autoplay-interval="8000">
                                                        <div class="swiper-wrapper">
                                                            <?php
                                                            foreach ($list_item['items'] as $item) {
                                                                if ($item['type'] === $type || $type === "all") {
                                                            ?>
                                                                    <div class="swiper-slide">
                                                                        <?php include("include/el-project-slider-item.php"); ?>
                                                                    </div>
                                                            <?php
                                                                }
                                                            } ?>
                                                        </div>

                                                        <div class="swiper-nav">
                                                            <div class="swiper-button-prev clickable"></div>
                                                            <div class="swiper-pagination custom" data-text="<?php echo $type; ?> <?php echo $list_item["counter-text"]; ?>"></div>
                                                            <div class="swiper-button-next clickable"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="grid-container">
                                    <?php foreach ($list_item['items'] as $item) {
                                        if ($item['type'] === $type || $type === "all") {
                                            if ($list_item["item-type"] === "project") {
                                                include("include/el-project-grid-card.php");
                                            } else if ($list_item["item-type"] === "product") {
                                                include("include/el-product-grid-card.php");
                                            }
                                        }
                                    } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
</section>

<script>
    // get only the first 6 items
    $('.load-more > .button').on('click', function() {
        var originalItems = $('.grid-container .card').slice(0, 12).clone();
        var grid = $('.grid-container');

        grid.append(originalItems);
    });
</script>