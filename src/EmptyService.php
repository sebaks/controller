<?php

namespace Sebaks\Controller;

class EmptyService implements ServiceInterface
{
    /**
     * @param mixed $criteria
     * @param mixed $changes
     * @return mixed
     */
    public function handle($criteria, $changes)
    {
        return;
    }
}
