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
namespace TencentCloud\Cws\V20180312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getNoticeLevel() 获取漏洞告警通知等级，4位分别代表：高危、中危、低危、提示。
 * @method void setNoticeLevel(string $NoticeLevel) 设置漏洞告警通知等级，4位分别代表：高危、中危、低危、提示。
 * @method integer getId() 获取配置ID。
 * @method void setId(integer $Id) 设置配置ID。
 * @method string getCreatedAt() 获取记录创建时间。
 * @method void setCreatedAt(string $CreatedAt) 设置记录创建时间。
 * @method string getUpdatedAt() 获取记录更新新建。
 * @method void setUpdatedAt(string $UpdatedAt) 设置记录更新新建。
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeConfig返回参数结构体
 */
class DescribeConfigResponse extends AbstractModel
{
    /**
     * @var string 漏洞告警通知等级，4位分别代表：高危、中危、低危、提示。
     */
    public $NoticeLevel;

    /**
     * @var integer 配置ID。
     */
    public $Id;

    /**
     * @var string 记录创建时间。
     */
    public $CreatedAt;

    /**
     * @var string 记录更新新建。
     */
    public $UpdatedAt;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param string $NoticeLevel 漏洞告警通知等级，4位分别代表：高危、中危、低危、提示。
     * @param integer $Id 配置ID。
     * @param string $CreatedAt 记录创建时间。
     * @param string $UpdatedAt 记录更新新建。
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
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
        if (array_key_exists("NoticeLevel",$param) and $param["NoticeLevel"] !== null) {
            $this->NoticeLevel = $param["NoticeLevel"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
