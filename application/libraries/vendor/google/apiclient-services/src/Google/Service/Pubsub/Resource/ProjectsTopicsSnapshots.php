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
 * The "snapshots" collection of methods.
 * Typical usage is:
 *  <code>
 *   $pubsubService = new Google_Service_Pubsub(...);
 *   $snapshots = $pubsubService->snapshots;
 *  </code>
 */
class Google_Service_Pubsub_Resource_ProjectsTopicsSnapshots extends Google_Service_Resource
{
  /**
   * Lists the names of the snapshots on this topic.
   * (snapshots.listProjectsTopicsSnapshots)
   *
   * @param string $topic The name of the topic that snapshots are attached to.
   * Format is `projects/{project}/topics/{topic}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Maximum number of snapshot names to return.
   * @opt_param string pageToken The value returned by the last
   * `ListTopicSnapshotsResponse`; indicates that this is a continuation of a
   * prior `ListTopicSnapshots` call, and that the system should return the next
   * page of data.
   * @return Google_Service_Pubsub_ListTopicSnapshotsResponse
   */
  public function listProjectsTopicsSnapshots($topic, $optParams = array())
  {
    $params = array('topic' => $topic);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Pubsub_ListTopicSnapshotsResponse");
  }
}
