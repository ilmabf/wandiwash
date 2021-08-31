<?php 
    include 'userHeader.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="icon" href="../content/images/drop.png">
    <link rel="stylesheet" href="../content/css/userHeader.css">
    <link rel="stylesheet" href="../content/css/userHome.css">
    <link rel="stylesheet" href="../content/css/customerHome.css">
    <link rel="stylesheet" href="../content/css/customerMyOrders.css">
    <link rel="stylesheet" href="../content/css/userLogin.css">
    <link rel="stylesheet" href="../content/css/customerSignup.css">
    <link rel="stylesheet" href="../content/css/managerHome.css">
    <link rel="stylesheet" href="../content/css/stlHome.css">
    <link rel="stylesheet" href="../content/css/adminHome.css">
    <link rel="stylesheet" href="../content/css/userFooter.css">
    <title>WandiWash</title>
</head>
<main>

    <div id="container">

        <section class="customer-home-main-section1">
            <div class="bookAwash">
                <h3>We wash your<br>vehicle at your Doorstep!</h3>
                <div class="bookAwash-button">
                    <button class="customer-home-main-section1-button"><a href="start_your_booking.php">Book a wash</a></button>
                </div>
            </div>

        </section>

        <section class="home-main-section2">

        <div class="section2-blocksup">

            <div class="section2-blocks1">
                <div class="customer-home-section2-block-img1"></div>
                <div class="section2-block-heading"><button><h3><a href="customerMyAccount.php">My Account</a></h3></button></div>
                <div class="section2-block-para"><p>Add or update your vehicle and location details</p></div>

            </div>

            <div class="section2-blocks2">
                <div class="customer-home-section2-block-img2"></div>
                <div class="section2-block-heading"><button><h3><a href="customerMyUpcomingReservations.php">Upcoming Reservations</a></h3></button></div>
                <div class="section2-block-para"><p>Check your upcoming reservations</p></div>

            </div>

            <div class="section2-blocks3">
                <div class="customer-home-section2-block-img3"></div>
                <div class="section2-block-heading"><button><h3><a href="customerMyPastReservations.php">Past Reservations</a></h3></button></div>
                <div class="section2-block-para"><p>Check your past reservations</p></div>

            </div>

            <div class="section2-blocks4">
                <div class="customer-home-section2-block-img4"></div>
                <div class="section2-block-heading"><button><h3><a href="customerGiveReviews.php">Give Reviews</a></h3></button></div>
                <div class="section2-block-para"><p>Give your thoughts on about our service</p></div>

            </div>

        </div>

        </section>
    </div>

</main>

<?php 
    include 'userFooter.php';
?>

</html>
