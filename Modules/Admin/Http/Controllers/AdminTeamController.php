<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\UploadController;
use App\Models\Team;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminTeamController extends Controller
{
    protected $teams;
    protected $uploadDir = 'teams';


    public function __construct()
    {
        $this->teams = new Team();
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('admin::team.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::team.create' ,[
            'form_action' => route('teams-store'),
            'method' => 'POST'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate($this->teams::VALIDATION);

        $attributes = $request->all();
        
        if($request->hasFile('team_image')) {
            $file = UploadController::uploadPlease($request->file('team_image'));
            $attributes['team_image'] = $file;
        }

        if($this->teams::storeTeam($attributes)) {
            return back()->with('success' , 'Updated successfully');
        }

        return back()->with('errors' , 'Something went wrong');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        // return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::team.edit' , [
            'team' => $this->teams::findOrFail($id),
            'form_action' => route('teams-update' , $id),
            'method' => 'PATCH'
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->teams::VALIDATION);
        $attributes = $request->all();
        if($request->hasFile('team_image')) {
            $file = UploadController::uploadPlease($request->file('team_image'));
            $attributes['team_image'] = $file;
        }

        if($this->teams::updateTeam($attributes, $id)) {
            return back()->with('success' , 'Updated successfully');
        }

        return back()->with('errors' , 'Something went wrong');


    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        UploadController::removeImage($team->image);
        if($team->delete()) {
            return back()->with('success' , 'Deleted successfully.');
        }
        return back()->with('errors' , 'Something went wrong');
    }

    /**
     * To mass delete the customer
     *
     * @param Request $request
     */
    public function massDestroy(Request $request) {
        foreach($request->indexes as  $id) {
            $testimonial = Team::findOrFail($id);
            $testimonial->delete();
        }

        session()->flash('success' , 'Deleted successfully');

        if($request->wantsJson()) {
            return response()->json(['message' => 'Deleted successfully'], 200);
           
        } else {
            return back()->with('success' , 'Deleted successfully.');
        }


    }
}
