<div>
            <h1 id="titre">Formulaire</h1>
        </div>
        <form>
            <h3>Si vous remplissez ce formulaire, ce témoignage sera publié dans le but de sensibiliser pour notre association</h3>
            <div class="form-group">
                <p>Lequel de ces choix vous correspond le plus ? </p>
                <label>
                  <input
                    name="user-recommend"
                    value="allies"
                    type="radio"
                    class="input-radio"
                    checked
                  />Alliés</label>
                <label>
                  <input
                    name="user-recommend"
                    value="lgbtqia"
                    type="radio"
                    class="input-radio"
                  />LGBTQIA+</label>
            </div>
            <div class="form-group">
                <p>Souhaitez-vous que ce témoignage soit anonyme ? </p>
                <label>
                  <input
                    name="user-recommend"
                    value="non"
                    type="radio"
                    class="input-radio"
                    checked
                  />Non</label>
                <label>
                  <input
                    name="user-recommend"
                    value="Oui"
                    type="radio"
                    class="input-radio"
                  />Oui</label>
            </div>
            <div class="form-group">
                <p>Si "Non" :</p>
                <label id="name-label" for="nom">Nom</label>
                <input
                  type="text"
                  name="nom"
                  id="nom"
                  class="form-control"
                  placeholder="Nom"
                />
              </div>
              <div class="form-group">
                <label id="name-label" for="nom">Prénom</label>
                <input
                  type="text"
                  name="prenom"
                  id="prenom"
                  class="form-control"
                  placeholder="Prénom"
                />
              </div>
              <div class="form-group">
                <label id="name-label" for="nom">Age</label>
                <input
                  type="text"
                  name="age"
                  id="age"
                  class="form-control"
                  placeholder="18"
                />
              </div>
              <div class="form-group">
                <label id="name-label" for="nom">Email</label>
                <input
                  type="text"
                  name="email"
                  id="email"
                  class="form-control"
                  placeholder="votreemail@email.com"
                />
              </div>
              <div class="form-group">
                <p>Votre témoignage :</p>
                <textarea
                  id="temoignage"
                  class="input-textarea"
                  name="temoignage"
                  placeholder="Votre témoignage..."
                ></textarea>
              </div>
              <div class="form-group">
                <p>Comment souhaitez-vous que votre témoignage soit diffusé ? 
                    (Plusieurs choix possibles)</p>
                <label>
                  <input
                    name="user-recommend"
                    value="audio"
                    type="checkbox"
                    class="input-checkbox"
                    checked
                  />Audio</label
                >
                <label>
                  <input
                    name="user-recommend"
                    value="bd"
                    type="checkbox"
                    class="input-checkbox"
                  />BD</label
                >
          
                <label
                  ><input
                    name="user-recommend"
                    value="ecrit"
                    type="checkbox"
                    class="input-checkbox"
                  />Ecrit</label>
            </div>
            <div class="form-group">
                <button type="submit" id="submit" class="submit-button">
                  Envoyer
                </button>
              </div>
        </form>