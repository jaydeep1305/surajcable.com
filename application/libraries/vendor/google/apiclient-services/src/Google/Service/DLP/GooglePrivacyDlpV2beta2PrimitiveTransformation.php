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

class Google_Service_DLP_GooglePrivacyDlpV2beta2PrimitiveTransformation extends Google_Model
{
  protected $bucketingConfigType = 'Google_Service_DLP_GooglePrivacyDlpV2beta2BucketingConfig';
  protected $bucketingConfigDataType = '';
  protected $characterMaskConfigType = 'Google_Service_DLP_GooglePrivacyDlpV2beta2CharacterMaskConfig';
  protected $characterMaskConfigDataType = '';
  protected $cryptoHashConfigType = 'Google_Service_DLP_GooglePrivacyDlpV2beta2CryptoHashConfig';
  protected $cryptoHashConfigDataType = '';
  protected $cryptoReplaceFfxFpeConfigType = 'Google_Service_DLP_GooglePrivacyDlpV2beta2CryptoReplaceFfxFpeConfig';
  protected $cryptoReplaceFfxFpeConfigDataType = '';
  protected $fixedSizeBucketingConfigType = 'Google_Service_DLP_GooglePrivacyDlpV2beta2FixedSizeBucketingConfig';
  protected $fixedSizeBucketingConfigDataType = '';
  protected $redactConfigType = 'Google_Service_DLP_GooglePrivacyDlpV2beta2RedactConfig';
  protected $redactConfigDataType = '';
  protected $replaceConfigType = 'Google_Service_DLP_GooglePrivacyDlpV2beta2ReplaceValueConfig';
  protected $replaceConfigDataType = '';
  protected $replaceWithInfoTypeConfigType = 'Google_Service_DLP_GooglePrivacyDlpV2beta2ReplaceWithInfoTypeConfig';
  protected $replaceWithInfoTypeConfigDataType = '';
  protected $timePartConfigType = 'Google_Service_DLP_GooglePrivacyDlpV2beta2TimePartConfig';
  protected $timePartConfigDataType = '';

  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2BucketingConfig
   */
  public function setBucketingConfig(Google_Service_DLP_GooglePrivacyDlpV2beta2BucketingConfig $bucketingConfig)
  {
    $this->bucketingConfig = $bucketingConfig;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2BucketingConfig
   */
  public function getBucketingConfig()
  {
    return $this->bucketingConfig;
  }
  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2CharacterMaskConfig
   */
  public function setCharacterMaskConfig(Google_Service_DLP_GooglePrivacyDlpV2beta2CharacterMaskConfig $characterMaskConfig)
  {
    $this->characterMaskConfig = $characterMaskConfig;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2CharacterMaskConfig
   */
  public function getCharacterMaskConfig()
  {
    return $this->characterMaskConfig;
  }
  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2CryptoHashConfig
   */
  public function setCryptoHashConfig(Google_Service_DLP_GooglePrivacyDlpV2beta2CryptoHashConfig $cryptoHashConfig)
  {
    $this->cryptoHashConfig = $cryptoHashConfig;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2CryptoHashConfig
   */
  public function getCryptoHashConfig()
  {
    return $this->cryptoHashConfig;
  }
  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2CryptoReplaceFfxFpeConfig
   */
  public function setCryptoReplaceFfxFpeConfig(Google_Service_DLP_GooglePrivacyDlpV2beta2CryptoReplaceFfxFpeConfig $cryptoReplaceFfxFpeConfig)
  {
    $this->cryptoReplaceFfxFpeConfig = $cryptoReplaceFfxFpeConfig;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2CryptoReplaceFfxFpeConfig
   */
  public function getCryptoReplaceFfxFpeConfig()
  {
    return $this->cryptoReplaceFfxFpeConfig;
  }
  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2FixedSizeBucketingConfig
   */
  public function setFixedSizeBucketingConfig(Google_Service_DLP_GooglePrivacyDlpV2beta2FixedSizeBucketingConfig $fixedSizeBucketingConfig)
  {
    $this->fixedSizeBucketingConfig = $fixedSizeBucketingConfig;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2FixedSizeBucketingConfig
   */
  public function getFixedSizeBucketingConfig()
  {
    return $this->fixedSizeBucketingConfig;
  }
  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2RedactConfig
   */
  public function setRedactConfig(Google_Service_DLP_GooglePrivacyDlpV2beta2RedactConfig $redactConfig)
  {
    $this->redactConfig = $redactConfig;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2RedactConfig
   */
  public function getRedactConfig()
  {
    return $this->redactConfig;
  }
  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2ReplaceValueConfig
   */
  public function setReplaceConfig(Google_Service_DLP_GooglePrivacyDlpV2beta2ReplaceValueConfig $replaceConfig)
  {
    $this->replaceConfig = $replaceConfig;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2ReplaceValueConfig
   */
  public function getReplaceConfig()
  {
    return $this->replaceConfig;
  }
  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2ReplaceWithInfoTypeConfig
   */
  public function setReplaceWithInfoTypeConfig(Google_Service_DLP_GooglePrivacyDlpV2beta2ReplaceWithInfoTypeConfig $replaceWithInfoTypeConfig)
  {
    $this->replaceWithInfoTypeConfig = $replaceWithInfoTypeConfig;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2ReplaceWithInfoTypeConfig
   */
  public function getReplaceWithInfoTypeConfig()
  {
    return $this->replaceWithInfoTypeConfig;
  }
  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2TimePartConfig
   */
  public function setTimePartConfig(Google_Service_DLP_GooglePrivacyDlpV2beta2TimePartConfig $timePartConfig)
  {
    $this->timePartConfig = $timePartConfig;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2TimePartConfig
   */
  public function getTimePartConfig()
  {
    return $this->timePartConfig;
  }
}
