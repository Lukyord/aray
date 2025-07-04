<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="project-single-main">
    <?php
    $banner = [
        "media" => [
            "pc" => "assets/media/design/project-single-banner.jpg",
            "mb" => ""
        ],
        "title" => "BAAN FMC",
        "subtitle" => "Bangkok, Thailand",
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
                                    "Location" => "Huai Khwang, Bangkok, Thailand",
                                    "Year" => "2023-2024",
                                    "Area" => "320 sq.m.",
                                    "Building Type" => "Residential"
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
                                        At the heart of Baan FMC lies a deep commitment to crafting a space that serves as a sanctuary for individuals transitioning into retirement. The design philosophy behind the project was not merely to provide a physical dwelling, but to create an experience that nurtures both the body and soul, offering a journey from the hustle and demands of life into a stage marked by tranquility and renewal. Our goal was to thoughtfully merge tradion with modernity, reflecting the values and aspirations of the resident while embracing the advancements of contemporary design.
                                    </strong>
                                </p>

                                <p>
                                    The client, a 76-year-old single man residing in Bangkok, brings a rich mosaic of cultural experiences and personal interests. With roots in Hong Kong, education in the United States, and residences across ten cities in North America and Asia, he is now poised to immerse himself in activities he previously had little time for. His passions include art, music, photography, reading, new technology, and lifelong learning. Transitioning from a spacious duplex con- dominium to a more compact two-bedroom unit, the challenge was to design a space that not only caters to his sophisticated tastes but also supports his quest for personal fulfilments in retirement.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="block" data-block="2">
                        <div class="media-wrapper">
                            <div class="media">
                                <?php
                                $section_cover = "assets/media/design/project-single-1.jpg";
                                $section_cover_m = "";
                                include("include/function-group.php");
                                ?>
                            </div>

                            <div class="media-caption">
                                <p class="c-brown">Existing Plan</p>
                            </div>
                        </div>

                        <div class="media-wrapper">
                            <div class="media animate fadeIn">
                                <?php
                                $section_cover = "assets/media/design/project-single-2.jpg";
                                $section_cover_m = "";
                                include("include/function-group.php");
                                ?>
                            </div>

                            <div class="media-caption animate fadeIn">
                                <p class="c-brown">Sketch</p>
                            </div>
                        </div>
                    </div>

                    <div class="block" data-block="3">
                        <div class="entry-content entry-fadeIn">
                            <p>
                                To preserve privacy while maintaining a sense of cohesion, the layout subdy transitions from public to private spaces. The open Iving areas are balanced by more secluded rooms like the study and the master learning suite, each designed with the homeowner's lifestyle and needs in mind. The study, in particular, serves as a creative retreat---a place where art, photography, and music converge. Custom cabinetry, designed to showcase art and photography collections, combines form and function, with hidden storage ensuring the space remains uncluttered. Textured walls, natural wood finishes, and accent lighting create a mood of quiet inspiration, making it a perfect setting for learning and personal growth. Throughout the residence, the design remains a har- monious fusion of tradition and modemity. From the intricate wood craftsmanship that pays hom- age to the homeowner's cultural roots to the sleek, contemporary lines that reflect his current tastes, the home becomes a bridge between past and future. Each room tells a story--one of a life enriched by diverse experiences, global travels, and a love of The home is more than a place to live; it is a carefully curated environment that nurtures creativity; fosters personal growth, and offers a tranquil refuge from the outside world. It is a private sanctuary where the homeowner can fully engage with his passions--whether through art, music, photography and continue his journey of lifelong exploration and fulfillment.
                            </p>
                        </div>
                    </div>

                    <div class="block" data-block="4">
                        <div class="media-wrapper">
                            <div class="media animate fadeIn">
                                <?php
                                $section_cover = "assets/media/design/project-single-3.jpg";
                                $section_cover_m = "";
                                include("include/function-group.php");
                                ?>
                            </div>
                        </div>

                        <div class="entry-content entry-fadeIn">
                            <p>
                                The design concept revolves around the Four Pillars of Life Support--Health, Wealth, Relationships, and Environment--ensuring that the new space enhances his focus on Play, Leam, Grow, and Give. This guiding principle inspired the creation of a "transitional space" that seamlessly integrates traditional and modern elements, reflecting the client's shift from a life of responsibilities to one centered on exploration, enjoyment, and growth. Central to this design is the harmonious fusion of classic and contemporary features, mirroring the client's diverse background.
                            </p>
                        </div>
                    </div>

                    <div class="block" data-block="5">
                        <div class="entry-content entry-fadeIn">
                            <p>
                                The space is envisioned as a bridge between past and future, integrating classic, time-honored features with contemporary sensibilities. Starting with the walls, the design introduces a dialogue between tradition and modernity. Elegant, classic curves and decorative elements pay homage to heritage, while sleek, modern lines bring a fresh perspective. Natural wood, organic textiles, and decorative textures are carefully chosen to soften and redefine the space, creating an environment that feels both familiar and new.
                            </p>
                        </div>

                        <div class="media-container">
                            <div class="media-wrapper">
                                <div class="media animate fadeIn">
                                    <?php
                                    $section_cover = "assets/media/design/project-single-4.jpg";
                                    $section_cover_m = "";
                                    include("include/function-group.php");
                                    ?>
                                </div>

                                <div class="media-caption animate fadeIn">
                                    <p class="c-brown">
                                        Wood Craftsmanship
                                    </p>
                                </div>
                            </div>

                            <div class="media-wrapper">
                                <div class="media animate fadeIn">
                                    <?php
                                    $section_cover = "assets/media/design/project-single-5.jpg";
                                    $section_cover_m = "";
                                    include("include/function-group.php");
                                    ?>
                                </div>

                                <div class="media-caption animate fadeIn">
                                    <p class="c-brown">
                                        Transitional and Contemporary
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="media-wrapper">
                            <div class="media animate fadeIn">
                                <?php
                                $section_cover = "assets/media/design/project-single-6.jpg";
                                $section_cover_m = "";
                                include("include/function-group.php");
                                ?>
                            </div>
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
        "title" => "Related Projects",
        "all" => [
            "link" => $root . "project.php",
            "text" => "View All Projects"
        ],
        "items" => [
            [
                "type" => "residential",
                "link" => $root . "project-single.php",
                "title" => "BAAN SINDHORN",
                "subtitle" => "Bangkok, Thailand",
                "date" => "2023-2024",
                "media" => [
                    [
                        "pc" => "./assets/media/design/project-1.jpg",
                        "mb" => ""
                    ],
                ],
                "description" => "At the heart of the Baan Sindhorn, or “Sole Serenity,” project lies a deep commitment to crafting a space that serves as a sanctuary for individuals transitioning into retirement. The design philoso- phy behind the project was not merely to provide a physical dwelling, but to create an experience that nurtures both the body and soul, offering a journey from the hustle and demands of life into a stage marked by tranquility and renewal."
            ],
            [
                "type" => "residential",
                "link" => $root . "project-single.php",
                "title" => "HG RESIDENCE",
                "subtitle" => "Bangkok, Thailand",
                "date" => "2023-2024",
                "media" => [
                    [
                        "pc" => "./assets/media/design/project-2.jpg",
                        "mb" => ""
                    ],
                ],
                "description" => "HG Residence creates a tranquil sanctuary by blending high ceilings, natural wood tones, and custom cabinetry. The space offers comfort and calm, designed for relaxation, rejuvenation, and a peaceful escape"
            ],
            [
                "type" => "residential",
                "link" => $root . "project-single.php",
                "title" => "PHETRADA RESIDENCE",
                "subtitle" => "Bangkok, Thailand",
                "date" => "2023-2024",
                "media" => [
                    [
                        "pc" => "./assets/media/design/project-3.jpg",
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