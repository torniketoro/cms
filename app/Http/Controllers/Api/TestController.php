<?php

namespace App\Http\Controllers\Api;

use App;
use Illuminate\Http\Request;

/**
     * @SWG\Get(
     *     path="/test",
     *     description="just test controller",
     *     tags={"Test"},
     *     @SWG\Response(
     *         response=200,
     *         description="just test string",
     *     ),
     * ),
     * @param  Request     $request
     * @return Response
     */

class TestController extends ApiController
{


	public function index()
	{
		return 'we are here';
	}
}