<?php

declare(strict_types=1);

namespace Potter\Json;

use Illuminate\Contracts\Support\Jsonable;

interface JsonableInterface extends Jsonable
{
    public function toJson(int $options = 0): string;
}
