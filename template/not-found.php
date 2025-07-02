<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="not-found-main">
    <section data-section="not-found" data-bg-color="dark">
        <div class="cover">
            <?php
            $section_cover = "./assets/media/design/not-found-bg.jpg";
            $section_cover_m = "./assets/media/design/not-found-bg-mb.jpg";
            include("include/function-group.php");
            ?>
        </div>
        <div class="container">
            <div class="block-content-start center-mb">
                <div class="block-ttl animate fadeIn">
                    <h1 class="size-h1 uppercase">Sorry, NO RESULTS FOUND</h1>
                </div>

                <div class="block-desc animate fadeIn">
                    <p class="size-body">
                        The page you requested could not be found. Try refining your search, or contact us other channel.
                    </p>
                </div>

                <ul class="social animate fadeIn">
                    <li><a href="#facebook"><i class="ic ic-facebook"></i></a></li>
                    <li><a href="#instagram"><i class="ic ic-instagram"></i></a></li>
                    <li><a href="#linkedin"><i class="ic ic-twitter"></i></a></li>
                </ul>

                <a href="<?php echo $root; ?>index.php" class="button animate fadeIn">Homepage</a>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>