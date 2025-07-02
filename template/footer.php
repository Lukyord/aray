<footer id="footer" class="<?php if ($page == 'not-found.php') {
                                echo 'hidden';
                            } ?>">
    <div class="footer-nav">
        <div class="footer-address">
            <div class="footer-logo">
                <a class="brand clickable" href="<?php echo $root; ?>index.php">
                    <img class="logo" src="<?php echo $root; ?>assets/media/design/logo.svg" alt="">
                </a>
            </div>

            <address>
                Aray Builds Co., Ltd.
                <br>Ratchapruek-Rattanathibet
                <br>8/10-11 Moo 5 Tb. Tha It, Nonthaburi,
                <br>Pak Kret District, Nonthaburi 11120
            </address>
        </div>

        <div class="footer-links">
            <ul class="footer-links-list">
                <li>
                    <h3 class="size-sub">ARAY</h3>
                </li>
                <li>
                    <a href="<?php echo $root; ?>about.php" class="clickable">About</a>
                </li>
                <li>
                    <a href="<?php echo $root; ?>service.php" class="clickable">Services</a>
                </li>
                <li>
                    <a href="<?php echo $root; ?>workshop.php" class="clickable">Workshop</a>
                </li>
                <li>
                    <a href="<?php echo $root; ?>contact.php" class="clickable">Contact</a>
                </li>
            </ul>

            <ul class="footer-links-list">
                <li>
                    <h3 class="size-sub">Projects</h3>
                </li>
                <li>
                    <a href="<?php echo $root; ?>project.php" class="clickable">All Projects</a>
                </li>
                <li>
                    <a href="<?php echo $root; ?>project.php" class="clickable">Residential</a>
                </li>
                <li>
                    <a href="<?php echo $root; ?>project.php" class="clickable">Commercial</a>
                </li>
            </ul>

            <ul class="footer-links-list">
                <li>
                    <h3 class="size-sub">Products</h3>
                </li>
                <li>
                    <a href="<?php echo $root; ?>product.php" class="clickable">All Products</a>
                </li>
                <li>
                    <a href="<?php echo $root; ?>product.php" class="clickable">Furniture</a>
                </li>
                <li>
                    <a href="<?php echo $root; ?>product.php" class="clickable">Accessories</a>
                </li>
                <li>
                    <a href="<?php echo $root; ?>product.php" class="clickable">Lighting</a>
                </li>
            </ul>

            <ul class="footer-links-list">
                <li>
                    <h3 class="size-sub">Terms & Policys</h3>
                </li>
                <li>
                    <a href="<?php echo $root; ?>terms.php" class="clickable">Privacy Policy</a>
                </li>
                <li>
                    <a href="<?php echo $root; ?>terms.php" class="clickable">Terms and Conditions</a>
                </li>
                <li>
                    <a href="<?php echo $root; ?>terms.php" class="clickable">Cookies</a>
                </li>
            </ul>
        </div>

        <div class="footer-email">
            <a href="mailto:aray@araybuilds.com" class="uppercase clickable">aray@araybuilds.com</a>
        </div>
        <div class="footer-copy">
            <p>© 2025 ARAY. All rights reserved. Web by ::*</p>
        </div>
        <div class="footer-social">
            <ul class="social">
                <li><a href="#facebook" class="clickable"><i class="ic ic-facebook"></i></a></li>
                <li><a href="#instagram" class="clickable"><i class="ic ic-instagram"></i></a></li>
                <li><a href="#linkedin" class="clickable"><i class="ic ic-linkedin"></i></a></li>
            </ul>
        </div>

    </div>
</footer>

<div id="clipboard" style="display:none;">Copied</div>
</div><!-- CLOSE:#page -->

<?php
if ($page_index) {
    include($root . "include/_wp-code/wp-cookie-law-info-bar.php");
}
?>

<div id="page-message">
    <p>For the best experience, we recommend viewing the site in portrait orientation on mobile devices.</p>
</div>

<!-- JS:LIBRARY -->
<script src="<?php echo $root; ?>assets/js/library/bundle.js"></script>
<script src="<?php echo $root; ?>assets/js/library/share.js"></script>
<script src="<?php echo $root; ?>assets/js/library/jquery-ui-effect.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/select2/select2.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/liMarquee/jquery.liMarquee.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.waypoints.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.countup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/rellax/rellax.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/lenis/lenis.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/splitting/splitting.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/imagesLoaded/imagesLoaded.pkgd.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/masonry/masonry.pkgd.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/gsap.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/ScrollTrigger.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/ScrollToPlugin.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/Flip.min.js"></script>

<!-- JS:CONFIG -->
<script src="<?php echo $root; ?>assets/js/theme.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/theme-wp.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/util.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/script.js?v=<?php echo time(); ?>"></script>


</body>

</html>