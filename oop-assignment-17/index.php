<?php
class SumSubjectmarks{
    public $chemistry;
    public $maths;
    public $zoology;
    public $botany;
    public $physics;
    public $total;
   
    public function input_two_no($num1,$num2,$num3,$num4,$num5){
        $this->chemistry=$num1;
        $this->maths=$num2;
        $this->zoology=$num3;
        $this->botany=$num4;
        $this->physics=$num5;
    }

}
class Percentage extends SumSubjectmarks {
    public function the_sum(){
        $this->total = $this->chemistry+$this->maths+$this->zoology+$this->botany+$this->physics;
    }
    public function get_percentage(){
        echo "Chemistry ".$this->chemistry."<br>";
        echo "Maths ".$this->maths."<br>";
        echo "Zoology ".$this->zoology."<br>";
        echo "Botany ".$this->botany."<br>";
        echo "Physics ".$this->physics."<br>";
        echo "Total Marks ".$this->total."<br>";
        echo "Total Percentage ".  $this->total / 500 *100 ."%<br>";
        echo "Prepared by : Rida Rajani";
    }
} 
$numbers = new Percentage;
$numbers->input_two_no(85,75,65,55,88);
$numbers->the_sum();
$numbers->get_percentage();

?>