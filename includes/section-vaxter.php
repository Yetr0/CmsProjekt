<?php
if(have_posts()): while( have_posts() ): the_post();

$title = get_field('product_title');
$imageArray = get_field('product_image');
$image = $imageArray['sizes']['large'];
$description = get_field('product_description');
$price = get_field('product_price');
?>
    <a href="<?php echo the_permalink(); ?>" class=" btn d-flex flex-column flower p-3">
        <div>
            <img class="image img-fluid" src="<?php echo $image; ?>">
        </div>
        <div class="d-flex flex-column justify-content-center">
            <h1><?php echo $title; ?></h1>
            <p class="display-6"><?php echo "$price kr";?></p>
        </div>    
        
    </a>
<?php
endwhile; else: endif;