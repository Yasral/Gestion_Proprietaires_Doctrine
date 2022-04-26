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
            <div class="container-form">
                <h1 class="title-form">AJOUT D'UN PROPRIETAIRE</h1>
                <form method="post" action="<?php echo URLROOT ?>/proprietaire/add">

                <!-- Don't forgot to generate the error below the form fields --> 

                    <div class="user-details">
                        <!-- This section is for the user who responded to the enquiry -->
                        <div class="input-box">
                            <span class="details">Nom</span>
                            <input type="text" name="nom_p" id="" placeholder="Entrez le nom du proprietaire">
                            <span class="invalidFeedback">
                                <?php echo $data["nomError"] ?>
                            </span>
                        </div>
                        <div class="input-box">
                            <span class="details">Prenom</span>
                            <input type="text" name="prenom_p" id="" placeholder="Entrez le prenom du proprietaire">
                            <span class="invalidFeedback">
                                <?php echo $data["prenomError"] ?>
                            </span>
                        </div>
                        <div class="input-box">
                            <span class="details">Date De Naissance</span>
                            <input type="date" name="date_naissance" id="" placeholder="Entrez la date de naissance du proprietaire">
                            <span class="invalidFeedback">
                                <?php echo $data["date_naissance_Error"] ?>
                            </span>
                        </div>
                        <div class="input-box">
                            <span class="details">Lieu De Naissance</span>
                            <input type="text" name="lieu_naissance" id="" placeholder="Entrez le lieu de naissance du proprietaire">
                            <span class="invalidFeedback">
                                <?php echo $data["lieu_naissance_Error"] ?>
                            </span>
                        </div>
                        <div class="input-box">
                            <span class="details">Carte D'identite Nationale</span>
                            <input type="text" name="code_piece_identite" id="" placeholder="Entrez le code de la piece d'identite">
                            <span class="invalidFeedback">
                                <?php echo $data["code_piece_identite_Error"] ?>
                            </span>
                        </div>
                        <div class="input-box">
                            <span class="details">Numero Piece D'identite Nationale</span>
                            <input type="number" name="numero_piece_identite" id="" placeholder="Entrez le numero de la piece d'identite">
                            <span class="invalidFeedback">
                                <?php echo $data["numero_piece_identite_Error"] ?>
                            </span>
                        </div>
                        <div class="input-box">
                            <span class="details">Adresse</span>
                            <input type="text" name="adresse" id="" placeholder="Entrez l'adresse du proprietaire">
                            <span class="invalidFeedback">
                                <?php echo $data["adresseError"] ?>
                            </span>
                        </div>
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="email" name="email" id="" placeholder="Entrez l'email du proprietaire">
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