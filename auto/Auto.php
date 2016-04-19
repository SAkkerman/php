<?php
class Auto{
    private $detail = array();
    
    public function voegDetailsToe($details){
        $this->detail[] = $details;
       
    }
    
    public function getDetail(){
       return $this->detail;
    }
    
    public function getAuto (){
        return array("naam" => $this->naam);
    }  
}




     