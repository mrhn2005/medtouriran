<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Traits\Translatable;

class Link extends Model
{
    use Translatable;

    protected $translatable = ['link','title'];
}
