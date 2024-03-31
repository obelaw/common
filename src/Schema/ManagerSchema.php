<?php

namespace Obelaw\Common\Schema;

class ManagerSchema
{
    private array $managers = [];

    /**
     * Get the value of managers
     */
    public function getManagers()
    {
        return $this->managers;
    }

    /**
     * Set the value of managers
     *
     * @return  self
     */
    public function addManager($manager, $instance)
    {
        $this->managers = array_merge($this->managers, [$manager => $instance]);

        return $this;
    }

    /**
     * Get the value of manager
     */
    public function getManager($manager)
    {
        return $this->managers[$manager];
    }
}
