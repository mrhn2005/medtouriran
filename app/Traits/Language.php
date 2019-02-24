<?php

namespace App\Traits;

use App;

Trait Language {


    public function isRtl(){
        if(array_key_exists(App::getLocale(), config('app.rtlLocales'))){
            return true;
        }
        
        return false;
    }
}