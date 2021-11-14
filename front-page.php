<?php

get_header();

$title = get_field('page_title');
$description = get_field('page_description');
$link = get_field('page_link');
$imageArray = get_field('page_image');
$image = $imageArray['sizes']['large'];
$color = get_field('hero_color');
$text_color = get_field('text_color');
$button_color = get_field('button_color');
$button_text_color = get_field('button_text_color');

?>
<section id="hero" style="background-color:<?php echo $color; ?>; color:<?php echo $text_color ?>;">
    <div class="container">
        <div class="d-flex flex-row-reverse justify-content-center p-4">
            <div class="row d-flex flew-row-reverse">
                <div class="col-lg-6 m-auto text-center">
                    <img class="img-fluid" src="<?php echo $image; ?>">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                    <h1 class="display-1"><?php echo $title; ?></h1>
                    <?php echo $description; ?>
                    <button type="button" class="btn m-4" style="background-color:<?php echo $button_color; ?>;">
                        <a style="text-decoration:none; color:<?php echo $button_text_color; ?>;" href="<?php echo $link['url']; ?>">
                            <?php echo $link['title']; ?>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();