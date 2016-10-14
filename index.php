
<?php
require 'db/Dbsingleton.php';
require 'head.php';
require 'class/Personnage.php'; // J'inclus la classe 
require 'class/Compteur.php';// J'inclus la classe  du compteur

		$tom = new Personnage("Tom");
		$jerry = new Personnage("Jerry");
		$dbh = Dbsingleton::getInstance()->getConnection();
		var_dump($dbh);


?>


<body>
<div class="container-fluid">
<section class="col-lg-12">
		<?php
			$tom->parler();
			$tom->getForce(12);
			$tom->frapper($jerry);
			$tom->afficherExperience();
			$tom->gagnerExperience();
			$jerry->PrendreDegats();
			$jerry->chier();
			


?>

</section>
<center>		
  <form class="form-inline">
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail3">Personnage</label>
                        <input type="email" class="form-control" id="InputName" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="InputForce">Force</label>
                        <input type="text" class="form-control" id="exampleInputPassword3" placeholder="Force initial">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>

</center>


</div>



</body>
</html>


 

