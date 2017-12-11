<?php
    // On démarre la session
    session_start ();

    if(isset($_SESSION['login']) && isset($_SESSION['password']) && isset($_SESSION['profil'])){
        if ($_SESSION['login']=="admin"){
            echo "<li>"."Vous ete ". $_SESSION['login']."</li>"."<br>";
            echo "<li>"."Votre profil est ". $_SESSION['profil']."</li>"."<br>";
            echo "<a  href='../../deconnexion.php'><button style='color:red'>Deconnnexion</button></a>";
            
            
    } else {
        header ('location:../../formulaire.php');
    }
        
    
    
}
    

    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="tp3.css" type="text/css" />
    
    <title>acceuil</title>
</head>
<body>
    <div id="conteneur">
    <br/>
            <header id="entete">
<nav id="menu"> 
     <ul>
                <li><a style="color:blue" href="acceuil.html">ACCEUIL</a></li>
                <li><a href="profil.html">MON PROFIL</a></li>
                <li><a href="galerie.html">MA GALERIE</a></li>
				<li><a href="contact.html">CONTACTS</a></li>

</ul>     

</nav>


            </header>
<section id="section">
   <article>
       
       <h2>Titre <span class="rose"> 1</span> </h2> 
          <p> <strong>D</strong>ein Syria per speciosam interpatet diffusa planitiem. hanc nobilitat Antiochia, mundo cognita civitas, cui non certaverit alia advecticiis ita adfluere copiis et internis, et Laodicia et Apamia itidemque Seleucia iam inde a primis auspiciis florentissimae.   </p>

      <h2>Titre <span class="rose"> 2</span></h2>
          <p>  <strong>D</strong>ein Syria per speciosam interpatet diffusa planitiem. hanc nobilitat Antiochia, mundo cognita civitas, cui non certaverit alia advecticiis ita adfluere copiis et internis, et Laodicia et Apamia itidemque Seleucia iam inde a primis auspiciis florentissimae.   </p>


  </article>



      </section> 


      <aside id="aside">
            <h3>Nous suivre</h3>
            <ul type="none" id="facebook">
                <a href="https://www.facebook.com/Collectif.Team8/"><img src="facebook.jpg" alt=""></a>
            </ul>
            <ul type="none"> <h3>Partenaires</h3>
                <li> Partenaire 1 </li>
                <li> Partenaire 2 </li>
                <li> Partenaire 3 </li>
                
        
              
            </ul>
            <ul type="none"> <h3>Mes amis</h3>
                    <li> Amis 1 </li>
                    <li> Amis 2 </li>
					                    <li> Amis 3 </li>

                    
                  
                </ul>
        </aside>
<footer>
Made by ibnaliou papadjibyniang@gmail.com tout droit reservé

</footer>

</div>










    </div>
    
</body>
</html>