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

class Google_Service_AndroidManagement_NonComplianceDetail extends Google_Model
{
  public $currentValue;
  public $fieldPath;
  public $installationFailureReason;
  public $nonComplianceReason;
  public $packageName;
  public $settingName;

  public function setCurrentValue($currentValue)
  {
    $this->currentValue = $currentValue;
  }
  public function getCurrentValue()
  {
    return $this->currentValue;
  }
  public function setFieldPath($fieldPath)
  {
    $this->fieldPath = $fieldPath;
  }
  public function getFieldPath()
  {
    return $this->fieldPath;
  }
  public function setInstallationFailureReason($installationFailureReason)
  {
    $this->installationFailureReason = $installationFailureReason;
  }
  public function getInstallationFailureReason()
  {
    return $this->installationFailureReason;
  }
  public function setNonComplianceReason($nonComplianceReason)
  {
    $this->nonComplianceReason = $nonComplianceReason;
  }
  public function getNonComplianceReason()
  {
    return $this->nonComplianceReason;
  }
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  public function getPackageName()
  {
    return $this->packageName;
  }
  public function setSettingName($settingName)
  {
    $this->settingName = $settingName;
  }
  public function getSettingName()
  {
    return $this->settingName;
  }
}
