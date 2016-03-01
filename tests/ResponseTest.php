<?php

namespace Sebaks\ControllerTest;

use Sebaks\Controller\Response;

class ResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testToArray()
    {
        $response = new Response();
        $criteria = ['some' => 'criteria'];
        $changes = ['key' => 'value'];
        $criteriaError = ['some' => 'error'];
        $changesError = ['some' => 'error'];
        $result = ['some' => 'result'];

        $response->setResult($result);
        $response->setCriteriaErrors($criteriaError);
        $response->setChangesErrors($changesError);
        $response->setCriteria($criteria);
        $response->setValidCriteria($criteria);
        $response->setChanges($changes);
        $response->setValidChanges($changes);

        $resultArray = $response->toArray();

        $this->assertEquals(
            [
                'result' => $result,
                'criteriaErrors' => $criteriaError,
                'changesErrors' => $changesError,
                'criteria' => $criteria,
                'changes' => $changes,
                'validCriteria' => $criteria,
                'validChanges' => $changes,
            ],
            $resultArray
        );
    }
}
