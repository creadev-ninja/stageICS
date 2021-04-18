<div class="row">
          <div class="img-card">
            <img src="medias/images/logo-flat-desolation-finitions.svg" alt="drawn logo Crypto Beasty by Crypto Beasty">
          </div>
          <div class="card-body">
            <div class="img-card-brackets">
              <img src="medias/images/logo_bleft.svg" alt="drawn Bracket left by Crypto Beasty">
            </div>
            <section>
              <aside class="contact">
                <fieldset>
                  <form name="contact_form" method="post" action="">
                    <label for="nom">Nom *</label>
                        <input type="text" name="Nom" id="Nom" placeholder="Nom" class="form-control" required>
                        <label for="Prenom">Prenom</label>
                        <input type="text" name="Prenom" id="Prenom" placeholder="Prenom" class="form-control" required>
                        <label for="Jeux_Description">Description</label>
                        <textarea name="Jeux_Description" id="Jeux_Description" class="form-control" required placeholder="Description"></textarea>
                        <label for="Jeux_Prix">Prix</label>
                        <input type="number" name="Jeux_Prix" id="Jeux_Prix" placeholder="Prix" class="form-control" required>
                        <label for="Jeux_DateSortie">Date de sortie</label>
                        <input type="text" name="Jeux_DateSortie" id="Jeux_DateSortie" placeholder="date de sortie" class="form-control" required>
                        <label for="Jeux_PaysOrigine">Pays</label>
                        <input type="text" name="Jeux_PaysOrigine" id="Jeux_PaysOrigine" placeholder="Pays" class="form-control" required>
                        <label for="Jeux_Mode">Mode de jeu</label>
                        <input type="text" name="Jeux_Mode" id="Jeux_Mode" placeholder="Mode de jeu" class="form-control" required>
                        <label for="Jeux_Connexion">Connexion</label>
                        <input type="text" name="Jeux_Connexion" id="Jeux_Connexion" placeholder="Connexion" class="form-control" required>
                        <label for="Genre_Id">Genre</label>
                        <select name="Genre_Id" id="Genre_Id" class="form-control" required>
                            <option value="" disabled selected placeholder="Genre">Genre</option>
                            <!--listingGenre-->
                        </select>
                        <label for="Genre_Id">Plateformes</label>
                        <div class="PlateformesListing">
                            <!--listingPlateforme-->
                        </div>
                        <label for="Jeux_Img">Image</label>
                        <input type="file" name="Jeux_Img" id="Jeux_Img" placeholder="Image" class="form-control" required>
                        <div class="btns">
                            <input type="hidden" name="action" value="insert">
                            <input class="btn" type="submit" value="Insérer le nouveau jeu"> <input class="btn" type="reset" value="Reset">
                        </div>
                    </form>
                </fieldset>
                <fieldset>
                    <a href="index.php">Retour à la liste</a>
                </fieldset>
            </aside>
              
            </section>
            <div class="img-card-brackets">
              <img src="medias/images/logo_bright.svg" alt="drawn Bracket right by Crypto Beasty">
            </div>
          </div>
      </div>