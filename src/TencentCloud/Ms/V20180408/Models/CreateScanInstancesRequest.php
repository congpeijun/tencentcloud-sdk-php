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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getAppInfos() 获取待扫描的app信息列表，一次最多提交20个
 * @method void setAppInfos(array $AppInfos) 设置待扫描的app信息列表，一次最多提交20个
 * @method ScanInfo getScanInfo() 获取扫描信息
 * @method void setScanInfo(ScanInfo $ScanInfo) 设置扫描信息
 */

/**
 *CreateScanInstances请求参数结构体
 */
class CreateScanInstancesRequest extends AbstractModel
{
    /**
     * @var array 待扫描的app信息列表，一次最多提交20个
     */
    public $AppInfos;

    /**
     * @var ScanInfo 扫描信息
     */
    public $ScanInfo;
    /**
     * @param array $AppInfos 待扫描的app信息列表，一次最多提交20个
     * @param ScanInfo $ScanInfo 扫描信息
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
        if (array_key_exists("AppInfos",$param) and $param["AppInfos"] !== null) {
            $this->AppInfos = [];
            foreach ($param["AppInfos"] as $key => $value){
                $obj = new AppInfo();
                $obj->deserialize($value);
                array_push($this->AppInfos, $obj);
            }
        }

        if (array_key_exists("ScanInfo",$param) and $param["ScanInfo"] !== null) {
            $this->ScanInfo = new ScanInfo();
            $this->ScanInfo->deserialize($param["ScanInfo"]);
        }
    }
}
