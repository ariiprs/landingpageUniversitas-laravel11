<?php

namespace App\Services;

use App\Http\Requests\StoreRegisterRequest;
use App\Repositories\RegisterRepository;

class RegisterService
{
    protected $registerRepository;

    public function __construct(RegisterRepository $registerRepository)
    {
        $this->registerRepository = $registerRepository;
    }

     public function register(StoreRegisterRequest $request)
    {
        $validated = $request->validated();

        // Upload photo
        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('photos', 'public');
        }

        // Simpan data
        return $this->registerRepository->create($validated);
    }
}
