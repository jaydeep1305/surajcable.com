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

class Google_Service_ServiceControl_CheckResponse extends Google_Collection
{
  protected $collection_key = 'checkErrors';
  protected $checkErrorsType = 'Google_Service_ServiceControl_CheckError';
  protected $checkErrorsDataType = 'array';
  protected $checkInfoType = 'Google_Service_ServiceControl_CheckInfo';
  protected $checkInfoDataType = '';
  public $operationId;
  protected $quotaInfoType = 'Google_Service_ServiceControl_QuotaInfo';
  protected $quotaInfoDataType = '';
  public $serviceConfigId;

  /**
   * @param Google_Service_ServiceControl_CheckError
   */
  public function setCheckErrors($checkErrors)
  {
    $this->checkErrors = $checkErrors;
  }
  /**
   * @return Google_Service_ServiceControl_CheckError
   */
  public function getCheckErrors()
  {
    return $this->checkErrors;
  }
  /**
   * @param Google_Service_ServiceControl_CheckInfo
   */
  public function setCheckInfo(Google_Service_ServiceControl_CheckInfo $checkInfo)
  {
    $this->checkInfo = $checkInfo;
  }
  /**
   * @return Google_Service_ServiceControl_CheckInfo
   */
  public function getCheckInfo()
  {
    return $this->checkInfo;
  }
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  public function getOperationId()
  {
    return $this->operationId;
  }
  /**
   * @param Google_Service_ServiceControl_QuotaInfo
   */
  public function setQuotaInfo(Google_Service_ServiceControl_QuotaInfo $quotaInfo)
  {
    $this->quotaInfo = $quotaInfo;
  }
  /**
   * @return Google_Service_ServiceControl_QuotaInfo
   */
  public function getQuotaInfo()
  {
    return $this->quotaInfo;
  }
  public function setServiceConfigId($serviceConfigId)
  {
    $this->serviceConfigId = $serviceConfigId;
  }
  public function getServiceConfigId()
  {
    return $this->serviceConfigId;
  }
}
