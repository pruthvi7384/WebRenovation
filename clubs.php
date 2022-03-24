<?php
    // ============Include Header Components==========
        include('components/header.php');
    // ========X====Include Header Components===X======

    // =============Include NavBar Component===========
        include('components/NavBar.php');
    // =======X====Include NavBar Component====X=======
?>
<!-- -----------Clubs Information---------- -->
    <div class="container mt-4 clubs">
        <div class="row heading" data-aos="fade-down">
            <h2>Our Student Clubs</h2>
            <p>Aalekh - Art Related Club</p>
        </div>
    </div>
    <?php
        // ==========Clubs Component Include==========
            include('pagesComponents/clubs.php');
        // ======X===Clubs Component Include===X======
    ?>
<!-- ------X-----Clubs Information---X------- -->
<?php
    // ============Include Footer Components==========
        include('components/footer.php');
    // =========X===Include Footer Components===X=======
?>