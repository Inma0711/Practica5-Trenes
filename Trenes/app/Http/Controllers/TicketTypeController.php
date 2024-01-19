<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketType;

class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticket_type = TicketType::all();
        return view('ticket_types/index', [
            'ticket_types' => $ticket_type
        ]);
    }
}
