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
 * The "spans" collection of methods.
 * Typical usage is:
 *  <code>
 *   $tracingService = new Google_Service_Tracing(...);
 *   $spans = $tracingService->spans;
 *  </code>
 */
class Google_Service_Tracing_Resource_ProjectsTracesSpans extends Google_Service_Resource
{
  /**
   * Creates a new Span. (spans.create)
   *
   * @param string $name The resource name of Span in the format
   * `projects/PROJECT_ID/traces/TRACE_ID/spans/SPAN_ID`. `TRACE_ID` is a unique
   * identifier for a trace within a project and is a base16-encoded, case-
   * insensitive string and is required to be 32 char long. `SPAN_ID` is a unique
   * identifier for a span within a trace. It is a base 16-encoded, case-
   * insensitive string of a 8-bytes array and is required to be 16 char long.
   * @param Google_Service_Tracing_Span $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Tracing_Span
   */
  public function create($name, Google_Service_Tracing_Span $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Tracing_Span");
  }
}
