<?php namespace App\Http\Controllers;

use App\Model\WPProjectsTypes;
use Illuminate\Routing\Controller;

class WPProjectsTypesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /wpprojectstypes
	 *
	 * @return Response
	 */
	public function index()
	{
        return WPProjectsTypes::orderBy('created_at', 'desc')->paginate(5);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /wpprojectstypes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /wpprojectstypes
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /wpprojectstypes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /wpprojectstypes/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /wpprojectstypes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /wpprojectstypes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}