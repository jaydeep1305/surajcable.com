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

class Google_Service_PeopleService_ListConnectionsResponse extends Google_Collection
{
  protected $collection_key = 'connections';
  protected $connectionsType = 'Google_Service_PeopleService_Person';
  protected $connectionsDataType = 'array';
  public $nextPageToken;
  public $nextSyncToken;
  public $totalItems;
  public $totalPeople;

  /**
   * @param Google_Service_PeopleService_Person
   */
  public function setConnections($connections)
  {
    $this->connections = $connections;
  }
  /**
   * @return Google_Service_PeopleService_Person
   */
  public function getConnections()
  {
    return $this->connections;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setNextSyncToken($nextSyncToken)
  {
    $this->nextSyncToken = $nextSyncToken;
  }
  public function getNextSyncToken()
  {
    return $this->nextSyncToken;
  }
  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }
  public function getTotalItems()
  {
    return $this->totalItems;
  }
  public function setTotalPeople($totalPeople)
  {
    $this->totalPeople = $totalPeople;
  }
  public function getTotalPeople()
  {
    return $this->totalPeople;
  }
}
