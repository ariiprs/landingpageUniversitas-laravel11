<?php

namespace App\Repositories\Contracts;

interface ArticleRepositoryInterface
{
        public function getAllArticles($categoryId);
}
