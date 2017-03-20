<?php

namespace App\Http\Controllers\Quarx;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Quarx\Modules\Relations\Services\RelationService;

class RelationsController extends Controller
{
    public function __construct(RelationService $relationService)
    {
        $this->service = $relationService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('quarx-frontend::relations.index');
    }
}
