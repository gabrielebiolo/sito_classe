<?php 
  include 'db.php';
  function checkQuery($conn, $sql){
      $echo = (mysqli_query($conn, $sql))? "Success" : "Error: " . mysqli_error($conn);
  }

  if(isset($_POST['btn_prob'])){
    $testo = (!empty($_POST['problema']))? htmlentities($_POST['problema']): '';
    $riferimento = (!empty($_POST['riferimento']))? htmlentities($_POST['riferimento']): '';
    $nome = (!empty($_POST['nome']))? htmlentities($_POST['nome']): '';
    if($riferimento == 'classe')
      $riferimento = 'classe';
    else if($riferimento == 'istituto')
      $riferimento = 'istituto';
       
    $sql = "insert into problemi (testo, riferimento, nome) values('$testo', '$riferimento', '$nome')";
    checkQuery($conn, $sql);
    header('location: problems.php');
  }
?>