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

class Google_Service_Sheets_UpdateConditionalFormatRuleResponse extends Google_Model
{
  public $newIndex;
  protected $newRuleType = 'Google_Service_Sheets_ConditionalFormatRule';
  protected $newRuleDataType = '';
  public $oldIndex;
  protected $oldRuleType = 'Google_Service_Sheets_ConditionalFormatRule';
  protected $oldRuleDataType = '';

  public function setNewIndex($newIndex)
  {
    $this->newIndex = $newIndex;
  }
  public function getNewIndex()
  {
    return $this->newIndex;
  }
  /**
   * @param Google_Service_Sheets_ConditionalFormatRule
   */
  public function setNewRule(Google_Service_Sheets_ConditionalFormatRule $newRule)
  {
    $this->newRule = $newRule;
  }
  /**
   * @return Google_Service_Sheets_ConditionalFormatRule
   */
  public function getNewRule()
  {
    return $this->newRule;
  }
  public function setOldIndex($oldIndex)
  {
    $this->oldIndex = $oldIndex;
  }
  public function getOldIndex()
  {
    return $this->oldIndex;
  }
  /**
   * @param Google_Service_Sheets_ConditionalFormatRule
   */
  public function setOldRule(Google_Service_Sheets_ConditionalFormatRule $oldRule)
  {
    $this->oldRule = $oldRule;
  }
  /**
   * @return Google_Service_Sheets_ConditionalFormatRule
   */
  public function getOldRule()
  {
    return $this->oldRule;
  }
}
