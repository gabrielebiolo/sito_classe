<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIS Silvio Ceccato - Classe 5BI</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <script src="https://kit.fontawesome.com/dc8f0bc766.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

    <div class="main-section-wrapper">

        <div id="main-section-istituto" class="main-subsection-wrapper">
            <div class="parallax bgimg-istituto sticky top-0" alt="Docente che scrive alla lavagna">
                <div class="section-header w-100 d-flex justify-content-center" id="section-istituto">
                    <div class="navbar w-100 col-6 justify-content-center flex-nowrap" id="istituto">
                    <div class="d-flex w-100 justify-content-around text-white">
                        <a href="#istituto" class="item">
                            <div class="d-flex">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span class="label">Istituto</span>
                            </div>  
                        </a>
                        <a href="#section-classe"><i class="bi bi-chevron-bar-right"></i></a>
                        </div>
                    </div>
                </div>           
            </div>
            <section class="description d-flex justify-content-between align-items-center p-5">
                <div class="description-image-container">
                    <img class="description-image col-8" src="img/undraw_teaching_f-1-cm.svg" alt="Istituto">
                </div>
                <div class="text-container col-6">
                    <h2 class="title align-self-center mb-2">ISTITUTO</h2>
                    <p class="">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus maiores distinctio eius, molestiae labore deserunt sed aliquid optio ipsa accusamus tempora ut non similique sunt dicta, pariatur laudantium aperiam facilis?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque asperiores, unde repudiandae veritatis voluptatum molestiae nam dolor sequi dolore rem nobis mollitia deserunt aut corporis provident velit consectetur iure soluta?
                    </p>
                </div>
                <div class="description-image-container">
                    <img class="description-image col-8" src="img/undraw_teaching_f-1-cm.svg" alt="Istituto">
                </div>
            </section>
        </div>

        <div id="main-section-classe" class="main-subsection-wrapper">
            <div class="parallax bgimg-classe sticky top-0" alt="Classe">
                <div class="section-header w-100 d-flex justify-content-center" id="section-classe">
                    <div class="navbar w-100 col-6 justify-content-center flex-nowrap" id="classe">
                        <div class="d-flex w-100 justify-content-around text-white">
                            <a href="#section-istituto"><i class="bi bi-chevron-bar-left"></i></a>
                            <a href="#classe" class="item">
                            <div class="d-flex">
                                <i class="fas fa-user-graduate"></i>
                                <span class="label">Classe</span>
                            </div>  
                            </a>
                            <a href="#section-"><i class="bi bi-chevron-bar-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <section class="description d-flex justify-content-between align-items-center p-5">
                <div class="description-image-container">
                    <img class="description-image col-8" src="img/undraw_exams_g-4-ow.svg" alt="classe">
                </div>
                <div class="text-container col-6">
                    <h2 class="title align-self-center mb-2">CLASSE</h2>
                    <p class="">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus maiores distinctio eius, molestiae labore deserunt sed aliquid optio ipsa accusamus tempora ut non similique sunt dicta, pariatur laudantium aperiam facilis?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque asperiores, unde repudiandae veritatis voluptatum molestiae nam dolor sequi dolore rem nobis mollitia deserunt aut corporis provident velit consectetur iure soluta?
                    </p>
                </div>
                <div class="description-image-container">
                    <img class="description-image col-8" src="img/undraw_studying_s-3-l7.svg" alt="classe">
                </div>
            </section>
        </div>

    </div>
</body>
</html>