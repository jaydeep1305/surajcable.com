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

class Google_Service_Partners_ListLeadsResponse extends Google_Collection
{
  protected $collection_key = 'leads';
  protected $leadsType = 'Google_Service_Partners_Lead';
  protected $leadsDataType = 'array';
  public $nextPageToken;
  protected $responseMetadataType = 'Google_Service_Partners_ResponseMetadata';
  protected $responseMetadataDataType = '';
  public $totalSize;

  /**
   * @param Google_Service_Partners_Lead
   */
  public function setLeads($leads)
  {
    $this->leads = $leads;
  }
  /**
   * @return Google_Service_Partners_Lead
   */
  public function getLeads()
  {
    return $this->leads;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /**
   * @param Google_Service_Partners_ResponseMetadata
   */
  public function setResponseMetadata(Google_Service_Partners_ResponseMetadata $responseMetadata)
  {
    $this->responseMetadata = $responseMetadata;
  }
  /**
   * @return Google_Service_Partners_ResponseMetadata
   */
  public function getResponseMetadata()
  {
    return $this->responseMetadata;
  }
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}
