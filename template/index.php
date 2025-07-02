<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="index-main">
    <h1 class="visually-hidden">ARAY</h1>

    <?php
    $full_screen_slides_title = "";
    $full_screen_slides = [
        [
            "image" => [
                "pc" => "./assets/media/design/full-screen-slide-1.jpg",
                "mb" => ""
            ],
            "title" => "Serene Residence",
            "location" => "Bangkok, Thailand",
            "date" => "2023-2024",
            "description" => "'Serene Residence' harmoniously integrates nature with living spaces, featuring glass walls, a sunken courtyard, and a sculptural staircase, enhancing light, fluidity, and connection."
        ],
        [
            "image" => [
                "pc" => "./assets/media/design/full-screen-slide-2.jpg",
                "mb" => ""
            ],
            "title" => "Serene Residence",
            "location" => "Bangkok, Thailand",
            "date" => "2023-2024",
            "description" => "'Serene Residence' harmoniously integrates nature with living spaces, featuring glass walls, a sunken courtyard, and a sculptural staircase, enhancing light, fluidity, and connection. Serene Residence' harmoniously integrates nature with living spaces, featuring glass walls, a sunken courtyard, and a sculptural staircase, enhancing light, fluidity, and connection."
        ],
        [
            "image" => [
                "pc" => "./assets/media/design/full-screen-slide-3.jpg",
                "mb" => ""
            ],
            "title" => "Serene Residence",
            "location" => "Bangkok, Thailand",
            "date" => "2023-2024",
            "description" => "'Serene Residence' harmoniously integrates nature with living spaces, featuring glass walls, a sunken courtyard, and a sculptural staircase, enhancing light, fluidity, and connection."
        ],

    ];
    ?>

    <?php include("include/sc-full-screen-slide.php");
    ?>

    <section data-section="content-template-1">
        <div class="sc-inner">
            <div class="container">
                <div class="content">
                    <div class="block" data-block="1">
                        <div class="block-content-start gap-sm center-mb">
                            <div class="block-ttl animate fadeIn">
                                <h2 class="size-h2 uppercase">WHO WE ARE</h2>
                            </div>
                            <div class="block-desc animate fadeIn">
                                <p class="size-body">Naphit Puangchan (Eye) founded ARAY with encouragement from her mother, building on the legacy of I.E. Design, a design & build studio based in Nonthaburi, Thailand.</p>
                            </div>
                        </div>

                        <?php
                        $icon_list = [
                            [
                                "icon" => "array",
                                "title" => "ARRAY (verb)",
                                "description" => "to arrange a group of things in a particular way"
                            ],
                            [
                                "icon" => "ray",
                                "title" => "RAY (noun)",
                                "description" => "a small amount of a feeling that makes you feel happier or more full of hope"
                            ]
                        ];

                        include("include/el-icon-list.php");
                        ?>

                    </div>
                    <div class="block" data-block="2">
                        <div class="block-media-wrapper animate fadeIn">
                            <?php
                            $section_cover = "./assets/media/design/content-template-1-1.jpg";
                            $section_cover_m = "";
                            include("include/function-group.php");
                            ?>
                        </div>
                    </div>
                    <div class="block" data-block="3">
                        <div class="block-media-wrapper animate fadeIn">
                            <?php
                            $section_cover = "./assets/media/design/content-template-1-2.jpg";
                            $section_cover_m = "";
                            include("include/function-group.php");
                            ?>
                        </div>

                        <div class="block-media-wrapper animate fadeIn">
                            <?php
                            $section_cover = "./assets/media/design/content-template-1-3.jpg";
                            $section_cover_m = "";
                            include("include/function-group.php");
                            ?>
                        </div>
                    </div>
                    <div class="block" data-block="4">
                        <div class="block-content-start gap-sm center-mb">
                            <div class="block-ttl animate fadeIn">
                                <h2 class="size-h2 uppercase">Our Mission</h2>
                            </div>
                            <div class="block-subttl animate fadeIn">
                                <p class="size-body">ARAY is a firm that believes it is essential to provide our particular way of designing and building space with the dedication to the highest quality of customer service.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $full_screen_slides_title = "HIGHLIGHT PROJECTS";
    $full_screen_slides = [
        [
            "image" => [
                "pc" => "./assets/media/design/full-screen-slide-1.jpg",
                "mb" => ""
            ],
            "title" => "Serene Residence",
            "location" => "Bangkok, Thailand",
            "date" => "2023-2024",
            "description" => "'Serene Residence' harmoniously integrates nature with living spaces, featuring glass walls, a sunken courtyard, and a sculptural staircase, enhancing light, fluidity, and connection."
        ],
        [
            "image" => [
                "pc" => "./assets/media/design/full-screen-slide-2.jpg",
                "mb" => ""
            ],
            "title" => "Serene Residence",
            "location" => "Bangkok, Thailand",
            "date" => "2023-2024",
            "description" => "'Serene Residence' harmoniously integrates nature with living spaces, featuring glass walls, a sunken courtyard, and a sculptural staircase, enhancing light, fluidity, and connection. Serene Residence' harmoniously integrates nature with living spaces, featuring glass walls, a sunken courtyard, and a sculptural staircase, enhancing light, fluidity, and connection."
        ],
        [
            "image" => [
                "pc" => "./assets/media/design/full-screen-slide-3.jpg",
                "mb" => ""
            ],
            "title" => "Serene Residence",
            "location" => "Bangkok, Thailand",
            "date" => "2023-2024",
            "description" => "'Serene Residence' harmoniously integrates nature with living spaces, featuring glass walls, a sunken courtyard, and a sculptural staircase, enhancing light, fluidity, and connection."
        ],
        [
            "image" => [
                "pc" => "./assets/media/design/full-screen-slide-1.jpg",
                "mb" => ""
            ],
            "title" => "Serene Residence",
            "location" => "Bangkok, Thailand",
            "date" => "2023-2024",
            "description" => "'Serene Residence' harmoniously integrates nature with living spaces, featuring glass walls, a sunken courtyard, and a sculptural staircase, enhancing light, fluidity, and connection."
        ],
        [
            "image" => [
                "pc" => "./assets/media/design/full-screen-slide-2.jpg",
                "mb" => ""
            ],
            "title" => "Serene Residence",
            "location" => "Bangkok, Thailand",
            "date" => "2023-2024",
            "description" => "'Serene Residence' harmoniously integrates nature with living spaces, featuring glass walls, a sunken courtyard, and a sculptural staircase, enhancing light, fluidity, and connection. Serene Residence' harmoniously integrates nature with living spaces, featuring glass walls, a sunken courtyard, and a sculptural staircase, enhancing light, fluidity, and connection."
        ],
        [
            "image" => [
                "pc" => "./assets/media/design/full-screen-slide-3.jpg",
                "mb" => ""
            ],
            "title" => "Serene Residence",
            "location" => "Bangkok, Thailand",
            "date" => "2023-2024",
            "description" => "'Serene Residence' harmoniously integrates nature with living spaces, featuring glass walls, a sunken courtyard, and a sculptural staircase, enhancing light, fluidity, and connection."
        ],
    ];
    ?>

    <?php include("include/sc-full-screen-slide.php");
    ?>


    <?php
    $list_item = [
        "title" => "Selected Projects",
        "view-all" => [
            "link" => $root . "projects.php",
            "text" => "View All Projects"
        ],
        // "enable-view-toggle" => "true",
        // "all-filter" => "true",
        "item-type" => "project",
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
            [
                "type" => "residential",
                "link" => $root . "project-single.php",
                "title" => "AT RESIDENCE",
                "subtitle" => "Bangkok, Thailand",
                "date" => "2023-2024",
                "media" => [
                    [
                        "pc" => "./assets/media/design/project-4.jpg",
                        "mb" => ""
                    ],
                ],
                "description" => "A thoughtfully reimagined family residence tran- scends its function as a home, embodying the values of warmth, connection, and simplicity."
            ],
            [
                "type" => "residential",
                "link" => $root . "project-single.php",
                "title" => "APARTMENT BY CHOW",
                "subtitle" => "Bangkok, Thailand",
                "date" => "2023-2024",
                "media" => [
                    [
                        "pc" => "./assets/media/design/project-5.jpg",
                        "mb" => ""
                    ],
                ],
                "description" => "This apartment by Chow is a modern, minimalist space that combines functionality with a touch of elegance. The design features clean lines, neutral tones, and a seamless flow between indoor and outdoor areas."
            ],
            [
                "type" => "residential",
                "link" => $root . "project-single.php",
                "title" => "At Residence",
                "subtitle" => "Bangkok, Thailand",
                "date" => "2023-2024",
                "media" => [
                    [
                        "pc" => "./assets/media/design/project-6.jpg",
                        "mb" => ""
                    ],
                ],
                "description" => "A thoughtfully designed apartment that emphasizes harmony and community, blending open spaces with natural light and tactile materials. This design fosters interaction, creativity, and connection..."
            ],
            [
                "type" => "residential",
                "link" => $root . "project-single.php",
                "title" => "PHETRADA RESIDENCE",
                "subtitle" => "Bangkok, Thailand",
                "date" => "2023-2024",
                "media" => [
                    [
                        "pc" => "./assets/media/design/project-7.jpg",
                        "mb" => ""
                    ],
                ],
                "description" => "This apartment by Chow is a modern, minimalist space that combines functionality with a touch of elegance. The design features clean lines, neutral tones, and a seamless flow between indoor and outdoor areas."
            ],
            [
                "type" => "residential",
                "link" => $root . "project-single.php",
                "title" => "At Residence",
                "subtitle" => "Bangkok, Thailand",
                "date" => "2023-2024",
                "media" => [
                    [
                        "pc" => "./assets/media/design/project-8.jpg",
                        "mb" => ""
                    ],
                ],
                "description" => "A thoughtfully designed apartment that emphasizes harmony and community, blending open spaces with natural light and tactile materials. This design fosters interaction, creativity, and connection..."
            ],
            [
                "type" => "commercial",
                "link" => $root . "project-single.php",
                "title" => "BAAN SINDHORN",
                "subtitle" => "Bangkok, Thailand",
                "date" => "2023-2024",
                "media" => [
                    [
                        "pc" => "./assets/media/design/project-6.jpg",
                        "mb" => ""
                    ],
                ],
                "description" => "At the heart of the Baan Sindhorn, or “Sole Se-renity,” project lies a deep commitment to crafting a space that serves as a sanctuary for individuals transitioning into retirement. The design philoso- phy behind the project was not merely to provide a physical dwelling, but to create an experience that nurtures both the body and soul, offering a journey from the hustle and demands of life into a stage marked by tranquility and renewal."
            ],
            [
                "type" => "commercial",
                "link" => $root . "project-single.php",
                "title" => "HG RESIDENCE",
                "subtitle" => "Bangkok, Thailand",
                "date" => "2023-2024",
                "media" => [
                    [
                        "pc" => "./assets/media/design/project-1.jpg",
                        "mb" => ""
                    ],
                ],
                "description" => "HG Residence creates a tranquil sanctuary by blending high ceilings, natural wood tones, and custom cabinetry. The space offers comfort and calm, designed for relaxation, rejuvenation, and a peaceful escape"
            ],
            [
                "type" => "commercial",
                "link" => $root . "project-single.php",
                "title" => "PHETRADA RESIDENCE",
                "subtitle" => "Bangkok, Thailand",
                "date" => "2023-2024",
                "media" => [
                    [
                        "pc" => "./assets/media/design/project-2.jpg",
                        "mb" => ""
                    ],
                ],
                "description" => "In extending the architectural vision of this family residence, the next phase deepens the dia- logue between nature and living spaces, creating a harmonious integration of indoor and outdoor environments."
            ],
            [
                "type" => "commercial",
                "link" => $root . "project-single.php",
                "title" => "AT RESIDENCE",
                "subtitle" => "Bangkok, Thailand",
                "date" => "2023-2024",
                "media" => [
                    [
                        "pc" => "./assets/media/design/project-3.jpg",
                        "mb" => ""
                    ],
                ],
                "description" => "A thoughtfully reimagined family residence tran- scends its function as a home, embodying the values of warmth, connection, and simplicity."
            ],
            [
                "type" => "commercial",
                "link" => $root . "project-single.php",
                "title" => "BAAN SINDHORN",
                "subtitle" => "Bangkok, Thailand",
                "date" => "2023-2024",
                "media" => [
                    [
                        "pc" => "./assets/media/design/project-4.jpg",
                        "mb" => ""
                    ],
                ],
                "description" => "At the heart of the Baan Sindhorn, or “Sole Se-renity,” project lies a deep commitment to crafting a space that serves as a sanctuary for individuals transitioning into retirement. The design philoso- phy behind the project was not merely to provide a physical dwelling, but to create an experience that nurtures both the body and soul, offering a journey from the hustle and demands of life into a stage marked by tranquility and renewal."
            ],
            [
                "type" => "commercial",
                "link" => $root . "project-single.php",
                "title" => "HG RESIDENCE",
                "subtitle" => "Bangkok, Thailand",
                "date" => "2023-2024",
                "media" => [
                    [
                        "pc" => "./assets/media/design/project-5.jpg",
                        "mb" => ""
                    ],
                ],
                "description" => "HG Residence creates a tranquil sanctuary by blending high ceilings, natural wood tones, and custom cabinetry. The space offers comfort and calm, designed for relaxation, rejuvenation, and a peaceful escape"
            ],
        ]
    ];

    include("include/sc-list-item-template.php");
    ?>


</main>

<?php include($root . "footer.php"); ?>