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

class Google_Service_Dataflow_ParDoInstruction extends Google_Collection
{
  protected $collection_key = 'sideInputs';
  protected $inputType = 'Google_Service_Dataflow_InstructionInput';
  protected $inputDataType = '';
  protected $multiOutputInfosType = 'Google_Service_Dataflow_MultiOutputInfo';
  protected $multiOutputInfosDataType = 'array';
  public $numOutputs;
  protected $sideInputsType = 'Google_Service_Dataflow_SideInputInfo';
  protected $sideInputsDataType = 'array';
  public $userFn;

  /**
   * @param Google_Service_Dataflow_InstructionInput
   */
  public function setInput(Google_Service_Dataflow_InstructionInput $input)
  {
    $this->input = $input;
  }
  /**
   * @return Google_Service_Dataflow_InstructionInput
   */
  public function getInput()
  {
    return $this->input;
  }
  /**
   * @param Google_Service_Dataflow_MultiOutputInfo
   */
  public function setMultiOutputInfos($multiOutputInfos)
  {
    $this->multiOutputInfos = $multiOutputInfos;
  }
  /**
   * @return Google_Service_Dataflow_MultiOutputInfo
   */
  public function getMultiOutputInfos()
  {
    return $this->multiOutputInfos;
  }
  public function setNumOutputs($numOutputs)
  {
    $this->numOutputs = $numOutputs;
  }
  public function getNumOutputs()
  {
    return $this->numOutputs;
  }
  /**
   * @param Google_Service_Dataflow_SideInputInfo
   */
  public function setSideInputs($sideInputs)
  {
    $this->sideInputs = $sideInputs;
  }
  /**
   * @return Google_Service_Dataflow_SideInputInfo
   */
  public function getSideInputs()
  {
    return $this->sideInputs;
  }
  public function setUserFn($userFn)
  {
    $this->userFn = $userFn;
  }
  public function getUserFn()
  {
    return $this->userFn;
  }
}
