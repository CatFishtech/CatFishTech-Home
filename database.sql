/*create user admin login db*/
CREATE TABLE `catfish`.`main` ( `ID` INT(10) NOT NULL AUTO_INCREMENT , 
`username` VARCHAR(255) NOT NULL , 
`agent` VARCHAR(255) NOT NULL , 
`email` VARCHAR(255) NOT NULL , 
`password` VARCHAR(255) NOT NULL , 
`created at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
PRIMARY KEY (`ID`)) ENGINE = InnoDB;


/*create user client login db*/

CREATE TABLE `catfish`.`user` ( `ID` INT(10) NOT NULL AUTO_INCREMENT ,
 `username` VARCHAR(255) NOT NULL , 
 `agent` VARCHAR(255) NOT NULL , 
 `email` VARCHAR(255) NOT NULL , 
 `password` VARCHAR(255) NOT NULL , 
 `created at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
 PRIMARY KEY (`ID`)) ENGINE = InnoDB;

 /*create breakfast db*/

 CREATE TABLE `catfish`.`break` ( `name` VARCHAR(50) NOT NULL , 
 `entrytime` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ) ENGINE = InnoDB;

 /*create drinks db*/

 CREATE TABLE `catfish`.`drinks` ( `name` VARCHAR(50) NOT NULL , 
 `entrytime` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ) ENGINE = InnoDB;

 /*create lunch db */

 CREATE TABLE `catfish`.`luch` ( `name` VARCHAR(50) NOT NULL , 
 `entrytime` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ) ENGINE = InnoDB;