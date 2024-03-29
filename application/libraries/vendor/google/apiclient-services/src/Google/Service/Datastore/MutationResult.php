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

class Google_Service_Datastore_MutationResult extends Google_Model
{
  public $conflictDetected;
  protected $keyType = 'Google_Service_Datastore_Key';
  protected $keyDataType = '';
  public $version;

  public function setConflictDetected($conflictDetected)
  {
    $this->conflictDetected = $conflictDetected;
  }
  public function getConflictDetected()
  {
    return $this->conflictDetected;
  }
  /**
   * @param Google_Service_Datastore_Key
   */
  public function setKey(Google_Service_Datastore_Key $key)
  {
    $this->key = $key;
  }
  /**
   * @return Google_Service_Datastore_Key
   */
  public function getKey()
  {
    return $this->key;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}
