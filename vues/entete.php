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
    </head>
    <body>
        <header> 
          <nav class="navbar navbar-toggleable-sm bg-inverse navbar-inverse mb-5 text-white">
            <div class="container px-5 px-sm-0" >
              <a href="#" class="navbar-brand mr-5"><img src="images/logo.png" alt="logo" style="width:100px;"></a>    <?php 
                 if (!isset($_SESSION["courriel"])) {
              ?>              
              <div class="ml-auto d-flex flex-nowrap">                
                <a href="#" id="myBtn" class="nav-item nav-link fa fa-sign-in fa-lg bg-login"> Login</a>                 
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog" id="dialog">
                    <!-- Modal content-->
                    <div class="modal-content">                      
                      <div class="modal-header" style="padding:15px 30px;">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <h6> Connectez-vous avec votre adresse e-mail</h6>                         
                        <button type="button" class="close" data-dismiss="modal">&times;</button>                        
                      </div>
                      <div class="modal-body" style="padding:15px 15px;">                        
                        <form role="form" action="index.php?Usagers&action=verificationLogin" method="post">
<?php 
                        if (!isset($_SESSION["UserName"])) {
?>
                         <div class="form-group">
                            <label for="psw"><span class="fa fa-envelope" aria-hidden="true"></span></label>
                            <input type="email" class="form-control" id="psw" placeholder="Courriel">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          </div>                          
                          <div class="form-group">
                            <label for="psw"><span class="fa fa-key" aria-hidden="true"></span></label>
                            <input type="password" class="form-control" id="psw" placeholder="Mot de passe">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="" checked class="textModal"> Se souvenir de moi</label>
                          </div>
                            <button type="submit" id="btnModal" class="btn-block">Se connecter</button>
                        </form>
<?php
                        }
                        else { 
?>
                            <div><span><?= $_SESSION["courriel"];?></span>
                              <a href="index.php?Usagers&action=Logout" id="myBtn" class="nav-item nav-link fa fa-sign-out fa-lg bg-login" aria-hidden="true"> Déconnexion</a>                                
                            </div>
<?php
                        } 
?>
                      </div><!-- modal-body -->
                      <div class="modal-footer">                       
                        <p class="textModal">Vous n’avez pas de compte ?<a href="#"> Inscription</a></p>                        
                      </div>
                    </div><!-- modal-content -->
                  </div><!-- modal-dialog -->
                </div><!-- modal fade -->
              </div><!-- ml-auto --> 
            </div><!-- container px-5 -->   
          </nav>
        </header>
      
        <div class="my-4 text-center">
            <?= (isset($_SESSION["loginMessage"]) ? $_SESSION["loginMessage"] : "")?>
        </div>
      
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>   

        <main>
