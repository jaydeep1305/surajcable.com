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

class Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1PredictionOutput extends Google_Model
{
  public $errorCount;
  public $nodeHours;
  public $outputPath;
  public $predictionCount;

  public function setErrorCount($errorCount)
  {
    $this->errorCount = $errorCount;
  }
  public function getErrorCount()
  {
    return $this->errorCount;
  }
  public function setNodeHours($nodeHours)
  {
    $this->nodeHours = $nodeHours;
  }
  public function getNodeHours()
  {
    return $this->nodeHours;
  }
  public function setOutputPath($outputPath)
  {
    $this->outputPath = $outputPath;
  }
  public function getOutputPath()
  {
    return $this->outputPath;
  }
  public function setPredictionCount($predictionCount)
  {
    $this->predictionCount = $predictionCount;
  }
  public function getPredictionCount()
  {
    return $this->predictionCount;
  }
}
