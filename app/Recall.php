<?php

namespace App;

use App\Traits\ImageableTrait;
use App\Traits\ResourceableTrait;
use Illuminate\Database\Eloquent\Model;

class Recall extends Model
{
    use ImageableTrait, ResourceableTrait;

    protected $table = 'recalls';

    protected $fillable = ['text', 'name', 'image', 'approved'];

    protected $casts = [
        'approved' => 'boolean',
    ];


    protected $appends = ['img_url'];
}
