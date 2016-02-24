<?php

namespace Sebaks\Controller;

class EmptyValidator implements ValidatorInterface
{
    /**
     * @param mixed $data
     * @return mixed
     */
    public function isValid($data)
    {
        return true;
    }

    /**
     * @return mixed
     */
    public function getErrors()
    {
        return [];
    }
}