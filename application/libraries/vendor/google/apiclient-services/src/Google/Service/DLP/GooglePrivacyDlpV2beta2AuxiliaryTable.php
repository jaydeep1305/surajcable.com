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

class Google_Service_DLP_GooglePrivacyDlpV2beta2AuxiliaryTable extends Google_Collection
{
  protected $collection_key = 'quasiIds';
  protected $quasiIdsType = 'Google_Service_DLP_GooglePrivacyDlpV2beta2QuasiIdField';
  protected $quasiIdsDataType = 'array';
  protected $relativeFrequencyType = 'Google_Service_DLP_GooglePrivacyDlpV2beta2FieldId';
  protected $relativeFrequencyDataType = '';
  protected $tableType = 'Google_Service_DLP_GooglePrivacyDlpV2beta2BigQueryTable';
  protected $tableDataType = '';

  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2QuasiIdField
   */
  public function setQuasiIds($quasiIds)
  {
    $this->quasiIds = $quasiIds;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2QuasiIdField
   */
  public function getQuasiIds()
  {
    return $this->quasiIds;
  }
  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2FieldId
   */
  public function setRelativeFrequency(Google_Service_DLP_GooglePrivacyDlpV2beta2FieldId $relativeFrequency)
  {
    $this->relativeFrequency = $relativeFrequency;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2FieldId
   */
  public function getRelativeFrequency()
  {
    return $this->relativeFrequency;
  }
  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2BigQueryTable
   */
  public function setTable(Google_Service_DLP_GooglePrivacyDlpV2beta2BigQueryTable $table)
  {
    $this->table = $table;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2BigQueryTable
   */
  public function getTable()
  {
    return $this->table;
  }
}
