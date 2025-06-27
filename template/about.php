<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="about-main">
    <?php
    $banner = [
        "media" => [
            "pc" => "assets/media/design/about-banner.jpg",
            "mb" => ""
        ],
        "title" => "About",
    ];

    include("include/sc-hero-banner.php");
    ?>

    <section data-section="content-template-2">
        <div class="sc-inner">
            <div class="container">
                <div class="content">
                    <div class="block" data-block="1">
                        <div class="block-content-start gap-sm center-mb">
                            <div class="block-ttl animate fadeIn">
                                <h2 class="uppercase">ARAY</h2>
                            </div>
                            <div class="block-desc animate fadeIn">
                                <p class="size-body">
                                    A Design & Build studio. The essence of ARAY is the balance between differentiated design and quality with the belief in delivering service with a sense of warmth to achieve aspirations.
                                    <br><br>We believes it is essential to provide our particular way of designing and building space with the dedication to the highest quality of customer service. With great attention to the interplay of the selected materials, natural light ash cabinets and semi-transparent partitions create a stimulating presence—plays of light, shadows, and natural color create a certain depth.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="block" data-block="2">
                        <div class="block-media-wrapper animate fadeIn">
                            <?php
                            $section_cover = "./assets/media/design/content-template-2-1.jpg";
                            $section_cover_m = "";
                            include("include/function-group.php");
                            ?>
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
                </div>
            </div>
        </div>
    </section>

    <?php
    //template 1-4

    $timeline_title = "How We Became ARAY";
    $timeline = [
        [
            "title" => "1999",
            "subtitle" => "Founded as I.E. Design Co., Ltd.",
            "content" => "
            <ul class='wp-block-list'>
                <li>Founded as I.E. Design Co., Ltd. by Phennapa Puangchan (Mom)</li>
                <li>Established the first office in Rewadee, Nonthaburi, with a small workshop</li>
                <li>Provided a comprehensive range of services, including interior design, wood furniture, curtains, fabrics, aluminum work, turnkey installations, and consultancy</li>
                <li>Worked on diverse projects, including residential properties, hotels, retail shops, shophouses, condominiums, hospitals, educational institutions, and government offices</li>
            </ul>            
            ",
            "media" => [
                "template" => "1",
                "items" => [
                    [
                        "src" => "./assets/media/design/timeline-1-1.jpg",
                        "title" => "Phennapa Puangchan",
                        "subtitle" => "Founder and Director"
                    ],
                    [
                        "src" => "./assets/media/design/timeline-1-2.jpg",
                    ]
                ]
            ]

        ],
        [
            "title" => "2012",
            "subtitle" => "Expanded operations",
            "content" => "
            <ul class='wp-block-list'>
                <li>Relocated the head office and built a larger workshop at the current location: 8/10-11 Moo 5, Tb. Tha It, Pak Kret District, Nonthaburi 11120</li>
                <li>Expanded operations, taking on larger-scale hotel projects</li>
            </ul>
            ",
            "media" => [
                "template" => "3",
                "items" => [
                    [
                        "src" => "./assets/media/design/timeline-2-1.jpg",
                    ]
                ]
            ]

        ],
        [
            "title" => "2017",
            "subtitle" => "Growing to Meet Demand",
            "content" => "
            <p>
                Further expanded the workshop in a nearby location
                <br>to accommodate growing project demands
            </p>
            ",
            "media" => [
                "template" => "4",
                "items" => [
                    [
                        "src" => "./assets/media/design/timeline-3-1.jpg",
                    ],
                    [
                        "src" => "./assets/media/design/timeline-3-2.jpg",
                    ],
                    [
                        "src" => "./assets/media/design/timeline-3-3.jpg",
                    ]
                ]
            ]

        ],
        [
            "title" => "2018",
            "subtitle" => "Foundations in Architecture",
            "content" => "
            <ul class='wp-block-list'>
                <li>Naphit (Eyes) Puangchan graduated from the Faculty of Architecture at Chulalongkorn University</li>
            </ul>
            ",
            "media" => [
                "template" => "2",
                "items" => [
                    [
                        "src" => "./assets/media/design/timeline-4-1.jpg",
                    ],
                    [
                        "src" => "./assets/media/design/timeline-4-2.jpg",
                        "title" => "Naphit Puangchan",
                    ]
                ]
            ]

        ],
        [
            "title" => "2018-2021",
            "subtitle" => "Expanding Experience",
            "content" => "
            <ul class='wp-block-list'>
                <li>Worked at Bjarke Ingels Group (BIG) in Copenhagen, gaining international experience in innovative architecture and design</li>
            </ul>
            ",
            "media" => [
                "template" => "4",
                "items" => [
                    [
                        "src" => "./assets/media/design/timeline-5-1.jpg",
                    ],
                    [
                        "src" => "./assets/media/design/timeline-5-2.jpg",
                    ],
                ]
            ]

        ],
        [
            "title" => "2021",
            "subtitle" => "Back to Roots, Forward in Vision",
            "content" => "
            <ul class='wp-block-list'>
                <li>Returned to Thailand and began the transition of inheriting the family firm with a vision to evolve its design identity</li>
            </ul>
            ",
        ],
        [
            "title" => "2022",
            "subtitle" => "ARAY, Expanding the Vision",
            "content" => "
            <ul class='wp-block-list'>
                <li>Rebranded to ARAY (Aray Builds Co., Ltd.), led by Naphit (Eyes) Puangchan, honoring her mother's legacy while introducing her own design philosophy</li>
                <li>The name ARAY reflects both the thoughtful arrangement of objects and the uplifting feelings inspired by rays of light</li>
                <li>ARAY upholds a philosophy of blending distinctive design with quality craftsmanship, delivering a one-stop service with warmth and dedication</li>
                <li>Committed to creating spaces that embody aspiration, balance, and excellence in customer service</li>
            </ul>
            ",
            "media" => [
                "template" => "3",
                "items" => [
                    [
                        "src" => "./assets/media/design/timeline-7-1.jpg",
                    ]
                ]
            ]
        ],
    ];

    include("include/sc-timeline.php");
    ?>


    <section data-section="content-template-3">
        <div class="sc-inner sc-inner--bottom-extra">
            <div class="container">
                <div class="content">
                    <div class="block-content-start center-mb">
                        <div class="block-ttl">
                            <h2 class="size-h1 uppercase">Our Team</h2>
                        </div>
                    </div>

                    <div class="card-container" data-card-layout="grid">
                        <?php
                        $team = [
                            [
                                "media" => [
                                    "pc" => "assets/media/design/about-team-1.jpg",
                                    "mb" => ""
                                ],
                                "name" => "Naphit Puangchan",
                                "position" => "Founder/Design Principal"
                            ],
                            [
                                "media" => [
                                    "pc" => "assets/media/design/about-team-2.jpg",
                                    "mb" => ""
                                ],
                                "name" => "Phennapa Puangchan",
                                "position" => "Managing Principal"
                            ],
                            [
                                "media" => [
                                    "pc" => "assets/media/design/about-team-3.jpg",
                                    "mb" => ""
                                ],
                                "name" => "Niwat Puangchan",
                                "position" => "Chief Financial Officer"
                            ]
                        ];

                        foreach ($team as $card) {
                            include("include/el-team-card.php");
                        }
                        ?>
                    </div>

                    <div class="block-content-start">
                        <div class="block-ttl">
                            <h2 class="size-h2 uppercase">Our People</h2>
                        </div>
                    </div>

                    <div class="card-container" data-card-layout="grid">
                        <?php
                        $people = [
                            [
                                "name" => "Tim Thimmaiah",
                                "position" => "Founder/Design Principal"
                            ],
                            [
                                "name" => "Nicholas Barba",
                                "position" => "Chief Financial Officer"
                            ],
                            [
                                "name" => "Allan Bell",
                                "position" => "Architect"
                            ],
                            [
                                "name" => "Liam Miley",
                                "position" => "Founder/Design Principal"
                            ],
                            [
                                "name" => "Nicholas Barba",
                                "position" => "Chief Financial Officer"
                            ],
                            [
                                "name" => "Allan Bell",
                                "position" => "Architect"
                            ],
                            [
                                "name" => "Tobin Gutermuth",
                                "position" => "Project Manager"
                            ],
                            [
                                "name" => "May Nguyen",
                                "position" => "Marketing"
                            ],
                            [
                                "name" => "Michael Cresci",
                                "position" => "Business Development"
                            ],
                        ];

                        foreach ($people as $card) {
                            include("include/el-team-card.php");
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>