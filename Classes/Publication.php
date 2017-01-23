<?php

/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 16.01.2017
 * Time: 23:22
 */
abstract class Publication
{
    protected $id;
    protected $title;
    protected $shortText;
    protected $longText;

    /**
     * Publication constructor.
     * @param $id
     * @param $title
     * @param $shortText
     * @param $longText
     */
    public function __construct($id, $title, $shortText, $longText)
    {
        $this->id = $id;
        $this->title = $title;
        $this->shortText = $shortText;
        $this->longText = $longText;
    }

    /**
     * @param $id
     * @param PDO $pdo
     * @return static
     */
    public function create($id, PDO $pdo)
    {
        $res = $pdo->query(" SELECT * FROM " . static::TABLE_NAME . " WHERE id = $id ");
        $publication = $res->fetch();

        return new static(
            $publication['id'],
            $publication['title'],
            $publication['short_text'],
            $publication['long_text'],
            $publication[static::ADD_ATTR]
        );
    }

}