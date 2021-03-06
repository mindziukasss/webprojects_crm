<?php namespace App\Http\Controllers;

use App\Model\WPClients;
use Illuminate\Routing\Controller;

class WPClientsController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /wpclients
     *
     * @return Response
     */
    public function index()
    {
//        return WPClients::with(['projects','clientsPersonsConnections'])->get();

//     $clients = WPClients::all();
        $configuration = [];

        $configuration['clients'] = WPClients::with(['projects'])->get();
        $configuration['totalCount'] = sizeof($configuration['clients']);

        return view('content.clients', $configuration);

//        return view('data', $clients);
//       return WPClients::orderBy('created_at', 'desc')->paginate(4);

    }

    /**
     * Show the form for creating a new resource.
     * GET /wpclients/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /wpclients
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /wpclients/{id}
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
     * GET /wpclients/{id}/edit
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
     * PUT /wpclients/{id}
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
     * DELETE /wpclients/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}