<?php
use Illuminate\Support\Facades\Http;
use \GuzzleHttp\Client;
class helper
{
    public static function set_active($route)
    {
        if (is_array($route)) {
            return in_array(Request::path(), $route) ? 'active' : '';
        }
        return Request::path() == $route ? 'active' : '';
    }

public static function one_bangla(){
        $res = Http::get('https://deshergarjan.net/wp-json/wp/v2/posts?per_page=3');
        return $res->json();
}


    public static function one_World(){
        $res = Http::get('http://newsapi.org/v2/everything?q=coronavirus&sortBy=publishedAt&apiKey=adf93c0e50554621b9195c5088ad646e');
    return $ress=  $res->json()['articles'];
    }

    public static function corona(){
        $res = Http::get('https://api.covid19api.com/summary');
        return $res->json()['Countries'];
    }




}

