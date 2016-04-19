<?php 
class Details {
    private $type;
    private $kosten;
    private $plaatje;
    
    
   function __construct($t, $k, $p){
        $this->type = $t;
        $this->kosten = $k;
        $this->plaatje = $p;
    }
    
     public function setType ($type){
        return $this->type = $type;
    } 
    
    public function getType(){
        return $this->type;
    }
    
    public function setKosten ($kosten){
        return $this->kosten = $kosten;
    } 
    
    public function getKosten(){
        return $this->kosten;
    }
    
    public function setPlaatje ($plaatje){
        return $this->plaatje = $plaatje;
    } 
    
    public function getPlaatje(){
        return $this->plaatje;
    }

}
?>