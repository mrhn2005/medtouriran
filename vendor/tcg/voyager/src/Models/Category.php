<?php

namespace TCG\Voyager\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\HasRelationships;
use TCG\Voyager\Traits\Translatable;
use TCG\Voyager\Traits\Resizable;


class Category extends Model
{
    use Translatable,
        Resizable,
        HasRelationships;

    protected $table = 'categories';
    
    protected $translatable = ['slug', 'title', 'excerpt', 'body'];

    protected $fillable = ['slug', 'title' , 'excerpt', 'body'];

    public function children()
    {
        return $this->hasMany(Voyager::modelClass('Category'), 'parent_id')
            ->with('children');
    }
    
    public function parent_items()
    {
        return $this->hasMany(Voyager::modelClass('Category'))
            ->whereNull('parent_id');
    }
    
    public function posts()
    {
        return $this->hasMany(Voyager::modelClass('Post'))
            ->published()
            ->orderBy('created_at', 'DESC');
    }

    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
    
    public function link($absolute = false)
    {
        return route('category.show',[$this->id,$this->getTranslatedAttribute('slug')]);
    }
    
}
