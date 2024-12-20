<?php

namespace App\Repositories;

use App\Models\Article;
use App\Repositories\Contracts\ArticleRepositoryInterface;

class ArticleRepository implements ArticleRepositoryInterface
{
    public function getAllArticles($categoryId)
    {
        return Article::where('category_article_id', $categoryId)->get();
    }
}
