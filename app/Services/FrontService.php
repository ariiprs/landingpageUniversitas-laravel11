<?php

namespace App\Services;

use App\Models\Article;
use App\Repositories\CategoryArticleRepository;
use App\Repositories\ArticleRepository;
use App\Repositories\FacilityRepository;
use App\Repositories\FooterRepository;
use App\Repositories\HistoryRepository;

class FrontService
{
    protected $categoryArticleRepository;
    protected $articleRepository;
    protected $facilityRepository;
    protected $footerRepository;
    protected $historyRepository;

    public function __construct(
        CategoryArticleRepository $categoryArticleRepository,
        ArticleRepository $articleRepository,
        FacilityRepository $facilityRepository,
        FooterRepository $footerRepository,
        HistoryRepository $historyRepository
    ) {
        $this->categoryArticleRepository = $categoryArticleRepository;
        $this->articleRepository = $articleRepository;
        $this->facilityRepository = $facilityRepository;
        $this->footerRepository = $footerRepository;
        $this->historyRepository = $historyRepository;
    }

    public function getFrontPageData()
    {
        $categoriesArticle = $this->categoryArticleRepository->getAllCategoryArticles();
        $articles = $this->articleRepository->getAllArticles(1);
        $footers = $this->footerRepository->getAllFooters();
        $footer = $footers->first(); // Ambil item pertama dari koleksi footers


        return compact('categoriesArticle', 'footer', 'articles');
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
}
