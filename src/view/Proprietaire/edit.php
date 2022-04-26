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
            <div class="container-form">
                
                <h1 class="title-form">Modification D'un Proprietaire</h1>
                <form method="post" action="<?php echo URLROOT ?>/proprietaire/edit/<?php echo $data["find_owner"]->getCode_proprietaire() ?>">

                <!-- Don't forgot to generate the error below the form fields -->

                    <div class="user-details">
                        <!-- This section is for the user who responded to the enquiry -->
                        <div class="input-box">
                            <span class="details">Nom</span>
                            <input type="text" name="nom_p" id="" value="<?php echo $data["find_owner"]->getNom() ?>">
                            <span class="invalidFeedback">
                                <?php echo $data["nomError"] ?>
                            </span>
                        </div>
                        <div class="input-box">
                            <span class="details">Prenom</span>
                            <input type="text" name="prenom_p" id="" value="<?php echo $data["find_owner"]->getPrenom() ?>">
                            <span class="invalidFeedback">
                                <?php echo $data["prenomError"] ?>
                            </span>
                        </div>
                        <div class="input-box">
                            <span class="details">Date De Naissance</span>
                            <input type="date" name="date_naissance" id="" value="<?php echo $data["find_owner"]->getDateNaissance()->format('Y-m-d') ?>">
                            <span class="invalidFeedback">
                                <?php echo $data["date_naissance_Error"] ?>
                            </span>
                        </div>
                        <div class="input-box">
                            <span class="details">Lieu De Naissance</span>
                            <input type="text" name="lieu_naissance" id="" value="<?php echo $data["find_owner"]->getLieuNaissance() ?>">
                            <span class="invalidFeedback">
                                <?php echo $data["lieu_naissance_Error"] ?>
                            </span>
                        </div>
                        <div class="input-box">
                            <span class="details">Carte D'identite Nationale</span>
                            <input type="text" name="code_piece_identite" id="" value="<?php echo $data["find_owner"]->getCni() ?>">
                            <span class="invalidFeedback">
                                <?php echo $data["code_piece_identite_Error"] ?>
                            </span>
                        </div>
                        <div class="input-box">
                            <span class="details">Numero Piece D'identite Nationale</span>
                            <input type="number" name="numero_piece_identite" id="" value="<?php echo $data["find_owner"]->getNumeroCni() ?>">
                            <span class="invalidFeedback">
                                <?php echo $data["numero_piece_identite_Error"] ?>
                            </span>
                        </div>
                        <div class="input-box">
                            <span class="details">Adresse</span>
                            <input type="text" name="adresse" id="" value="<?php echo $data["find_owner"]->getAdresse() ?>">
                            <span class="invalidFeedback">
                                <?php echo $data["adresseError"] ?>
                            </span>
                        </div>
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="email" name="email" id="" value="<?php echo $data["find_owner"]->getEmail() ?>">
                            <span class="invalidFeedback">
                                <?php echo $data["emailError"] ?>
                            </span>
                        </div>
                        
                    </div>

                <!-- Don't forgot to generate the error below the form fields -->

                    <div class="button">
                        <input type="submit" value="ENVOYER">
                    </div>

                </form>
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