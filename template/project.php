<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="project-main">
    <?php
    $list_item = [
        "title" => "Our Projects",
        // "view-all" => [
        //     "link" => $root . "projects.php",
        //     "text" => "View All Projects"
        // ],
        "counter-text" => "Projects",
        "enable-view-toggle" => "true",
        "all-filter" => "true",
        "item-type" => "project",
        "items" => [
            [
                "type" => "residential",
                "link" => $root . "project-single.php",
                "title" => "BAAN SINDHORN",
                "location" => "Bangkok, Thailand",
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
                "location" => "Bangkok, Thailand",
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
                "location" => "Bangkok, Thailand",
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
                "location" => "Bangkok, Thailand",
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
                "location" => "Bangkok, Thailand",
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
                "location" => "Bangkok, Thailand",
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
                "location" => "Bangkok, Thailand",
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
                "location" => "Bangkok, Thailand",
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
                "location" => "Bangkok, Thailand",
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
                "location" => "Bangkok, Thailand",
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
                "location" => "Bangkok, Thailand",
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
                "location" => "Bangkok, Thailand",
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
                "location" => "Bangkok, Thailand",
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
                "location" => "Bangkok, Thailand",
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