<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-sript-type" content="text/javascript">
    <meta http-equiv="content-style-type" content="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="theme-color" content="black"> <!--Color del texto fuera del meta viewport-->
    <meta name="apple-mobile-web-app-status-bar-style" content="black"> <!--Color de la pantalla fuera del meta viewport-->
    <meta name="msapplication-starturl" content="/?utm_source=homescreen">
    <meta name="distribuition" content="global">
    <meta name="robots" content="index, follow, all">
    <meta name="googlebot" content="index, follow, all">
    <meta name="google" content="translate">
    <meta name="revisit-after" content="7 days">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="copyright" content="Somisix Team">
    <title>Landing Page</title>
    <link rel="icon" href="img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <!-- <link rel="stylesheet" href="css/normalize.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <header>
     <div class="container">
     <div class="nav--logo">
     <h1 class="logo max-titulo">Cl<i class="bi bi-alarm-fill"></i>ck Awarks</h1>
     <span class="bi bi-list btn-menu" id="btnMenu"></span>
     </div>
     <nav class="menu">
      <ul>
        <li>
            <a href="#home" class="menu__link"><i class="bi bi-house"></i> Inicio</a>
        </li>
        <li>
            <a href="#aboutUs" class="menu__link"><i class="bi bi-person-check"></i> Sobre Nosotros</a>
        </li>
        <li>
            <a href="#service" class="menu__link"><i class="bi bi-journal-bookmark"></i> Servicios</a>
        </li>
        <li>
            <a href="#contact" class="menu__link"><i class="bi bi-person-lines-fill"></i> Contactos</a>
        </li>
      </ul>
     </nav>
     </div>
    </header>

    <main>
    <section class="home" id="home">
    <div class="container">

        <div class="home__banner--img">
            <img src="img/banner.jpg" alt="">
        </div>

        <div class="home__banner--txt">
        <h1 class="max-titulo">Lorem ipsum <br> dolorsit amet consectetur.</h1>
        <p class="texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, ducimus voluptatem, 
        dolorem doloribus eaquem veniam. Quae nisi cumque consequuntur, 
        molestiae iste quibusdam odit sunt!</p>
        </div>

        <div class="home__form">
            <h2 class="titulo">Lorem ipsum dolor sit.</h2>
            <p class="texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur officia soluta ipsam voluptas 
            repudiandae porro vel! Qui, <b>ex distinctio</b> animi culpa architecto, iste quas perspiciatis assumenda quam, 
            exercitationem voluptas inventore?</p>
            <form action="" method="POST" ectype="" target="_blank">
                <label for="" class="home__form--label">Lorem, ipsum:</label>
                <input type="text" class="home__form--input" required name="" placeholder="lorem impsum">
                <label for="" class="home__form--label">Lorem, ipsum dolor:</label>
                <input type="text" class="home__form--input" required name="" placeholder="culpa architecto">
                <label for="" class="home__form--label">Lorem, ipsum.</label>
                <input type="text" class="home__form--input" required name="" placeholder="consectetur">
                <label for="" class="home__form--label">Lorem ipsum dolor sit.</label>
                <input type="text" class="home__form--input" required name="" placeholder="Lorem ipsum">
                <label for="" class="home__form--label">Lorem, ipsum dolor.</label>
                <input type="text" class="home__form--input" required name="" placeholder="officia soluta ipsam">
                <label for="" class="home__form--label">Lorem, ipsum.</label>
                <select name="" id="" class="home__form--select">
                    <option value="" class="home__form--option" disabled>Option 1</option>
                    <option value="" class="home__form--option">Option 2</option>
                    <option value="" class="home__form--option">Option 3</option>
                    <option value="" class="home__form--option">Option 4</option>
                    <option value="" class="home__form--option">Option 5</option>
                    <option value="" class="home__form--option">Option 6</option>
                </select>
                <button class="home__form--button" type="submit">Enviar</button>
                <button class="home__form--button" type="reset">Borrar</button>
            </form>
        </div>

        <div class="home__info">
            <div class="home__info--item">
                <span class="bi bi-heart-pulse-fill"></span>
                <h3 class="sub-titulo">Lorem ipsum dolor sit amet.</h3>
                <p class="texto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores expedita cupiditate eum commodi 
                illo hic numquam voluptate excepturi doloremque beatae accusamus, earum iure provident debitis! 
                Cupiditate eaque obcaecati assumenda fugiat.</p>
            </div>
            <div class="home__info--item">
                <span class="bi bi-disc"></span>
                <h3 class="sub-titulo">Lorem ipsum dolor sit amet.</h3>
                <p class="texto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores expedita cupiditate eum commodi 
                illo hic numquam voluptate excepturi doloremque beatae accusamus, earum iure provident debitis! 
                Cupiditate eaque obcaecati assumenda fugiat.</p>
            </div>
            <div class="home__info--item">
                <span class="bi bi-hospital"></span>
                <h3 class="sub-titulo">Lorem ipsum dolor sit amet.</h3>
                <p class="texto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores expedita cupiditate eum commodi 
                illo hic numquam voluptate excepturi doloremque beatae accusamus, earum iure provident debitis! 
                Cupiditate eaque obcaecati assumenda fugiat.</p>
            </div>
        </div>
    </div>
    </section>


