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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mon cv</title>
    <link rel="stylesheet" href="cv.css" type="text/css">
</head>
<body>
   
       <div id="conteneur">
         
 <header> 
  <B> <span id="cv">CV </span> 
   <h1 id="pn"> PAPA DJIBY NIANG </h1> </B>
   
  

       
    </header> 
    
    
    <div id="expfor">
<section id="experience"><span class="ok">Expérience de Travail</span><br/>
    <article id="a">  Technicien en Réseaux <br/>
        <span class="lieu">STAGE A NEUROTECH SA</span><br/> 
        <ul><li>Gestion des Réseaux</li>
            <li>Routage et Switching</li>
            <li>supervision Réseaux</li>
        </ul>
         </article>
         <article>Technicien en Maintenance Réseaux  <br/>
            <span class="lieu">STAGE A 3CTIC</span><br/> 
            <ul><li>Maintenance des Réseaux</li>
                <li>Routage et Switching</li>
                <li>supervision Réseaux</li>
            </ul>
             </article>
             
       
</section>

<hr>
<section id="formation"><span class="ok">Formation</span> 
<article>DiSEP (Diplôme supérieur d’enseignement professionnel)<span class="date">2015-2017</span><br/>
<span class="lieu">ISEP-THIES</span> 
</article>
<article>Licence 1 Mathématique Appliquée à l’Informatique<span class="date">2014-2015</span><br/>
    <span class="lieu">UVS DAKAR</span> 
    </article>
<article>Baccalauréat (série S)<span class="date">2013-2014</span><br/>
        <span class="lieu">LYCEE MBAO DAKAR</span> 
        </article>
<article>Brevet de Fin d’Etudes Moyennes : BFEM<span class="date">2009-2010</span><br/>
            <span class="lieu">Ecole privée Mamadou NDIONE (Dakar)</span> 
            </article>    
            <article>Certificat de fin d’études élémentaires : CFEE<span class="date">2005-2006</span><br/>
                <span class="lieu">Ecole privée Mamadou NDIONE (Dakar)</span> 
                </article>     
                </section>



                <hr>
                <section id="formation"><span class="ok">Autres</span> 
                <article>DiSEP (Diplôme supérieur d’enseignement professionnel)<span class="date">2015-2017</span><br/>
                <span class="lieu">ISEP-THIES</span> 
                </article>
                <article>Licence 1 Mathématique Appliquée à l’Informatique<span class="date">2014-2015</span><br/>
                    <span class="lieu">UVS DAKAR</span> 
                    </article>
                <article>Baccalauréat (série S)<span class="date">2013-2014</span><br/>
                        <span class="lieu">LYCEE MBAO DAKAR</span> 
                        </article>
                <article>Brevet de Fin d’Etudes Moyennes : BFEM<span class="date">2009-2010</span><br/>
                            <span class="lieu">Ecole privée Mamadou NDIONE (Dakar)</span> 
                            </article>    
                            <article>Certificat de fin d’études élémentaires : CFEE<span class="date">2005-2006</span><br/>
                                <span class="lieu">Ecole privée Mamadou NDIONE (Dakar)</span> 
                                </article>     
                    
                
                </section>
    </div>
    <div id="left">

<section id="det">DETAILS<hr>
    <P>
        <pre class="details">
23 ans
Yembeul Sud Dakar  
Tél: + 221773731936
papadjibyniang@gmail.com
</pre>    
        </P>
</section>


<section id="car">CARRIERRE<hr>
     <P>
     <pre class="details">
Administration sous LINUX
Admnistration sous ORACLE
Administration in Windows
Développement mobile
                             </pre>   

     </P>
 
</section>


<section id="log">LOGICIELS<hr>
    <P>
            <pre class="details">
Autocad,word
Ecxel,packet tracer
                </pre>  
        </P>
</section>


<section id="inf">INFORMATIONS<hr>

        <P>
<pre class="details">
Adaptation, autonomie  
Sens de l’initiative ;
Bonnes capacités 
rédactionnelles et
de synthèses.  
                   </pre>    
                             </P>  
         
     </P>
        </section >


        <section id="loi">LOSIRS<hr>
               <p>
                   <pre class="details">
football,
playstation,
lecture et
Dourouss.                      
                   </pre>
               </p> 
                </section>
    </div>
    
    
    
    
    
    
    
    

    
    
    
    </div>
    
       
   

</body>
<footer>
    ibnaliou'cv
        </footer>
</html>