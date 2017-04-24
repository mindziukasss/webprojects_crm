<?php namespace App\Http\Controllers;

use App\Model\WPLoginsName;
use Illuminate\Routing\Controller;

class WPLoginsNameController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /wploginsname
	 *
	 * @return Response
	 */
	public function index()
	{
		return WPLoginsName::orderBy('created_at', 'desc')->paginate(5);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /wploginsname/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /wploginsname
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /wploginsname/{id}
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
	 * GET /wploginsname/{id}/edit
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
	 * PUT /wploginsname/{id}
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
	 * DELETE /wploginsname/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}