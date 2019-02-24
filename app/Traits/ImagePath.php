<?php

namespace App\Traits;


Trait ImagePath {
    
    public function thumb($type, $attribute = 'image'){
        
       return "/storage/".$this->thumbnail($type, $attribute );
    }
}