<?php

namespace App\Traits;

use Carbon\Carbon;

Trait DateFormat {
    
    public function month(){
        
        return $this->created_at->format('M') ; 
    }
    
    public function year(){
        
        return $this->created_at->format('Y') ; 
    }
    
    
    public function day(){
        
        return $this->created_at->format('d') ; 
    }
    
    public function humanDate(){
        return $this->created_at->diffForHumans();
    }
    
}