<?php

class Adapter {
    
    public $ultimatearray = [];

        public function ultimateArr() {
        $sereng1 = new arraySearch;
        $sereng2 = new GoogleFinder;
        $sereng3 = new MySimpleFinder;
        
        foreach ($GLOBALS["myarr"] as $word) {
        $newarr = ($sereng2->search($word));
            if ($sereng1->inArray($word)) {
            array_push ($this->ultimatearray, $word);
        }
        elseif ($newarr['result']==1) {
            array_push ($this->ultimatearray, $newarr['word']);
        }
      
   }
        foreach ($GLOBALS["myarr"] as $toFind) {
          if ($sereng3->iAmLookingFor($toFind)=="i am find it!") {
          array_push ($this->ultimatearray, $toFind);
           }
        }
   return $this->ultimatearray;
        }    

}

$adapter = new Adapter;