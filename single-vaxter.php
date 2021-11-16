<?php
get_header();
$title = get_field('product_title');
$imageArray = get_field('product_image');
$image = $imageArray['sizes']['large'];
$description = get_field('product_description');
$price = get_field('product_price');
?>

<main class="container text-center">
    <div class="row m-auto w-75">
        <img class="col-4" src="<?php echo $image; ?>">
        <div class="col-6 d-flex flex-column justify-content-center">
            <h1 class=""><?php echo $title; ?></h1>
            <h3><?php echo $description; ?></h3>
            <p class="display-6"><?php echo "$price kr";?></p>
        </div>    
        
    </div>
</main>
<?php
get_footer();