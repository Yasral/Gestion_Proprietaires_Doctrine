<?php
   require APPROOT . '/src/view/includes/head.php';
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
            <div class="listes">
                <div class="proprietaires">
                    <div class="cardHeader">
                        <h2 class="list-form">LISTE DES PROPRIETAIRES</h2>
                    </div>
                    <div class="cardProprietaire">
                        <!-- Don't forget to use a for loop and grid display -->
                        <?php foreach($data as $liste) { ?>
                            <table class="content-table">
                                <thead>
                                    <tr>
                                        <th>NOM</th>
                                        <th>PRENOM</th>
                                        <th>NAISSANCE</th>
                                        <th>TELEPHONE</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $liste->getNom() ?></td>
                                        <td><?php echo $liste->getPrenom() ?></td>
                                        <td><?php echo $liste->getLieuNaissance() ?></td>
                                        <td><?php echo $liste->getAdresse() ?></td>
                                        <td class = "options">
                                            <a class="table-link-padding" href="<?php echo URLROOT . "/Proprietaire/fullDetails/" . $liste->getCode_proprietaire() ?>">
                                                <span>
                                                    <ion-icon name="eye-outline"></ion-icon>
                                                </span>
                                            </a>
                                            <!-- Some test -->
                                            <?php if(isset($_SESSION['id_user']) && ($_SESSION['id_user'] == $liste->getIdUser()) ) : ?>
                                                <a class="table-link-padding" href="<?php echo URLROOT . "/Proprietaire/edit/" . $liste->getCode_proprietaire() ?>">
                                                    <span>
                                                        <ion-icon name="refresh-outline"></ion-icon>
                                                    </span>
                                                </a>
                                                <!-- <form action="" method="POST"> -->
                                                    <!-- <input type="submit" value="Supprimer"> -->

                                                    <a class="table-link-padding" href="<?php echo URLROOT . "/Proprietaire/delete/" . $liste->getCode_proprietaire() ?>">
                                                        <span>
                                                            <ion-icon name="trash-outline"></ion-icon>
                                                        </span>
                                                    </a>
                                                <!-- </form> -->
                                            <?php endif; ?> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        <?php }?>
                        <!-- Don't forget to use a for loop and grid display -->
                    </div>
                </div>
            </div>                
            <!-- Main content title -->
        </main>
        <!-- Main content -->
</div>

<?php
    require APPROOT . '/src/view/includes/scripts.php';
?>

</body>
</html>