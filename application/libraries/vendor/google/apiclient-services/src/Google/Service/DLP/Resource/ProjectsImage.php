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

/**
 * The "image" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dlpService = new Google_Service_DLP(...);
 *   $image = $dlpService->image;
 *  </code>
 */
class Google_Service_DLP_Resource_ProjectsImage extends Google_Service_Resource
{
  /**
   * Redacts potentially sensitive info from an image. This method has limits on
   * input size, processing time, and output size. [How-to guide](/dlp/docs
   * /redacting-sensitive-data-images) (image.redact)
   *
   * @param string $parent The parent resource name, for example projects/my-
   * project-id.
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2RedactImageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2RedactImageResponse
   */
  public function redact($parent, Google_Service_DLP_GooglePrivacyDlpV2beta2RedactImageRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('redact', array($params), "Google_Service_DLP_GooglePrivacyDlpV2beta2RedactImageResponse");
  }
}
