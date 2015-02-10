<?php
namespace Acme\Transformers;
class LessonTransformer extends Transformers{

    public function transform($lesson)
    {
        return [
                'title'=>$lesson['title'],
                'body'=>$lesson['body'],
                'active'=>(boolean) $lesson['some_bool'],
        ];
    }


}