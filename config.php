<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Jigsaw',
    'description' => 'Website description.',
    'author' => 'Pierce',
    'people' => ['homer','bart','maggie'],
    'collections' => [
        'blog' => [
            'path' => 'blog/{slug}'
        ],

        'reddit' => [
            'extends' => '_layouts.reddit',
            'items' => function () {
                $posts = json_decode(file_get_contents('https://www.reddit.com/r/HuskyDerping.json?raw_json=1'));
                $items = $posts->data->children;

                return collect($items)->map(function ($post) {
                    if (isset($post->data->preview)) {
                        return [
                            'id' => $post->data->id,
                            'title' => $post->data->title,
                            'thumbnail' => $post->data->thumbnail,
                            'content' => "![alt text](".$post->data->preview->images[0]->source->url.")"
                        ];
                    }
                });
            },
        ],
    ],
];
