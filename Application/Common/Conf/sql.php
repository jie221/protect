<!-- 创建管理员表 --> 
create table admin(
	id int auto_increment primary key not null,
	username varchar(100) not null,
	password varchar(100) not null,
	age int(3) not null,
	gender bit(1) default 1 comment '性别',
	role_id int comment '角色id'
)engine=InnoDB charset=utf8;

<!-- 文章表 -->
create table article(
	id int auto_increment primary key not null,
	userid int not null comment '用户id' ,
	title varchar(100) not null,
	description tinytext,
	author varchar(100) comment '作者',
	time varchar(100) comment '上传时间',
	thumb varchar(200) comment '缩略图',
	music varchar(200) comment '音乐'
)engine=InnoDB charset=utf8;

<!-- 文章内容表 -->
create table article_content(
	id int auto_increment primary key not null,
	article_id int not null comment "文章id",
	content text
)engine=InnoDB charset=utf8;


<!-- 角色表 -->
create table role(
	id int auto_increment primary key not null,
	roleName varchar(100) not null,	
)engine=InnoDB charset=utf8;

<!-- 创建用户表 -->
create table user(
	id int auto_increment primary key not null,
	login_name int(11) not null,
	password varchar(100) not null,
	nikename varchar(100) not null,
	regist_time varchar(100) not null comment "注册时间",
	login_time varchar(100) not null coment "登录时间",
	desc tinytext comment "个人描述"
)engine=InnoDB charset=utf8;

