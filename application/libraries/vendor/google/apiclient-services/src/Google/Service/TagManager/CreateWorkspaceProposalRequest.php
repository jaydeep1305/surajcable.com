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

class Google_Service_TagManager_CreateWorkspaceProposalRequest extends Google_Collection
{
  protected $collection_key = 'reviewers';
  protected $initialCommentType = 'Google_Service_TagManager_WorkspaceProposalHistoryComment';
  protected $initialCommentDataType = '';
  protected $reviewersType = 'Google_Service_TagManager_WorkspaceProposalUser';
  protected $reviewersDataType = 'array';

  /**
   * @param Google_Service_TagManager_WorkspaceProposalHistoryComment
   */
  public function setInitialComment(Google_Service_TagManager_WorkspaceProposalHistoryComment $initialComment)
  {
    $this->initialComment = $initialComment;
  }
  /**
   * @return Google_Service_TagManager_WorkspaceProposalHistoryComment
   */
  public function getInitialComment()
  {
    return $this->initialComment;
  }
  /**
   * @param Google_Service_TagManager_WorkspaceProposalUser
   */
  public function setReviewers($reviewers)
  {
    $this->reviewers = $reviewers;
  }
  /**
   * @return Google_Service_TagManager_WorkspaceProposalUser
   */
  public function getReviewers()
  {
    return $this->reviewers;
  }
}
