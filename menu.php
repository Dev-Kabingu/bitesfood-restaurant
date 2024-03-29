<?php
include("./include/start.php");
include("./include/header.php");

?>
<!-- menu section -->
<div class="menu_section">
    <h1>our <span>menus</span></h1>
</div>
<div class="menu_main_container">
    <div class="menu_content">
        <h5>menus</h5>
        <h1>discover our menus</h1>
        <p>
            Explore our menu: a tantalizing array of culinary delights awaits<br>
            to satisfy your every craving.Savor the flavors, indulge in the experience,
            and discover culinary bliss.</p>
    </div>
 

    <?php
    //linking to access images retrieved from the database 

    $photos = GetImage($con);
    // calling the associative array
    $all_images = $photos['images'];

    echo '<div class="menu_cards">';

    if (count($all_images) > 0) {

        foreach ($all_images as $photo) {
            echo '
            <div class="group_card">
            <div class="card_image">
                <img src="' . DRL . 'photos/' . $photo['photo_image'] . '" alt="image">
            </div>
            <div class="card_text">
                <h3>' . $photo['image_title'] . '</h3>
                <p>' . $photo['image_description'] . '</p>
                <p class="price">Ksh.' . $photo['price'] . '</p>
            </div>
        </div>';
        }
    }
    ?>

<!-- Testimonials from clients -->

<div class="testimonial_section">
    <h5>testimonials</h5>
    <h1>what people say </h1>
    <p>Our patrons rave about our delectable dishes, impeccable service, <br>and the unforgettable dining experience we offer at Bitesfood.</p>



    <?php
    // linking to access testimonials fetched from the database 
    $images = getTestimonial($con);

    //calling the associative array
    $all_image = $images['photos'];


    echo '<div class="testimonial_content">';

    if (count($all_image) > 0) {
        //display connect of the array
        foreach ($all_image as $images) {
            echo '
             <div class="testimonial_card">
            <h2>' . $images['testimonial_title'] . '</h2>
            <p>' . $images['testimonial_desc'] . '</p>           
            <div class="testimonial_card_image">
                <img src=" ' . DRL . 'testimonial_photos/' . $images['testimonial_image'] . '" alt="">
            </div>
            <h4>' . $images['testimonial_name'] . '</h4>
            <h5>' . $images['testimonial_position'] . '</h5>
        </div>';
        }
    }

    ?>

    <!-- make a reservation  -->
    <div class="reservation_booking">
        <h1>make your reservation with us</h1>
        <h4>book your table</h4>
        <div class="button">
            <button><a href="#">book a table</a></button>
        </div>
    </div>




    <?php
    include("./include/footer.php");
    include("./include/end.php");
    ?>