<?php
    // ============Include Header Components==========
        include('components/header.php');
    // ========X====Include Header Components===X======

    // =============Include NavBar Component===========
        include('components/NavBar.php');
    // =======X====Include NavBar Component====X=======
?>
<!-- --------------Home Page-------------- -->
    <div class="home">
            <img src="<?php echo FRONT_SITE_PATH;?>/assets/home.jpg" alt="">
    </div>
    <div class="container about mt-5">
        <div class="row subheading ">
            <h5 data-aos="fade-up">About Equilibrium</h5>
            <div data-aos="fade-right" class="col-xl-6 mt-3">
                <p><span><i class="fa-solid fa-quote-left"></i></span> MITAOE is aimed to create and maintain a safe, healthy, and conducive environment and culture that synthesizes the intellectual, technical, physical, social, emotional, and ethical development of students in a holistic way. <span><i class="fa-solid fa-quote-right"></i></span></p>
                <button class="btn">Read More</button>
            </div>
        </div>
    </div>
    <div class="container about mt-5">
        <div class="row subheading ">
            <h5 data-aos="fade-up">Our Events</h5>
        </div>
    </div>
    <?php
        // ==========Clubs Component Include==========
            include('pagesComponents/events.php');
        // ======X===Clubs Component Include===X======
    ?>
    <div class="container about mt-5">
        <div class="row subheading ">
            <h5 data-aos="fade-up">Our Student Clubs</h5>
        </div>
    </div>
    <?php
        // ==========Clubs Component Include==========
            include('pagesComponents/clubs.php');
        // ======X===Clubs Component Include===X======
    ?>
    <div class="container about mt-5">
        <div class="row subheading ">
            <h5 data-aos="fade-up">Our Team</h5>
        </div>
    </div>
    <!-- ---------Team Section Imported--------- -->
    <?php include('pagesComponents/team.php'); ?>
    <!-- -----X---Team Section Imported--X------ -->
     <div class="container about mt-5">
        <div class="row subheading ">
            <h5 data-aos="fade-up">Get In Touch</h5>
        </div>
    </div>
    <?php
        // ==========Contact Form Component Include==========
            include('pagesComponents/contact.php');
        // ======X===Contact Form Component Include===X======
    ?>

<!-- -----------X---Home Page---X----------- -->
<?php
    // ============Include Footer Components==========
        include('components/footer.php');
    // =======X===Include Footer Components===X=======
?>