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

class Google_Service_DLP_GooglePrivacyDlpV2beta2Condition extends Google_Model
{
  protected $fieldType = 'Google_Service_DLP_GooglePrivacyDlpV2beta2FieldId';
  protected $fieldDataType = '';
  public $operator;
  protected $valueType = 'Google_Service_DLP_GooglePrivacyDlpV2beta2Value';
  protected $valueDataType = '';

  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2FieldId
   */
  public function setField(Google_Service_DLP_GooglePrivacyDlpV2beta2FieldId $field)
  {
    $this->field = $field;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2FieldId
   */
  public function getField()
  {
    return $this->field;
  }
  public function setOperator($operator)
  {
    $this->operator = $operator;
  }
  public function getOperator()
  {
    return $this->operator;
  }
  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2Value
   */
  public function setValue(Google_Service_DLP_GooglePrivacyDlpV2beta2Value $value)
  {
    $this->value = $value;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2Value
   */
  public function getValue()
  {
    return $this->value;
  }
}
