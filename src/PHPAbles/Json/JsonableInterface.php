<?php

declare(strict_types=1);

namespace PHPAbles\Json;

use Illuminate\Contracts\Support\Jsonable;

interface JsonableInterface extends Jsonable
{
    public function toJson($options = 0);
}
