
<?php

   require 'conexion.php';

   session_start();

   if(isset($_SESSION['usuario']) && isset($_SESSION['id_rol'])){

      $nombre_usuario = $_SESSION['usuario'];
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GR</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/>
</head>
<body class="body-app">

   <div class="top-nav">
      <div class="profile">
         <button>
            <div class="profile-icon">
               <i class="fa-solid fa-user"></i>
            </div>
         
            <div class="name-top">
               <p><a href="profile.html"><?php echo ''.$nombre_usuario; ?> </a></p>
               <label for="#">Top 1</label>
            </div>


         </button>
      </div>
      <div class="topbar-buttons">
         <button class="rank-button">
            <i class="fa-solid fa-fire"></i> <b>5</b>
         </button>
         <button class="rank-button">
            <a href="ranking.html"><i class="fa-solid fa-trophy"></i> <b>280</b></a>
         </button>
      </div>
   </div>

   <div class="side-navbar">
         <nav>
            <ul>
               <a href="profile.php">
                  <li>
                    <i class="ri-user-fill"><b></i>Perfil</b> 
                  </li>
               </a>

               <a href="ranking.php">
                  <li>
                     <i class="ri-trophy-fill"><b></i>Liga de trofeos</b>
                  </li>
               </a>

               <a href="home.php">
                  <li>
                     <i class="ri-home-7-fill"><b></i>Pagina principal</b>
                  </li>
               </a>

               <a href="questions.php">
                  <li class="active">
                     <i class="ri-heart-fill"><b></i>Practicar</b>
                  </li>
               </a>

               <a href="settings.php">
                  <li>
                     <i class="ri-settings-3-fill"><b></i>Ajustes</b>
                  </li>
               </a>

               <a href="logout.php">
                  <li>
                     <i class="fa-solid fa-right-from-bracket"><b></i>Cerrar sesión</b>
                  </li>
               </a>
            </ul>
         </nav>
      </div>

    <nav class="nav">
        <ul class="nav__list">
           <li>
              <a href="profile.html" class="nav__link active-link">
                 <i class="ri-user-fill"></i>
              </a>
           </li>

           <li>
              <a href="ranking.html" class="nav__link">
                 <i class="ri-trophy-fill"></i>
              </a>
           </li>

           <!-- Expand list -->
           <li>
               <a href="home.html">
                  <i class="ri-home-7-fill home-icon"></i>
               </a>
            </li>
        
           <li>
              <a href="questions.html" class="nav__link">
                 <i class="ri-heart-fill"></i>
              </a>
           </li>

           <li>
              <a href="settings.html" class="nav__link">
                 <i class="ri-settings-3-fill"></i>
              </a>
           </li>
        </ul>
     </nav>

     <!--==================== MAIN ====================-->
     <main class="container">
        <section class="section" id="questions">
           <h1>QUESTIONS</h1>
        </section>

     </main>
     
     <!--=============== MAIN JS ===============-->
     <script src="main.js"></script>
  </body>
</body>
</html>