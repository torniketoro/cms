<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

/**
 * @SWG\Swagger(
 *     basePath="/api",
 *     produces={"application/json","text/html"},
 *     consumes={"application/json"},
 *     @SWG\Info(
 *         version="4.0.0",
 *         title="Cms API",
 *         description="content management system",
 *         @SWG\Contact(
 *             name="torniketoro",
 *             email="tokotorgashvili@gmail.com"
 *         ),
 *     ),
 *     @SWG\Definition(
 *         definition="Error",
 *         required={"error"},
 *         @SWG\Property(
 *             property="error",
 *             type="string",
 *             default="message",
 *         ),
 *     )
 * )
 */

abstract class ApiController extends Controller
{

}