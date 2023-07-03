create table USER_TB 
( 
id varchar(20) not null primary key,
name varchar(20) not null,
password varchar(20) not null
);
create table WALK_TB
(
walker_id varchar(20) not null,
walk_count int not null,
walk_date date not null,
Foreign key(walker_id) references user_tb(id) on delete cascade
);
