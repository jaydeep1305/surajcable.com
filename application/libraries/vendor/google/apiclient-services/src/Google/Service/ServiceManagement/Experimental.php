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

class Google_Service_ServiceManagement_Experimental extends Google_Model
{
  protected $authorizationType = 'Google_Service_ServiceManagement_AuthorizationConfig';
  protected $authorizationDataType = '';

  /**
   * @param Google_Service_ServiceManagement_AuthorizationConfig
   */
  public function setAuthorization(Google_Service_ServiceManagement_AuthorizationConfig $authorization)
  {
    $this->authorization = $authorization;
  }
  /**
   * @return Google_Service_ServiceManagement_AuthorizationConfig
   */
  public function getAuthorization()
  {
    return $this->authorization;
  }
}
