<?php

namespace App\Models;


use TCG\Voyager\Models\Category as Cat;

class Category extends Cat
{

      public function doctors(){
          return $this->belongsToMany('App\Models\Doctor','doctor_category');
      }  

}
