<?php

class contact{
    private $id;
private $objet , $text;
function __construct($id="", $objet="",$text="") {
    $this->id = $id;
    $this->objet=$objet;
    $this->text=$text;
   
}
public function getid() {
    return $this->id;
}

public function getobjet(){
	return $this->objet;
}



public function gettext(){
	return $this->text;
}


public function setid($id){
    $this->id = $id;
}


public function setobjet($objet){
        $this->objet = $objet;
    }



public function settext($text){
        $this->text = $text;
    }

	
}?>