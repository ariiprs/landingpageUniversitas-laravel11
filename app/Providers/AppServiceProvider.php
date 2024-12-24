<?php

namespace App\Providers;

use App\Repositories\FooterRepository;
use App\Repositories\AboutUsRepository;
use App\Repositories\ArticleRepository;
use App\Repositories\HistoryRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\FacilityRepository;
use App\Repositories\GreetingRepository;
use App\Repositories\LecturerRepository;
use App\Repositories\RegisterRepository;
use App\Repositories\PartnershipRepository;
use App\Repositories\VissionMissionRepository;
use App\Repositories\CategoryArticleRepository;
use App\Repositories\Contracts\FooterRepositoryInterface;
use App\Repositories\Contracts\AboutUsRepositoryInterface;
use App\Repositories\Contracts\ArticleRepositoryInterface;
use App\Repositories\Contracts\HistoryRepositoryInterface;
use App\Repositories\Contracts\FacilityRepositoryInterface;
use App\Repositories\Contracts\GreetingRepositoryInterface;
use App\Repositories\Contracts\LecturerRepositoryInterface;
use App\Repositories\Contracts\RegisterRepositoryInterface;
use App\Repositories\Contracts\PartnershipRepositoryInterface;
use App\Repositories\Contracts\VissionMissionRepositoryInterface;
use App\Repositories\Contracts\CategoryArticleRepositoryInterface;
use App\Repositories\Contracts\SliderItemRepositoryInterface;
use App\Repositories\SliderItemRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
         $this->app->singleton(ArticleRepositoryInterface::class, ArticleRepository::class);

         $this->app->singleton(CategoryArticleRepositoryInterface::class, CategoryArticleRepository::class);

         $this->app->singleton(FacilityRepositoryInterface::class, FacilityRepository::class);

         $this->app->singleton(FooterRepositoryInterface::class, FooterRepository::class);

         $this->app->singleton(HistoryRepositoryInterface::class, HistoryRepository::class);

         $this->app->singleton(RegisterRepositoryInterface::class, RegisterRepository::class);

         $this->app->singleton(AboutUsRepositoryInterface::class, AboutUsRepository::class);
        $this->app->singleton(GreetingRepositoryInterface::class, GreetingRepository::class);
        $this->app->singleton(LecturerRepositoryInterface::class, LecturerRepository::class);
        $this->app->singleton(PartnershipRepositoryInterface::class, PartnershipRepository::class);
        $this->app->singleton(VissionMissionRepositoryInterface::class, VissionMissionRepository::class);
        $this->app->singleton(SliderItemRepositoryInterface::class, SliderItemRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
