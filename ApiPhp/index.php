<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./style.css"/>
    </head>
    <body>

        <!-------------------------------- HEADER ----------------------------->
        <header class="header">
            <!-- NAVBAR -->
            <div class="menu container">
                <a href="#" class="logo" ></a>
                <input type="checkbox" id="menu" />
                <label for="menu">
                    <img src="./assets/menu.png" class="menu-icon" alt="alt"/>

                </label>
                <nav class="navbar">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>

                </nav>

            </div>
            <!-- BANNER -->
            <div class="header-content container">
                <div class="header-txt">
                    <h1>Medical center</h1>
                    <p>
                      Praesent et posuere ipsum, in luctus risus. Cras nunc eros,
                    tristique quis felis sit amet, euismod sollicitudin mauris. 
                    Morbi id scelerisque massa. Donec sagittis metus ut nisl vulputate 
                    condimentum. Nulla dolor massa, euismod non quam sed, 
                    luctus hendrerit dui. Integer vel consequat libero.
                    Nam interdum enim at auctor scelerisque. Vestibulum sit amet 
                    pulvinar tellus. Quisque accumsan facilisis mi, 
                    vel ultricies lacus congue sed. Ut suscipit mauris at 
                    ligula rhoncus, vel volutpat eros tincidunt.

                    </p>
                     <a href="#" class="btn-1">information</a>
                    </div>
                   
                    <div class="header-img">
                        <img src="./assets/left.png" alt="alt"/>
                    </div>
                
            </div>
        </header>

        <!-------------------------- ABOUT ----------------------------------->
        <section class="about container"> 

            <div class="about-img">
                <img  src="./assets/about.png" alt="alt"/>
            </div>
            <div class="about-txt">
                <h2>Nosotros</h2>
                <p>Praesent et posuere ipsum, in luctus risus. Cras nunc eros,
                    tristique quis felis sit amet, euismod sollicitudin mauris. 
                    Morbi id scelerisque massa. Donec sagittis metus ut nisl vulputate 
                    condimentum. Nulla dolor massa, euismod non quam sed, 
                    luctus hendrerit dui. Integer vel consequat libero.
                    Nam interdum enim at auctor scelerisque. Vestibulum sit amet 
                    pulvinar tellus. Quisque accumsan facilisis mi, 
                    vel ultricies lacus congue sed. Ut suscipit mauris at 
                    ligula rhoncus, vel volutpat eros tincidunt. </p>
                <br>
                <p>raesent et posuere ipsum, in luctus risus. Cras nunc eros,
                    tristique quis felis sit amet, euismod sollicitudin mauris. 
                    Morbi id scelerisque massa. Donec sagittis metus ut nisl vulputate 
                    condimentum. Nulla dolor massa, euismod non quam sed, 
                    luctus hendrerit dui. Integer vel consequat libero.
                    Nam interdum enim at auctor scelerisque. Vestibulum sit amet 
                    pulvinar tellus. Quisque accumsan facilisis mi, 
                    vel ultricies lacus congue sed. Ut suscipit mauris at 
                    ligula rhoncus, vel volutpat eros tincidunt.</p>
            </div>



        </section>
        <!----------------------------------- MAIN ---------------------------->
        <main class="services">

            <h2>Services</h2>
            <div class="services-content container">

                <div class="services-1">
                    <i class="fa-sharp fa-solid fa-hospital-user"></i>
                    <h3>Pediatria</h3>
                </div>
                
                <div class="services-1">
                    <i class=" fa-solid fa-bed-pulse"></i>
                    <h3>Dermatoly</h3>
                </div>

                <div class="services-1">
                    <i class="fa-sharp fa-solid fa-stethoscope"></i>
                    <h3>Ginecology</h3>
                </div>

                <div class="services-1">
                    <i class="fa-sharp fa-solid fa-hospital"></i>
                    <h3>Cardiology</h3>
                </div>

            </div>

        </main>

        <!<!------------------------------- FORM ------------------------------->
        <section class="form container">
            <form method="post" autocomplete="off">

                <h2>Agenga consulta</h2>


                <div class="imput-group">

                    <div class="input-container">
                        <input type="text" name="name" placeholder="FullName">
                        <i class="fa-solid fa-user"></i>
                    </div>

                    <div class="input-container">
                        <input type="text" name="phone" placeholder="Phone">
                        <i class="fa-solid fa-phone"></i>
                    </div>

                    <div class="input-container">
                        <input type="text" name="email" placeholder="Email">
                        <i class="fa-solid fa-envelope"></i>
                    </div>

                    <div class="input-container">
                        <textarea name="message" placeholder="Detalles de la consulta"></textarea>

                    </div>

                    <input type="submit" name="send" class="btn" onclick="myfunction()">

                </div>



            </form>

        </section>

        <!--------------------------FOOTER----------------------------------------->
        <footer>

            <div class="footer-content container">
                <div class="link">
                    <a href="#" class="logo">Logo</a>
                </div>


                <div class="link">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>

                </div>
            </div>

        </footer>

        <?php 

        include("./send.php");

        ?>

        <script>
            function myFunction() {
                window.location.href = "htpps://localhost/ApiPhp";
            }

        </script>


    </body>
</html>
