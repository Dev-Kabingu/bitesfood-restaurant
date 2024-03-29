<?php

$con = mysqli_connect('localhost', 'root', '', 'bitesfood');
// $con = mysqli_connect('sql101.ezyro.com', 'ezyro_36261176', '97e0537408b35a65', 'ezyro_36261176_bitesfood');


// getting image from the database

function GetImage($con)
{

    $statement = "SELECT * FROM menu ORDER BY image_id";

    $result = mysqli_query($con, $statement);

    // check if there are rows returned 
    if (mysqli_num_rows($result) > 0) {
        // initialize an empty array
        $photos = [];

        // iterate throught each row fetched from the database
        while ($row = mysqli_fetch_assoc($result)) {
            // create an associative array

            $photos[] = [
                'image_id' => $row['image_id'],
                'image_title' => $row['image_title'],
                'image_description' => $row['image_description'],
                'price' => $row['price'],
                'photo_image' => $row['photo_image']
            ];
        }
        //return the associative array containing the details
        return [
            'images' => $photos,
        ];
    }
}

// Retrive the testimonials from the database and display them

function getTestimonial($con)
{
    //sql statement to retrive the data
    $sql = "SELECT* FROM testimonials ORDER BY testimonial_id";
    //execute the sql
    $result = mysqli_query($con, $sql);
    //check if there are any rows returned
    if (mysqli_num_rows($result) > 0) {
        //initialize an empty array
        $images = [];
        //iterate through the rows
        while ($row = mysqli_fetch_assoc($result)) {
            //creat e an associative array
            $images[] = [
                'testimonial_id' => $row['testimonial_id'],
                'testimonial_title' => $row['testimonial_title'],
                'testimonial_desc' => $row['testimonial_desc'],
                'testimonial_image' => $row['testimonial_image'],
                'testimonial_name' => $row['testimonial_name'],
                'testimonial_position' => $row['testimonial_position'],
            ];
        }
        return [
            'photos' => $images
            // var_dump($images);
        ];
    }
}



//retrieving the images from the database and displaying then on the website.

function getgalleryimages($con){
    $sql = "SELECT * FROM gallery ORDER BY image_id";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0){
        $photos = [];

        while ($row = mysqli_fetch_assoc($result)){
            $photos[] = [
                'image_id' => $row['image_id'],
                'image_photo' => $row['image_photo']
            ];
        }
        return[ 
            'photo' => $photos
        ];


    }
    
}

function insertReservation($con)
{
    if (isset($_POST['send'])) {

        $name = $_POST['fname'];
        $surname = $_POST['surname'];
        $phone_no = $_POST['phone_no'];
        $email = $_POST['email'];
        $guests = $_POST['guests'];
        $client_date = $_POST['date'];
        $client_time = $_POST['time'];


        // if(!$con){
        //     echo ("Failed Try Again Later!");
        // }
        $sql = "INSERT INTO reservations(client_name, client_surname,client_phone_no, client_email,client_guests,client_date,client_time)
        VALUES('$name','$surname','$phone_no','$email','$guests','$client_date','$client_time')";

        $result = mysqli_query($con, $sql);

        if ($result) {
            // echo ("Reservation made successfully");
            header("Location: " . ARL . "index.php");
            exit();
        }
    }
}
