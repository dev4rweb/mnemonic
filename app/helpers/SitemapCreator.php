<?php


namespace App\helpers;


use DOMAttr;
use DOMDocument;
use Illuminate\Http\File;

class SitemapCreator
{
    public static function create()
    {
        /*https://stackoverflow.com/questions/486757/how-to-generate-xml-file-dynamically-using-php*/
        /*https://www.guru99.com/php-and-xml.html*/
        try {
            $pages = ['Home', 'About'];

            $dom = new DOMDocument();
            $dom->encoding = 'utf-8';
            $dom->xmlVersion = '1.0';
            $dom->formatOutput = true;

            $xml_file_name = '../mnemonic/sitemap.xml'; //You can give your path to save file.
            $xml_file_name = '../sitemap.xml'; //You can give your path to save file.
//            $xml_file_name = 'sitemap.xml'; //You can give your path to save file.


            $root = $dom->createElement('urlset');
            $rootAttr = new DOMAttr('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
            $root->setAttributeNode($rootAttr);

            foreach ($pages as $page) {
                $url_node = $dom->createElement('url');

                $loc_node = $dom->createElement('loc', 'https://coinzoomer.com/' . $page);
                $url_node->appendChild($loc_node);

                $priority_node = $dom->createElement('priority', '1.0');
                $url_node->appendChild($priority_node);

                $lastmod_node = $dom->createElement('lastmod', '2022-08-08T11:05:02+03:00');
                $url_node->appendChild($lastmod_node);

                $changefreq_node = $dom->createElement('changefreq', 'daily');
                $url_node->appendChild($changefreq_node);

                $root->appendChild($url_node);
            }

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
