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

class Google_Service_Sheets_WaterfallChartDomain extends Google_Model
{
  protected $dataType = 'Google_Service_Sheets_ChartData';
  protected $dataDataType = '';
  public $reversed;

  /**
   * @param Google_Service_Sheets_ChartData
   */
  public function setData(Google_Service_Sheets_ChartData $data)
  {
    $this->data = $data;
  }
  /**
   * @return Google_Service_Sheets_ChartData
   */
  public function getData()
  {
    return $this->data;
  }
  public function setReversed($reversed)
  {
    $this->reversed = $reversed;
  }
  public function getReversed()
  {
    return $this->reversed;
  }
}
