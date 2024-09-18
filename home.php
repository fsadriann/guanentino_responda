<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GR</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>
<script src="https://unpkg.com/@barba/core"></script>
<body class="body-app">
   <div class="top-nav">
      <div class="profile">
         <button>
            <div class="profile-icon">
               <i class="fa-solid fa-user"></i>
            </div>
         
            <div class="name-top">
               <p><a href="profile.html">John Doe</a></p>
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

        <section class="section" id="home">
           <button style="margin-left: 20%;margin-top:25%;" class="btn-intial"><a href="math_q.html"><i class="fa-solid fa-calculator"></i></a></button><br>

           <button style="margin-left: 40%; margin-top: 1%;" class="btn-intial"><a href="english_q.html"><i class="fa-solid fa-language"></i></a></button><br>

           <button style="margin-left: 50%; margin-top: 7%;" class="btn-intial"><a href="lectura_q.html"><i class="fa-solid fa-book"></i></a></button><br>

           <button style="margin-left: 40%; margin-top: 7%;" class="btn-intial"><a href="socials_q.html"><i class="fa-solid fa-location-dot"></i></a></button><br>

           <button style="margin-top: 7%; margin-left: 25%;" class="btn-intial"><a href="sciences_q.html"><i class="fa-solid fa-flask"></i></a></button><br>

           <button style="margin-left: 5; margin-top: 7%;" class="btn-intial"><a href="english_q.html"><i class="fa-solid fa-language"></i></a></button><br>

           <button style="margin-top: 7%; margin-left: 5;" class="btn-intial"><a href="socials_q.html"><i class="fa-solid fa-location-dot"></i></a></button><br>

           <button style="margin-left: 26%; margin-top: 7%;" class="btn-intial"><a href="math_q.html"><i class="fa-solid fa-calculator"></i></a></button><br>

           <button style="margin-left: 46%; margin-top: 7%;" class="btn-intial"><a href="lectura_q.html"><i class="fa-solid fa-book"></i></a></button><br>

         </section>
     </main>
     
     <!--=============== MAIN JS ===============-->
     <script src="main.js"></script>
  </body>
</body>
</html>