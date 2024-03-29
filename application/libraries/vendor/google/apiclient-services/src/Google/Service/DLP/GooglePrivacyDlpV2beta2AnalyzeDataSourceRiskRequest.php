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

class Google_Service_DLP_GooglePrivacyDlpV2beta2AnalyzeDataSourceRiskRequest extends Google_Model
{
  protected $jobConfigType = 'Google_Service_DLP_GooglePrivacyDlpV2beta2RiskAnalysisJobConfig';
  protected $jobConfigDataType = '';

  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2RiskAnalysisJobConfig
   */
  public function setJobConfig(Google_Service_DLP_GooglePrivacyDlpV2beta2RiskAnalysisJobConfig $jobConfig)
  {
    $this->jobConfig = $jobConfig;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2RiskAnalysisJobConfig
   */
  public function getJobConfig()
  {
    return $this->jobConfig;
  }
}
