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

class Google_Service_Compute_RoutersScopedList extends Google_Collection
{
  protected $collection_key = 'routers';
  protected $routersType = 'Google_Service_Compute_Router';
  protected $routersDataType = 'array';
  protected $warningType = 'Google_Service_Compute_RoutersScopedListWarning';
  protected $warningDataType = '';

  /**
   * @param Google_Service_Compute_Router
   */
  public function setRouters($routers)
  {
    $this->routers = $routers;
  }
  /**
   * @return Google_Service_Compute_Router
   */
  public function getRouters()
  {
    return $this->routers;
  }
  /**
   * @param Google_Service_Compute_RoutersScopedListWarning
   */
  public function setWarning(Google_Service_Compute_RoutersScopedListWarning $warning)
  {
    $this->warning = $warning;
  }
  /**
   * @return Google_Service_Compute_RoutersScopedListWarning
   */
  public function getWarning()
  {
    return $this->warning;
  }
}
