<?php

/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 16.01.2017
 * Time: 23:32
 */
class Article extends Publication
{

    protected $author;
    const TABLE_NAME = "articles";
    const ADD_ATTR = "author";

    /**
     * Article constructor.
     * @param $id
     * @param $title
     * @param $shortText
     * @param $longText
     * @param $author
     */
    public function __construct($id, $title, $shortText, $longText, $author)
    {
        parent::__construct($id, $title, $shortText, $longText);
        $this->author = $author;
    }
}