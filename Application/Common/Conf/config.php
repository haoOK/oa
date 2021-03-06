<?php
return array(
	//'配置项'=>'配置值'
	//默认模板引擎是否禁用PHP原生代码
	'TMPL_DENY_PHP' => false,
	/*数据库设置*/
    //mysql orcle mssql access db2 sqlite...
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'db_oa',     // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',      // 密码
    'DB_PORT'               =>  '3306',      // 端口
    'DB_PREFIX'             =>  'tp_',       // 数据库表前缀 

    //跟踪信息
    'SHOW_PAGE_TRACE'  	    => true,
    
    //动态加载
    'LOAD_EXT_FILE'         => test,

    #用户组的数据
    'RBAC_ROLES'            =>  array(
                            1 => '高层管理',
                            2 => '中层领导',
                            3 => '普通职员'
                        ),
    
    #用户组的权限
    'RBAC_ROLES_AUTHS'      =>  array(
                            1 => array('*/*'),  //全部权限
                            2 => array('email/*','doc/*','knowledge/*','index/*'),
                            3 => array('email/*','doc/showlist','index/*')
                        ),
);