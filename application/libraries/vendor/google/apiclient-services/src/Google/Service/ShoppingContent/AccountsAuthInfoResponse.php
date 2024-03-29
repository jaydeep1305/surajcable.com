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

class Google_Service_ShoppingContent_AccountsAuthInfoResponse extends Google_Collection
{
  protected $collection_key = 'accountIdentifiers';
  protected $accountIdentifiersType = 'Google_Service_ShoppingContent_AccountIdentifier';
  protected $accountIdentifiersDataType = 'array';
  public $kind;

  /**
   * @param Google_Service_ShoppingContent_AccountIdentifier
   */
  public function setAccountIdentifiers($accountIdentifiers)
  {
    $this->accountIdentifiers = $accountIdentifiers;
  }
  /**
   * @return Google_Service_ShoppingContent_AccountIdentifier
   */
  public function getAccountIdentifiers()
  {
    return $this->accountIdentifiers;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}
