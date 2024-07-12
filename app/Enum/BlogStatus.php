<?php

namespace App\Enum;

enum BlogStatus: string
{
    case Archived = 'archived';

    case Draft = 'draft';

    case Post = 'post';

    public function status()
    {
        return match($this){
            self::Archived => 'archived',
            self::Draft => 'draft',
            self::Post => 'post'
        };
    }
}
