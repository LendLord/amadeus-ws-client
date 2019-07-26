<?php


namespace Amadeus\Client\ResponseHandler\Fare;


use Amadeus\Client\ResponseHandler\StandardResponseHandler;
use Amadeus\Client\Result;
use Amadeus\Client\Session\Handler\SendResult;

class HandlerPriceUpsellWithoutPNR extends StandardResponseHandler
{
    /**
     * @param SendResult $response
     *
     * @return Result
     */
    public function analyze(SendResult $response)
    {
        return $this->analyzeSimpleResponseErrorCodeAndMessage($response);
    }
}
