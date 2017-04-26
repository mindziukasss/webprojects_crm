<?php namespace App\Http\Controllers;

use App\Model\WPProjects;
use Illuminate\Routing\Controller;

class WPProjectsController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /wpprojects
     *
     * @return Response
     */
    public function index()
    {
        $configuration = [];
        $configuration['projects'] = WPProjects::with(['clientsData','totalPersons','projectTypeData'])
                                    ->get()->toArray();
        $configuration['totalPersons'] = sizeof($configuration['projects']);


//      return WPProjects::with(['clientsData','totalPersons','projectTypeData'])->get();
//        return WPProjects::orderBy('created_at', 'desc')->get();
       return view('content.projects', $configuration);
    }

    /**
     * Show the form for creating a new resource.
     * GET /wpprojects/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /wpprojects
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /wpprojects/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /wpprojects/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /wpprojects/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /wpprojects/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}