<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Network extends Model
{
    use Translatable;

    protected $translatable = ['link'];

    protected $fillable = ['link'];
    
    
    public function tlink(){
        if(empty($this->getTranslatedAttribute('link'))){
            return $this>link;
            
        }
        return $this->getTranslatedAttribute('link');
    }
}
