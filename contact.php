<?php
    include("./include/start.php");
    include("./include/header.php");
    ?>

<div class="contact">
    <h1>let's <span>connect</span></h1>
</div>
<div class="inquiries_table">
    <h1>talk to us today</h1>
    <div class="form_container">
        <form action="" method="post">
            <div class="form_group">
               <input type="text" name="name" placeholder="Name" required>
            </div>
            <div class="form_group">
               <input type="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="form_group">
             <textarea name="textarea" id="" cols="30" rows="10" placeholder="Your inquiry or feedback"></textarea>
            </div>
            <input type="submit" name="send" value="send" class="send" >
        </form>
    </div>
</div>
<div class="contact_container">
    <h5><span>easy to booking a table online</span></h5>
    <h1>make a reservation</h1>
    <p>Reach out to us for inquiries, reservations or feedback. we value your input and look forward to assissting you.<br>
we're dedicated to serving you better and value you for choosing us. whether it's dietary concern <br>
or event booking, we're here to assist.</p>
<h4>open and close time</h4>
    <p>Saturday to Monday <span>09:00am - 17:00pm</span> Tuesday to Friday <span>08:00am - 20:00pm</span>
<br> <span>NOTE: </span> Food reservation is closed on holidays.</p>
<p>HOTLINE:  0798654321</p>
</div>
<?php
if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $teaxtarea = $_POST['textarea'];

    echo '<script> alert(" Hello '.$name.' request received ")</script>';
}

?>



<?php
    include("./include/footer.php");
    include("./include/end.php");
    ?>