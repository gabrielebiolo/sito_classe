<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIS Silvio Ceccato - Classe 5BI</title>

    <?php require("components/head.php"); ?>
</head>
<body>
    <?php require("components/navbar.php") ?>

    <nav class="navbar" id="navbar">
        <a class="navbar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i>
        </a>
        <a href="#home" class="navbar-item w3-button">HOME</a>
        <a href="#about" class="navbar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
        <a href="#portfolio" class="navbar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
        <a href="#contact" class="navbar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
        <a href="#" class="navbar-item w3-button w3-hide-small w3-right w3-hover-red">
        <i class="fas fa-search"></i>
        </a>
    </nav>

    <div class="parallax bgimg-1">
        <div class="text-on-image">
            <span class="border">CLASSE 5BI</span>
        </div>
    </div>
    <div class="mydiv p-10">
        <p class="mytext">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus maiores distinctio eius, molestiae labore deserunt sed aliquid optio ipsa accusamus tempora ut non similique sunt dicta, pariatur laudantium aperiam facilis?</p>
    </div>
    <div class="parallax bgimg-2">
        <div class="text-on-image">
            <span class="border">CLASSE 5BI</span>
        </div>
    </div>
    
</body>
</html>