<?php namespace App\Http\Controllers;

use App\Model\WPClientsPersonsTypes;
use Illuminate\Routing\Controller;

class WPClientsPersonsTypesController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /wpclientspersonstypes
     *
     * @return Response
     */
    public function index()
    {
        return WPClientsPersonsTypes::orderBy('created_at', 'desc')->paginate(5);
    }

    /**
     * Show the form for creating a new resource.
     * GET /wpclientspersonstypes/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /wpclientspersonstypes
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /wpclientspersonstypes/{id}
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
     * GET /wpclientspersonstypes/{id}/edit
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
     * PUT /wpclientspersonstypes/{id}
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
     * DELETE /wpclientspersonstypes/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}