<!-- TITLE -->
<?php $title = "Connexion"; ?>

<!-- MAIN -->
<?php ob_start(); ?>
<!-- CONNECTION -->
<div class="contentLogin">

    <body class="bg-gradient-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-12 col-xl-10">
                    <div class="card shadow-lg o-hidden border-0 my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-flex">
                                    <div class="flex-grow-1 bg-login-image"
                                        style="background-image: url(&quot;../public/img/image3.jpg&quot;);"></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h2 class="text-dark mb-4">Welcome Back!</h2>
                                        </div>
                                        <form class="formConnexion" action="index.php?action=adminLogin" method="post">
                                            <fieldset>
                                                <div class="form-group"><input class="form-control form-control-user"
                                                        type="text" id="exampleInputEmail" placeholder="Votre pseudo"
                                                        required name="username"></div>
                                                <div class="form-group"><input class="form-control form-control-user"
                                                        type="password" id="exampleInputPassword"
                                                        placeholder="Votre mot de passe" required name="password"></div>
                                                <div class="form-group">
                                                </div><button class="btn btn-primary btn-block text-white btn-user"
                                                    type="submit">Login</button>
                                                <hr>
                                            </fieldset>
                                        </form>
                                        <!-- ERROR MESSAGE -->
                                        <p class="signal"><?= $errorLogin ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../public/js/jquery.min.js"></script>
        <script src="../public/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
        <script src="../public/js/theme.js"></script>
    </body>
    <?php $content = ob_get_clean(); ?>
    <?php require('template.php'); ?>