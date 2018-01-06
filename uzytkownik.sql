DROP user 'root'@'127.0.0.1';
CREATE user 'root'@'127.0.0.1' identified by 'root';
GRANT select, insert, update, delete, create, drop, references, execute ON *.* TO 'root'@'127.0.0.1';
select * from mysql.user;