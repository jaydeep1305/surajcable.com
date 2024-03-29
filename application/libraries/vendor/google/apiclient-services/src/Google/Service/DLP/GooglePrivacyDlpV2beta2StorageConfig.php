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

class Google_Service_DLP_GooglePrivacyDlpV2beta2StorageConfig extends Google_Model
{
  protected $bigQueryOptionsType = 'Google_Service_DLP_GooglePrivacyDlpV2beta2BigQueryOptions';
  protected $bigQueryOptionsDataType = '';
  protected $cloudStorageOptionsType = 'Google_Service_DLP_GooglePrivacyDlpV2beta2CloudStorageOptions';
  protected $cloudStorageOptionsDataType = '';
  protected $datastoreOptionsType = 'Google_Service_DLP_GooglePrivacyDlpV2beta2DatastoreOptions';
  protected $datastoreOptionsDataType = '';

  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2BigQueryOptions
   */
  public function setBigQueryOptions(Google_Service_DLP_GooglePrivacyDlpV2beta2BigQueryOptions $bigQueryOptions)
  {
    $this->bigQueryOptions = $bigQueryOptions;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2BigQueryOptions
   */
  public function getBigQueryOptions()
  {
    return $this->bigQueryOptions;
  }
  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2CloudStorageOptions
   */
  public function setCloudStorageOptions(Google_Service_DLP_GooglePrivacyDlpV2beta2CloudStorageOptions $cloudStorageOptions)
  {
    $this->cloudStorageOptions = $cloudStorageOptions;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2CloudStorageOptions
   */
  public function getCloudStorageOptions()
  {
    return $this->cloudStorageOptions;
  }
  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2DatastoreOptions
   */
  public function setDatastoreOptions(Google_Service_DLP_GooglePrivacyDlpV2beta2DatastoreOptions $datastoreOptions)
  {
    $this->datastoreOptions = $datastoreOptions;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2DatastoreOptions
   */
  public function getDatastoreOptions()
  {
    return $this->datastoreOptions;
  }
}
