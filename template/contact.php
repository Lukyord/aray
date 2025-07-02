<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="contact-main">
    <section data-section="contact">
        <div class="sc-inner">
            <div class="container">
                <div class="sc-ttl animate fadeIn">
                    <h1 class="size-h1 uppercase">
                        Contact Us
                    </h1>
                </div>
                <div class="content">
                    <div class="map-block">
                        <div class="map-media animate fadeIn">
                            <?php
                            $section_cover = "assets/media/design/map.jpg";
                            $section_cover_m = "";
                            include("include/function-group.php");
                            ?>
                        </div>

                        <div class="contact-info">
                            <div class="location">
                                <h3 class="size-h3 animate fadeIn">
                                    Aray Builds Co., Ltd.
                                </h3>
                                <address class="animate fadeIn">
                                    Ratchapruek-Rattanathibet 8/10-11 Moo 5 Tb. Tha It,
                                    Nonthaburi, Pak Kret District, Nonthaburi 11120
                                </address>

                                <a href="#outer" class="button animate fadeIn">
                                    Get Direction
                                </a>
                            </div>

                            <div class="contact-list">
                                <a href="mailto:info@aray.com" class="animate fadeIn">
                                    <i class="ic ic-mail"></i>
                                    <span class="size-h4">aray@araybuilds.com</span>
                                </a>

                                <a href="tel:+66838360007" class="animate fadeIn">
                                    <i class="ic ic-call"></i>
                                    <span class="size-h4">(+66)83 836 0007</span>
                                </a>
                            </div>

                            <ul class="social animate fadeIn">
                                <li><a href="#facebook"><i class="ic ic-facebook"></i></a></li>
                                <li><a href="#instagram"><i class="ic ic-instagram"></i></a></li>
                                <li><a href="#linkedin"><i class="ic ic-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-block">
                        <form action="javascript:;">
                            <div class="block-content-start">
                                <div class="block-ttl animate fadeIn">
                                    <h2 class="size-h2 uppercase">
                                        Make An Inquiry
                                    </h2>
                                </div>

                                <div class="block-desc animate fadeIn">
                                    <p>Have a project in mind or need more details about our work? Whether it's a custom design request, collaboration opportunity, or general inquiry, our team is ready to assist. Reach out to us, and let’s start a conversation.</p>
                                </div>
                            </div>

                            <div class="fields">
                                <div class="field animate fadeIn">
                                    <div class="input">
                                        <label class="label" for="contact-fullname">NAME *</label>
                                        <input type="text" name="contact-fullname" id="contact-fullname" placeholder="Enter your full name" autocomplete="given-name" required>
                                    </div>
                                </div>

                                <div class="field animate fadeIn">
                                    <div class="input">
                                        <label class="label" for="contact-email">EMAIL *</label>
                                        <input type="email" name="contact-email" id="contact-email" placeholder="Enter your E-mail" autocomplete="email" required>
                                    </div>
                                </div>

                                <div class="field animate fadeIn">
                                    <div class="input">
                                        <label class="label" for="contact-phone">PHONE NUMBER *</label>
                                        <input type="tel" name="contact-phone" id="contact-phone" placeholder="Enter your phone number" autocomplete="tel" required>
                                    </div>
                                </div>


                                <div class="field animate fadeIn">
                                    <div class="input">
                                        <label class="label" for="contact-subject">SUBJECT *</label>
                                        <div class="select">
                                            <select class="select2" name="contact-subject" id="contact-subject" required>
                                                <option value="" disabled selected>Select a subject</option>
                                                <option value="Option1">Option 1</option>
                                                <option value="Option2">Option 2</option>
                                                <option value="Option3">Option 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="field full-width animate fadeIn">
                                    <div class="input">
                                        <label class="label" for="contact-message">MESSAGE *</label>
                                        <textarea name="contact-message" id="contact-message" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="submit animate fadeIn">
                                <a href="javascript:;" type="submit" class="button">
                                    Submit
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>