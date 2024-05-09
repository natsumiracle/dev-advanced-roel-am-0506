<?php
class Fare {
  public $age; 
  public $distance;
  private $baseFare = 8; 
  private $discountAge = 60; 
  private $discountRate = 0.2; 
  private $fare;

  
  public function calculateFare(){
   // $fare = $this->baseFare;
       
       /* if ($this->distance > 4) {
            $additionalDistance = $this->distance - 4; 
            $this->fare += $additionalDistance; 
        }
        */
        if($this->distance <= 4){
          $this->fare = 8;
        }else{
          $this->fare = $this->distance + 4;
        }

        if ($this->age >= $this->discountAge) {
            $this->fare *= (1 - $this->discountRate);
        }

        
    }
    public function getcalculateFare(){
        return $this->fare;
    }
    
  # Setters
      # Methods used to assign value to the class properties


    public function setAge($new_Age){
        $this->age = $new_Age;
    }

    public function setDistance($new_Distance){
       $this->distance = $new_Distance;
    }

  
  public function getAge(){
      return $this->age;
     
  }

  public function  getDistance(){
      return $this->distance;
  }

}











?>