CREATE TABLE TEST_TBL (
	MEM_NO INT(5) 
	,MEM_NAME VARCHAR(50) NOT NULL
	,MEM_AGE INT(3) NOT NULL
	,MEM_SEX ENUM('F','M')
	,MEM_SIGNIN_DATE DATETIME NOT NULL
	,MEM_SIGNOUT_DATE DATETIME
	,CONSTRAINT PK_EMPLOYEES_MEM_NO PRIMARY KEY(MEM_NO)
);
추가
ALTER TABLE test_tbl ADD COLUMN ADDR1 VARCHAR(300);
수정
ALTER TABLE test_tbl ALTER COLUMN ADDR1 VARCHAR(200);
삭제
ALTER TABLE test_tbl DROP COLUMN ADDR1;
추가
ALTER TABLE test_tbl ADD COLUMN ADDR1 VARCHAR(200);
테이블
SHOW FULL COLUMNS FROM test_tbl;

INSERT INTO test_tbl(
	MEM_NO
	,MEM_NAME
	,MEM_AGE
	,MEM_SEX
	,MEM_SIGNIN_DATE 
	,MEM_SIGNOUT_DATE
)
VALUES(
	4
	,'박진영'
	,36
	,'M'
	,NOW()
	,NULL
);
COMMIT;
SELECT * FROM salaries1;

DELETE FROM salaries1;
ROLLBACK;

TRUNCATE TABLE test_tbl;

CREATE TABLE employees1 (
	emp_no INT(11) 
	,brith_date date
	,first_name varchar(14)
	,last_name varchar(16)
	,gender enum('M','F')
	,hire_date DATE
	,CONSTRAINT pk_employees1_emp_no PRIMARY KEY(emp_no)
);
CREATE TABLE salaries1(
	emp_no INT(11) NOT NULL
	,salary INT(11) NOT NULL
	,from_date DATE NOT NULL
	,to_date DATE
	,CONSTRAINT pk_salaries1_from_date PRIMARY KEY(emp_no, from_date)
	,CONSTRAINT fk_salaries1_emp_no FOREIGN KEY(emp_no) REFERENCES employees1(emp_no)
);
CREATE TABLE titles1(
	emp_no int(11) NOT NULL
	,title varchar(50) NOT NULL
	,from_date DATE NOT NULL
	,to_date DATE
	,CONSTRAINT pk_titles1_from_date PRIMARY KEY(emp_no,title, from_date)
	,CONSTRAINT fk_titles1_emp_no FOREIGN KEY(emp_no) REFERENCES employees1(emp_no)
);

CREATE INDEX emp_no ON titles1(emp_no);













INSERT INTO titles1(
	emp_no
	,title
	,from_date
	,to_date
)
VALUES(
	1
	,'staff'
	,NOW()
	,NOW()
);
INSERT INTO salaries1(
	emp_no
	,salary
	,from_date
	,to_date
)
VALUES(
	1
	,70000
	,NOW()
	,NOW()
);
INSERT INTO employees1(
	emp_no
	,birth_date
	,first_name
	,last_name
	,gender
	,hire_date
)
VALUES(
1
,NOW()
,'진영'
,'박'
,'M'
,NOW()
);







