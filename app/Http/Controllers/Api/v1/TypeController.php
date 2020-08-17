<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\TypeResource;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @group User Type Resource
     * @authenticated
     *
     * @apiResourceCollection  \App\Http\Resources\TypeResource
     * @apiResourceModel  \App\Models\Type
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        
        return response()->json(TypeResource::collection($types));
    }

}
