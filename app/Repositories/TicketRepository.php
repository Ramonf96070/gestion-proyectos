<?php

namespace App\Repositories;

use App\Models\Ticket;

class TicketRepository
{
    public function crear(array $data): Ticket
    {
        return Ticket::create($data);
    }

    public function ultimo(): ?Ticket
    {
        return Ticket::latest()->first();
    }
}
