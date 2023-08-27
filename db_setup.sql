USE studs;

CREATE TABLE Students (
  firstname varchar(255),
  lastname varchar(255),
  course varchar(255),
  stud_id varchar(50) PRIMARY KEY
);

INSERT INTO Students VALUES ('John', 'Doe', 'Engineering', '12345');
INSERT INTO Students VALUES ('Jane', 'Doe', 'Computer Science','54321');
