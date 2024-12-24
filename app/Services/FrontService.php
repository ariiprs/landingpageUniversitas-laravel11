<?php

namespace App\Services;

use App\Models\Article;
use App\Repositories\AboutUsRepository;
use App\Repositories\CategoryArticleRepository;
use App\Repositories\ArticleRepository;
use App\Repositories\FacilityRepository;
use App\Repositories\FooterRepository;
use App\Repositories\GreetingRepository;
use App\Repositories\HistoryRepository;
use App\Repositories\LecturerRepository;
use App\Repositories\PartnershipRepository;
use App\Repositories\SliderItemRepository;
use App\Repositories\VissionMissionRepository;

class FrontService
{
    protected $categoryArticleRepository;
    protected $articleRepository;
    protected $facilityRepository;
    protected $footerRepository;
    protected $historyRepository;
    protected $aboutUsRepository;
    protected $lecturerRepository;
    protected $greetingRepository;
    protected $partnershipRepository;
    protected $vissionMissionRepository;
    protected $sliderItemRepository;

    public function __construct(
        CategoryArticleRepository $categoryArticleRepository,
        ArticleRepository $articleRepository,
        FacilityRepository $facilityRepository,
        FooterRepository $footerRepository,
        HistoryRepository $historyRepository,
        AboutUsRepository $aboutUsRepository,
        LecturerRepository $lecturerRepository,
        GreetingRepository $greetingRepository,
        PartnershipRepository $partnershipRepository,
        VissionMissionRepository $vissionMissionRepository,
        SliderItemRepository $sliderItemRepository
    ) {
        $this->categoryArticleRepository = $categoryArticleRepository;
        $this->articleRepository = $articleRepository;
        $this->facilityRepository = $facilityRepository;
        $this->footerRepository = $footerRepository;
        $this->historyRepository = $historyRepository;

        $this->aboutUsRepository = $aboutUsRepository;
        $this->lecturerRepository = $lecturerRepository;
        $this->greetingRepository = $greetingRepository;
        $this->partnershipRepository = $partnershipRepository;
        $this->vissionMissionRepository = $vissionMissionRepository;
        $this->sliderItemRepository = $sliderItemRepository;
    }

    public function getFrontPageData()
    {
        $partnerships = $this->partnershipRepository->getAllPartnerships();
        $aboutUs = $this->aboutUsRepository->getAllAboutUs()->first();
        $rectorat = $this->lecturerRepository->getAllLecturers(1);
        $categoriesArticle = $this->categoryArticleRepository->getAllCategoryArticles();
        $sliderItems = $this->sliderItemRepository->getAllSliderItems();
        $articles = $this->articleRepository->getAllArticles(1);
        $announcements = $this->articleRepository->getAllArticles(3);
        $footers = $this->footerRepository->getAllFooters();
        $footer = $footers->first(); // Ambil item pertama dari koleksi footers

        return compact('categoriesArticle', 'footer', 'articles', 'announcements', 'aboutUs', 'partnerships', 'sliderItems', 'rectorat');
    }

    public function getHistoryPageData()
    {
        $histories = $this->historyRepository->getAllHistories();

        return compact('histories');
    }

    public function getFacilityPageData()
    {
        $facilities = $this->facilityRepository->getAllFacilities();

        return compact('facilities');
    }

    public function getLecturerPageData()
    {
        $lecturers = $this->lecturerRepository->getAllLecturers(1);
        $staff = $this->lecturerRepository->getAllLecturers(2);

        return compact('lecturers', 'staff');
    }

    public function getGreetingsPageData()
    {
        $greeeting = $this->greetingRepository->getAllGreeting();

        return compact('greeeting');
    }

    public function getVissionMissionPageData()
    {
        $vissionMission = $this->vissionMissionRepository->getAllVissionMission();

        return compact('vissionMission');
    }
}