<section class="aboutUs" id="aboutUs">
    <div class="container">
        <h1 class="max-titulo">Lorem ipsum dolor sit amet consectetur.</h1>
        <p class="texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad laudantium perspiciatis eius obcaecati 
        voluptatem quod at autem provident ea a necessitatibus ratione facilis, esse tempore deserunt eveniet harum? Libero eveniet 
        laudantium sapiente.</p>
       <div class="video__aboutUs">
       <video src="video/info.mp4" type="video/mp4" controls></video>
       </div>

       <h3 class="sub-titulo">Lorem ipsum dolor sit amet consectetur.</h3>

<div class="clasificacion">
<div class="clasificacion__info">
    <p class="clasificacion__info--stars">
        <input id="radio1" type="radio" name="estrellas" value="5">
         <label for="radio1">★</label>
         <input id="radio2" type="radio" name="estrellas" value="4">
         <label for="radio2">★</label>
         <input id="radio3" type="radio" name="estrellas" value="3">
         <label for="radio3">★</label>
         <input id="radio4" type="radio" name="estrellas" value="2">
         <label for="radio4">★</label>
         <input id="radio5" type="radio" name="estrellas" value="1">
         <label for="radio5">★</label>
    </p>
    <cite class="sub-titulo">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, alias.</cite>
</div>

<div class="clasificacion__img">
        <img src="img/aboutus1.jpg" alt="">
        <h4 class="mini-titulo">Real Name</h4>
        <i>Location</i>
</div>
</div>

<div class="clasificacion">
<div class="clasificacion__info">
    <p class="clasificacion__info--stars">
        <input id="radio1" type="radio" name="estrellas" value="5">
         <label for="radio1">★</label>
         <input id="radio2" type="radio" name="estrellas" value="4">
         <label for="radio2">★</label>
         <input id="radio3" type="radio" name="estrellas" value="3">
         <label for="radio3">★</label>
         <input id="radio4" type="radio" name="estrellas" value="2">
         <label for="radio4">★</label>
         <input id="radio5" type="radio" name="estrellas" value="1">
         <label for="radio5">★</label>
    </p>
    <cite class="sub-titulo">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, alias.</cite>
</div>

<div class="clasificacion__img">
        <img src="img/aboutus2.jpg" alt="">
        <h4 class="mini-titulo">Real Name</h4>
        <i>Location</i>
</div>
</div>

</div>
</section>


<section class="service" id="service">
    <div class="container">
    <article class="service__item">
        <img src="img/service1.jpg" alt="">
        <h2 class="titulo">Feacture 1</h2>
        <p class="texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam quia reiciendis quaerat totam nobis 
        voluptatem molestiae blanditiis architecto, autem aspernatur neque ipsam voluptatum itaque, maxime est at, 
        non cumque ratione?</p>
    </article>
    <article class="service__item">
        <img src="img/service2.jpg" alt="">
        <h2 class="titulo">Feacture 2</h2>
        <p class="texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam quia reiciendis quaerat totam nobis 
        voluptatem molestiae blanditiis architecto, autem aspernatur neque ipsam voluptatum itaque, maxime est at, 
        non cumque ratione?</p>
    </article>
    <article class="service__item">
        <img src="img/service3.jpg" alt="">
        <h2 class="titulo">Feacture 3</h2>
        <p class="texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam quia reiciendis quaerat totam nobis 
        voluptatem molestiae blanditiis architecto, autem aspernatur neque ipsam voluptatum itaque, maxime est at, 
        non cumque ratione?</p>
    </article>
    </div>
</section>


    <section class="contact" id="contact">
    <div class="container">
        <div class="container--flex">
            <div class="column column--50">
                <img src="img/contact.jpg" alt="" class="contact__img">
            </div>
            <div class="column column--50">
                <h2 class="titulo">Lorem ipsum dolor sit.</h2>
                <p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas vero amet numquam fugiat nam 
                sed! Quod possimus libero, eveniet quisquam eum aliquam asperiores esse iusto 
                facere architecto ab deleniti. Doloribus!</p>
                <div class="contact__social">
                    <span class="bi bi-telephone-forward"> 55-555-555</span>
                    <span class="bi bi-telephone-forward"> 66-666-666</span>
                    <span class="bi bi-facebook"> <a href=""> Revisa en Facebook</a></span>
                    <span class="bi bi-twitter"> <a href=""> Visitanos en Twitter</a></span>
                    <span class="bi bi-instagram"> <a href=""> Siguenos en Instagram</a></span>
                    <span class="bi bi-envelope-at"> <a href=""> ejemplo@exemple.org</a></span>
                </div>
            </div>
        </div>
    </div>
    </section>
    </main>

    <footer>
        <div class="container">
        <h1 class="logo">Cl<i class="bi bi-alarm-fill"></i>ck</h1>
        <p class="texto">2023 &copy; Cl<i class="bi bi-alarm-fill"></i>ck</p>
        </div>
    </footer>
</body>
</html>