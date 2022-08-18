<?php


namespace App;


use DOMAttr;
use DOMDocument;
use Illuminate\Http\File;

class SitemapCreator
{
    public static function create()
    {
        try {
            $dom = new DOMDocument();
            $dom->encoding = 'utf-8';
            $dom->xmlVersion = '1.0';
            $dom->formatOutput = true;
            $xml_file_name = '../../sitemap.xml'; //You can give your path to save file.
            $root = $dom->createElement('Movies');
            $movie_node = $dom->createElement('movie');
            $attr_movie_id = new DOMAttr('movie_id', '5467');
            $movie_node->setAttributeNode($attr_movie_id);

            $child_node_title = $dom->createElement('Title', 'The Campaign');
            $movie_node->appendChild($child_node_title);

            $child_node_year = $dom->createElement('Year', 2012);
            $movie_node->appendChild($child_node_year);

            $child_node_genre = $dom->createElement('Genre', 'The Campaign');
            $movie_node->appendChild($child_node_genre);

            $child_node_ratings = $dom->createElement('Ratings', 6.2);
            $movie_node->appendChild($child_node_ratings);
            $root->appendChild($movie_node);
            $dom->appendChild($root);
            $dom->save($xml_file_name);
            if (strpos($_SERVER['SERVER_NAME'], '127.0.0.1') !== false) {
                $response['message'] = 'local';
            } else {
                $response['message'] = 'external';
            }
            $response['success'] = true;
        } catch (\Exception $exception) {
            $response['success'] = false;
            $response['message'] = $exception->getMessage();
        }
        return $response;
    }
}
