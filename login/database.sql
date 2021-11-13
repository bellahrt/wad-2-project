drop database if exists newnew;

create database newnew;
use newnew;

CREATE TABLE if not exists useraccount (
  username varchar(20) NOT NULL,
  password_hash varchar(64) NOT NULL,
  email varchar(64) NOT NULL
);

INSERT INTO useraccount (username, password_hash, email) VALUES
('zack', '$2y$10$EKPRz0VyZPumX63D7Z768ORzQMPNO4wg00AChOMUwKi/wOp1f7SlK', 'zack@gmail.com'),
('yew', '$2y$10$bs3aXFCJyYfP7jWljcRjxukiVbhRBLWNSJgTOD/CHWQVgV7hCd0t.', 'yew@gmail.com'),
('wong', '$2y$10$wD9/9pDxg3/JSavLqszwxuGZ1odhUBCGos8LOlYu0Y4NVuIQEmq1e', 'wong@gmail.com'),
('tan', '$2y$10$ys8PC5qrBElBGtkU3wwrMOiIQdBkgyQibOzDZRQv1EQrJ6H1YtnYy', 'tan@gmail.com');


ALTER TABLE useraccount 
  ADD PRIMARY KEY (username);
  
