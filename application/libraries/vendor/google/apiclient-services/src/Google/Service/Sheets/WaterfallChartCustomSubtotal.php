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

class Google_Service_Sheets_WaterfallChartCustomSubtotal extends Google_Model
{
  public $dataIsSubtotal;
  public $label;
  public $subtotalIndex;

  public function setDataIsSubtotal($dataIsSubtotal)
  {
    $this->dataIsSubtotal = $dataIsSubtotal;
  }
  public function getDataIsSubtotal()
  {
    return $this->dataIsSubtotal;
  }
  public function setLabel($label)
  {
    $this->label = $label;
  }
  public function getLabel()
  {
    return $this->label;
  }
  public function setSubtotalIndex($subtotalIndex)
  {
    $this->subtotalIndex = $subtotalIndex;
  }
  public function getSubtotalIndex()
  {
    return $this->subtotalIndex;
  }
}
