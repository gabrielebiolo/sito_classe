<?php include 'top.php' ?>
<link rel="stylesheet" href="../css/developers_section.css">        
<style>
        /* body {
            width: 100%;
            height: 100vh;
        } */

    canvas {
        position: fixed;
        width: 100%;
        height: 100%;
    }

    .card {
        background: rgba(255, 255, 255, 0.09);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(30px);
        -webkit-backdrop-filter: blur(30px);
        border: 1px solid rgba(255, 255, 255, 0.58);
        color: white;
    }
    .card img {
        border-radius: 5vh;
        padding: 3vh;
    }
</style>
<div class="background">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>

<link rel="stylesheet" href="../css/docenti_section.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/barba.js/0.0.2/barba.min.js"></script>
<script src="../js/library/three.r119.min.js"></script>
<script src="../js/library/vanta.net.min.js"></script>
<canvas id="element"></canvas>
<div class="container" id="background" style="color: black; text-align:center; padding:10px">
    <div class="row flex-wrap">
        <?php 
            $sql = "select * from docenti";
            $result = $conn->query($sql) or die($conn->error);
            while(($row = $result->fetch_assoc()) !== null)
                echo '<div class="col mb-3"><div class="card mouse-change docente cursor-image">
                <img class="card-img-top" src="../img/avatar/docenti/'.$row['img'].'" alt="Card image cap">
                <div class="card-body p-0"><h5 class="card-title text-bg">'.$row['nome'].'</h5>
                    <p class="card-text text-bg">Docente di '.$row['materia'].'.</p></div></div></div>';
        ?>
    </div>
</div>
<?php include './footer.php' ?>