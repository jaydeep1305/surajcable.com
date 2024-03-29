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

class Google_Service_DLP_GooglePrivacyDlpV2beta2CreateInspectTemplateRequest extends Google_Model
{
  protected $inspectTemplateType = 'Google_Service_DLP_GooglePrivacyDlpV2beta2InspectTemplate';
  protected $inspectTemplateDataType = '';
  public $templateId;

  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2InspectTemplate
   */
  public function setInspectTemplate(Google_Service_DLP_GooglePrivacyDlpV2beta2InspectTemplate $inspectTemplate)
  {
    $this->inspectTemplate = $inspectTemplate;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2InspectTemplate
   */
  public function getInspectTemplate()
  {
    return $this->inspectTemplate;
  }
  public function setTemplateId($templateId)
  {
    $this->templateId = $templateId;
  }
  public function getTemplateId()
  {
    return $this->templateId;
  }
}
