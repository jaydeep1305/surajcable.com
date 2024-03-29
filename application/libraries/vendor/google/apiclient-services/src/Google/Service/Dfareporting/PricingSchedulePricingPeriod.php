<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_Dfareporting_PricingSchedulePricingPeriod extends Google_Model
{
  public $endDate;
  public $pricingComment;
  public $rateOrCostNanos;
  public $startDate;
  public $units;

  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  public function getEndDate()
  {
    return $this->endDate;
  }
  public function setPricingComment($pricingComment)
  {
    $this->pricingComment = $pricingComment;
  }
  public function getPricingComment()
  {
    return $this->pricingComment;
  }
  public function setRateOrCostNanos($rateOrCostNanos)
  {
    $this->rateOrCostNanos = $rateOrCostNanos;
  }
  public function getRateOrCostNanos()
  {
    return $this->rateOrCostNanos;
  }
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  public function getStartDate()
  {
    return $this->startDate;
  }
  public function setUnits($units)
  {
    $this->units = $units;
  }
  public function getUnits()
  {
    return $this->units;
  }
}
