<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainType;

class TrainTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $train_type = TrainType::all();
        return view('train_types/index', [
            'train_types' => $train_type
        ]);
    }

}