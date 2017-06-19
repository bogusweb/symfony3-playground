<?php
/**
 * Created by PhpStorm.
 * User: bogus
 * Date: 15.06.2017
 * Time: 14:57
 */

namespace AppBundle\Service;

use Doctrine\Common\Cache\Cache;
use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;

class MarkdownTransformer
{

    private $markdownParser;
    private $cache;

    public function __construct(MarkdownParserInterface $markdownParser, Cache $cache)
    {
        $this->markdownParser = $markdownParser;
        $this->cache = $cache;
    }

    public function parse($str)
    {
        $cache = $this->cache;
        $key = md5($str);
        if ($cache->contains($key)) {
            return $cache->fetch($key);
        } else {

        }
        $str = $this->markdownParser
            ->transformMarkdown($str);
        $cache->save($key, $str);
        return $str;
    }
}