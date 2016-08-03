<?php

namespace Arrilot\Widgets\Models;

use Illuminate\Database\Eloquent\Model;

class Widgeted extends Model
{
    /**
     * {@inheritdoc}
     */
    public $timestamps = false;

    /**
     * {@inheritdoc}
     */
    public $table = 'widgeted';
    
    protected $casts = [
        'data' => 'array',
    ];
}