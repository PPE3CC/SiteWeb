<?php
include_once('Modeles/Metiers/genre.php');

class conteneurGenre
{
	//ATTRIBUTS PRIVES-------------------------------------------------------------------------
	private $lesGenres;

	//CONSTRUCTEUR-----------------------------------------------------------------------------
	public function __construct()
	{
		$this->lesGenres = new arrayObject();
	}

	//METHODE AJOUTANT UN genre------------------------------------------------------------------------------
	public function ajouteUnGenre($unId‪Genre, $unLibelleGenre)
	{
		$unGenre = new genre($unId‪Genre, $unLibelleGenre);
		$this->lesGenres->append($unGenre);
	}

	//METHODE RETOURNANT LE NOMBRE de genres-------------------------------------------------------------------------------
	public function nbGenre()
	{
		return $this->lesGenres->count();
	}

	//METHODE RETOURNANT LA LISTE DES Genres-----------------------------------------------------------------------------------------
	public function listeDesGenres()
	{
		$liste = "<div class=''>
                    <div class='' style='margin-top: 5rem;'>
                        <table class='table w-50 tableau'>
                            <thead>
                                <th class='head-table-genre'>Identifiant genre</td>
                                <th class='head-table-genre'>Genre</td>
                            </thead>
                            <tbody>";
		foreach ($this->lesGenres as $unGenre) {
			$liste = $liste . '<tr><td class="td-table">' . $unGenre->getIdGenre() . '</td><td class="td-table">' . $unGenre->getLibelleGenre() . '</td></tr>';
		}
		$liste = $liste . "</tbody></table></div></div>";
		return $liste;
	}

	//METHODE RETOURNANT LA LISTE DES genres DANS UNE BALISE <SELECT>------------------------------------------------------------------
	public function lesGenresAuFormatHTML()
	{
		$liste = "<SELECT name = 'idGenre'>";
		foreach ($this->lesGenres as $unGenre) {
			$liste = $liste . "<OPTION value='" . $unGenre->getIdGenre() . "'>" . $unGenre->getLibelleGenre() . "</OPTION>";
		}
		$liste = $liste . "</SELECT>";
		return $liste;
	}

	//METHODE RETOURNANT UN genre A PARTIR DE SON NUMERO--------------------------------------------	
	public function donneObjetGenreDepuisNumero($unIdGenre)
	{
		//initialisation d'un booléen (on part de l'hypothèse que le genre n'existe pas)
		$trouve = false;
		$leBonGenre = null;
		//création d'un itérateur sur la collection lesGenres
		$iGenre = $this->lesGenres->getIterator();
		//TQ on a pas trouvé le genre et que l'on est pas arrivé au bout de la collection
		while ((!$trouve) && ($iGenre->valid())) {
			//SI le numéro du genre courant correspond au numéro passé en paramètre
			if ($iGenre->current()->getIdGenre() == $unIdGenre) {
				//maj du booléen
				$trouve = true;
				//sauvegarde du genre courant
				$leBonGenre = $iGenre->current();
			}
			//SINON on passe au genre suivant
			else
				$iGenre->next();
		}
		return $leBonGenre;
	}
}
