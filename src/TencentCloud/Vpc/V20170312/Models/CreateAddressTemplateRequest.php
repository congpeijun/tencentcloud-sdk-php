<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getAddressTemplateName() 获取IP地址模版名称
 * @method void setAddressTemplateName(string $AddressTemplateName) 设置IP地址模版名称
 * @method array getAddresses() 获取地址信息，支持 IP、CIDR、IP 范围。
 * @method void setAddresses(array $Addresses) 设置地址信息，支持 IP、CIDR、IP 范围。
 */

/**
 *CreateAddressTemplate请求参数结构体
 */
class CreateAddressTemplateRequest extends AbstractModel
{
    /**
     * @var string IP地址模版名称
     */
    public $AddressTemplateName;

    /**
     * @var array 地址信息，支持 IP、CIDR、IP 范围。
     */
    public $Addresses;
    /**
     * @param string $AddressTemplateName IP地址模版名称
     * @param array $Addresses 地址信息，支持 IP、CIDR、IP 范围。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AddressTemplateName",$param) and $param["AddressTemplateName"] !== null) {
            $this->AddressTemplateName = $param["AddressTemplateName"];
        }

        if (array_key_exists("Addresses",$param) and $param["Addresses"] !== null) {
            $this->Addresses = $param["Addresses"];
        }
    }
}
