<?php

class Personnage

{

  private $_id;

  private $_name;

  private $_force;

  private $_degats;

  private $_niveau;

  private $_exp;

  

  // Liste des getters

  

  public function id()

  {

    return $this->_id;

  }

  

  public function nom()

  {

    return $this->_name;

  }

  

  public function force()

  {

    return $this->_force;

  }

  

  public function degats()

  {

    return $this->_degats;

  }

  

  public function niveau()

  {

    return $this->_niveau;

  }

  

  public function exp()

  {

    return $this->_exp;

  }

  

  // Liste des setters

  

  public function setId($id)

  {

    // On convertit l'argument en nombre entier.

    // Si c'en était déjà un, rien ne changera.

    // Sinon, la conversion donnera le nombre 0 (à quelques exceptions près, mais rien d'important ici).

    $id = (int) $id;

    

    // On vérifie ensuite si ce nombre est bien strictement positif.

    if ($id > 0)

    {

      // Si c'est le cas, c'est tout bon, on assigne la valeur à l'attribut correspondant.

      $this->_id = $id;

    }

  }

  

  public function setNom($nom)

  {

    // On vérifie qu'il s'agit bien d'une chaîne de caractères.

    if (is_string($nom))

    {

      $this->_nom = $nom;

    }

  }

  

  public function setForcePerso($force)

  {

    $force = (int) $force;

    

    if ($force >= 1 && $force <= 100)

    {

      $this->_force = $force;

    }

  }

  

  public function setDegats($degats)

  {

    $degats = (int) $degats;

    

    if ($degats >= 0 && $degats <= 100)

    {

      $this->_degats = $degats;

    }

  }

  

  public function setNiveau($niveau)

  {

    $niveau = (int) $niveau;

    

    if ($niveau >= 1 && $niveau <= 100)

    {

      $this->_niveau = $niveau;

    }

  }

  

  public function setexp($exp)

  {

    $exp = (int) $exp;

    

    if ($exp >= 1 && $exp <= 100)

    {

      $this->_exp = $exp;

    }

  }

}

?>