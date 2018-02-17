<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        
        <title>A Louer</title>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery.jcarousel.min.js"></script>
        <script src="js/modernizr.js"></script>        
        <script>
            /*$(document).ready(function(){
                $("#myBtn").click(function(){
                    $("#myModal").modal();
                });
            });*/
        </script>

    </head>
    <body>
        <header class="container-fluid"> 
            <nav class="navbar navbar-toggleable-sm bg-inverse navbar-inverse text-white row">
                <div class="container px-5 px-sm-0">
                    <a href="index.php?Recherche&action=accueil" class="navbar-brand mr-5"><img src="images/logo.png" alt="logo" style="width:60%"></a>
						<?php if (isset($_SESSION["alert"])) {?>
						<div class="alert alert-success" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<strong>Reussi!</strong> <?= $_SESSION["alert"] ?>
						</div> <?php 
						unset($_SESSION['alert']);
						} ?>
						<?php if (isset($_SESSION["warning"])) {?>
						<div class="alert alert-danger" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<strong>Attention !</strong> <?= $_SESSION["warning"] ?>
						</div> <?php 
						unset($_SESSION['warning']);
						} ?>
					
                    <?php if (!isset($_SESSION["courriel"])) { ?>
					<div class="ml-auto d-flex flex-nowrap">
                        <a href="#" class="nav-item nav-link fa fa-sign-in fa-lg bg-login" data-toggle="modal" data-target="#loginModal">Login</a>
                        <!-- Modal -->
                        <div class="modal fade" id="loginModal" role="dialog">
                            <div class="modal-dialog" id="dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header" style="padding:15px 30px;">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <h6 class="text-white"> Connectez-vous avec votre adresse e-mail</h6>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body" style="padding:15px 15px;">
                                        
                                        <form role="form" action="index.php?Usagers&action=verificationLogin" method="post">
                                            <div class="form-group">
                                                <div class="offset-">
                                                    <label for="psw"><span class="fa fa-envelope" aria-hidden="true"></span></label>
                                                </div>
                                                <input type="email" name="courriel" class="form-control" id="courriel" placeholder="Courriel">
                                            </div>
                                            <div class="form-group">
                                                <label for="psw"><span class="fa fa-key" aria-hidden="true"></span></label>
                                                <input type="password" name="MotDePasse" class="form-control" id="psw" placeholder="Mot de passe">
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="" checked class="textModal"> Se souvenir de moi</label>
                                            </div>
                                            <button type="submit" id="btnModal" class="btn-block btn-bleu">Se connecter</button>
                                        </form>
 
                                    </div>
                                    <!-- modal-body -->
                                    <div class="modal-footer">
                                        <p class="textModal">Vous n’avez pas de compte ?<a href="index.php?Usagers&action=ajouterUsager"> Inscription</a><br></p>
                                    </div>
                                </div><!-- modal-content -->
                            </div><!-- modal-dialog -->
                        </div><!-- modal fade -->
                    </div><!-- ml-auto -->
				   <?php }
					else { ?>
					<div><span><?= $_SESSION["courriel"];?></span>
						<a href="index.php?Usagers&action=Logout" id="myBtn" class="nav-item nav-link fa fa-sign-out fa-lg bg-login" aria-hidden="true"> Déconnexion</a>
					</div>
					<?php } ?>					
					
                </div><!-- container px-5 -->
            </nav>
            <div class="my-4 text-center">
                <?= (isset($_SESSION["loginMessage"]) ? $_SESSION["loginMessage"] : "")?>
            </div>
        </header>
      
<script>
	window.setTimeout(function() {
		$(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
		});
	}, 4000);
</script>
