<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTicketRequest;
use App\Services\TicketService;

class TicketController extends Controller
{
    private TicketService $service;

    public function __construct(TicketService $service)
    {
        $this->service = $service;
    }

    public function store(StoreTicketRequest $request)
    {
        $this->service->crear(
            $request->validated(),
            auth()->id()
        );

        return redirect()->route('tickets.index')
            ->with('success', 'Ticket creado correctamente');
    }
}

