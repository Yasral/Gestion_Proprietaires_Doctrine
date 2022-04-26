<!-- Creation of the navigation -->
<div class="navigation">
            <a href="" class="logo">
                <span class="icon"></span>
                <span class="title">RECENSEMENT</span>
            </a>
            <ul>
                <li>
                    <a href="<?php echo URLROOT ?>/proprietaire/index">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Accueil</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo URLROOT ?>/proprietaire/all">
                        <span class="icon">
                            <ion-icon name="list-outline"></ion-icon>
                        </span>
                        <span class="title">Liste des proprietaires</span>
                    </a>
                </li>

                <!-- We gonna display the add button only if the user is logged in -->
                <?php if(isLoggedIn()) : ?>
                    <li>
                        <a href="<?php echo URLROOT ?>/proprietaire/add">
                            <span class="icon">
                                <ion-icon name="add-outline"></ion-icon>
                            </span>
                            <span class="title">Ajout</span>
                        </a>
                    </li>
                <?php endif; ?>
                <!-- We gonna display the add button only if the user is logged in -->

                <!-- We are handling the display of the login and register button -->
                <li>
                    <?php if(isset($_SESSION["id_user"])) : ?>
                        <a href="<?php echo URLROOT ?>/user/logout">
                            <span class="icon">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </span>
                            <span class="title">Deconnexion</span>
                        </a>
                    <?php else : ?>
                        <a href="<?php echo URLROOT ?>/user/login">
                            <span class="icon">
                                <ion-icon name="log-in-outline"></ion-icon>
                            </span>
                            <span class="title">Connexion</span>
                        </a>
                    <?php endif; ?>
                </li>
                <!-- We are handling the display of the login and register button -->
            </ul>
        </div>