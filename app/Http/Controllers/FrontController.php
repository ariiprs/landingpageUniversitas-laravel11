<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Services\FrontService;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    protected $frontService;

    public function __construct(FrontService $frontService)
    {
        $this->frontService = $frontService;
    }

    public function index()
    {
        $data = $this->frontService->getFrontPageData();

        return view('front.dashboard', $data);
    }

    public function allNews()
    {
        $data = $this->frontService->getFrontPageData();

        return view('front.news', $data);
    }

    public function detailsNews(Article $article)
    {
        return view('front.details', compact('article'));
    }

    public function history()
    {
        $data = $this->frontService->getHistoryPageData();

        return view('front.history', $data);
    }

    public function facility()
    {
        $data = $this->frontService->getFacilityPageData();

        return view('front.facility', $data);
    }

    public function register()
    {
        
        return view('register.register');
    }

    public function lecturer()
    {
        $data = $this->frontService->getLecturerPageData();
        return view('front.lecturers', $data);
    }
    public function greeting()
    {
        $data = $this->frontService->getGreetingsPageData();
        return view('front.greetings', $data);
    }

    public function vissionMission()
    {
        $data = $this->frontService->getVissionMissionPageData();
        return view('front.vissionmission', $data);
    }

}
