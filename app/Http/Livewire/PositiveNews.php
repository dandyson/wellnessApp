<?php

namespace App\Http\Livewire;

use Goutte\Client;
use Livewire\Component;
use Weidner\Goutte\GoutteFacade;

class PositiveNews extends Component
{
    private $positiveNewsResults = array();
    private $goodNewsResults = array();

    public function render()
    {
        $client = new Client(); // Goutte Client

        // URLs
        $positiveNewsUrl = 'https://www.positive.news/';
        // $goodNewsUrl = 'https://www.good.co.uk/news/topics/cx2pk70323et/uplifting-stories';

        // Requests
        $positiveNews = $client->request("GET", $positiveNewsUrl);
        // $goodNews = $client->request("GET", $goodNewsUrl);

        // Data
        $jsonData['positive-news'] = $positiveNews->filter('.latest__articles > div')->each(function ($node) {
            $this->positiveNewsResults['link'] = $node->filter('.card__image__link')->getNode(0)->getAttribute('href');
            $this->positiveNewsResults['image'] = $node->filter('.card__image')->getNode(0)->getAttribute('src');
            $this->positiveNewsResults['title'] = $node->filter('.card__title')->text();
            $this->positiveNewsResults['description'] = strlen($node->filter('.card__text')->text()) > 75 ? substr($node->filter('.card__text')->text(), 0, 75) . "..." : $node->filter('.card__text')->text();
            return $this->positiveNewsResults;
        });

        // $jsonData['good-news'] = $goodNews->filter('.td_block_inner > .td-block-row > td-block-span6')->each(function ($node) {
        //     $this->goodNewsResults['link'] = $node->filter('.card__image__link')->getNode(0)->getAttribute('href');
        //     $this->goodNewsResults['image'] = $node->filter('.entry-thumb')->getNode(0)->getAttribute('src');
        //     $this->goodNewsResults['title'] = $node->filter('.td-module-title > a')->text();
        //     return $this->goodNewsResults;
        // });

        // dump($jsonData);
        // exit;

    
        return view('livewire.positive-news')->with(
            'jsonData', $jsonData
        );
    }
}
