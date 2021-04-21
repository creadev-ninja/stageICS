<?php include_once ('contactForm.php');?>      
          <div class="row">
                  
                  <div class="img-form">
                    <img src="medias/images/logo_bleft.svg" alt="drawn portrait of christelle Barret by Crypto Beasty">
                  </div>
                  <div class="card-body-form">
                    <?php echo $errorText; ?>
                    <form action="" name="contact-form" method="POST">
                      <fieldset>
                        <label class="require" for="nom">Nom<span>*</span></label>
                        <input type="text" name="nom" value="" required>
                      
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom" value="">

                        <label for="societe">Société</label>
                        <input type="text" name="societe" value="">

                        <label for="tel">Téléphone</label>
                        <input type="text" name="tel" value="">

                        <label class="require" for="mail">Email<span>*</span></label>
                        <input type="text" name="mail" value="" required>

                        <label class="require" for="objet">Objet message<span>*</span></label>
                        <input type="text" name="objet" value="" required>

                        <label class="require" for="message">Message<span>*</span></label>
                        <textarea name="message" id="message" cols="30" rows="5" value="" required></textarea>

                        <input type="submit" value="Envoyer" class="submit">
                        
                      </fieldset>
                    
                    </form>
                  </div>
                  <div class="img-form">
                    <img src="medias/images/logo_bright.svg" alt="drawn portrait of christelle Barret by Crypto Beasty">
                  </div>
              </div>


              
    
