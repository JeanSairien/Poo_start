<?php 

class Personnage

{
		private $_force = 50;            // La force du personnage, par défaut à 50.
		private $_localisation = 'Lyon'; // Sa localisation, par défaut à Lyon.
		private $_experience = 1;        // Son expérience, par défaut à 1.
		private $_degats = 0;            // Ses dégâts, par défaut à 0.
		private $_chiur = '10 litres de merde'; // comment il chie par default
		private $_Nom1 = 'tom';

		public function Nommer(){

			$this->_Nom1;

		}

		// ici on declare un fonction pour faire parler notre personnage en affichant du text
		public function parler() 
		{
				
			echo  'je vais te decoupé sale heretik!' ;	
		}

		// Une méthode qui frappera un personnage (suivant la force qu'il a).
		public function frapper($perso2){ 

			$perso2->_degats += $this->_force; 
			echo '<br /> '.$perso1.' frappe le perso2  ';


		}

		// UNe methode qui 
		public function afficherExperience(){

			echo '<br /> $perso1 a '.$this->_experience.' dexperience';

		}
		
		// Une méthode augmentant l'attribut $experience du personnage.
		public function gagnerExperience() 
		{
			$this->_experience = $this->_experience + 1;
			echo '<br/> $perso1 a gagner '.$this->_experience ;

		}

		// Une methode qui signale au user que l'perso2 a eu peur en ce chiant dessu (on affiche un text)
		public function chier(){

			echo '<br/> $perso2 a chier '.$this->_chiur.'dessus tellement il a eu peur ' ;
		}



		// Une méthode qui déplacera le personnage (modifiera sa localisation).
		public function deplacer(){ 
		
		}
}

$perso1 = new Personnage;
$perso2 = new Personnage;


$perso1->parler();
$perso1->frapper($perso2);
$perso1->afficherExperience();
$perso1->gagnerExperience();
$perso2->chier();

?>