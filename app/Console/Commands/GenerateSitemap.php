<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

/**
 * Class GenerateSitemap
 * @package App\Console\Commands
 */
class GenerateSitemap extends Command
{
    /**
     * php artisan sitemap:generate to generate the sitemap
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * @return mixed
     */
    public function handle()
    {
        SitemapGenerator::create(config('app.url'))
                        ->writeToFile(public_path('sitemap.xml'));
    }
}
