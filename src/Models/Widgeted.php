<?php

namespace Arrilot\Widgets\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use SleepingOwl\Admin\Traits\OrderableModel;

class Widgeted extends Model
{
    
    use OrderableModel;
    public function getOrderField()
    {
        return 'priority';
    }
    
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
    
    public $fillable = ['id', 'widgeted_id', 'widgeted_type', 'widget_id', 'deleted_at'];
    
    
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('priority', function(Builder $builder) {
            $builder->orderBy('priority');
        });
    }
    
    public function widget() {
        
        return $this->belongsTo('Arrilot\Widgets\Models\WidgetModel');
    }
}