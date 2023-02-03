<?php 
class Sphere extends Forme
{
    // Une sphère est déterminée uniquement par son rayon.
    private float $rayon;

    /**
     * Obtenir une instance de Sphere.
     * 
     * @param float $rayon : Rayon de la sphère.
     */
    function __construct(float $rayon)
    {
        // Remarquez comment on détermine l'identifiant de la forme instanciée.
        parent::__construct(parent::getNbFormes() + 1);
        $this->rayon = $rayon;
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
     * Obtient le type de forme.
     *
     * @return string : Le nom de la classe de cette instance.
     */
    public function obtenirTypeForme() : string
    {
        return get_class($this);
    }

    /**
     * Calcule la superficie de la sphère.
     *
     * @return float : Superficie de la sphère.
     * 
     * @see https://www.php.net/manual/en/math.constants.php pour la 
     * documentation des constantes prédéfinies PHP.
     */
    public function obtenirSuperficie() : float
    {
        /* Note pédagogique */
        // Remarquez l'utilisation de la constante mathématique représentant PI
        // Voir l'URL dans le tag @see dans le commentaire de la fonction 
        // ci-dessus.
        return 4 * M_PI * $this->rayon ** 2;
    }


    /**
     * Calcule le volume de la sphère.
     *
     * @return float : Volume de la sphère.
     * 
     * @see https://www.php.net/manual/en/math.constants.php pour la 
     * documentation des constantes prédéfinies PHP.
     */
    public function obtenirVolume() : float
    {
        /* Note pédagogique */
        // Remarquez l'utilisation de la constante mathématique représentant PI
        // Voir l'URL dans le tag @see dans le commentaire de la fonction 
        // ci-dessus.
        return (4/3) * M_PI * $this->rayon ** 3;
    }

    /**
     * Produit une représentation textuelle de l'instance de Sphère.
     * 
     * @return string : Représentation textuelle de cette sphère.
     */
    public function __toString() : string
    {
        return parent::__toString()
            .", rayon = ".$this->getRayon()
            .".";
    }
}