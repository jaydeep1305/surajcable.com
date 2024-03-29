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

class Google_Service_DLP_GooglePrivacyDlpV2beta2InfoTypeTransformation extends Google_Collection
{
  protected $collection_key = 'infoTypes';
  protected $infoTypesType = 'Google_Service_DLP_GooglePrivacyDlpV2beta2InfoType';
  protected $infoTypesDataType = 'array';
  protected $primitiveTransformationType = 'Google_Service_DLP_GooglePrivacyDlpV2beta2PrimitiveTransformation';
  protected $primitiveTransformationDataType = '';

  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2InfoType
   */
  public function setInfoTypes($infoTypes)
  {
    $this->infoTypes = $infoTypes;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2InfoType
   */
  public function getInfoTypes()
  {
    return $this->infoTypes;
  }
  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2PrimitiveTransformation
   */
  public function setPrimitiveTransformation(Google_Service_DLP_GooglePrivacyDlpV2beta2PrimitiveTransformation $primitiveTransformation)
  {
    $this->primitiveTransformation = $primitiveTransformation;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2PrimitiveTransformation
   */
  public function getPrimitiveTransformation()
  {
    return $this->primitiveTransformation;
  }
}
