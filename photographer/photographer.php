<?php
namespace rsg\homework_l2\photographer;

include_once("human/human.php");
use rsg\homework_l2\human as human;

class Photographer extends human\human{
    public $education=false;
    public $experience=false;
    public $talant=false;
    private $status='noob';
    private $statusList=['noob','amateur','professional'];
    private $photographerQuality=[false,false,false,'noob'];
    public function __construct($education=false,$experience=false,$talant=false,$status='noob'){
        $this->education=$education;
        $this->experience=$experience;
        $this->talant=$talant;
        $this->status=$status;
        $this->photographerQuality=['education'=>$education,'experience'=>$experience,'talant'=>$talant,'status'=>$status];
    }
    public function identifyStatus($status){
        if(in_array($status,$statusList)){
            $this->status=$status;
        }
        else echo "You entered an incorrect status. Please enter one frome the list: 'noob','amateur','professional'";
    }
}
?>
