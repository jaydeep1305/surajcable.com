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

class Google_Service_ShoppingContent_DatafeedsCustomBatchResponseEntry extends Google_Model
{
  public $batchId;
  protected $datafeedType = 'Google_Service_ShoppingContent_Datafeed';
  protected $datafeedDataType = '';
  protected $errorsType = 'Google_Service_ShoppingContent_Errors';
  protected $errorsDataType = '';

  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  public function getBatchId()
  {
    return $this->batchId;
  }
  /**
   * @param Google_Service_ShoppingContent_Datafeed
   */
  public function setDatafeed(Google_Service_ShoppingContent_Datafeed $datafeed)
  {
    $this->datafeed = $datafeed;
  }
  /**
   * @return Google_Service_ShoppingContent_Datafeed
   */
  public function getDatafeed()
  {
    return $this->datafeed;
  }
  /**
   * @param Google_Service_ShoppingContent_Errors
   */
  public function setErrors(Google_Service_ShoppingContent_Errors $errors)
  {
    $this->errors = $errors;
  }
  /**
   * @return Google_Service_ShoppingContent_Errors
   */
  public function getErrors()
  {
    return $this->errors;
  }
}
