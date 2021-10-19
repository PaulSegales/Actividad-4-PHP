<?php
    $menu = array("inicio", "definición", "importancia", "análisis", "comentarios", "contacto", "blogs");

    $titulo1 = "¿Qué es la inteligencia Artificial-AI";
    
    $subtitulo1 = "obtenga más información sobre la ciencia de datos";
    $subtitulo2 = "Obtenga más información sobre el machine learning";
    $subtitulo3 = "noticias y opiniones";
    $btnInfo = "Información";

    $nombre1 = "john deo";
    $nombre2 = "Alejandra Avendaño";
    $nombre3 =  "Yúbal Fernández";

    $fecha1 = "09/05/2007";
    $fecha2 = "15/05/2014";
    $fecha3 = "02/05/2011";

    $precPersonalizado1 = 6000;
    $precPersonalizado2 = 300000;
    $precPersonalizado3 = 40000;

    $precioTipo1 = 6000;
    $precioTipo2 = 35000;
    $precioTipo3 = 36000;
    $precioTipo4 = 56000;
    $precioTipo5 = 20000;
    $precioTipo6 = 35000;
    $precioTipo7 = 19000;
    $precioTipo8 = 34000;

    $btnMas = "Leer Mas";

    $name = "Paul Quispe Segales";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 4</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->
    <!-- <div id="particles-js"></div> -->

    <header class="header">

        <a href="#" class="logo">
            <img src="images/logo.png" alt="">
        </a>

        <nav class="navbar">
            <a href="#home"><?php echo "$menu[0]" ?></a>
            <a href="#about"><?php echo "$menu[1]" ?></a>
            <a href="#menu"><?php echo "$menu[2]" ?></a>
            <a href="#products"><?php echo "$menu[3]" ?></a>
            <a href="#review"><?php echo "$menu[4]" ?></a>
            <a href="#contact"><?php echo "$menu[5]" ?></a>
            <a href="#blogs"><?php echo "$menu[6]" ?></a>
        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>


    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3> <span style="color: rgb(47, 136, 215);">INTELIGENCIA</span>  artificial</h3>
            <p><b> En términos simples, inteligencia artificial (IA) se refiere a sistemas o máquinas que imitan la
                inteligencia humana para realizar tareas y pueden mejorar iterativamente a partir de la información que
                recopilan.</b> </p>
            <a href="#" class="btn"><?php echo "$btnInfo" ?></a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>definición</span> ai </h1>

        <div class="row">

            <div class="image">
                <img src="images/ai.jpg" alt="">
            </div>

            <div class="content">
                <h3><?php echo "$titulo1" ?></h3>
                <p>Aunque no haya una definición estricta, por su naturaleza, cambiante y experimental, en su forma
                    simple, la Inteligencia Artificial (IA) es la combinación de algoritmos planteados con el propósito
                    de crear máquinas que presenten las mismas capacidades que el ser humano. En otras palabras, es el
                    intento de imitar la inteligencia humana usando un robot, o un software.</p>
                    <a href="#" class="btn"><?php echo "$btnMas" ?></a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->

    <section class="menu" id="menu">

        <h1 class="heading"> su <span>importancia</span> </h1>

        <div class="box-container">


            <p>
                * La inteligencia artificial automatiza el aprendizaje y descubrimiento repetitivos a través de datos. La
                inteligencia artificial es diferente de la automatización de robots basada en hardware. En lugar de
                automatizar tareas manuales, la inteligencia artificial realiza tareas computarizadas frecuentes de alto
                volumen de manera confiable y sin fatiga. Para este tipo de automatización, la investigación humana
                sigue siendo fundamental para configurar el sistema y hacer las preguntas correctas.
            </p>

            <p>
                IA agrega inteligencia a productos existentes. En la mayoría de los casos, la inteligencia artificial no
                se venderá como aplicación individual. En su lugar, los productos que ya utiliza serán mejorados con
                recursos de inteligencia artificial, de forma muy similar en que se agregó Siri como característica a
                una nueva generación de productos de Apple. La automatización, las plataformas conversacionales, los
                bots y las máquinas inteligentes se pueden combinar con grandes cantidades de datos para mejorar muchas
                tecnologías en el hogar y en el lugar de trabajo, desde inteligencia de seguridad hasta análisis de las
                inversiones.
            </p>


        </div>

    </section>

    <!-- menu section ends -->

    <section class="products" id="products">

        <h1 class="heading"> analisis <span>de datos y costos </span> </h1>

        <div class="box-container">

            <p>La inteligencia artificial analiza más datos y datos más profundos empleando redes neuronales que tienen muchas capas ocultas. Construir un sistema de detección de fraude con cinco capas ocultas era casi imposible hace unos años. Todo eso ha cambiado con increíble poder de cómputo y el Big Data. Se necesitan muchos datos para entrenar modelos de aprendizaje profundo porque aprenden directamente de los datos. Cuantos más datos les pueda proporcionar, más precisos se vuelven.</p>

            <p>
                La inteligencia artificial logra una increíble precisión a través de redes neuronales profundas – lo cual antes era imposible. Por ejemplo, sus interacciones con Alexa, Google Search y Google Photos están todas basadas en el aprendizaje profundo – y se siguen volviendo más precisas cuanto más las usamos. En el campo de la medicina, las técnicas de inteligencia artificial del aprendizaje profundo, clasificación de imágenes y reconocimiento de objetos se pueden emplear ahora para detectar cáncer en MRIs (imágenes de resonancia magnética) con la misma precisión que radiólogos altamente capacitados.
            </p>

            <p>
                <b>Costos de IA por tipo de software</b>
            

            Software personalizado: desde $<?php echo "$precPersonalizado1" ?> dólares hasta $ <?php echo "$precPersonalizado2" ?> dólares por solución
            Software de terceros: un promedio de $<?php echo "$precPersonalizado3" ?> dólares anuales

            <b>Ejemplos de costos de IA por tipo de solución</b>
            

            Chatbot construido a la medida de la empresa: desde $<?php echo "$precioTipo1" ?> dólares
            Análisis de datos con machine learning: apróximadamente $<?php echo "$precioTipo2" ?> dólares
            Soluciones de telemedicina para la salud digital: entre $<?php echo "$precioTipo3" ?> dólares y $<?php echo "$precioTipo4" ?> dólares
            Motor inteligente de búsqueda y recomendaciones especializadas: entre $<?php echo "$precioTipo5" ?> dólares y $<?php echo "$precioTipo6" ?> dólares
            Generador de imágenes creativas de alta resolución: entre $<?php echo "$precioTipo7" ?> dólares y $<?php echo "$precioTipo8" ?> dólares
            </p>
            
            

        </div>

    </section>

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> comentarios <span>relevantes</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/quote-img1.png" alt=""  style="height: 58px;width: 80px;">
                <p>La Inteligencia Artificial (IA) sin lugar a dudas ha sido uno de los grandes avances de la última década, permitiendo agilizar y facilitar procesos a toda escala, y entregando una ayuda fundamental para las personas y empresas. Contar con este tipo de tecnología hoy en día nos entrega la capacidad de conocer mejor a los usuarios, sus comportamientos y alinear servicios dependiendo de las necesidades que éstos tengan..</p>
                <img src="images/pic-1.png" class="user" alt="">
                <h3><?php echo "$nombre1" ?></h3>
                <h4><?php echo "$fecha1" ?></h4>
  
            </div>

            <div class="box">
                <img src="images/quote-img1.png" alt="" style="height: 58px;width: 80px;">>
                <p>En la sociedad, dentro de las ciencias de la computación, la de la Inteligencia Artificial es una de las áreas que causa más expectación. Que un sistema pueda mejorar su comportamiento sobre la base de la experiencia y que además, tenga una noción de lo que es un error y que pueda evitarlo, resulta muy interesante.    </p>
                <img src="images/pic-2.png" class="user" alt="">
                <h3><?php echo "$nombre2" ?></h3>
                <h4><?php echo "$fecha2" ?></h4>

            </div>

            <div class="box">
                <img src="images/quote-img1.png" alt="" style="height: 58px;width: 80px;">>
                <p>Los métodos tradicionales en Inteligencia Artificial que permitieron el desarrollo de los primeros sistemas expertos y otras aplicaciones, ha ido de la mano de los avances tecnológicos y las fronteras se han ido expandiendo constantemente cada vez que un logro, considerado imposible en su momento, se vuelve posible gracias a los avances en todo el mundo, generando incluso una nueva mentalidad de trabajo.  Creando siempre máquinas capaces de ayudar al ser humano, de sustituirlo en tareas desagradables, duraderas, pesadas o como complemento de ocio. </p>
                <img src="images/pic-3.png" class="user" alt="">
                <h3><?php echo "$nombre3" ?></h3>
                <h4><?php echo "$fecha3" ?></h4>

            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contacto</span> </h1>

        <div class="row">

            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61256.433394945016!2d-71.57470343704381!3d-16.347090697480944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424990324bdd7b%3A0x2b50f69797a5d510!2sCayma!5e0!3m2!1ses-419!2spe!4v1630621949111!5m2!1ses-419!2sp"
                allowfullscreen="" loading="lazy"></iframe>

            <form action="">
                <h3>contactarse</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="nombre">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="número">
                </div>
                <input type="submit" value="contactate" class="btn">
            </form>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> nuestros <span>blogs</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/blog1.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title"><?php echo "$subtitulo1" ?></a>

                    <p>Las empresas combinan activamente las estadisticas con conceptos de ciencia informática como el
                        marchine learning y la inteligencia artificial.</p>
                    <a href="#" class="btn"><?php echo "$btnMas" ?></a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog2.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title"><?php echo "$subtitulo2" ?></a>
                    <p>El machine learning, un subconjunto de la inteligencia artificial (IA). se centra en diseñar
                        sistemas que aprenden a través de datos.</p>
                    <a href="#" class="btn"><?php echo "$btnMas" ?></a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog3.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title"><?php echo "$subtitulo3" ?></a>
                    <p>La inteligencia artificial, el machine learning y la ciencia de datos están cambiando la manera
                        en que las empresas abordan problemas complejos para alterar la trayectoria de sus respectias
                        industrias.</p><br>
                    <a href="#" class="btn"><?php echo "$btnMas" ?></a>
                </div>
            </div>

        </div>

    </section>

    <!-- blogs section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="links">
            <a href="#"><?php echo "$menu[0]" ?></a>
            <a href="#"><?php echo "$menu[1]" ?></a>
            <a href="#"><?php echo "$menu[2]" ?></a>
            <a href="#"><?php echo "$menu[3]" ?></a>
            <a href="#"><?php echo "$menu[4]" ?></a>
            <a href="#"><?php echo "$menu[5]" ?></a>
            <a href="#"><?php echo "$menu[6]" ?></a>
        </div>

        <div class="credit">created by <span> <?php echo "$name" ?></span> | all rights reserved</div>

    </section>

    <!-- footer section ends -->

















    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <script src="js/particles.min.js"></script>

    <script src="/js/app.js"></script>

</body>

</html>