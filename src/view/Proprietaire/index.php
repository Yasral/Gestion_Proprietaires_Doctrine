<?php
    require APPROOT . "/src/view/includes/head.php";
?>

<div id="container"> 

    <?php
        require APPROOT . "/src/view/includes/navigation.php";
    ?>

    <!-- Main content -->
        <main>
            
            <?php
                require APPROOT . "/src/view/includes/topbar.php";
            ?>

            <!-- Main content title -->
            <h1 class="main-title">TASNIM IMMOBILIER</h1>
            <h3>LA PLATEFORME DE LOCATION DE DOMICILES SENEGALAISES</h3>

            <div class="banner">
                <div class="slots">
                    <div class="images">
                        <span><img src="<?php echo URLROOT ?>/assets/images/bar-chart-outline.svg" alt="Bar chart"></span>
                    </div>
                    <div class="slots-content">
                        <h5>Lorem Ipsum</h5>
                    </div>
                </div>
                <div class="slots">
                    <div class="images">
                        <span><img src="<?php echo URLROOT ?>/assets/images/pie-chart-outline.svg" alt="Pie chart"></span>
                    </div>
                    <div class="slots-content">
                        <h5>Lorem Ipsum</h5>
                    </div>
                </div>
                <div class="slots">
                    <div class="images">
                        <span><img src="<?php echo URLROOT ?>/assets/images/search-circle-outline.svg" alt="Search icon"></span>
                    </div>
                    <div class="slots-content">
                        <h5>Lorem Ipsum</h5>
                    </div>
                </div>
            </div>
            <!-- Main content title -->
        </main>
        <!-- Main content -->
</div>

<?php
    require APPROOT . "/src/view/includes/scripts.php";
?>

</body>
</html>