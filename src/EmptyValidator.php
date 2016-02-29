<?php

namespace Sebaks\Controller;

class EmptyValidator implements ValidatorInterface
{
    /**
     * @var mixed
     */
    private $data;

    /**
     * @param mixed $data
     * @return mixed
     */
    public function isValid($data)
    {
        $this->data = $data;
        return true;
    }

    /**
     * @return mixed
     */
    public function getErrors()
    {
        return [];
    }

    /**
     * @return mixed
     */
    public function getValid()
    {
        return $this->data;
    }
}