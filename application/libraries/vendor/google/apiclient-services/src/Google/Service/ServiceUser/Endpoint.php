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

class Google_Service_ServiceUser_Endpoint extends Google_Collection
{
  protected $collection_key = 'features';
  public $aliases;
  public $allowCors;
  public $features;
  public $name;
  public $target;

  public function setAliases($aliases)
  {
    $this->aliases = $aliases;
  }
  public function getAliases()
  {
    return $this->aliases;
  }
  public function setAllowCors($allowCors)
  {
    $this->allowCors = $allowCors;
  }
  public function getAllowCors()
  {
    return $this->allowCors;
  }
  public function setFeatures($features)
  {
    $this->features = $features;
  }
  public function getFeatures()
  {
    return $this->features;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setTarget($target)
  {
    $this->target = $target;
  }
  public function getTarget()
  {
    return $this->target;
  }
}
