<?php

namespace App\Services;

use App\Repositories\TicketRepository;

class TicketService
{
    private TicketRepository $repository;

    public function __construct(TicketRepository $repository)
    {
        $this->repository = $repository;
    }

    public function crear(array $data, int $userId)
    {
        $folio = $this->generarFolio();

        return $this->repository->crear([
            'folio' => $folio,
            'titulo' => $data['titulo'],
            'descripcion' => $data['descripcion'],
            'prioridad' => $data['prioridad'],
            'estado' => 'nuevo',
            'user_id' => $userId,
        ]);
    }

    private function generarFolio(): string
    {
        $ultimo = $this->repository->ultimo();
        $numero = $ultimo ? $ultimo->id + 1 : 1;

        return 'TD-' . str_pad($numero, 6, '0', STR_PAD_LEFT);
    }
}
