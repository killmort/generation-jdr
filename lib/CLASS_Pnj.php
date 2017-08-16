<?php

class CLASS_Pnj {
	
	private $classedeperso='';
	private $race='';
	private $sousclasse='';
	private $carac='';
	private $caracplacee='';
	/**
	 * @return the $classedeperso
	 */
	public function getClassedeperso() {
		return $this->classedeperso;
	}

	/**
	 * @return the $race
	 */
	public function getRace() {
		return $this->race;
	}

	/**
	 * @return the $sousclasse
	 */
	public function getSousclasse() {
		return $this->sousclasse;
	}

	/**
	 * @return the $carac
	 */
	public function getCarac() {
		return $this->carac;
	}

	/**
	 * @param field_type $classedeperso
	 */
	public function setClassedeperso($classedeperso) {
		$this->classedeperso = $classedeperso;
	}

	/**
	 * @param field_type $race
	 */
	public function setRace($race) {
		$this->race = $race;
	}

	/**
	 * @param field_type $sousclasse
	 */
	public function setSousclasse($sousclasse) {
		$this->sousclasse = $sousclasse;
	}

	/**
	 * @param field_type $carac
	 */
	public function setCarac($carac) {
		$this->carac = $carac;
	}

	public function afficherPNJ() {
		$output='';
		$output.='La classe du personnage est '.$this->classedeperso.'<br>';
		$output.='La sous classe du personnage est '.$this->sousclasse.'<br>';
		$output.='A pour carac : ';
			foreach ($this->carac as $value) {
				$output.= $value.',';
		}
		return $output; 
	}
	/**
	 * @return the $caracplacee
	 */
	public function getCaracplacee() {
		return $this->caracplacee;
	}

	/**
	 * @param field_type $caracplacee
	 */
	public function setCaracplacee($caracplacee) {
		$this->caracplacee = $caracplacee;
	}


	
}