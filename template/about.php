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
    $timeline = []
    ?>
    <section data-section="timeline">
        <div class="sc-billboard full-screen">
            <div class="container">
                <div class="content">
                    <div class="markers">
                        <div class="sc-inner">
                            <div class="sc-header">
                                <div class="block-content-start center-mb">
                                    <div class="block-ttl">
                                        <h2 class="size-h2 uppercase">Our People</h2>
                                    </div>
                                </div>

                                <div class="markers-list">

                                </div>
                            </div>

                            <a href="javascript:;" class="button skip-section show-sm">
                                Skip This Part
                            </a>
                        </div>
                    </div>

                    <div class="timeline"></div>
                </div>
            </div>
        </div>
    </section>

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