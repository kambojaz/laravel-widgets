<?php

namespace Arrilot\Widgets\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class WidgetModel extends Model
{
    use SoftDeletes;
    
    public $timestamps = false;
    
    protected $table = 'widgets';
    
    protected $dates = ['deleted_at'];
    
    protected $casts = [
        'data' => 'array',
    ];
    
    protected $fillable = ['title', 'data', 'class'];
    
    
//    public function widgeted()
//    {
//        return $this->hasMany('App\Widget', 'widget_id');
//    }
    
    
   
    
    
    
    public function render() {
        
        return view($this->view);
    }
}
