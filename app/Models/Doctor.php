<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;


class Doctor extends Model
{
     use Translatable,
        Resizable;
        
        
    protected $translatable = ['name', 'about', 'testimonal','address'];
    
    public function networks(){
        return $this->hasMany('App\Models\Network');
    }
    
    
    public function categories(){
        return $this->belongsToMany('App\Models\Category','doctor_category');
    }
    

}
