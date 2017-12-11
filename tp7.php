<?php
// On démarre la session
session_start ();

if(isset($_SESSION['login']) && isset($_SESSION['password']) && isset($_SESSION['profil'])){
    if ($_SESSION['login']=="user"){
        echo "<li>"."Vous ete ". $_SESSION['login']."</li>"."<br>";
        echo "<li>"."Votre profil est ". $_SESSION['profil']."</li>"."<br>";
        echo "<a  href='../../deconnexion.php'><button style='color:red'>Deconnnexion</button></a>";
        
        
} else {
    header ('location:../../deconnexion.php');
}
    


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tp7</title>
    <link rel="stylesheet" href="tp7.css">
</head>

<body>
    <div id="conteneur">
    <div>
            <header>
                <div id="logo"><img src="logo.png"></div>
                    <nav>
                        <ul>
                            <li><a  href="">ACCEUIL</a></li>
                            <li><a href="">BLOG</a></li>
                            <li><a href="">CV</a></li>
                            <li><a href="">CONTACT</a></li>
                            
                            
                            
                        </ul>
                    </nav>
                </header>
    </div>
    <div id="image">
     <img id="pont" src="pont.jpg" >   
    </div>

    <section>
        <article>
         <img src="icone.ico" alt="">    <strong >Ibnaliou plus qu'une entreprise de develloppement WEB</strong> 
            <p>
                Sed quid est quod in hac causa maxime homines admirentur et reprehendant meum consilium, cum ego idem antea multa decreverim, que magis ad hominis dignitatem quam ad rei publicae necessitatem pertinerent? Supplicationem quindecim dierum decrevi sententia mea. Rei publicae satis erat tot dierum quot C. Mario ; dis immortalibus non erat exigua eadem gratulatio quae ex maximis bellis. Ergo ille cumulus dierum hominis est dignitati tributus.
            </p>
            <p>
                Sin autem ad adulescentiam perduxissent, dirimi tamen interdum contentione vel uxoriae condicionis vel commodi alicuius, quod idem adipisci uterque non posset. Quod si qui longius in amicitia provecti essent, tamen saepe labefactari, si in honoris contentionem incidissent; pestem enim nullam maiorem esse amicitiis quam in plerisque pecuniae cupiditatem, in optimis quibusque honoris certamen et gloriae; ex quo inimicitias maximas saepe inter amicissimos exstitisse.
            </p>
            <p>
                Latius iam disseminata licentia onerosus bonis omnibus Caesar nullum post haec adhibens modum orientis latera cuncta vexabat nec honoratis parcens nec urbium primatibus nec plebeiis.
            </p>
        </article>
        <aside>

                  <i> <strong >A PROPOS DE L'AUTEUR</strong> </i>
                  <img id="auteur" src="auteur.JPG" alt="ibnaliou">
                  <p>
                      Je m'appel Papa Djiby Niang J'ai 23ans Je suis apprenant en develloppement Web à Sonatel Academy .</p>
<p> Je suis passé par l'ISEP-THIES ou je suivait une formation en système et réseaux informatique.
                  </p>
                  <p> Je suis en meme temps PDG du groupe Ibnaliou & co que j'aimerai vous présenté dans ce blog.                   
                       </p>
                       <ul >
                           <li><a href="https://www.facebook.com/papadjiby.niang.5"><img src="1.ico" alt=""></a></li>
                           <li><a href="https://twitter.com/?lang=fr"><img src="2.ico" alt=""></a></li>
                           <li><a href="https://www.youtube.com/watch?v=MtHFlOnz5Eo"><img src="3.ico" alt=""></a></li>
                          
                       </ul>

        </aside>
    </section>
    <footer>
            <div class="ft" ><p>
                MON DERNIER TEWEET:<br>
                 Discour sur l'ecosysteme numerique du Senegal
            </p></div>
            <div class="ft">MES PHOTOS <br>
                <ul>
                       
                        <li>
                             <a href="#">
                             <img src="logo.png" alt="" />
                             <strong>djibson</strong>
                             </a>
                        </li>
                        
                       
                    
                </ul>
            </div>
            <div class="ft">MES AMIS
                
 <pre>
=>Boubacar SECK           =>Babacar GUEYE   
 =>Talla FAYE              =>Magatte THIAM  
  =>Amadou Camara           =>Ibrahima THIAM  
   =>Samba SECK             =>Abdoulaye FAYE  
    </pre>

               
                
            </div>
        </footer>
</div>
</body>

</html>