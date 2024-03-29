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

class Google_Service_Dfareporting_City extends Google_Model
{
  public $countryCode;
  public $countryDartId;
  public $dartId;
  public $kind;
  public $metroCode;
  public $metroDmaId;
  public $name;
  public $regionCode;
  public $regionDartId;

  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  public function setCountryDartId($countryDartId)
  {
    $this->countryDartId = $countryDartId;
  }
  public function getCountryDartId()
  {
    return $this->countryDartId;
  }
  public function setDartId($dartId)
  {
    $this->dartId = $dartId;
  }
  public function getDartId()
  {
    return $this->dartId;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMetroCode($metroCode)
  {
    $this->metroCode = $metroCode;
  }
  public function getMetroCode()
  {
    return $this->metroCode;
  }
  public function setMetroDmaId($metroDmaId)
  {
    $this->metroDmaId = $metroDmaId;
  }
  public function getMetroDmaId()
  {
    return $this->metroDmaId;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setRegionCode($regionCode)
  {
    $this->regionCode = $regionCode;
  }
  public function getRegionCode()
  {
    return $this->regionCode;
  }
  public function setRegionDartId($regionDartId)
  {
    $this->regionDartId = $regionDartId;
  }
  public function getRegionDartId()
  {
    return $this->regionDartId;
  }
}
