<?php

namespace App\Providers;

use App\Services\AboutUsService;
use App\Services\BlogPostService;
use App\Services\ClientFeedbackService;
use App\Services\ContactService;
use App\Services\FaqService;
use App\Services\FeatureService;
use App\Services\GoalService;
use App\Services\HeroSectionService;
use App\Services\HomeSectionService;
use App\Services\NewsletterSubscriberService;
use App\Services\ServiceService;
use App\Services\SocialMediaService;
use App\Services\SocialMediaUrlGenerator;
use App\Services\TeamService;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Pluralizer;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(AboutUsService::class, function ($app) {
            return new AboutUsService();
        });

        $this->app->singleton(BlogPostService::class, function ($app) {
            return new BlogPostService();
        });

        $this->app->singleton(ClientFeedbackService::class, function ($app) {
            return new ClientFeedbackService();
        });

        $this->app->singleton(ContactService::class, function ($app) {
            return new ContactService();
        });

        $this->app->singleton(FaqService::class, function ($app) {
            return new FaqService();
        });

        $this->app->singleton(FeatureService::class, function ($app) {
            return new FeatureService();
        });

        $this->app->singleton(GoalService::class, function ($app) {
            return new GoalService();
        });

        $this->app->singleton(HeroSectionService::class, function ($app) {
            return new HeroSectionService();
        });

        $this->app->singleton(HomeSectionService::class, function ($app) {
            return new HomeSectionService();
        });

        $this->app->singleton(NewsletterSubscriberService::class, function ($app) {
            return new NewsletterSubscriberService();
        });

        $this->app->singleton(ServiceService::class, function ($app) {
            return new ServiceService();
        });

        $this->app->singleton(SocialMediaService::class, function ($app) {
            return new SocialMediaService();
        });

        $this->app->singleton(SocialMediaUrlGenerator::class, function ($app) {
            return new SocialMediaUrlGenerator();
        });

        $this->app->singleton(TeamService::class, function ($app) {
            return new TeamService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        Pluralizer::useLanguage('portuguese');
        Carbon::setLocale('pt');
        Paginator::useBootstrapFour();
    }
}
