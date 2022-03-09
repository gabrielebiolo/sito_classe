<?php 
include 'top.php';
    function setAvatar(){
        $var = rand();
        echo $var;
    }
?>

<section>
    <div class="text-center">
        <h1 class="title mt-2">DEV <br><h3 class="text-muted">Siamo qui per voi! ❤️</h3></h1>
    </div>
</section>

<section class="section-comments col-12">
    <div class="row">
        <?php 
            $sql = "select * from sviluppatori";
            $result = $conn->query($sql) or die($conn->error);
            while(($row = $result->fetch_assoc()) !== null){            
        ?>
        <div class="col-12 col-md-4">
            <div class="row justify-content-center">
                <div class="avatar col-12 col-sm-4">
                    <img src="https://avatars.dicebear.com/api/bottts/<?php setAvatar() ?>.svg" style="width: 10vh; height:10vh;">
                </div>
                <div class="col-12 col-sm-auto d-flex justify-content-center align-items-center">
                    <p><?php echo htmlentities($row['nome']);?></p>
                </div>              
            </div>
        </div>
        <div class="col-12 col-md-8 p-4">
            <p class="mouse-change"><?php echo htmlentities($row['descrizione']);?></p>
            <!-- <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-placement="top" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
                Tooltip on topb
            </button> -->
            <br>
            <hr>
        </div>
        <?php
            }
        ?>
    </div>
</section>

<?php include('./footer.php'); ?>   