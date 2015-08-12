--创建数据库
--数据库: mes_board
create database mes_board;

--
--表的结构: user
--
create table user (
    u_id int unsigned primary key auto_increment,
	u_name varchar(64) unique not null,
	u_pwd char(32) not null)DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

--
--向表中填充数据: user
--	
insert into user(u_name, u_pwd) values('Linus', md5(123456));
insert into user(u_name, u_pwd) values('Bill', md5(123456));
insert into user(u_name, u_pwd) values('KaiFu', md5(123456));

--
--表的结构: message
--	
create table message (
    m_id int unsigned primary key auto_increment,
	m_sender varchar(64) not null,
	m_getter varchar(64) not null,
	m_content varchar(2000)  not null,
	m_time datetime not null)DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

--
--向表中填充数据: message
--
insert into message(m_sender, m_getter, m_content, m_time)
    values('Linus', 'KaiFu', 'Welcome to OPEN SOURCE', now());
insert into message(m_sender, m_getter, m_content, m_time)
    values('Linus', 'Bill', 'Welcome to OPEN SOURCE', now());
insert into message(m_sender, m_getter, m_content, m_time)
    values('Bill', 'KaiFu', 'Welcome to MicroSoft', now());
insert into message(m_sender, m_getter, m_content, m_time)
    values('Bill', 'Linus', 'Welcome to OPEN SOURCE', now());
insert into message(m_sender, m_getter, m_content, m_time)
    values('KaiFu', 'Linus', 'Welcome to China', now());
insert into message(m_sender, m_getter, m_content, m_time)
    values('KaiFu', 'Bill', 'Welcome to China', now());

--	
--批量向表中填充数据: message
--
insert into message(m_sender, m_getter, m_content, m_time)
    select m_sender,m_getter, m_content, m_time from message;