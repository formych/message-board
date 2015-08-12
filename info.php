<?php
    phpinfp();
	// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
    $vcap = getenv("VCAP_SERVICES");
    $data = json_decode($vcap, true);
    $creds = $data['mysql'][0]['credentials'];
    /** WordPress数据库的名称 */
    //define('DB_NAME', 'database_name_here');
    define('DB_NAME', $creds['name']);
    /** MySQL数据库用户名 */
    //define('DB_USER', 'username_here');
    define('DB_USER', $creds['username']);
    /** MySQL数据库密码 */
    //define('DB_PASSWORD', 'password_here');
    define('DB_PASSWORD', $creds['password']);
    /** MySQL主机 */
    //define('DB_HOST', 'localhost');
    define('DB_HOST', $creds['hostname']);
