<?php
namespace rsg\homework_l2\photo;

include_once("photographer/photographer.php");
use rsg\homework_l2\photographer as photographer;

class photo extends photographer\photographer{
    public $object='Something';
    public $exposition=0;
    public $foreshortening=0;
    public $whiteBalance=0;
    public $focusing=0;
    public $softwareProcessing=0;
    private $photographerQualityRating=0;
    
    public function __construct($object='Something'){
        foreach($this->photographerQuality as $key=>$information){
            switch($key){
                case 'education'!=false:  $this->photographerQualityRating+=1;
                break;
                case 'experience'!=false:  $this->photographerQualityRating+=3;
                break;
                case 'talant'!=false:  $this->photographerQualityRating+=2;
                break;
                case 'status'=='noob':  $this->photographerQualityRating+=0;
                break;
                case 'status'=='amateur':  $this->photographerQualityRating+=1;
                break;
                case 'status'=='professional':  $this->photographerQualityRating+=2;
                break;
                default: $this->photographerQualityRating+=0;
                
            }
        }
        
        $this->object=$object;
        $this->exposition+=$this->photographerQualityRating;
        $this->foreshortening=$this->photographerQualityRating;
        $this->whiteBalance=$this->photographerQualityRating;
        $this->focusing=$this->photographerQualityRating;
        $this->softwareProcessing=$this->photographerQualityRating;
    }   
}
?>