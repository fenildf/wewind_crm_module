<?php
/**
 * 会员中心模块小程序接口定义
 *
 * @author zhengfeiwenhua
 * @url 
 */
defined('IN_IA') or exit('Access Denied');

class Huang_memberModuleWxapp extends WeModuleWxapp {
	public function doPageTest(){
		global $_GPC, $_W;
		$errno = 0;
		$message = '返回消息';
		$data = array();
		return $this->result($errno, $message, $data);
	}
}