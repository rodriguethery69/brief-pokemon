<?php require_once dirname(__DIR__) . "/utilities/header.php";
require_once dirname(__DIR__) . "/function/potions.fn.php";
?>


<?php $potions = findAllPotionsGenres($db); ?>

<section class="intro">
  <div class="bg-image h-100" style="background-color: #6095F0;">
    <div class="">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card shadow-2-strong" style="background-color: #f5f7fa;">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-borderless mb-0">
                    <thead>
                      <tr>
                        <th scope="col">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                          </div>
                        </th>
                        <th scope="col">Titre</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Type</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php require_once dirname(__DIR__) . "/Crud/Partiel/boucle_potions_types.php"; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once dirname(__DIR__) . "/utilities/footer.php"; // Inclusion du footer  ?>