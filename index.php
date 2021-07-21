<?php require 'pages/header.php' ?>

    
        <nav class="sub-menu">
            <ul>
                <li><a href="calca.php">Calças</a></li>
                <li><a href="camisa.php">Camisas</a></li>
                <li><a href="camiseta.php">Camisetas</a></li>
                <li><a href="vestido.php">Vestidos</a></li>
            </ul>
        </nav>
    
    
 
    <div id="MagicCarousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">

            <div class="carousel-item active mySlider">
                <img src="img/promocao1.png">
            </div>

            <div class="carousel-item mySlider">
                <img src="img/promocao2.png">
            </div>

            <div class="carousel-item mySlider">
                <img src="img/promocao3.png">
            </div>

            <div class="carousel-item mySlider">
                <img src="img/promocao4.png">
            </div>

            <a class="carousel-control-prev" href="#MagicCarousel" data-slide="prev" role="button">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#MagicCarousel" data-slide="next" role="button">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <section class="promo container">
        <div class="box">
            <a href="calca.php"><img src="img/calca1.jpg"></a>
        </div>

        <div class="box">
            <a href="camisa.php"><img src="img/camisa4.jpg"></a>
        </div>

        <div class="box">
            <a href="vestido.php"><img src="img/vestido1.jpg"></a>
        </div>
            
        <div class="box">
            <a href="camiseta.php"><img src="img/camiseta1.jpg"></a>
        </div>

    </section>
<?php require 'pages/footer.php' ?>