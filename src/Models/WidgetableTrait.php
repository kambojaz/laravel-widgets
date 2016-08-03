<?php

namespace Arrilot\Widgets\Models;

use Request;
use Arrilot\Widgets\Models\WidgetModel;

trait WidgetableTrait
{
    
    
    
    public function widgets() {
        
        return $this->morphToMany(WidgetModel::class, 'widgetable', 'widgeted', 'widgetable_id', 'widget_id');
    }
    
}