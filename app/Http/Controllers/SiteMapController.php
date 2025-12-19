<?php

namespace App\Http\Controllers;

use App\Console\Commands\GenerateSitemap;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function generateSitemap()
    {
        $sitemapUrl = generateSitemap();
        return redirect()->back()->with(['message' => "Sitemap generated successfully at " . url('/sitemap.xml')]);
    }
}
