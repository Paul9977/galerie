<?php


class Image{

	var $id;

	var $tbl = "image";
	
	function __construct($etat){ 

		if(is_int($etat)){
			$this->id = $etat;
		} else if ($etat == "new") {
			$conn = new BDD();
			//INSERT
			$conn = new BDD();
			$this->id = $conn->InsertNew($this->tbl);

		}
		
	}

	function set($col, $valeur){
		//update
		$conn = new BDD();
		$conn->Update($this->tbl, $col, $valeur, $this->id);
	}

	function GET($col){
		//SELECT
		$conn = new BDD();
		$result = $conn->Select($this->tbl, $col, $this->id); 

		return $result[0][0];


	}

	function SelectAll($order = "id_image", $sort = "DESC"){
		$conn = new BDD();
		$req = "SELECT * FROM ".$this->tbl." WHERE deleted_at IS NULL OR deleted_at = '0000-00-00 00:00:00' ORDER BY `".$order."` ".$sort."";

		return $res = $conn->query($req);
	}

	function trouve($titre){
		$conn = new BDD();
		$req = "SELECT * FROM ".$this->tbl." WHERE (deleted_at IS NULL OR deleted_at = '0000-00-00 00:00:00') AND (nom_image LIKE '%".$titre."' OR nom_image LIKE '".$titre."%') LIMIT 1 ";

		return $res = $conn->query($req);

	}


}



?>