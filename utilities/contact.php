<!-- formulaire  -->
    <div class="container w-50 py-5 my-4">
        <form>
            <div>
                <h4 class="text-uppercase fw-bold text-center">formulaire de contact</h4>

            </div>
            <div class="row mt-4">
                <div class="col-6">
                    <input type="text" class=" form-control rounded-3" id="nomInput" placeholder="VOTRE NOM"
                        aria-label="VOTRE NOM"> <!-- input du nom -->
                </div>
                <div class="col-6">
                    <input type="text" class="form-control rounded-3" id="prenomInput" placeholder="VOTRE PRENOM"
                        aria-label="VOTRE PRENOM"> <!-- input du prénom -->
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-6">
                    <input type="tel" class="form-control rounded-3" placeholder="VOTRE TELEPHONE"
                        aria-label="VOTRE TELEPHONE"> <!-- input du telephone -->
                </div>
                <div class="col-6">
                    <input type="email" class="form-control rounded-3" placeholder="VOTRE EMAIL" aria-label=" VOTRE EMAIL">
                    <!-- input du mail-->
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <input type="text" class="bg-grey form-control rounded-3" id="sujet" placeholder="SUJET"
                        aria-label="SUJET"> <!-- input du sujet -->
                </div>
            </div>
            <div class="mt-4">
                <textarea class="bg-grey form-control rounded-3" id="exampleFormControlTextarea1" rows="4"></textarea>
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-danger btn-outline-dark text-white fs-5 fw-bold text-uppercase ms-2">Envoyer</button>
            </div>
        </form>
    </div>
</section>