<?php

namespace App\Repositories\Contracts;

use App\Models\Registration;

interface RegisterRepositoryInterface
{
    public function create(array $data): Registration;
}
