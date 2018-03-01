## 简介

干部管理系统是为苏大的外校培训人员开发的信息录入录出功能的web前后台管理系统，其中可以使用手动录入成员信息和直接使用excel进行数据的批量导入导出。前台使用bootstrap框架结合Js实现，后台使用thinkphp框架，采用mvc架构分离模式良好实现数据库的业务逻辑分离，服务器端采用apache，数据库采用phpadmin.

## 使用说明

- 安装php网站建站组合工具包appserv，将代码解压到php根目录

- 管理员界面(http://localhost:8080/trainee/Admin)：
用户名：amdmin
密码:admin

登入之后可以获取现有会议信息，增删改查会议信息和授权报名单位，对管理员基本信息进行修改

-  用户界面(http://localhost:8080/trainee)：
选择会议一进入
用户名：beijingdaxue
密码：beijingdaxue
可以看到所参加的会议详情，报名单位学员情况，实现对学员信息的增删改查，以及单位信息的增删改查

- 数据库phpadmin（http://localhost:8080/phpmyadmin/）
用户名：root
密码：123


