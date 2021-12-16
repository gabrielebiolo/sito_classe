<?php
    function LandingRow()
    {
        echo "

            <div class = 'justify-self-center'>

            </div>
        ";
    }
    
    function printNavbar($section){
      $x = " ";$y = " ";$z = " ";
      switch ($section){
        case 'CLASSE':
          $x = '<a href="#section-disabled"><i class="bi bi-chevron-bar-left disabled"></i></a>';
          $y = 'fa-user-graduate';
          $z = '<a href="#section-docenti"><i class="bi bi-chevron-bar-right"></i></a>';
          break;
        case 'DOCENTI':
          $x = '<a href="#section-classe"><i class="bi bi-chevron-bar-left"></i></a>';
          $y = 'fa-chalkboard-teacher';
          $z = '<a href="#section-sviluppatori"><i class="bi bi-chevron-bar-right"></i></a>';
          break;
        case 'SVILUPPATORI':
          $x = '<a href="#section-docenti"><i class="bi bi-chevron-bar-left"></i></a>';
          $y = 'fa-code';
          $z = '<a href="#section-disabled"><i class="bi bi-chevron-bar-right disabled"></i></a>';
          break;
      }
      echo '<div class="section-header w-100 d-flex justify-content-center" id="section-'.strtolower($section).'">
        <div class="navbar w-100 col-6 justify-content-center flex-nowrap" id="'.strtolower($section).'">
          <div class="d-flex w-100 justify-content-around text-white">
            '.$x.'
            <a href="#'.strtolower($section).'" class="item">
              <div class="d-flex">
                <i class="animate-bounce fas '.$y.'"></i>
                <span class="label">'.$section.'</span>
              </div>  
            </a>
            '.$z.'
          </div>
        </div>
       </div>';
    }
?>
