<?php

class CLASS_Pieceor {
 		private $pp =0;
        private $po =0;
        private $pa =0;
        private $pc =0;

		public function ajouterpp($aj) {
       		$this->pp += $aj;
        }
		public function ajouterpo($aj) {
        	$this->po += $aj;
        }
		public function ajouterpa($aj) {
       		$this->pa += $aj;
        }
		public function ajouterpc($aj) {
       		$this->pc += $aj;
        }
        public function ajouterall($monnaie){
        	$this->pp += $monnaie->getPp();
        	$this->po += $monnaie->getPo();
        	$this->pa += $monnaie->getPa();
        	$this->pc += $monnaie->getPc();
        }
        public function afficher(){
        	$tresor='';
        	if($this->pc!=0) $tresor.= $this->pc.' pièces de cuivre.<br />';
        	if($this->pa!=0) $tresor.= $this->pa.' pièces d\'argent.<br />';
        	if($this->po!=0) $tresor.= $this->po.' pièces d\'or.<br />';
        	if($this->pp!=0) $tresor.= $this->pp.' pièces de platine.<br />';        
			
        	return $tresor;
        }
	/**
	 * @return the $pp
	 */
	public function getPp() {
		return $this->pp;
	}

		/**
	 * @return the $po
	 */
	public function getPo() {
		return $this->po;
	}

		/**
	 * @return the $pa
	 */
	public function getPa() {
		return $this->pa;
	}

		/**
	 * @return the $pc
	 */
	public function getPc() {
		return $this->pc;
	}

		/**
	 * @param field_type $pp
	 */
	public function setPp($pp) {
		$this->pp = $pp;
	}

		/**
	 * @param field_type $po
	 */
	public function setPo($po) {
		$this->po = $po;
	}

		/**
	 * @param field_type $pa
	 */
	public function setPa($pa) {
		$this->pa = $pa;
	}

		/**
	 * @param field_type $pc
	 */
	public function setPc($pc) {
		$this->pc = $pc;
	}
}

?>