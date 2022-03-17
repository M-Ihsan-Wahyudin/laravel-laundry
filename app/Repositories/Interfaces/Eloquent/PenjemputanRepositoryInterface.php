<?php

namespace App\Repositories\Interfaces\Eloquent;

interface PenjemputanRepositoryInterface
{
    public function allData() : object;

    public function create(array $payload) : object;

    public function updateDataById(array $payload, int $id) : object;

    public function deleteDataById(int $id) : object;
}
