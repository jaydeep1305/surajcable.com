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

class Google_Service_Slides_TableCell extends Google_Model
{
  public $columnSpan;
  protected $locationType = 'Google_Service_Slides_TableCellLocation';
  protected $locationDataType = '';
  public $rowSpan;
  protected $tableCellPropertiesType = 'Google_Service_Slides_TableCellProperties';
  protected $tableCellPropertiesDataType = '';
  protected $textType = 'Google_Service_Slides_TextContent';
  protected $textDataType = '';

  public function setColumnSpan($columnSpan)
  {
    $this->columnSpan = $columnSpan;
  }
  public function getColumnSpan()
  {
    return $this->columnSpan;
  }
  /**
   * @param Google_Service_Slides_TableCellLocation
   */
  public function setLocation(Google_Service_Slides_TableCellLocation $location)
  {
    $this->location = $location;
  }
  /**
   * @return Google_Service_Slides_TableCellLocation
   */
  public function getLocation()
  {
    return $this->location;
  }
  public function setRowSpan($rowSpan)
  {
    $this->rowSpan = $rowSpan;
  }
  public function getRowSpan()
  {
    return $this->rowSpan;
  }
  /**
   * @param Google_Service_Slides_TableCellProperties
   */
  public function setTableCellProperties(Google_Service_Slides_TableCellProperties $tableCellProperties)
  {
    $this->tableCellProperties = $tableCellProperties;
  }
  /**
   * @return Google_Service_Slides_TableCellProperties
   */
  public function getTableCellProperties()
  {
    return $this->tableCellProperties;
  }
  /**
   * @param Google_Service_Slides_TextContent
   */
  public function setText(Google_Service_Slides_TextContent $text)
  {
    $this->text = $text;
  }
  /**
   * @return Google_Service_Slides_TextContent
   */
  public function getText()
  {
    return $this->text;
  }
}
