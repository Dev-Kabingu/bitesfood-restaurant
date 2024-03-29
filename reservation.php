<?php
    include("./include/start.php");
    include("./include/header.php");
    ?>
<div class="reservation_page">
<h1>make reservation</h1>
<p>To reserve your table at Bitesfood and ensure an unforgettable dining experience, <br>simply fill out our online reservation form today!</p>
<?php
echo'<div class="form_container">
    <form action="'.insertReservation($con).'" method="post">
        <div class="form_group">
            <div class="form_data">
            <label for="name">Name</label><br>
            <input type="text" name="fname"><br>
            </div>
            <div class="form_data">
            <label for="sname">surname</label><br>
            <input type="text" name="surname">
            </div>
        </div>
        <label for="phone_no">phone </label><br>
        <input type="number" name="phone_no" required><br><br>
        
        <label for="email">email</label><br>
        <input type="email" name="email" required><br><br>

        <label for="guests">guests</label><br>
        <input type="number" name="guests" required><br><br>
         
        <label for="request">place your order </label><br>
        <textarea name="request" id="" cols="30" rows="10" placeholder="Your Request"></textarea>

        <div class="form_group">
            <div class="form_data">
            <label for="date">date</label><br>
            <input type="date" name="date" required><br>
            </div>
            <div class="form_data">
            <label for="time">time</label><br>
            <input type="time" name="time" required>
            </div>
        </div>

        <input type="submit" name="send" value="send" class="send" >
        
      
    </form>
</div>
</div>';

?>

<?php
    include("./include/footer.php");
    ?>
   