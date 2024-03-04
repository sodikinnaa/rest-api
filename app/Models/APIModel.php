<?php
namespace App\Models;
use Goutte\Client;

use CodeIgniter\Model;

class APIModel extends Model
{
    public function getData($url){
        $client = new Client();
        

        $crawler = $client->request('GET', $url);

        if ($client->getResponse()->getStatusCode() == 200) {
            $titleNode = $crawler->filter('title');
            if ($titleNode->count() > 0) {
                $title = $titleNode->text();
            } else {
                $title = "Title not found";
            }

            $contentNode = $crawler->filter('html');
            if ($contentNode->count() > 0) {
                $content = $contentNode->html();
            } else {
                $content = "Content not found";
            }

            $data = [
                'title' => $title,
                'content' => $content,
            ];

            return $data;
    }

    
    }
    public function getDataByParse($url){
        $url = 'https://'. $url;
        $client = new Client();
        

        $crawler = $client->request('GET', $url);

        if ($client->getResponse()->getStatusCode() == 200) {
            $titleNode = $crawler->filter('title');
            if ($titleNode->count() > 0) {
                $title = $titleNode->text();
            } else {
                $title = "Title not found";
            }

            $contentNode = $crawler->filter('html');
            if ($contentNode->count() > 0) {
                $content = $contentNode->html();
            } else {
                $content = "Content not found";
            }

            $data = [
                'title' => $title,
                'content' => $content,
            ];

            return $data;
    }
    }

    public function getDataAndDiv($url, $div){
        // var_dump($div);
        $url = 'https://'. $url;
        $client = new Client();
        

        $crawler = $client->request('GET', $url);

        if ($client->getResponse()->getStatusCode() == 200) {
            $titleNode = $crawler->filter('title');
            if ($titleNode->count() > 0) {
                $title = $titleNode->text();
            } else {
                $title = "Title not found";
            }

            $contentNode = $crawler->filter($div);
            if ($contentNode->count() > 0) {
                $content = $contentNode->html();
            } else {
                $content = "Content not found";
            }

            $data = [
                'title' => $title,
                'content' => $content,
            ];

            return $data;
    }

   
}
}

