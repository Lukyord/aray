<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="product-main">
    <h1 class="visually-hidden">Products</h1>

    <?php
    $list_item = [
        "title" => "Products",
        "counter-text" => "Products",
        "enable-view-toggle" => "true",
        "all-filter" => "true",
        "item-type" => "product",
        "items" => [
            [
                "type" => "furniture",
                "link" => $root . "product-single.php",
                "title" => "Mon Sofa",
                "subtitle" => "Furniture",
                "date" => "2025",
                "media" => [
                    [
                        "pc" => "./assets/media/design/product-1-1.jpg",
                        "mb" => ""
                    ],
                    [
                        "pc" => "./assets/media/design/product-1-2.jpg",
                        "mb" => "",
                        "dark-media" => "true"
                    ],
                ],
                "description" => "A plinth made of cut-out natural wood supports the sofa, enabling the feeling of sitting on a small pebble. Organic lines and massive volume contribute to the space's stability."
            ],
            [
                "type" => "furniture",
                "link" => $root . "product-single.php",
                "title" => "WIT ARM",
                "subtitle" => "Furniture",
                "date" => "2025",
                "media" => [
                    [
                        "pc" => "./assets/media/design/product-2-1.jpg",
                        "mb" => "",
                        "dark-media" => "true"
                    ],
                    [
                        "pc" => "./assets/media/design/product-2-2.jpg",
                        "mb" => "",
                    ],
                    [
                        "pc" => "./assets/media/design/product-2-3.jpg",
                        "mb" => "",
                        "dark-media" => "true"
                    ],
                ],
                "description" => "Modular Sofa is built of a solid wooden base and soft upholstery. Rounded cushions invite the user into its universe whilst a timber frame with exquisite crafted joinery details compliments the design and underlines a production heritage so unique to Karimoku, Japan."
            ],
            [
                "type" => "furniture",
                "link" => $root . "product-single.php",
                "title" => "TIMBER",
                "subtitle" => "Furniture",
                "date" => "2025",
                "media" => [
                    [
                        "pc" => "./assets/media/design/product-3-1.jpg",
                        "mb" => "",
                    ],
                    [
                        "pc" => "./assets/media/design/product-3-2.jpg",
                        "mb" => "",
                    ],
                ],
                "description" => "The angle at which the cross section of each leg is attached gives the table a unique structural elegance and supports the tabletop, superseding the need for aprons. When placed in a context, the wooden table seems to float in effortless interplay with its surroundings."
            ],
            [
                "type" => "furniture",
                "link" => $root . "product-single.php",
                "title" => "Dining Chair",
                "subtitle" => "Furniture",
                "date" => "2025",
                "media" => [
                    [
                        "pc" => "./assets/media/design/product-4-1.jpg",
                        "mb" => "",
                    ],
                    [
                        "pc" => "./assets/media/design/product-4-2.jpg",
                        "mb" => "",
                    ],
                    [
                        "pc" => "./assets/media/design/product-4-3.jpg",
                        "mb" => "",
                    ],
                ],
                "description" => "Dining Chair originates from an idea to create a wooden chair with a straightforward expression that still maintains the handcrafted and high-tech qualities that Karimoku has perfected for decades. While the chair is mainly modelled from straight elements."
            ],
            [
                "type" => "accessories",
                "link" => $root . "product-single.php",
                "title" => "ACCESSORIES",
                "subtitle" => "ACCESSORIES",
                "date" => "2025",
                "media" => [
                    [
                        "pc" => "./assets/media/design/product-1-1.jpg",
                        "mb" => ""
                    ],
                    [
                        "pc" => "./assets/media/design/product-1-2.jpg",
                        "mb" => "",
                        "dark-media" => "true"
                    ],
                ],
                "description" => "A plinth made of cut-out natural wood supports the sofa, enabling the feeling of sitting on a small pebble. Organic lines and massive volume contribute to the space's stability."
            ],
            [
                "type" => "accessories",
                "link" => $root . "product-single.php",
                "title" => "Lamp",
                "subtitle" => "ACCESSORIES",
                "date" => "2025",
                "media" => [
                    [
                        "pc" => "./assets/media/design/product-2-1.jpg",
                        "mb" => "",
                        "dark-media" => "true"
                    ],
                    [
                        "pc" => "./assets/media/design/product-2-2.jpg",
                        "mb" => "",
                    ],
                    [
                        "pc" => "./assets/media/design/product-2-3.jpg",
                        "mb" => "",
                        "dark-media" => "true"
                    ],
                ],
                "description" => "Modular Sofa is built of a solid wooden base and soft upholstery. Rounded cushions invite the user into its universe whilst a timber frame with exquisite crafted joinery details compliments the design and underlines a production heritage so unique to Karimoku, Japan."
            ],
            [
                "type" => "lighting",
                "link" => $root . "product-single.php",
                "title" => "Lamp",
                "subtitle" => "LIGHTING",
                "date" => "2025",
                "media" => [
                    [
                        "pc" => "./assets/media/design/product-3-1.jpg",
                        "mb" => "",
                    ],
                    [
                        "pc" => "./assets/media/design/product-3-2.jpg",
                        "mb" => "",
                    ],
                ],
                "description" => "The angle at which the cross section of each leg is attached gives the table a unique structural elegance and supports the tabletop, superseding the need for aprons. When placed in a context, the wooden table seems to float in effortless interplay with its surroundings."
            ],
            [
                "type" => "lighting",
                "link" => $root . "product-single.php",
                "title" => "Lamp",
                "subtitle" => "LIGHTING",
                "date" => "2025",
                "media" => [
                    [
                        "pc" => "./assets/media/design/product-4-1.jpg",
                        "mb" => "",
                    ],
                    [
                        "pc" => "./assets/media/design/product-4-2.jpg",
                        "mb" => "",
                    ],
                    [
                        "pc" => "./assets/media/design/product-4-3.jpg",
                        "mb" => "",
                    ],
                ],
                "description" => "Dining Chair originates from an idea to create a wooden chair with a straightforward expression that still maintains the handcrafted and high-tech qualities that Karimoku has perfected for decades. While the chair is mainly modelled from straight elements."
            ],
        ]
    ];

    include("include/sc-list-item-template.php");
    ?>
</main>

<?php include($root . "footer.php"); ?>