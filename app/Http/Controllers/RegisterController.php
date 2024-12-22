<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Services\RegisterService;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    protected $registerService;

    public function __construct(RegisterService $registerService)
    {
        $this->registerService = $registerService;
    }

     public function store(StoreRegisterRequest $request)
    {
        $this->registerService->register($request);

        return redirect()->route('front.register')->with('success', 'Registration created successfully.');
    }
}
