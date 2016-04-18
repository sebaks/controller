<?php

namespace Sebaks\Controller;

use T4webDomainInterface\ServiceInterface;

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
