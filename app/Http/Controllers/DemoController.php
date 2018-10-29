<?php

namespace App\Http\Controllers;

use App\Models\MyTest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function dbAction(Request $request)
    {
        return new JsonResponse(MyTest::all());
    }

    public function addAction(Request $request)
    {
        return new JsonResponse();
    }
}
