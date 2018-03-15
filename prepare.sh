create database wordpress;
grant all privileges on wordpress.* to wordpress@'%' identified by 'wordpress';
use wordpress;
source ./wp.sql

