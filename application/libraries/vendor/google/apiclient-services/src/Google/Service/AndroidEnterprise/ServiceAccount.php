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

class Google_Service_AndroidEnterprise_ServiceAccount extends Google_Model
{
  protected $keyType = 'Google_Service_AndroidEnterprise_ServiceAccountKey';
  protected $keyDataType = '';
  public $kind;
  public $name;

  /**
   * @param Google_Service_AndroidEnterprise_ServiceAccountKey
   */
  public function setKey(Google_Service_AndroidEnterprise_ServiceAccountKey $key)
  {
    $this->key = $key;
  }
  /**
   * @return Google_Service_AndroidEnterprise_ServiceAccountKey
   */
  public function getKey()
  {
    return $this->key;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}
