<?php
   require APPROOT . '/src/view/includes/head.php';
?>

<div class="container">
    <?php
       require APPROOT . '/src/view/includes/navigation.php';
    ?>
    <!-- Main content -->
        <main>
            <!-- Topbar menu -->
            <?php
                require APPROOT . '/src/view/includes/topbar.php';
            ?>
            <!-- Topbar menu -->

            <!-- Main content title -->
             <div class="container-form">
                <h1 class="title-form">Inscription</h1>
                <form method="post" action="<?php echo URLROOT; ?>/user/register">

                <!-- Don't forgot to generate the error below the form fields -->

                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Nom Complet</span>
                            <input type="text" name="" id="" placeholder="Entrez votre nom complet">
                        </div>
                        <div class="input-box">
                            <span class="details">Identifiant</span>
                            <input type="text" name="username" id="" placeholder="Entrez votre identifiant">
                            <span class="invalidFeedback">
                                <?php echo $data["usernameError"] ?>
                            </span>
                        </div>
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="email" name="email_user" id="" placeholder="Entrez votre email">
                            <span class="invalidFeedback">
                                <?php echo $data["email_userError"] ?>
                            </span>
                        </div>
                        <div class="input-box">
                            <span class="details">Numero Telephone</span>
                            <input type="tel" name="" id="" placeholder="Entrez votre numero de telephone">
                        </div>
                        <div class="input-box">
                            <span class="details">Mot De Passe</span>
                            <input type="password" name="password" id="" placeholder="Entrez votre mot de passe">
                            <span class="invalidFeedback">
                                <?php echo $data["passwordError"] ?>
                            </span>
                        </div>
                        <div class="input-box">
                            <span class="details">Confirmation</span>
                            <input type="password" name="confirmPassword" id="" placeholder="Confirmez votre mot de passe">
                            <span class="invalidFeedback">
                                <?php echo $data["confirmPasswordError"] ?>
                            </span>
                        </div>
                    </div>

                <!-- Don't forgot to generate the error below the form fields -->

                    <div class="button">
                        <input type="submit" value="ENVOYER">
                    </div>

                    <p class="options">Pas encore inscrit? <a href="<?php echo URLROOT; ?>/user/register"> Creer un compte!</a></p>
                </form>
            </div>
            <!-- Main content title -->
        </main>
        <!-- Main content -->
</div>

<?php
    require APPROOT . '/src/view/includes/scripts.php';
?>