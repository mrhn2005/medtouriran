<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class Package extends Model
{
    use Translatable,
        Resizable;
        
        
    protected $translatable = ['title', 'subtitle', 'timeline','description','before_price','after_price','options'];
}
