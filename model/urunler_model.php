<?php

class urunler_model extends Model {
	
	
	function __construct() {		
		parent:: __construct();
	}
	
	function uruncek($tabloisim,$kosul) {
		
		return $this->db->listele($tabloisim,$kosul);
		
	}
	function tekliveri($sutun,$kosul) {
		
		return $this->db->teklistele($sutun,$kosul);
		
	}
	
	

	
	

	

	
}




?>