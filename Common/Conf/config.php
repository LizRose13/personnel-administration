<?php
// define('WEB_URL','http://localhost:81');//定义域名及端口（发布时改成真实域名即可）
return array(
'DB_TYPE' => 'mysql',
'DB_HOST' => 'localhost',
//'DB_NAME' => 'trainee',
'DB_USER' => 'root',
'DB_PWD' => '123',
'DB_PORT' => '3306',
'DB_PREFIX' => 'tp_',//数据表前缀（指定后，数据表名必须以"fj_"开头
// 'DEFAULT_MODULE'
// =>'Index',
// 'WEB_URL' => WEB_URL.'/index.php',//定义通用模板页
// 'WEB_DEFAULT_URL'
// => WEB_URL,//定义web域名（可供其它php调用）
// 'APP_GROUP_LIST'
// => 'Home,Admin,Api', //项目分组设定，如果不指定，则不支持项目分组
// 'DEFAULT_GROUP'  
// => 'Home', //
// 'pic_dir' => 'upload/images/',//指定图片上传目录（供其它php调用）
);