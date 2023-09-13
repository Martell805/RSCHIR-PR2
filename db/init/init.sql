USE appDB;

CREATE TABLE IF NOT EXISTS clients (
  ID INT(11) PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(20) NOT NULL,
  surname VARCHAR(40) NOT NULL,
  phone VARCHAR(10)
);

INSERT INTO clients (name, surname, phone) VALUES ('Name1', 'Surname1', '12345');
INSERT INTO clients (name, surname, phone) VALUES ('Name2', 'Surname2', '54321');
INSERT INTO clients (name, surname, phone) VALUES ('Client', 'Good', '09876');
INSERT INTO clients (name, surname, phone) VALUES ('Client', 'Bad', '67890');
