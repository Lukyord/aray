<?php
// Get the current type from URL parameter, default to "all" if not set
$current_type = isset($_GET['type']) ? $_GET['type'] : 'all';

$list_item["current-type"] = $current_type;
?>

<section data-section="list-item-template">
    <div class="sc-inner">
        <div class="container">
            <div class="sc-ttl">
                <h2 class="size-h1 uppercase"><?php echo $list_item['title']; ?></h2>
            </div>

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
                            <a href="<?php echo $list_item["category-url"]; ?>?type=<?php echo $type; ?>" class="underline-hover active-trigger <?php echo $type === $list_item["current-type"] ? 'active' : ''; ?>">
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


            <div
                class="<?php echo (isset($list_item["enable_view_toggle"]) && $list_item["enable_view_toggle"] === "true") ? 'view-toggle' : ''; ?>"
                id="<?php echo $list_item["current-type"]; ?>">
                <?php if (isset($list_item["enable-view-toggle"]) && $list_item["enable-view-toggle"] === "true") { ?>
                    <div class="tab-container">
                        <div class="tab-links view-toggle">
                            <p class="size-sub uppercase c-brown">View By:</p>
                            <div class="tab clickable">
                                <a href="#grid-view" data-view="grid" class="underline-hover active-trigger">
                                    <span class="grid-view-icon"></span>
                                </a>
                            </div>
                            <div class="tab clickable">
                                <a href="#project-view" data-view="project" class="underline-hover active-trigger active">
                                    <span class="project-view-icon"></span>
                                </a>
                            </div>
                        </div>

                        <div class="tab-contents">
                            <div class="tab-content" id="grid-view">
                                <div class="grid-container">
                                    <?php foreach ($list_item['items'] as $item) {
                                        if ($item['type'] === $list_item["current-type"] || $list_item["current-type"] === "all") {
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
                            <div class="tab-content" id="project-view">
                                <div class="project-view">
                                    <div class="project-scroll-wrapper">
                                        <div class="project-scroll show-sm">
                                            <?php
                                            foreach ($list_item['items'] as $item) {
                                                if ($item['type'] === $list_item["current-type"] || $list_item["current-type"] === "all") {
                                                    include("include/el-project-scroll-item.php");
                                                }
                                            } ?>
                                        </div>

                                        <div class="counter-text c-dark-brown">
                                            <p class="size-sub uppercase">
                                                <span class="c-light-brown">[&nbsp;&nbsp;</span>
                                                <span class="current">0</span>/<span class="total">0</span>
                                                <?php echo $list_item["current-type"]; ?>
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
                                                    if ($item['type'] === $list_item["current-type"] || $list_item["current-type"] === "all") {
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
                                                <div class="swiper-pagination custom" data-text="<?php echo $list_item["current-type"]; ?> <?php echo $list_item["counter-text"]; ?>"></div>
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
                            if ($item['type'] === $list_item["current-type"] || $list_item["current-type"] === "all") {
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