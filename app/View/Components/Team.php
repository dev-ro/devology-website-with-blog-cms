<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Team as ExpertTeams;
class Team extends Component
{

    public $expert_teams;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->expert_teams = ExpertTeams::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('ui::components.team');
    }
}
