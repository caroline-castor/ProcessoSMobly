/*Criado por Caroline Castor dos Santos */

CREATE DATABASE processoMobly;
USE processoMobly;
CREATE TABLE Comments (
  post_id INT,
  id INT,
  nome VARCHAR(100),
  email VARCHAR(50),
  body VARCHAR(500),
  PRIMARY KEY (id)
) DEFAULT CHARSET=utf8;

CREATE TABLE Posts (
  id INT,
  title VARCHAR(100),
  body VARCHAR(500),
  user_id INT,
  PRIMARY KEY (id)
) DEFAULT CHARSET=utf8;



