<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

use App\Traits\DateFormat;

class Banner extends Model
{
     use Translatable,
        Resizable,
        DateFormat;
        
        
    protected $translatable = ['title', 'subtitle', 'link'];
    
    
    public function text_pos(){
        switch ($this->position) {
            case "left":
                return "tal";
                break;
            case "right":
                return "tar";
                break;
            case "center":
                return "tac";
                break;
            default:
                return "tal";
        }
    }
}
