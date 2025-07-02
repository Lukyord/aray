<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="product-single-main">
    <?php
    $banner = [
        "media" => [
            "pc" => "assets/media/design/product-single-banner.jpg",
            "mb" => ""
        ],
        "title" => "Mon Sofa",
        "subtitle" => "Furniture",
        "date" => "2023-2024",
    ];

    include("include/sc-hero-banner.php");
    ?>

    <section data-section="content-template-4">
        <div class="sc-inner sc-inner--top-extra">
            <div class="container">
                <div class="content">
                    <div class="block" data-block="1">
                        <div class="block-table">
                            <?php
                            $project_single = [
                                "table" => [
                                    "Client" => "Baan FMC",
                                    "Year" => "2025",
                                    "Category" => "Furniture",
                                    "Material" => "Pure Oak / Timber / Smoked Oak / Keyaki Brown / Grain Matte Black",
                                ]
                            ];

                            foreach ($project_single["table"] as $key => $value) {
                            ?>
                                <div class="block-table-item animate fadeIn">
                                    <div class="block-table-item-title">
                                        <h4>
                                            <?php echo $key; ?>
                                        </h4>
                                    </div>
                                    <div class="block-table-item-content">
                                        <p>
                                            <?php echo $value; ?>
                                        </p>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                        </div>
                        <div class="block-text">
                            <div class="entry-content entry-fadeIn">
                                <p>
                                    <strong>
                                        A plinth made of cut-out natural wood supports the sofa, enabling the feeling of sitting on a small pebble. Organic lines and massive volume contribute to the space's stability.
                                    </strong>
                                </p>

                                <p>
                                    Designed by ARAY in collaboration with Ancher Studio, each piece in the No. 16 collection embodies a refined simplicity and profound connection to nature. Drawing inspiration from the serene aesthetics of Japanese design and the clean, functional lines of Scandinavian tradition, the wheel thrown ceramics offer a unique fusion of the modern and the timeless - creating a design that is both multifunctional and pleasing to the eye.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="block" data-block="2">
                        <div class="entry-content entry-fadeIn">
                            <div class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-9d6595d7 wp-block-columns-is-layout-flex">
                                <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
                                    <figure class="wp-block-gallery has-nested-images columns-default is-cropped wp-block-gallery-4 is-layout-flex wp-block-gallery-is-layout-flex">
                                        <figure class="wp-block-image size-large">
                                            <img src="assets/media/design/product-single-1.jpg" alt="">
                                        </figure>
                                    </figure>
                                </div>



                                <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
                                    <figure class="wp-block-gallery has-nested-images columns-default is-cropped wp-block-gallery-5 is-layout-flex wp-block-gallery-is-layout-flex">
                                        <figure class="wp-block-image size-large">
                                            <img src="assets/media/design/product-single-2.jpg" alt="">
                                        </figure>
                                    </figure>
                                </div>



                                <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
                                    <figure class="wp-block-gallery has-nested-images columns-default is-cropped wp-block-gallery-6 is-layout-flex wp-block-gallery-is-layout-flex">
                                        <figure class="wp-block-image size-large">
                                            <img src="assets/media/design/product-single-3.jpg" alt="">
                                        </figure>
                                    </figure>
                                </div>
                            </div>

                            <div class="wp-block-columns mb-col-reverse is-layout-flex wp-container-core-columns-is-layout-9d6595d7 wp-block-columns-is-layout-flex">
                                <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:66.66%">
                                    <figure class="wp-block-gallery has-nested-images columns-default is-cropped wp-block-gallery-7 is-layout-flex wp-block-gallery-is-layout-flex">
                                        <figure class="wp-block-image size-large">
                                            <img src="assets/media/design/product-single-4.jpg" alt="">
                                        </figure>
                                    </figure>
                                </div>



                                <div class="wp-block-column is-vertically-aligned-bottom is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:33.33%">
                                    <p>No. 16 was originally designed bespoke for a guesthouse on the north coast of Zealand in Denmark to fit with a rustic and casual summer lifestyle close to beach, forest and heathers.</p>
                                </div>
                            </div>

                            <div class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-9d6595d7 wp-block-columns-is-layout-flex">
                                <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
                                    <figure class="wp-block-gallery has-nested-images columns-default is-cropped wp-block-gallery-8 is-layout-flex wp-block-gallery-is-layout-flex">
                                        <figure class="wp-block-image size-large">
                                            <img src="assets/media/design/product-single-5.jpg" alt="">
                                        </figure>
                                    </figure>
                                </div>



                                <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
                                    <figure class="wp-block-gallery has-nested-images columns-default is-cropped wp-block-gallery-9 is-layout-flex wp-block-gallery-is-layout-flex">
                                        <figure class="wp-block-image size-large">
                                            <img src="assets/media/design/product-single-6.jpg" alt="">
                                        </figure>
                                    </figure>
                                </div>
                            </div>

                            <div class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-9d6595d7 wp-block-columns-is-layout-flex">
                                <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:66.66%">
                                    <p>
                                        <strong>Materials &amp; Techniques</strong>
                                        <br><br>To preserve privacy while maintaining a sense of cohesion, the layout subdy transitions from public to private spaces. The open Iving areas are balanced by more secluded rooms like the study and the master learning suite, each designed with the homeowner’s lifestyle and needs in mind. The study, in particular, serves as a creative retreat—a place where art, photography, and music converge. Custom cabinetry, designed to showcase art and photography collections, combines form and function, with hidden storage ensuring the space remains uncluttered. Textured walls, natural wood finishes, and accent lighting create a mood of quiet inspiration, making it a perfect setting for learning and personal growth. Throughout the residence, the design remains a har- monious fusion of tradition and modemity. From the intricate wood craftsmanship that pays hom- age to the homeowner’s cultural roots to the sleek, contemporary lines that reflect his current tastes, the home becomes a bridge between past and future.
                                    </p>
                                </div>



                                <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:33.33%"></div>
                            </div>

                            <figure class="wp-block-gallery aligncenter has-nested-images columns-default is-cropped wp-block-gallery-10 is-layout-flex wp-block-gallery-is-layout-flex">
                                <div class="wp-block-image">
                                    <figure class="aligncenter size-medium">
                                        <img src="assets/media/design/product-single-7.jpg" alt="">
                                    </figure>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $media_slider = [
        [
            "image" => [
                "pc" => "assets/media/design/project-single-banner.jpg",
                "mb" => ""
            ]
        ],
        [
            "image" => [
                "pc" => "assets/media/design/project-single-3.jpg",
                "mb" => ""
            ]
        ],
        [
            "image" => [
                "pc" => "assets/media/design/project-single-6.jpg",
                "mb" => ""
            ]
        ],
    ];

    include("include/sc-media-slider.php");
    ?>

    <?php
    $related_items = [
        "title" => "Related Products",
        "all" => [
            "link" => $root . "product.php",
            "text" => "View All Products"
        ],
        "items" => [
            [
                "type" => "furniture",
                "link" => $root . "product-single.php",
                "title" => "Mon Sofa",
                "subtitle" => "Furniture",
                "date" => "2025",
                "media" => [
                    [
                        "pc" => "./assets/media/design/product-single-1.jpg",
                        "mb" => ""
                    ],
                ],
                "description" => "A plinth made of cut-out natural wood supports the sofa, enabling the feeling of sitting on a small pebble. Organic lines and massive volume contribute to the space's stability."
            ],
            [
                "type" => "furniture",
                "link" => $root . "product-single.php",
                "title" => "Mon Sofa",
                "subtitle" => "Furniture",
                "date" => "2025",
                "media" => [
                    [
                        "pc" => "./assets/media/design/product-single-2.jpg",
                        "mb" => ""
                    ],
                ],
                "description" => "HG Residence creates a tranquil sanctuary by blending high ceilings, natural wood tones, and custom cabinetry. The space offers comfort and calm, designed for relaxation, rejuvenation, and a peaceful escape"
            ],
            [
                "type" => "furniture",
                "link" => $root . "product-single.php",
                "title" => "Mon Sofa",
                "subtitle" => "Furniture",
                "date" => "2023-2024",
                "media" => [
                    [
                        "pc" => "./assets/media/design/product-single-3.jpg",
                        "mb" => ""
                    ],
                ],
                "description" => "In extending the architectural vision of this family residence, the next phase deepens the dia- logue between nature and living spaces, creating a harmonious integration of indoor and outdoor environments."
            ],
        ]
    ];

    include("include/sc-related-items.php");
    ?>
</main>

<?php include($root . "footer.php"); ?>