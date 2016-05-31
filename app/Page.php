<?php

namespace App;

use App\Traits\HeaderableTrait;
use App\Traits\ResourceableTrait;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Page extends Model implements SluggableInterface
{
    use HeaderableTrait, SluggableTrait, ResourceableTrait;

    protected $table = 'pages';

    protected $fillable = ['name', 'slug', 'text', 'title', 'keywords', 'description', 'parent_id'];

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    /**
     * Get parent page.
     */
    public function parent()
    {
        return $this->belongsTo('App\Page', 'parent_id');
    }

    /**
     * Get parent page.
     */
    public function subPages()
    {
        return $this->hasMany('App\Page', 'parent_id');
    }
}
