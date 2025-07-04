<section data-section="timeline" class="<?php if (isset($timeline_bg_cream) && $timeline_bg_cream) echo "bg-cream" ?>">
    <div class="sc-billboard full-screen">
        <div class="container">
            <!-- PC Content -->
            <div class="pc-content show-sm">
                <div class="markers">
                    <div class="sc-inner sc-inner--precedes">
                        <div class="sc-header">
                            <div class="block-content-start center-mb">
                                <div class="block-ttl animate fadeIn">
                                    <h2 class="size-pc-h2-mb-h1 uppercase"><?php echo $timeline_title ?></h2>
                                </div>
                            </div>

                            <div class="markers-list">
                                <?php
                                foreach ($timeline as $index => $item) {
                                    include("include/el-timeline-marker.php");
                                }
                                ?>
                            </div>
                        </div>

                        <a href="javascript:;" class="button skip-section show-sm">
                            Skip This Part
                        </a>
                    </div>
                </div>

                <div class="timeline">
                    <?php
                    foreach ($timeline as $index => $item) {
                        include("include/el-timeline-item.php");
                    }
                    ?>
                </div>
            </div>

            <!-- Mobile Content -->
            <div class="mb-content visually-hidden-sm">
                <div class="sc-inner">
                    <div class="sc-header justify-center">
                        <div class="sc-ttl animate fadeIn">
                            <h2 class="size-h1 uppercase"><?php echo $timeline_title ?></h2>
                        </div>
                    </div>


                    <div class="thumbs-slide">
                        <div class="swiper thumbs animate fadeIn">
                            <div class="swiper-wrapper">
                                <?php
                                foreach ($timeline as $index => $item) {
                                ?>
                                    <div class="swiper-slide">
                                        <div class="timeline-thumb clickable <?php if ($timeline_mb_line_marker) echo "line-marker" ?>">
                                            <?php
                                            if (isset($item['title'])) {
                                            ?>
                                                <div class="timeline-ttl">
                                                    <h3 class="size-h2"><?php echo $item['title'] ?></h3>
                                                </div>
                                            <?php
                                            }
                                            ?>

                                            <?php
                                            if (isset($item['subtitle'])) {
                                            ?>
                                                <div class="timeline-subttl">
                                                    <h4 class="size-h3"><?php echo $item['subtitle'] ?></h4>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>

                        <div class="swiper top animate fadeIn">
                            <div class="swiper-wrapper">
                                <?php
                                foreach ($timeline as $index => $item) {
                                ?>
                                    <div class="swiper-slide">
                                        <div class="timeline-slide-content">

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
                                                if (count($item['media']['items']) > 1) {
                                            ?>
                                                    <div class="swiper auto fade no-touch">
                                                        <div class="swiper-wrapper">
                                                            <?php
                                                            foreach ($item['media']['items'] as $media_index => $media_item) {
                                                            ?>
                                                                <div class="swiper-slide">
                                                                    <div class="media">
                                                                        <div class="media-src">
                                                                            <?php
                                                                            $section_cover = $media_item["src"];
                                                                            $section_cover_m = $media_item["src"];
                                                                            include("include/function-group.php");
                                                                            ?>
                                                                        </div>

                                                                        <?php
                                                                        if (isset($media_item['title'])) {
                                                                        ?>
                                                                            <div class="media-ttl">
                                                                                <h4 class="size-h4"><?php echo $media_item['title'] ?></h4>
                                                                            </div>
                                                                        <?php
                                                                        }
                                                                        ?>

                                                                        <?php
                                                                        if (isset($media_item['subtitle'])) {
                                                                        ?>
                                                                            <div class="media-subttl">
                                                                                <p class="size-sub-2"><?php echo $media_item['subtitle'] ?></p>
                                                                            </div>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>

                                                        <div class="swiper-button-prev"></div>
                                                        <div class="swiper-button-next"></div>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="media-single">
                                                        <div class="media-src">
                                                            <?php
                                                            $section_cover = $item['media']['items'][0]["src"];
                                                            $section_cover_m = $item['media']['items'][0]["src"];
                                                            include("include/function-group.php");
                                                            ?>
                                                        </div>

                                                        <?php
                                                        if (isset($item['media']['items'][0]['title'])) {
                                                        ?>
                                                            <div class="media-ttl">
                                                                <h4 class="size-h4"><?php echo $item['media']['items'][0]['title'] ?></h4>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>

                                                        <?php
                                                        if (isset($item['media']['items'][0]['subtitle'])) {
                                                        ?>
                                                            <div class="media-subttl">
                                                                <p class="size-sub-2"><?php echo $item['media']['items'][0]['subtitle'] ?></p>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                            <?php
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>

                        <?php
                        if ($timeline_mb_slide_nav) {
                        ?>
                            <div class="thumb-slide-nav">
                                <div class="thumbs-slide-swiper-button-prev clickable">
                                    <span class="button">PREVIOUS</span>
                                </div>
                                <div class="thumbs-slide-swiper-button-next clickable">
                                    <span class="button">NEXT</span>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>