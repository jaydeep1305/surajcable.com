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
 * The "deidentifyTemplates" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dlpService = new Google_Service_DLP(...);
 *   $deidentifyTemplates = $dlpService->deidentifyTemplates;
 *  </code>
 */
class Google_Service_DLP_Resource_ProjectsDeidentifyTemplates extends Google_Service_Resource
{
  /**
   * Creates an Deidentify template for re-using frequently used configuration for
   * Deidentifying content, images, and storage. (deidentifyTemplates.create)
   *
   * @param string $parent The parent resource name, for example projects/my-
   * project-id or organizations/my-org-id.
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2CreateDeidentifyTemplateRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2DeidentifyTemplate
   */
  public function create($parent, Google_Service_DLP_GooglePrivacyDlpV2beta2CreateDeidentifyTemplateRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_DLP_GooglePrivacyDlpV2beta2DeidentifyTemplate");
  }
  /**
   * Deletes inspect templates. (deidentifyTemplates.delete)
   *
   * @param string $name Resource name of the organization and deidentify template
   * to be deleted, for example
   * `organizations/433245324/deidentifyTemplates/432452342`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_DLP_GoogleProtobufEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_DLP_GoogleProtobufEmpty");
  }
  /**
   * Gets an inspect template. (deidentifyTemplates.get)
   *
   * @param string $name Resource name of the organization and deidentify template
   * to be read, for example
   * `organizations/433245324/deidentifyTemplates/432452342`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2DeidentifyTemplate
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_DLP_GooglePrivacyDlpV2beta2DeidentifyTemplate");
  }
  /**
   * Lists inspect templates.
   * (deidentifyTemplates.listProjectsDeidentifyTemplates)
   *
   * @param string $parent The parent resource name, for example projects/my-
   * project-id or organizations/my-org-id.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken Optional page token to continue retrieval. Comes
   * from previous call to `ListDeidentifyTemplates`.
   * @opt_param int pageSize Optional size of the page, can be limited by server.
   * If zero server returns a page of max size 100.
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2ListDeidentifyTemplatesResponse
   */
  public function listProjectsDeidentifyTemplates($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_DLP_GooglePrivacyDlpV2beta2ListDeidentifyTemplatesResponse");
  }
  /**
   * Updates the inspect template. (deidentifyTemplates.patch)
   *
   * @param string $name Resource name of organization and deidentify template to
   * be updated, for example
   * `organizations/433245324/deidentifyTemplates/432452342`.
   * @param Google_Service_DLP_GooglePrivacyDlpV2beta2UpdateDeidentifyTemplateRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_DLP_GooglePrivacyDlpV2beta2DeidentifyTemplate
   */
  public function patch($name, Google_Service_DLP_GooglePrivacyDlpV2beta2UpdateDeidentifyTemplateRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_DLP_GooglePrivacyDlpV2beta2DeidentifyTemplate");
  }
}
