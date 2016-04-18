<?php

namespace Sebaks\Controller;

use T4webDomainInterface\ServiceInterface;

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
        ServiceInterface $service
    ) {

        $this->criteriaValidator = $criteriaValidator;
        $this->changesValidator = $changesValidator;
        $this->service = $service;
    }

    /**
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function dispatch(RequestInterface $request, ResponseInterface $response)
    {
        $criteria = $request->getCriteria();
        $changes = $request->getChanges();

        if ($this->criteriaValidator->isValid($criteria)) {
            if ($this->changesValidator->isValid($changes)) {
                $result = $this->service->handle(
                    $this->criteriaValidator->getValid(),
                    $this->changesValidator->getValid()
                );
                $response->setResult($result);
            } else {
                $response->setChangesErrors($this->changesValidator->getErrors());
            }
        } else {
            $response->setCriteriaErrors($this->criteriaValidator->getErrors());
        }

        $response->setCriteria($criteria);
        $response->setChanges($changes);
        $response->setValidCriteria($this->criteriaValidator->getValid());
        $response->setValidChanges($this->changesValidator->getValid());

        return $response;
    }
}
