<?php
/**
 * 密码加密
 */
function setSalt($data)
{
	return md5(md5($data).C('SALT'));
}


/**
 * 格式化返回数据
 */
function response($res)
{
	exit(json_encode($res));
}