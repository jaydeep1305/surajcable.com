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

class Google_Service_ShoppingContent_OrdersCustomBatchRequestEntryCancelLineItem extends Google_Model
{
  protected $amountType = 'Google_Service_ShoppingContent_Price';
  protected $amountDataType = '';
  protected $amountPretaxType = 'Google_Service_ShoppingContent_Price';
  protected $amountPretaxDataType = '';
  protected $amountTaxType = 'Google_Service_ShoppingContent_Price';
  protected $amountTaxDataType = '';
  public $lineItemId;
  public $productId;
  public $quantity;
  public $reason;
  public $reasonText;

  /**
   * @param Google_Service_ShoppingContent_Price
   */
  public function setAmount(Google_Service_ShoppingContent_Price $amount)
  {
    $this->amount = $amount;
  }
  /**
   * @return Google_Service_ShoppingContent_Price
   */
  public function getAmount()
  {
    return $this->amount;
  }
  /**
   * @param Google_Service_ShoppingContent_Price
   */
  public function setAmountPretax(Google_Service_ShoppingContent_Price $amountPretax)
  {
    $this->amountPretax = $amountPretax;
  }
  /**
   * @return Google_Service_ShoppingContent_Price
   */
  public function getAmountPretax()
  {
    return $this->amountPretax;
  }
  /**
   * @param Google_Service_ShoppingContent_Price
   */
  public function setAmountTax(Google_Service_ShoppingContent_Price $amountTax)
  {
    $this->amountTax = $amountTax;
  }
  /**
   * @return Google_Service_ShoppingContent_Price
   */
  public function getAmountTax()
  {
    return $this->amountTax;
  }
  public function setLineItemId($lineItemId)
  {
    $this->lineItemId = $lineItemId;
  }
  public function getLineItemId()
  {
    return $this->lineItemId;
  }
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  public function getProductId()
  {
    return $this->productId;
  }
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  public function getQuantity()
  {
    return $this->quantity;
  }
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  public function getReason()
  {
    return $this->reason;
  }
  public function setReasonText($reasonText)
  {
    $this->reasonText = $reasonText;
  }
  public function getReasonText()
  {
    return $this->reasonText;
  }
}
