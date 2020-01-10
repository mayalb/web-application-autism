
<?php

if(isset($_POST['user']) && isset($_POST['pass']))
{
    // connexion à la base de données
 
   include("../database.php");
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($conn,htmlspecialchars($_POST['user'])); 
    $password = mysqli_real_escape_string($conn,htmlspecialchars($_POST['pass']));
    //(password_verify ($password ,$hash ))&& 
    if($username !== "" && $password !== "")
    {
      
        $n=3;
        $requete1= "SELECT * FROM compte where nature='$n'";   
        $trouv=0;  

   
        $reponse1=mysqli_query($conn,$requete1);
        if( $row = mysqli_fetch_assoc($reponse1)){
          $hash=$row['mdp'] ;
         
       
         if((password_verify ($password ,$hash ))&& ($username==$row['login'])){
               $num = $row['id'];
               session_start();
               $_SESSION['us'] = $num;
              
               header("Location: ../webmaster");
            
              $trouv=1;
               

          }

        }

        if($trouv!=1) // nom d'utilisateur et mot de passe correctes
        {
            header('Location: ?erreur=1');  
          

        }
    }
   
}

?>