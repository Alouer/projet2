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
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <body>
        <header>
          <nav class="navbar navbar-toggleable-sm bg-inverse mb-5 text-white">
            <div class="container px-5 px-sm-0" >
              <a href="#" class="navbar-brand mr-5"><img src="images/logo.png" alt="logo" style="width:100px;"></a>              
              <div class="ml-auto d-flex flex-nowrap">                
                <a href="#" id="myBtn" class="nav-item nav-link fa fa-sign-in fa-lg bg-login"> Login</a>                 
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog" id="myModal2">
                    <!-- Modal content-->
                    <div class="modal-content" tabindex="-1">
                      <div class="modal-header" style="padding:20px 40px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4><span class="fas fa-lock"></span> Login</h4>
                      </div>
                      <div class="modal-body" style="padding:30px 40px;">
                        <form role="form">
<?php 
                        if (!isset($_SESSION["UserName"])) {
?>
                          <div class="form-group">
                            <li class="fa-user-circle"></li>
                            <input type="text" class="form-control" id="usrname" placeholder="Courriel">
                          </div>
                          <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                            <input type="text" class="form-control" id="psw" placeholder="Mot de passe">
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox" value="" checked>Remember me</label>
                          </div>
                            <button type="submit" class="btn btn-bleu btn-block"><span></span>Se connecter</button>
                        </form>
<?php
                        }
                        else { 
?>
                            <div>
                              <a href="index.php?Users&action=Logout" id="myBtn" class="nav-item nav-link fa fa-sign-out fa-lg bg-login" aria-hidden="true"> Déconnexion</a>                                
                            </div>
<?php
                            } 
?>
                      </div>
                      <div class="modal-footer">                       
                        <p class="textModal">Pour créer un compte <a href="#"> Cliquez ici</a></p>                        
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
