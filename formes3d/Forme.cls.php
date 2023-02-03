<?php 
abstract class Forme
{
    // Compteur du nombres de formes 3D instanciées.
    private static int $nbFormes = 0;
    // Identifiant d'une forme 3D.
    private int $id;

    /**
     * Accesseur de la propriété statique privée Forme::$nbFormes
     * 
     * @return int : Nombre d'objets Forme instanciés
     */
    protected static function getNbFormes() : int
    {
        return self::$nbFormes;
    }

    /**
     * Accesseur de la propriété privée $id.
     * 
     * @return int : Identifant d'une Forme.
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * Obtenir une instance de Forme.
     * 
     * @param int $id : Identifiant associé à la forme.
     */
    function __construct($id) 
    { 
        $this->id = $id;
        // Incrémenter le compteur des formes.
        self::$nbFormes++;
    }

    /**
     * Compare l'instance de forme avec l'instance de la forme passée en 
     * argument (en comparant les sommes des superficies et volumes).
     *
     * @param Forme $f : Instance de la forme à comparer avec cette instance.
     * 
     * @return int : Somme de la superficie et du volume de l'instance sur 
     *               laquelle la méthode est appelée MOINS la somme de la 
     *               superficie et du volume de l'instance passée en argument.
     */
    public function comparerAvec(Forme $f) : int
    {
        /* Note pédagogique */
        // Remarquez que seul le 'signe' de la valeur retournée
        // est important pour nous (négatif, 0, positif)
        return ($this->obtenirSuperficie() + $this->obtenirVolume()) 
                - ($f->obtenirSuperficie() + $f->obtenirVolume());
    }

    /**
     * Retourne une représentation textuelle de l'instance de Forme.
     * 
     * @return string : Représentation textuelle de l'objet.
     * 
     */
    public function __toString() : string
    {
        /* Note pédagogique */
        // Remarquez qu'on produit ici tout ce qui est possible dans cette 
        // classe, et on laisse aux classes "dérivées" le travail d'ajouter
        // les parties manquantes qui ne peuvent pas être produite ici.
        return $this->obtenirTypeForme()
        .", ID = ".$this->getId()
        .", Superficie = ".number_format($this->obtenirSuperficie(),2,'.','')
        .", Volume = ".number_format($this->obtenirVolume(),2,'.','');
    }

    // Méthodes abstraites (à implémenter dans les classes dérivées).
    public abstract function obtenirTypeForme();
    public abstract function obtenirSuperficie();
    public abstract function obtenirVolume();
}