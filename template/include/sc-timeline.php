<section data-section="timeline">
    <div class="sc-billboard full-screen">
        <div class="container">
            <div class="content">
                <div class="markers">
                    <div class="sc-inner">
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
        </div>
    </div>
</section>