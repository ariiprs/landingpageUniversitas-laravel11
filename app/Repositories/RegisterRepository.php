<?php

namespace App\Repositories;

use App\Models\Registration;
use App\Repositories\Contracts\RegisterRepositoryInterface;

class RegisterRepository implements RegisterRepositoryInterface
{
    public function create(array $data): Registration
    {
        return Registration::create($data);
    }
}
