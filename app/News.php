<?php

namespace App;


class News
{
    private static $news = [
        1 => [
            'id' => 1,
            'title' => 'Новость №1',
            'text' => 'Текст новости номер 1, бла бла бла'
        ],
        2 => [
            'id' => 2,
            'title' => 'Новость №2',
            'text' => 'Текст новости номер 2, тра ла ла'
        ],
        3 => [
            'id' => 3,
            'title' => 'Новость №3',
            'text' => 'Текст новости номер 3, тро ло ло'
        ]
    ];

    public static function getNews()
    {
        return static::$news;
    }

    public static function getOneNews($id) {
        return static::$news[$id];
    }
}
