drop table if exists t_personnage;




create table t_personnage (

    pers_id integer not null primary key auto_increment,

    pers_name varchar(100) not null,

    pers_force varchar(250) not null,

    pers_niveau varchar(255) not null,

    pers_degats varchar(100) not null,

    pers_exp varchar(255) not null

) engine=innodb character set utf8 collate utf8_unicode_ci;


