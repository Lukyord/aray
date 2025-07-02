<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="service-main">
    <?php
    $banner = [
        "media" => [
            "pc" => "assets/media/design/service-banner.jpg",
            "mb" => ""
        ],
        "title" => "Our Services",
        "description" => "At ARAY, we provide a seamless design and build experience, ensuring that every project is crafted with precision and quality. With our in-house workshop, we control every aspect of production, from concept to completion, delivering exceptional results tailored to each client's vision.",
    ];

    include("include/sc-hero-banner.php");
    ?>

    <section data-section="content-template-6">
        <div class="sc-inner">
            <div class="container">
                <div class="content">
                    <div class="accordion-container trigger-first toggle">
                        <?php
                        $service_list = [
                            [
                                "title" => "Interior Design & Space Planning",
                                "content" => "
                                <p>
                                    We believe in creating spaces that balance functionality, aesthetics, and warmth. Our design team collaborates with clients to develop personalized interior solutions.
                                </p>

                                <h3>
                                    Our Expertise:
                                </h3>
                                <ul class='wp-block-list'>
                                    <li>Residential & Hospitality Interior Design</li>
                                    <li>Office & Retail Space Planning</li>
                                    <li>Custom Material & Finishes Selection</li>
                                    <li>3D Renderings & Concept Development</li>
                                    <li>Interior Styling & Final Touches</li>
                                </ul>
                                ",
                                "media" => [
                                    "pc" => "assets/media/design/service-accordion.jpg",
                                    "mb" => ""
                                ]
                            ],
                            [
                                "title" => "Custom Furniture Design & Production",
                                "content" => "
                                <p>
                                    We specialize in crafting furniture and curtains that combine traditional craftsmanship with modern design. Our products are crafted with precision and attention to detail, ensuring durability and longevity.
                                </p>
                                ",
                                "media" => [
                                    "pc" => "assets/media/design/service-accordion.jpg",
                                    "mb" => ""
                                ]
                            ],
                            [
                                "title" => "Turnkey Design & Build Solutions",
                                "content" => "
                                    <p>
                                        We specialize in crafting curtains and fabrics that combine traditional craftsmanship with modern design. Our products are crafted with precision and attention to detail, ensuring durability and longevity.
                                    </p>
                                    ",
                                "media" => [
                                    "pc" => "assets/media/design/service-accordion.jpg",
                                    "mb" => ""
                                ]
                            ],
                            [
                                "title" => "Architectural Millwork & Custom Joinery",
                                "content" => "
                                    <p>
                                        We specialize in crafting aluminum work and installation that combine traditional craftsmanship with modern design. Our products are crafted with precision and attention to detail, ensuring durability and longevity.
                                    </p>
                                    ",
                                "media" => [
                                    "pc" => "assets/media/design/service-accordion.jpg",
                                    "mb" => ""
                                ]
                            ],
                            [
                                "title" => "Commercial & Hospitality Projects",
                                "content" => "
                                    <p>
                                        We specialize in crafting consultancy and project management that combine traditional craftsmanship with modern design. Our products are crafted with precision and attention to detail, ensuring durability and longevity.
                                    </p>
                                    ",
                                "media" => [
                                    "pc" => "assets/media/design/service-accordion.jpg",
                                    "mb" => ""
                                ]
                            ],
                            [
                                "title" => "Renovation & Restoration",
                                "content" => "
                                    <p>
                                        We specialize in crafting residential and hospitality projects that combine traditional craftsmanship with modern design. Our products are crafted with precision and attention to detail, ensuring durability and longevity.
                                    </p>
                                    ",
                                "media" => [
                                    "pc" => "assets/media/design/service-accordion.jpg",
                                    "mb" => ""
                                ]
                            ]
                        ];

                        foreach ($service_list as $index => $service) {
                        ?>
                            <div class="accordion">
                                <div class="entry-title">
                                    <div class="accordion-ttl">
                                        <h3 class="title"><?php echo $service["title"]; ?></h3>
                                    </div>

                                    <div class="entry-panel">
                                        <div class="entry-content">
                                            <?php echo $service["content"]; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="entry-media">
                                    <?php
                                    $section_cover = $service["media"]["pc"];
                                    $section_cover_m = $service["media"]["mb"];
                                    include("include/function-group.php");
                                    ?>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>