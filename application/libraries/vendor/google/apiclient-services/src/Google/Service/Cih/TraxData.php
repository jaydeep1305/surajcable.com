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

class Google_Service_Cih_TraxData extends Google_Model
{
  public $actionType;
  protected $agentType = 'Google_Service_Cih_TraxAgent';
  protected $agentDataType = '';
  protected $assignedAgentType = 'Google_Service_Cih_TraxAgent';
  protected $assignedAgentDataType = '';
  public $messageId;
  public $state;
  protected $userIdType = 'Google_Service_Cih_UserId';
  protected $userIdDataType = '';

  public function setActionType($actionType)
  {
    $this->actionType = $actionType;
  }
  public function getActionType()
  {
    return $this->actionType;
  }
  public function setAgent(Google_Service_Cih_TraxAgent $agent)
  {
    $this->agent = $agent;
  }
  public function getAgent()
  {
    return $this->agent;
  }
  public function setAssignedAgent(Google_Service_Cih_TraxAgent $assignedAgent)
  {
    $this->assignedAgent = $assignedAgent;
  }
  public function getAssignedAgent()
  {
    return $this->assignedAgent;
  }
  public function setMessageId($messageId)
  {
    $this->messageId = $messageId;
  }
  public function getMessageId()
  {
    return $this->messageId;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setUserId(Google_Service_Cih_UserId $userId)
  {
    $this->userId = $userId;
  }
  public function getUserId()
  {
    return $this->userId;
  }
}
