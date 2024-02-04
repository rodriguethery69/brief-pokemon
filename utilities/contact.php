<!-- formulaire  -->
<div class="container w-50">
    <form>
        <div>
            <h4 class="text-uppercase fw-bold">formulaire de contact</h4>

        </div>
        <div class="row mt-4">
            <div class="col-6">
                <input type="text" class=" form-control rounded-0" id="nomInput" placeholder="VOTRE NOM"
                    aria-label="VOTRE NOM"> <!-- input du nom -->
            </div>
            <div class="col-6">
                <input type="text" class="form-control rounded-0" id="prenomInput" placeholder="VOTRE PRENOM"
                    aria-label="VOTRE PRENOM"> <!-- input du prénom -->
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-6">
                <input type="tel" class="form-control rounded-0" placeholder="VOTRE TELEPHONE"
                    aria-label="VOTRE TELEPHONE"> <!-- input du telephone -->
            </div>
            <div class="col-6">
                <input type="email" class="form-control rounded-0" placeholder="VOTRE EMAIL" aria-label=" VOTRE EMAIL">
                <!-- input du mail-->
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <input type="text" class="bg-grey form-control rounded-0" id="sujet" placeholder="SUJET"
                    aria-label="SUJET"> <!-- input du sujet -->
            </div>
        </div>
        <div class="mt-4 h-50">
            <!-- input du textarea-->
            <textarea class="bg-grey form-control rounded-0 h-100 w-100" id="exampleFormControlTextarea1"
                rows="6"></textarea>
        </div>
        <div class="text-center">
            <button type="submit"
                class="mt-5 btn-lg rounded-0 btn btn-bg text-dark fs-5 fw-bold btn-outline-secondary border border-3 rounded-3">Envoyer</button>
        </div>
    </form>
</div>
</section>