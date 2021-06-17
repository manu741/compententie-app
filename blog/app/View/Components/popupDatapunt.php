<?php

namespace App\View\Components;

use Illuminate\View\Component;

class popupDatapunt extends Component
{

    public $datapunt;
    public $onderwijseenheden;
    public $opdrachtgevers;
    public $beroepsproducten;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($datapunt, $onderwijseenheden, $opdrachtgevers, $beroepsproducten)
    {
        $this->datapunt = $datapunt;
        $this->onderwijseenheden = $onderwijseenheden;
        $this->opdrachtgevers = $opdrachtgevers;
        $this->beroepsproducten = $beroepsproducten;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.popup-datapunt');
    }
}
