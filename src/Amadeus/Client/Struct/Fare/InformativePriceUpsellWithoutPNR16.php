<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2015 Leonardo Travel
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */
namespace Amadeus\Client\Struct\Fare;
use Amadeus\Client\RequestOptions\FarePriceUpsellWithoutPNROptions;
/**
 * InformativePriceUpsellWithoutPNR16
 *
 * @package Amadeus\Client\Struct\Fare
 * @author Leonardo Travel <dermikagh@gmail.com>
 */
class InformativePriceUpsellWithoutPNR16 extends InformativePricingWithoutPNR13
{
    /**
     * InformativePriceUpsellWithoutPNR16 constructor.
     *
     * @param FarePriceUpsellWithoutPNROptions|null $options
     */
    public function __construct(FarePriceUpsellWithoutPNROptions $options = null)
    {
        parent::__construct($options);
    }
}
