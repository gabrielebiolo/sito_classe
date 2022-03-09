<?php 
  include 'top.php';
  require '../modules/getCircolari.php';
  $circolari = getCircolari();

  function assembleCircolari($circolari){
    foreach($circolari as $circolare)
      for($i = 0; $i < count($circolare); $i++){
        $title = $circolare[0];
        $id = $circolare[1];
        $categorie = $circolare[2];
        $pre_categories = '<li id="'.$id.'" class="list-group-item col"><a href="https://web.spaggiari.eu/sdg/app/default/view_documento.php?a=akVIEW_FROM_ID&id_documento='.$id.'&sede_codice=VIII0007"  data-categorie="';
        $post_categories = '">'.$title.'</a></li>';
        foreach ($categorie as $categoria) {
          $pre_categories .= $categoria.',';
        }
        $pre_categories = rtrim($pre_categories, ",");;
        echo $pre_categories.$post_categories;
      }
  }
?>

<div class="col-12">
  <div class="row justify-content-center">
    <div class="d-grid gap-3">
      <h1 class="text-center">Filtri</h1>
        <div class="form-floating mb-3 col-12 col-md-6 m-auto">

        </div>
      </div>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="d-grid justify-content-center">
      <h1 class="text-center m-3">Lista Circolari</h1>
      <ul class="list-group col-10 m-auto">
        <?php 
          $title; $id;
          assembleCircolari($circolari);
        ?>
      </ul>
    </div>
  </div>
</div>




<?php
  include 'footer.php';
?>