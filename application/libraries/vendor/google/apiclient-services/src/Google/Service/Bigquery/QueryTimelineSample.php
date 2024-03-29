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

class Google_Service_Bigquery_QueryTimelineSample extends Google_Model
{
  public $activeInputs;
  public $completedInputs;
  public $completedInputsForActiveStages;
  public $elapsedMs;
  public $pendingInputs;
  public $totalSlotMs;

  public function setActiveInputs($activeInputs)
  {
    $this->activeInputs = $activeInputs;
  }
  public function getActiveInputs()
  {
    return $this->activeInputs;
  }
  public function setCompletedInputs($completedInputs)
  {
    $this->completedInputs = $completedInputs;
  }
  public function getCompletedInputs()
  {
    return $this->completedInputs;
  }
  public function setCompletedInputsForActiveStages($completedInputsForActiveStages)
  {
    $this->completedInputsForActiveStages = $completedInputsForActiveStages;
  }
  public function getCompletedInputsForActiveStages()
  {
    return $this->completedInputsForActiveStages;
  }
  public function setElapsedMs($elapsedMs)
  {
    $this->elapsedMs = $elapsedMs;
  }
  public function getElapsedMs()
  {
    return $this->elapsedMs;
  }
  public function setPendingInputs($pendingInputs)
  {
    $this->pendingInputs = $pendingInputs;
  }
  public function getPendingInputs()
  {
    return $this->pendingInputs;
  }
  public function setTotalSlotMs($totalSlotMs)
  {
    $this->totalSlotMs = $totalSlotMs;
  }
  public function getTotalSlotMs()
  {
    return $this->totalSlotMs;
  }
}
