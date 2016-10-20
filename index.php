
<?php
require 'db/Dbsingleton.php';
require 'head.php';
require 'class/Personnage.php'; // J'inclus la classe 
require 'class/Compteur.php';// J'inclus la classe  du compteur
require 'inc/form.php';
/*require 'test.php';*/

		
		



?>


		

<body>
<div class="container-fluid">
<section class="col-lg-12">

<?php
		$perso = new Personnage($donnees);
		$db = Dbsingleton::getInstance()->getConnection();
		var_dump($db);
			
			/*$tom->parler();
			$tom->getForce(12);
			$tom->frapper($jerry);
			$tom->afficherExperience($tom);
			$tom->gagnerExperience();
			$jerry->PrendreDegats();
			$jerry->chier();
			$jerry->frapper();*/

			/* On admet que $db est un objet PDO*/


$request = $db->query('select * from t_personnage ');

    

while ($donnees = $request->fetch(PDO::FETCH_ASSOC)) // Chaque entrée sera récupérée et placée dans un array.

{

  // On passe les données (stockées dans un tableau) concernant le personnage au constructeur de la classe.

  // On admet que le constructeur de la classe appelle chaque setter pour assigner les valeurs qu'on lui a données aux attributs correspondants.

  foreach ($donnees as $key => $value) {
  	# code...
  print_r($value['name'])  ;


  }

        
  /*echo $perso->nom(), ' a ', $perso->force(), ' de force, ', $perso->degats(), ' de dégâts, ', $perso->exp(), ' d\'expérience et est au niveau ', $perso->niveau();*/


}


			


?>
  




</section>
<center>		
  
</center>


</div>



</body>
</html>


 

