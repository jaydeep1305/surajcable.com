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

class Google_Service_CloudTrace_Link extends Google_Model
{
  protected $attributesType = 'Google_Service_CloudTrace_Attributes';
  protected $attributesDataType = '';
  public $spanId;
  public $traceId;
  public $type;

  /**
   * @param Google_Service_CloudTrace_Attributes
   */
  public function setAttributes(Google_Service_CloudTrace_Attributes $attributes)
  {
    $this->attributes = $attributes;
  }
  /**
   * @return Google_Service_CloudTrace_Attributes
   */
  public function getAttributes()
  {
    return $this->attributes;
  }
  public function setSpanId($spanId)
  {
    $this->spanId = $spanId;
  }
  public function getSpanId()
  {
    return $this->spanId;
  }
  public function setTraceId($traceId)
  {
    $this->traceId = $traceId;
  }
  public function getTraceId()
  {
    return $this->traceId;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}
