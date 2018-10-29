<?php

namespace App\Http\Controllers;

use App\Models\MyTest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DemoController extends Controller
{

    public function addAction(Request $request)
    {
        return new JsonResponse();
    }

    public function dbAction(Request $request)
    {
        return new JsonResponse(MyTest::all());
    }

    public function exceptionAction(Request $request)
    {
        throw new \Exception('有錯喔');

        return new Response('有錯喔');
    }
}
