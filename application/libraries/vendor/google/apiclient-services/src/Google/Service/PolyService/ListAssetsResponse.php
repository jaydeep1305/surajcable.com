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

class Google_Service_PolyService_ListAssetsResponse extends Google_Collection
{
  protected $collection_key = 'assets';
  protected $assetsType = 'Google_Service_PolyService_Asset';
  protected $assetsDataType = 'array';
  public $nextPageToken;
  public $totalSize;

  /**
   * @param Google_Service_PolyService_Asset
   */
  public function setAssets($assets)
  {
    $this->assets = $assets;
  }
  /**
   * @return Google_Service_PolyService_Asset
   */
  public function getAssets()
  {
    return $this->assets;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
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
