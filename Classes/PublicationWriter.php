<?php

/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 16.01.2017
 * Time: 23:41
 */
class PublicationWriter
{
    protected $publicationType;

    /**
     * PublicationWriter constructor.
     * @param $publicationType
     */
    public function __construct($publicationType)
    {
        $this->publicationType = $publicationType;
    }

    public function getShortPreview($pdo)
    {

        if ($this->publicationType == 'article') {
            $res = $pdo->query(" SELECT * FROM news_blog.articles");
        } elseif ($this->publicationType == 'news') {
            $res = $pdo->query(" SELECT * FROM news_blog.news");
        }

        $publications = $res->fetchAll();
        return $publications;

    }


}