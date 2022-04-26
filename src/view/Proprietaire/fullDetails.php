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
                require APPROOT . '/src/view/includes/topbar.php';
            ?>

            <!-- Main content title -->
            <div class="detail-banner">
                <h1 class="main-title"><?php echo $data->getNom() . " " . $data->getPrenom() ?></h1>
            </div>

            <div class="detail-descriptions">
                <table class="detail-table">
                    <tr>
                        <th>Date de naissance</th>
                        <td>
                            <?php 
                                echo $data->getDateNaissance()->format("Y-m-d");
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Lieu de naissance</th>
                        <td>
                            <?php 
                                echo $data->getLieuNaissance();
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Code piece d'identite</th>
                        <td>
                            <?php 
                                echo $data->getCni();
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Numero piece d'identite</th>
                        <td>
                            <?php 
                                echo $data->getNumeroCni();
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Adresse de residence</th>
                        <td>
                            <?php 
                                echo $data->getAdresse();
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>
                            <?php 
                                echo $data->getEmail();
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
            
            <!-- <h3>La plateforme de location de domiciles senegalaises</h3> -->

           
            <!-- Main content title -->
        </main>
        <!-- Main content -->
</div>

<?php
    require APPROOT . '/src/view/includes/scripts.php';
?>

</body>
</html>