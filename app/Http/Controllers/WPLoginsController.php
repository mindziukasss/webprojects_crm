<?php namespace App\Http\Controllers;

use App\Model\WPLogins;
use Illuminate\Routing\Controller;

class WPLoginsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /wplogins
	 *
	 * @return Response
	 */
	public function index()
	{
        return WPLogins::orderBy('created_at', 'desc')->paginate(5);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /wplogins/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /wplogins
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /wplogins/{id}
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
	 * GET /wplogins/{id}/edit
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
	 * PUT /wplogins/{id}
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
	 * DELETE /wplogins/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}