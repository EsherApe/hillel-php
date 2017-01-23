<?php

/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 16.01.2017
 * Time: 23:33
 */
class News extends Publication
{

    protected $source;
    const TABLE_NAME = "news";
    const ADD_ATTR = "source";


    /**
     * News constructor.
     * @param $id
     * @param $title
     * @param $shortText
     * @param $longText
     * @param $source
     */
    public function __construct($id, $title, $shortText, $longText, $source)
    {
        parent::__construct($id, $title, $shortText, $longText);
        $this->source = $source;
    }
}