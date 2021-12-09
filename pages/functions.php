<?php
    function LandingRow()
    {
        echo "

            <div class = 'justify-self-center'>

            </div>
        ";
    }
    
    function printNavbar($section){
      $x = " ";
      switch ($section){
        case 'CLASSE':
          $x = 'fa-user-graduate';
          break;
        case 'DOCENTI':
          $x = 'fa-chalkboard-teacher';
          break;
        case 'SVILUPPATORI':
          $x = 'fa-code';
          break;
      }
      echo '<div class="section-header w-100 d-flex justify-content-center">
        <div class="navbar col-6 justify-content-center flex-nowrap w-auto" id="'.strtolower($section).'">
            <a href="#'.strtolower($section).'" class="item">
                <i class="animate-bounce fas '.$x.'"></i>
                <span class="label">'.$section.'</span>
            </a>
        </div>
       </div>';
    }
?>