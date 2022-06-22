<?php 
class Cube extends PaveDroit
{
    // Un cube est déterminé par la grandeur d'un de ses côtés.
    
    /* Note pédagogique */
    // On aurait pû aussi se passer de ce champ, puisqu'il est égal à n'importe 
    // lequel des champs hauteur, largeur, ou longueur, disponible dans la 
    // classe parent.
    private float $cote;
    
    /**
     * Obtenir une instance de Cube.
     * 
     * @param float $cote : Mesure d'un côté du cube.
     */
    function __construct(float $cote)
    {
        /* Note pédagogique */
        // Remarquez que le parent de Cube est PaveDroit et on a besoin de
        // l'instancier correctement.
        parent::__construct($cote, $cote, $cote);
        $this->cote = $cote;
    }

    /**
     * Accesseur de la propriété "cote".
     * 
     * @return float : Nombre décimal représentant le côté du Cube
     */
    public function getCote() : float
    {
        return $this->cote;
    }

    /**
     * Obtient le type de forme
     *
     * @return string : Le nom de la classe de cette instance
     */
    public function obtenirTypeForme() : string
    {
        return get_class($this);
    }

    /* Note pédagogique */
    // On peut évidement se passer des méthodes de calcul de la superficie et 
    // du volume ici puisqu'elles font toujours exactement le même calcul.

    // /**
    //  * Calcule la superficie du cube.
    //  *
    //  * @return double : superficie du cube.
    //  */
    // public function obtenirSuperficie() : float
    // {
    //     return 6 * ($this->cote ** 2);
    // }

    // /**
    //  * Calcule le volume du cube.
    //  *
    //  * @return double : Volume du cube.
    //  */
    // public function obtenirVolume() : float
    // {
    //     return $this->cote ** 3;
    // }
    
    /**
     * Produit une représentation textuelle de l'instance de Cube.
     * 
     * @return string : Représentation textuelle de ce cube.
     */
    public function __toString() : string
    {
        /* Note pédagogique */
        // Remarquez qu'ici, on ne peut faire appel à la méthode correspondante
        // de la classe "parent" mais qu'on doit faire appel à la méthode dans
        // la classe "Forme" plutôt.
        return Forme::__toString()
            .", côté = ".$this->getCote()
            .".";
    }
}