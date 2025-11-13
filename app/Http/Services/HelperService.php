<?php

namespace App\Http\Services;

use Illuminate\Support\Str;

class HelperService
{

    public static function CamelCaseToSnake(array $data): array
    {
        $result = [];

        foreach ($data as $key => $value) {
            $snakeKey = Str::snake($key);
            $result[$snakeKey] = $value;
        }

        return $result;
    }
}
