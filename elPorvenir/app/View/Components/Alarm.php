<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alarm extends Component
{
    
    public $tipo;
    public $mensaje;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tipo, $mensaje)
    {
        $this->tipo = $tipo;
        $this->mensaje = $mensaje;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alarm');
    }

    public function getMensajes($mensaje)
    {
        if(is_object($mensaje))
            foreach($mensaje->all as $error)
            echo $error;
    }
}
