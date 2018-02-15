    <footer>
    <div class="row" id="info">
        <div class="circle mx-auto">
          <div class="row justify-content-center text-center">
            <div class="col-8 col-sm-6">
              <i class="fa fa-newspaper-o fa-lg iconFooter" aria-hidden="true"></i>
            </div>            
            <h6><b>publiez votre anonce</b></h6>
              <p>Ajoutez des photos de ton logement, definissez le prix à la journnée et précisez vos diponibilités. Votre anonnce est prête.</p>
          </div>
        </div><!-- circle -->   
        <div class="circle mx-auto">
          <div class="row justify-content-center text-center">
            <div class="col-8 col-sm-6">
              <i class="fa fa-envelope-o fa-lg iconFooter" aria-hidden="true"></i>
            </div>            
            <h6><b>Recevez de demandes<br>de location</b></h6>
              <p>À travers notre sisteme de messagerie, organisez les détails practiques avec les locataires.</p>
          </div>
        </div><!-- circle --> 
        <div class="circle mx-auto">
          <div class="row justify-content-center text-center">
            <div class="col-8 col-sm-6">
              <i class="fa fa-handshake-o fa-lg iconFooter" aria-hidden="true"></i>
            </div>            
            <h6><b>Logez votre logement</b></h6>
             <p>Faites le contrat de location avec le locataire via notre application <strong>À louer</strong> en toute sécurité</ </p>
          </div>
        </div><!-- circle --> 
        <div class="circle mx-auto">
          <div class="row justify-content-center text-center">
            <div class="col-8 col-sm-6">
              <i class="fa fa-money fa-lg iconFooter" aria-hidden="true"></i>
            </div>            
            <h6><b>Recevez vos gains</b></h6>
              <p>Vous êtes payé par paypal après la fin de la location.</p>
          </div>
        </div><!-- circle -->
    </div><!-- class="row" -->        

    <section class="row" id="services">
      <div class="container"> 
        <div class="row">
          <section class="col col-lg-4"> 
            <p class="footerText">Service Client<br>
              Aide aux locataires<br>
              Nous contacter</p>
          </section>
          <section class="col col-lg-4">
             <p class="footerText">Information sur la societé<br>
              Contions générales<br>
              Politiques de confidentialité</p>
          </section>
          <section class="col col-lg-4">
            <p class="text-center footerText">nous somme social</p>
              <div class="social d-flex justify-content-around">
                <a href="https://fr-ca.facebook.com/" class="fa fa-facebook"></a>
                <a href="https://plus.google.com" class="fa fa-google-plus"></a>
                <a href="https://twitter.com" class="fa fa-twitter"></a>
              </div>
          </section>
        </div><!-- row -->
      </div><!-- container -->
    </section> 
    </footer>
            <div class="row">
                <div class="col-sm-9 offset-sm-2 text-danger">
                    <?php if (isset($data["errors"])) {
                        if ($data["errors"] != "") {
                            echo "<p>" . $data["errors"] . "</p>";
                        }
                    } ?>
                </div>
            </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/tether.min.js"></script>

    </body>  <!-- D'entete.php -->
</html>  <!-- D'entete.php -->