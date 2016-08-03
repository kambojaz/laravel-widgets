<?php

namespace Arrilot\Widgets\Models;

use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Traits\OrderableModel;

class Widgeted extends Model
{
    
    use OrderableModel;
    
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