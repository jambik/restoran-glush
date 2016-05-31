<?php

namespace App;

use App\Traits\ResourceableTrait;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use ResourceableTrait;

    protected $table = 'headers';

    protected $fillable = ['title', 'image'];

    protected $appends = ['img_url'];

    public function headerable()
    {
        return $this->morphTo();
    }

    public function getImgUrlAttribute()
    {
        return $this->getTable() . '/';
    }
}
