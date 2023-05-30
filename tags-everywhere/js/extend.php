<?php

namespace 5aWTF\TagsEverywhere;

use Flarum\Extend;
use Flarum\Api\Serializer\ForumSerializer;

return [
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js'),
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js'),
    (new Extend\Settings())
        ->serializeToForum('tags-everywhere.tags_position', 'tags_position'),
    (new Extend\ApiSerializer(ForumSerializer::class))
        ->attribute('tagsPosition', function ($serializer, $model) {
            return $model->tags_position;
        }),
];
