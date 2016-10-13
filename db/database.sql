create database if not exists wargamephp character set utf8 collate utf8_unicode_ci;
use wargamephp;
grant all privileges on wargamephp.* to 'wargamephp_user'@'localhost' identified by 'secret';

