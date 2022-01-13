<?php 
include "top.php"; 
include 'functions.php';
?>
<!--
    <div class="main-nav">
        <a class="main-nav-item" href="">
            <i class="icon"></i>
            <span class="tag"></span>
        </a>
        <a class="main-nav-item" href="">
            <i class="icon"></i>
            <span class="tag"></span>
        </a>
        <a class="main-nav-item" href="">
            <i class="icon"></i>
            <span class="tag"></span>
        </a>
        <a class="main-nav-item" href="">
            <i class="icon"></i>
            <span class="tag"></span>
        </a>
    </div>

    <div class="section-header w-100 d-flex justify-content-center">
        <div class="navbar col-6 justify-content-evenly">
            <a href="#home" class="navbar-item">HOME</a>
            <a href="#about" class="navbar-item">ABOUT</a>
            <a href="#portfolio" class="navbar-item">PORTFOLIO</a>
            <a href="#contact" class="navbar-item">CONTACT</a>
        </div>
    </div>


    <div class="parallax bgimg-1">
        <div class="text-on-image">
            <span class="border">CLASSE 5BI</span>
        </div>
    </div> -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <div class="main-section-wrapper">
        <div id="main-section-classe" class="main-subsection-wrapper">
            <div class="parallax bgimg-classe sticky top-0" alt="Classe">
                <?php 
                    printNavbar("CLASSE");
                ?>
            </div>
            <section class="description d-flex justify-content-between align-items-center p-5">
                <div class="description-image-container">
                    <img class="description-image col-8" src="../img/undraw_exams_g-4-ow.svg" alt="classe">
                </div>
                <div class="text-container col-6 d-flex flex-column">
                    <h2 class="title align-self-center mb-2">CLASSE</h2>
                    <p class="">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus maiores distinctio eius, molestiae labore deserunt sed aliquid optio ipsa accusamus tempora ut non similique sunt dicta, pariatur laudantium aperiam facilis?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque asperiores, unde repudiandae veritatis voluptatum molestiae nam dolor sequi dolore rem nobis mollitia deserunt aut corporis provident velit consectetur iure soluta?
                    </p>
                </div>
                <div class="description-image-container">
                    <img class="description-image col-8" src="../img/undraw_studying_s-3-l7.svg" alt="classe">
                </div>
            </section>
        </div>

        <div id="main-section-docenti" class="main-subsection-wrapper">
            <div class="parallax bgimg-docenti sticky top-0" alt="Docente che scrive alla lavagna">
                <?php 
                    printNavbar("DOCENTI");
                ?>            
            </div>
            <section class="description d-flex justify-content-between align-items-center p-5">
                <div class="description-image-container">
                    <img class="description-image col-8" src="../img/undraw_teaching_f-1-cm.svg" alt="Insengante">
                </div>
                <div class="text-container col-6 d-flex flex-column">
                    <h2 class="title align-self-center mb-2">DOCENTI</h2>
                    <p class="">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus maiores distinctio eius, molestiae labore deserunt sed aliquid optio ipsa accusamus tempora ut non similique sunt dicta, pariatur laudantium aperiam facilis?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque asperiores, unde repudiandae veritatis voluptatum molestiae nam dolor sequi dolore rem nobis mollitia deserunt aut corporis provident velit consectetur iure soluta?
                    </p>
                </div>
                <div class="description-image-container">
                    <img class="description-image col-8" src="../img/undraw_teaching_f-1-cm.svg" alt="Insengante">
                </div>
            </section>
        </div>

        <div id="main-section-istituto" class="main-subsection-wrapper">
            <div class="parallax bgimg-istituto sticky top-0" alt="Docente che scrive alla lavagna">
                <?php 
                    printNavbar("ISTITUTO");
                ?>            
            </div>
            <section class="description d-flex justify-content-between align-items-center p-5">
                <div class="col-12">
                    <div class="description-image-container">
                    <img class="description-image col-8" src="../img/undraw_teaching_f-1-cm.svg" alt="Istituto">
                </div>
                <div class="text-container col-6 d-flex flex-column">
                    <h2 class="title align-self-center mb-2">Istituto</h2>
                    <p class="">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus maiores distinctio eius, molestiae labore deserunt sed aliquid optio ipsa accusamus tempora ut non similique sunt dicta, pariatur laudantium aperiam facilis?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque asperiores, unde repudiandae veritatis voluptatum molestiae nam dolor sequi dolore rem nobis mollitia deserunt aut corporis provident velit consectetur iure soluta?
                    </p>
                </div>
                <div class="description-image-container">
                    <img class="description-image col-8" src="../img/undraw_teaching_f-1-cm.svg" alt="Istituto">
                </div>
                </div>
                <div class="links col-12">
                    <a href="problems.php"><i class="fa fa-exclamation-circle"></i></a>
                </div>
            </section>
        </div>

        <div id="main-section-sviluppatori" class="main-subsection-wrapper">
            <div class="parallax bgimg-sviluppatori sticky top-0" alt="Docente che scrive alla lavagna">
                <?php 
                    printNavbar("SVILUPPATORI");
                ?>
            </div>
            <section class="description d-flex justify-content-between align-items-center p-5">
                <div class="description-image-container">
                    <img class="description-image" src="../img/undraw_web_developer_re_h7ie.svg" alt="Programmazione Web">
                </div>
                <div class="text-container d-flex flex-column">
                    <h2 class="title align-self-center mb-2">SVILUPPATORI</h2>
                    <p class="">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus maiores distinctio eius, molestiae labore deserunt sed aliquid optio ipsa accusamus tempora ut non similique sunt dicta, pariatur laudantium aperiam facilis?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque asperiores, unde repudiandae veritatis voluptatum molestiae nam dolor sequi dolore rem nobis mollitia deserunt aut corporis provident velit consectetur iure soluta?
                    </p>
                </div>
                <div class="description-image-container">
                    <img class="description-image" src="../img/undraw_engineering_team_u99p.svg" alt="Costruzione Sito">
                </div>  
            </section>
        </div>
    </div>

    <script type="module">
        const ClasseViva = require("classeviva-apiv2").ClasseViva;

        ClasseViva.establishSession("username", "password").then(async session => {
            const profile = await session.getProfile();
            const marks = await session.getMarks();

            console.log(profile);
        });
    </script>

    <script type="text/javascript">
    </script>

<?php 
    include 'footer.php';
?>