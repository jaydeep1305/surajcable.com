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

class Google_Service_Fusiontables_PolygonStyle extends Google_Model
{
  public $fillColor;
  protected $fillColorStylerType = 'Google_Service_Fusiontables_StyleFunction';
  protected $fillColorStylerDataType = '';
  public $fillOpacity;
  public $strokeColor;
  protected $strokeColorStylerType = 'Google_Service_Fusiontables_StyleFunction';
  protected $strokeColorStylerDataType = '';
  public $strokeOpacity;
  public $strokeWeight;
  protected $strokeWeightStylerType = 'Google_Service_Fusiontables_StyleFunction';
  protected $strokeWeightStylerDataType = '';

  public function setFillColor($fillColor)
  {
    $this->fillColor = $fillColor;
  }
  public function getFillColor()
  {
    return $this->fillColor;
  }
  /**
   * @param Google_Service_Fusiontables_StyleFunction
   */
  public function setFillColorStyler(Google_Service_Fusiontables_StyleFunction $fillColorStyler)
  {
    $this->fillColorStyler = $fillColorStyler;
  }
  /**
   * @return Google_Service_Fusiontables_StyleFunction
   */
  public function getFillColorStyler()
  {
    return $this->fillColorStyler;
  }
  public function setFillOpacity($fillOpacity)
  {
    $this->fillOpacity = $fillOpacity;
  }
  public function getFillOpacity()
  {
    return $this->fillOpacity;
  }
  public function setStrokeColor($strokeColor)
  {
    $this->strokeColor = $strokeColor;
  }
  public function getStrokeColor()
  {
    return $this->strokeColor;
  }
  /**
   * @param Google_Service_Fusiontables_StyleFunction
   */
  public function setStrokeColorStyler(Google_Service_Fusiontables_StyleFunction $strokeColorStyler)
  {
    $this->strokeColorStyler = $strokeColorStyler;
  }
  /**
   * @return Google_Service_Fusiontables_StyleFunction
   */
  public function getStrokeColorStyler()
  {
    return $this->strokeColorStyler;
  }
  public function setStrokeOpacity($strokeOpacity)
  {
    $this->strokeOpacity = $strokeOpacity;
  }
  public function getStrokeOpacity()
  {
    return $this->strokeOpacity;
  }
  public function setStrokeWeight($strokeWeight)
  {
    $this->strokeWeight = $strokeWeight;
  }
  public function getStrokeWeight()
  {
    return $this->strokeWeight;
  }
  /**
   * @param Google_Service_Fusiontables_StyleFunction
   */
  public function setStrokeWeightStyler(Google_Service_Fusiontables_StyleFunction $strokeWeightStyler)
  {
    $this->strokeWeightStyler = $strokeWeightStyler;
  }
  /**
   * @return Google_Service_Fusiontables_StyleFunction
   */
  public function getStrokeWeightStyler()
  {
    return $this->strokeWeightStyler;
  }
}
