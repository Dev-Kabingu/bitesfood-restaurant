<?php
    include("./include/start.php");
    include("./include/header.php");
    ?>

<div class="gallery_page">
<h1>gallery</h1>
<p>Explore BitesFood's Ingredients Showcase for a glimpse into our culinary craftsmanship.<br> From farm-fresh produce to exotic spices, each dish is crafted with <br>passion and precision for an unforgettable dining experience</p>
</div>

<?php
// linking to access images stored in the database.

$photos = getgalleryimages($con);
// var_dump($photos);
//accessing the associative array
$all_galleryimages = $photos['photo'];
// var_dump($all_galleryimages);

echo '<div class="gallery_container">';
if(count($all_galleryimages) > 0){
    foreach($all_galleryimages as $photo){
        echo ' <div class="gallery_image">
        <img src="'.DRL.'gallery_photo/'.$photo['image_photo'].'" alt="">
    </div>';
    }
}
?>


   


    

</div>



<?php
    include("./include/footer.php");
    include("./include/end.php");
    ?>