<?php

namespace Sebaks\Controller;

class Controller
{
    /**
     * @var ValidatorInterface
     */
    private $criteriaValidator;

    /**
     * @var ValidatorInterface
     */
    private $changesValidator;

    /**
     * @var ServiceInterface
     */
    private $service;

    /**
     * @param ValidatorInterface $criteriaValidator
     * @param ValidatorInterface $changesValidator
     * @param ServiceInterface $service
     */
    public function __construct(
        ValidatorInterface $criteriaValidator,
        ValidatorInterface $changesValidator,
        ServiceInterface $service)
    {
        $this->criteriaValidator = $criteriaValidator;
        $this->changesValidator = $changesValidator;
        $this->service = $service;
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function dispatch(Request $request, Response $response)
    {
        $criteria = $request->getCriteria();
        $changes = $request->getChanges();

        if ($this->criteriaValidator->isValid($criteria)) {
            if ($this->changesValidator->isValid($changes)) {
                $result = $this->service->handle($criteria, $changes);
                $response->setResult($result);
            } else {
                $response->setChangesErrors($this->changesValidator->getErrors());
            }
        } else {
            $response->setCriteriaErrors($this->criteriaValidator->getErrors());
        }

        $response->setCriteria($criteria);
        $response->setChanges($changes);

        return $response;
    }
}