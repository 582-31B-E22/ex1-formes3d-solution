<?php 
class PaveDroit extends Forme
{
    // Un "pavé droit" (ou "parallélépipède rectangle") est déterminé par la 
    // grandeur de ses trois côtés.
    private float $longueur;
    private float $largeur;
    private float $hauteur;
    
    /**
     * Obtenir une instance de PaveDroit.
     * 
     * @param float $longeur : Longueur du pavé droit.
     * @param float $largeur : Largeur du pavé droit.
     * @param float $hauteur : Hauteur du pavé droit.
     */
    function __construct(float $longueur, float $largeur, float $hauteur)
    {
        // Remarquez comment on détermine l'identifiant de la forme instanciée.
        parent::__construct(parent::getNbFormes() + 1);
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

    /**
     * Accesseur de la propriété "longueur".
     * 
     * @return float : Nombre décimal représentant la longueur du PaveDroit
     */
    public function getLongueur() : float
    {
        return $this->longueur;
    }

    /**
     * Accesseur de la propriété "largeur".
     * 
     * @return float : Nombre décimal représentant la largeur du PaveDroit
     */
    public function getLargeur() : float
    {
        return $this->largeur;
    }

    /**
     * Accesseur de la propriété "hauteur".
     * 
     * @return float : Nombre décimal représentant la hauteur du PaveDroit
     */
    public function getHauteur() : float
    {
        return $this->hauteur;
    }

    /**
     * Obtient le type de forme.
     *
     * @return string : Le nom de la classe de laquelle cet objet est une instance.
     */
    public function obtenirTypeForme() : string
    {
        return get_class($this);
    }

    /**
     * Calcule la superficie du pavé droit.
     *
     * @return float : Superficie du pavé droit.
     */
    public function obtenirSuperficie() : float
    {
        return 2 * ($this->longueur * $this->largeur 
            + $this->hauteur * $this->largeur 
            + $this->longueur * $this->hauteur);
    }

    /**
     * Calcule le volume  du pavé droit.
     *
     * @return float : Volume  du pavé droit.
     */
    public function obtenirVolume() : float
    {
        return $this->longueur * $this->largeur * $this->hauteur;
    }
    
    /**
     * Produit une représentation textuelle de l'instance de PaveDroit.
     * 
     * @return string : Représentation textuelle de ce pavé droit.
     */
    public function __toString() : string
    {
        return parent::__toString()
            .", longueur = ".$this->getLongueur()
            .", largeur = ".$this->getLargeur()
            .", hauteur = ".$this->getHauteur()
            .".";
    }
}