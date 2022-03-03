<?php
// $Id$
/*
 +-------------------------------------------------------------------------+
 | Copyright IBM Corp. 2006, 2021                                          |
 |                                                                         |
 | Licensed under the Apache License, Version 2.0 (the "License");         |
 | you may not use this file except in compliance with the License.        |
 | You may obtain a copy of the License at                                 |
 |                                                                         |
 | http://www.apache.org/licenses/LICENSE-2.0                              |
 |                                                                         |
 | Unless required by applicable law or agreed to in writing, software     |
 | distributed under the License is distributed on an "AS IS" BASIS,       |
 | WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.|
 | See the License for the specific language governing permissions and     |
 | limitations under the License.                                          |
 +-------------------------------------------------------------------------+
*/

function upgrade_to_10_1_0_1() {
	global $system_type, $config;

	include_once(dirname(__FILE__) . '/../../../lib/rtm_db_upgrade.php');

	cacti_log('NOTE: Upgrading license to v10.1.0.1 ...', true, 'UPGRADE');

	add_index("lic_interval_stats", "action_utilization", "ADD INDEX `action_utilization` (`action`, `utilization`);");
}
