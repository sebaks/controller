<?php


namespace Sebaks\Controller;

interface ValidatorInterface
{
    /**
     * @param mixed $data
     * @return mixed
     */
    public function isValid($data);

    /**
     * @return mixed
     */
    public function getErrors();

    /**
     * @return mixed
     */
    public function getValid();
}
