<?php


namespace Sebaks\Controller;

class Response implements ResponseInterface
{
    /**
     * @var mixed
     */
    private $criteriaErrors;

    /**
     * @var mixed
     */
    private $changesErrors;

    /**
     * @var mixed
     */
    private $changes;

    /**
     * @var mixed
     */
    private $criteria;

    /**
     * @var mixed
     */
    private $result;

    /**
     * @return mixed
     */
    public function getCriteriaErrors()
    {
        return $this->criteriaErrors;
    }

    /**
     * @param mixed $criteriaErrors
     */
    public function setCriteriaErrors($criteriaErrors)
    {
        $this->criteriaErrors = $criteriaErrors;
    }

    /**
     * @return mixed
     */
    public function getChangesErrors()
    {
        return $this->changesErrors;
    }

    /**
     * @param mixed $changesErrors
     */
    public function setChangesErrors($changesErrors)
    {
        $this->changesErrors = $changesErrors;
    }

    /**
     * @return mixed
     */
    public function getChanges()
    {
        return $this->changes;
    }

    /**
     * @param mixed $changes
     */
    public function setChanges($changes)
    {
        $this->changes = $changes;
    }

    /**
     * @return mixed
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * @param mixed $criteria
     */
    public function setCriteria($criteria)
    {
        $this->criteria = $criteria;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'result' => $this->result,
            'criteriaErrors' => $this->criteriaErrors,
            'changesErrors' => $this->changesErrors,
            'criteria' => $this->criteria,
            'changes' => $this->changes,
        ];
    }
}
