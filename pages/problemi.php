<?php 
  include 'top.php';
?>
<style>
*{
  cursor: auto !important;
}
</style>
  
<div class="row">
  <div class="col-12 p-2 d-flex">
    <h1 class="title text-center text-white m-auto">Problematiche</h1>
    <a class="btn collapsed" data-bs-toggle="tooltip" data-toggle="collapse" aria-expanded="" href="#aggiungi_problema"><i class="bi bi-plus-circle-fill add-icon fa-lg"></i></a>
  </div>
  <div class="col-12 p-2">
    <div id="aggiungi_problema" class="collapse bg-dark col-12 rounded-2">
      <div class="collapse-innner p-2 ">
        <form action="control.php" class="needs-validation col-12" novalidate method="post">
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="input-group mb-3">
                <div class="form-floating w-100">
                  <textarea class="form-control bg-secondary" placeholder="Leave a comment here" id="floatingTextarea" name="problema" required></textarea>
                  <label class="text-white" for="floatingTextarea">Descrivi</label>
                </div>
              </div>
            </div>
            <div class="col-8 col-md-3">
              <div class="form-floating mb-3">
                <input type="text" class="form-control bg-secondary" id="nome" name="nome" placeholder="Nome">
                <label class="text-white" for="floatingInput">Nome (facoltativo)</label>
              </div>
            </div>
            <div class="col-4 col-md-3">
              <div class="input-group mb-3 d-flex justify-content-center align-items-center h-100">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="riferimento" id="inlineRadio1" value="istituto">
                  <label class="form-check-label text-white" for="inlineRadio1">Istituto</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="riferimento" id="inlineRadio2" value="classe" checked>
                  <label class="form-check-label text-white" for="inlineRadio2">Classe</label>
                </div>
              </div>
            </div>
            <div class="col-12">
              <button id="btn-prob" name="btn_prob" type="submit" class="btn btn-primary">Applica</button>
            </div>
          </div>
        </form>
      </div> 
    </div> 
  </div>
  <div class="col-12">
    <div class="row d-flex justify-content-center">
      <div class="col-11 col-xs-10">
        <table class="table table-striped text-white overflow-auto">
          <thead>
            <tr>
              <th class="col-1">ID</th>
              <th class="col-6">Testo</th>
              <th class="col-3">Riferimento</th>
              <th class="col-3">Autore</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $sql = "select * from problemi";
              $result = $conn->query($sql) or die($conn->error);
              while(($row = $result->fetch_assoc()) !== null)
                echo '<tr class="text-white"><td class="col-1">'.htmlentities($row['id']).'</td><td class="col-6">'.htmlentities($row['testo']).'</td><td class="col-3">'.htmlentities($row['riferimento']).'</td><td class="col-3">'.htmlentities($row['nome']).'</td></tr>';
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php 
  include 'footer.php';
?>