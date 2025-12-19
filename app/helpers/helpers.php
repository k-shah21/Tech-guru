<?php

use App\Models\Blog;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

if (!function_exists('generateSitemap')) {
    function generateSitemap()
    {
        $posts = Blog::all();
        $sitemap = Sitemap::create()->add('http://tech-guru.test/');

        $baseURL = 'http://tech-guru.test/';

        $staticPages = [
            'admin/dashboard',
            'admin/blog',
        ];

        foreach ($staticPages as $page) {
            $sitemap->add(Url::create($baseURL . '/' . $page . '/')
                ->setChangeFrequency('daily')
                ->setPriority(0.8));
        }

        foreach ($posts as $post) {
            $sitemap->add(Url::create($baseURL .  '/blog/' . $post->slug . '/')
                ->setLastModificationDate($post->updated_at));
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        return url('/sitemap.xml');
    }
}
