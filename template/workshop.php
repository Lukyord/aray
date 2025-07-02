<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="workshop-main">
    <?php
    $banner = [
        "media" => [
            "pc" => "assets/media/design/workshop-banner.jpg",
            "mb" => ""
        ],
        "title" => "Our Workshop",
        "description" => "From raw materials to refined craftsmanship, our workshop is where ideas are meticulously shaped, every cut and detail reflecting our commitment to excellence in design and construction.",
    ];

    include("include/sc-hero-banner.php");
    ?>


    <section data-section="content-template-1">
        <div class="sc-inner">
            <div class="container">
                <div class="content">
                    <div class="block" data-block="1">
                        <div class="block-content-start gap-sm center-mb">
                            <div class="block-ttl animate fadeIn">
                                <h2 class="size-h2 uppercase">Our Workshop</h2>
                            </div>
                            <div class="block-desc animate fadeIn">
                                <p class="size-body">Our workshop is more than just a workspace—it's the heart of our process, where raw materials are transformed into thoughtfully designed, high-quality pieces. Every detail, from the initial sketches to the final construction, is guided by our commitment to craftsmanship, precision, and sustainability.</p>
                            </div>
                        </div>

                        <?php
                        $icon_list = [
                            [
                                "icon" => "craftsmanship",
                                "title" => "Craftsmanship",
                                "description" => "Hands-on creation with an eye for detail. With attention to detail."
                            ],
                            [
                                "icon" => "quality",
                                "title" => "Quality",
                                "description" => "Highest standards, ensuring that every creation is durable and functional."
                            ],
                            [
                                "icon" => "sustainability ",
                                "title" => "Sustainability ",
                                "description" => "Responsible production - Materials and methods that respect the future."
                            ]
                        ];

                        include("include/el-icon-list.php");
                        ?>

                    </div>
                    <div class="block" data-block="2">
                        <div class="block-media-wrapper animate fadeIn">
                            <?php
                            $section_cover = "./assets/media/design/workshop-1.jpg";
                            $section_cover_m = "";
                            include("include/function-group.php");
                            ?>
                        </div>
                    </div>
                    <div class="block" data-block="3">
                        <div class="block-media-wrapper animate fadeIn">
                            <?php
                            $section_cover = "./assets/media/design/workshop-2.jpg";
                            $section_cover_m = "";
                            include("include/function-group.php");
                            ?>
                        </div>

                        <div class="block-media-wrapper animate fadeIn">
                            <?php
                            $section_cover = "./assets/media/design/workshop-3.jpg";
                            $section_cover_m = "";
                            include("include/function-group.php");
                            ?>
                        </div>

                        <div class="block-content-start gap-sm center-mb">
                            <div class="block-ttl animate fadeIn">
                                <h2 class="size-h2 uppercase">The Journey of Our Workshop</h2>
                            </div>
                            <div class="block-subttl animate fadeIn">
                                <p class="size-body">Founded on a passion for design and craftsmanship, our workshop has grown into a place where heritage and innovation come together. While our methods have evolved, our core philosophy remains unchanged—to create pieces that embody timeless beauty and expert craftsmanship.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-section="content-template-5">
        <div class="sc-inner">
            <div class="container">
                <div class="content">
                    <div class="sticky-block">
                        <div class="block-content-start">
                            <div class="block-ttl animate fadeIn">
                                <h2 class="size-h1 uppercase">Materials & Techniques</h2>
                            </div>
                            <div class="block-subttl animate fadeIn">
                                <p class="size-body">Our workshop is more than just a workspace—it's the heart of our process, where raw materials are transformed into thoughtfully designed, high-quality pieces. Every detail, from the initial sketches to the final construction, is guided by our commitment to craftsmanship, precision, and sustainability.</p>
                            </div>
                        </div>
                    </div>

                    <div class="static-block">
                        <div class="block" data-block="1">
                            <div class="media animate fadeIn">
                                <?php
                                $section_cover = "./assets/media/design/workshop-4.jpg";
                                $section_cover_m = "";
                                include("include/function-group.php");
                                ?>
                            </div>

                            <div class="block-subttl animate fadeIn">
                                <h3 class="size-h2 uppercase">The Foundation of Every Creation</h3>
                            </div>
                            <div class="block-desc animate fadeIn">
                                <p class="size-sub-2">We carefully select the finest wood and employ a blend of traditional craftsmanship and modern technology to bring our designs to life.</p>
                            </div>
                        </div>

                        <hr class="block-divider animate fadeIn">

                        <div class="block" data-block="2">
                            <div class="block-ttl animate fadeIn">
                                <h3 class="size-h2 uppercase">Materials We Trust</h3>
                            </div>

                            <div class="material-list">
                                <?php
                                $material_list = [
                                    [
                                        "name" => "Teak",
                                        "src" => "assets/media/design/material-1.jpg",
                                    ],
                                    [
                                        "name" => "Hopea",
                                        "src" => "assets/media/design/material-2.jpg",
                                    ],
                                    [
                                        "name" => "Red Wood",
                                        "src" => "assets/media/design/material-3.jpg",
                                    ],
                                    [
                                        "name" => "Ash",
                                        "src" => "assets/media/design/material-4.jpg",
                                    ],
                                    [
                                        "name" => "Walnut",
                                        "src" => "assets/media/design/material-5.jpg",
                                    ],
                                    [
                                        "name" => "Red Oak",
                                        "src" => "assets/media/design/material-6.jpg",
                                    ],
                                    [
                                        "name" => "Alder",
                                        "src" => "assets/media/design/material-7.jpg",
                                    ],
                                    [
                                        "name" => "Poplar",
                                        "src" => "assets/media/design/material-8.jpg",
                                    ],
                                    [
                                        "name" => "Lyptus",
                                        "src" => "assets/media/design/material-9.jpg",
                                    ],
                                    [
                                        "name" => "White Oak",
                                        "src" => "assets/media/design/material-10.jpg",
                                    ],
                                ];

                                foreach ($material_list as $material) {
                                ?>
                                    <div class="material-item">
                                        <div class="material-item-media animate fadeIn">
                                            <?php
                                            $section_cover = $material["src"];
                                            $section_cover_m = "";
                                            include("include/function-group.php");
                                            ?>
                                        </div>
                                        <div class="material-item-name animate fadeIn">
                                            <p class="size-sub-2"><?php echo $material["name"]; ?></p>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>

                        <hr class="block-divider animate fadeIn">


                        <div class="block" data-block="3">
                            <div class="block-ttl animate fadeIn">
                                <h3 class="size-h2 uppercase">Techniques We Use</h3>
                            </div>

                            <div class="technique-list">
                                <?php
                                $technique_list = [
                                    [
                                        "title" => "Traditional woodworking methods",
                                        "description" => "Traditional wood connection techniques — clean, precise, no metal fasteners.",
                                        "image" => "./assets/media/design/workshop-5.jpg"
                                    ],
                                    [
                                        "title" => "Modern fabrication tools",
                                        "description" => "Digitally-driven precision cuts consistent across prototypes and production.",
                                        "image" => "./assets/media/design/workshop-6.jpg"
                                    ]
                                ];

                                foreach ($technique_list as $technique) {
                                ?>
                                    <div class="technique-item">
                                        <div class="technique-item-media animate fadeIn">
                                            <?php
                                            $section_cover = $technique["image"];
                                            $section_cover_m = "";
                                            include("include/function-group.php");
                                            ?>
                                        </div>

                                        <div class="block-subttl animate fadeIn">
                                            <h4 class="size-h3"><?php echo $technique["title"]; ?></h4>
                                        </div>
                                        <div class="block-desc animate fadeIn">
                                            <p class="size-sub-2"><?php echo $technique["description"]; ?></p>
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
        </div>
    </section>


    <?php
    //template 1-4
    $timeline_bg_cream = true;
    $timeline_title = "The Process";
    $timeline_mb_line_marker = false;
    $timeline_mb_slide_nav = false;
    $timeline = [
        [
            "title" => "PROJECT COMPLETION",
            "content" => "
            <p>
             At ARAY, we strive to provide creativity and the highest quality work through a one-stop service.
            </p>   
            ",
            "media" => [
                "template" => "3",
                "items" => [
                    [
                        "src" => "./assets/media/design/process-1.jpg",
                    ]
                ]
            ]

        ],
        [
            "title" => "CONSTRUCTION",
            "content" => "
            <p>
                This process involves construction of the project by the owner's choice of contractors. For a project, this process usually takes the longest period of time.
            </p>
            ",
            "media" => [
                "template" => "4",
                "items" => [
                    [
                        "src" => "./assets/media/design/process-2-1.jpg",
                    ],
                    [
                        "src" => "./assets/media/design/process-2-2.jpg",
                    ],
                    [
                        "src" => "./assets/media/design/process-2-3.jpg",
                    ],
                ]
            ]
        ],
        [
            "title" => "PROJECT CONCLUSION",
            "content" => "
            <p>
                The evolution of ARAY as it stands today reaffirms our commitment to delivering a collective exper- tise—combining generational knowledge with forward-thinking design.            
            </p>
            ",
            "media" => [
                "template" => "3",
                "items" => [
                    [
                        "src" => "./assets/media/design/process-3.jpg",
                    ]
                ]
            ]
        ],
    ];

    include("include/sc-timeline.php");
    ?>

    <?php
    $media_slider_ttl = "Inside the Workshop";
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


</main>

<?php include($root . "footer.php"); ?>