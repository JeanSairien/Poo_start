create database if not exists wargamephp character set utf8 collate utf8_unicode_ci;
use wargamephp;
grant all privileges on wargamephp.* to 'red_user'@'localhost' identified by 'secret';

