
USE projectFindjob;
CREATE TABLE account(
	id int NOT NULL AUTO_INCREMENT,
	username	varchar(255) ,
	password	varchar(255) ,
	role		varchar(255) NOT NULL,
	PRIMARY KEY (id)
);
INSERT INTO account(username,password,role) VALUES(N'dongockhai',N'123456','admin');
INSERT INTO account(username,password,role) VALUES(N'huyngtrongdao',N'123456','admin');
INSERT INTO account(username,password,role) VALUES(N'memberLogin',N'123456','member');