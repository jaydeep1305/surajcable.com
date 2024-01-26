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

class Google_Service_ServiceManagement_AuthProvider extends Google_Model
{
  public $audiences;
  public $authorizationUrl;
  public $id;
  public $issuer;
  public $jwksUri;

  public function setAudiences($audiences)
  {
    $this->audiences = $audiences;
  }
  public function getAudiences()
  {
    return $this->audiences;
  }
  public function setAuthorizationUrl($authorizationUrl)
  {
    $this->authorizationUrl = $authorizationUrl;
  }
  public function getAuthorizationUrl()
  {
    return $this->authorizationUrl;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setIssuer($issuer)
  {
    $this->issuer = $issuer;
  }
  public function getIssuer()
  {
    return $this->issuer;
  }
  public function setJwksUri($jwksUri)
  {
    $this->jwksUri = $jwksUri;
  }
  public function getJwksUri()
  {
    return $this->jwksUri;
  }
}