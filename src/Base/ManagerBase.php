<?php

namespace Obelaw\Common\Base;

use Exception;
use Obelaw\Common\Contracts\HasManagers;
use Obelaw\Common\Schema\ManagerSchema;

class ManagerBase
{

    public function __construct()
    {
        if (!$this instanceof HasManagers)
            throw new Exception('Must use `Obelaw\Common\Contracts\HasManagers` contract');

        $managerSchema = new ManagerSchema;

        $this->managers($managerSchema);

        foreach ($managerSchema->getManagers() as $manager => $instance) {
            $this->{$manager} = $instance;
        }
    }

    public function __call(string $name, array $arguments)
    {
        return $this->{$name};
    }
}
