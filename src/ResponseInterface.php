<?php


namespace Sebaks\Controller;

interface ResponseInterface
{
    /**
     * @return mixed
     */
    public function getCriteriaErrors();

    /**
     * @param mixed $errors
     */
    public function setCriteriaErrors($errors);

    /**
     * @return mixed
     */
    public function getChangesErrors();

    /**
     * @param mixed $errors
     */
    public function setChangesErrors($errors);

    /**
     * @return mixed
     */
    public function getChanges();

    /**
     * @param mixed $changes
     */
    public function setChanges($changes);

    /**
     * @return mixed
     */
    public function getCriteria();

    /**
     * @param mixed $criteria
     */
    public function setCriteria($criteria);

    /**
     * @return mixed
     */
    public function getResult();

    /**
     * @param mixed $result
     */
    public function setResult($result);

    /**
     * @return array
     */
    public function toArray();
}
