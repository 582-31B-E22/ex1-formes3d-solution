<?php 
class Cylindre extends Forme
{
    // Un cylindre est déterminé par son rayon et sa hauteur.
    private float $rayon;
    private float $hauteur;
    
    /**
     * Obtenir une instance de Cylindre.
     * 
     * @param float $rayon : Rayon de la base du cylindre.
     * @param float $hauteur : Hauteur du cylindre.
     */
    function __construct(float $rayon, float $hauteur)
    {
        // Remarquez comment on détermine l'identifiant de la forme instanciée.
        parent::__construct(parent::getNbFormes() + 1);
        $this->rayon = $rayon;
        $this->hauteur = $hauteur;
    }

    /**
     * Accesseur de la propriété "rayon".
     * 
     * @return float : Nombre décimal représentant le rayon du Cylindre
     */
    public function getRayon() : float
    {
        return $this->rayon;
    }

    /**
     * Accesseur de la propriété "hauteur".
     * @return float : Nombre décimal représentant la hauteur du Cylindre
     */
    public function getHauteur() : float
    {
        return $this->hauteur;
    }

    /**
     * Obtient le type de forme.
     *
     * @return string : Le nom de la classe de cette instance.
     */
    public function obtenirTypeForme() : string
    {
        return get_class($this);
    }

    /**
     * Calcule la superficie du cylindre.
     *
     * @return float : Superficie du cylindre.
     */
    public function obtenirSuperficie() : float
    {
        return 2 * M_PI * $this->rayon * ($this->rayon + $this->hauteur);
    }


    /**
     * Calcule le volume du cylindre.
     *
     * @return float : Volume du cylindre.
     */
    public function obtenirVolume() : float
    {
        return $this->hauteur * M_PI * $this->rayon ** 2;
    }
    
    /**
     * Produit une représentation textuelle de l'instance de Cylindre.
     * 
     * @return string : Représentation textuelle de ce cylindre.
     */
    public function __toString() : string
    {
        return parent::__toString()
            .", rayon = ".$this->getRayon()
            .", hauteur = ".$this->getHauteur()
            .".";
    }
}