<?php

namespace App\Scraper;

use App\Article;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class TGDD
{

    public function scrape()
    {
        $url = 'https://taimienphi.vn/top-moi-cap-nhat-all-web';

        $client = new Client();

        $crawler = $client->request('GET', $url);

        $crawler->filter('table.listp3 tr.bdb td.bdr h3')->each(
            function (Crawler $node) {
                $name = $node->filter('a')->text();
                echo $name . "\n";
                $article = new Article;
                $article->name = $name;
                $article->icon = $name;
                $article->link_name = $name;
                $article->version = $name;
                $article->content = $name;
                $article->update = $name;
                $article->link_update = $name;
                $article->related = $name;
                $article->link_related = $name;
                $article->download = $name;
                $article->link_download = $name;

                $article->save();
            }
        );
    }
}
