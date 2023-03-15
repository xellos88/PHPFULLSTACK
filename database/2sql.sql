SELECT emp_no AS 회원번호, CONCAT(first_name,'',last_name) AS 이름 ,gender AS 성별
FROM employees
WHERE emp_no IN(
					SELECT emp_no
					FROM salaries
					GROUP BY emp_no
					HAVING AVG(salary) >= 80000
					);
					
UPDATE departments
SET dept_name = '1000'
WHERE dept_no = 'd001'
;

UPDATE employees
SET  birth_date = date(19880419), first_name='bb', last_name='aa'
WHERE emp_no = 500000;

SELECT *
FROM titles
WHERE emp_no=500000;

SELECT *
FROM departments
;
--1,2--
INSERT INTO employees
				( emp_no
				,birth_date
				,first_name
				,last_name
				,gender
				,hire_date)
		VALUES(500000
				,DATE(19880419)
				,'진영'
				,'박'
				,'M'
				,NOW()
				);
INSERT INTO titles
				(emp_no
				,title
				,from_date
				,to_date)
		VALUES(500000
				,'Staff'
				,NOW()
				,DATE(99990101)
				);
INSERT INTO salaries
				(emp_no
				,salary
				,from_date
				,to_date)
		VALUES(500000
				,77000
				,now()
				,DATE(99990101)
				);
INSERT INTO dept_emp
				(emp_no
				,dept_no
				,from_date
				,to_date)
		VALUES(500000
				,'d001'
				,NOW()
				,DATE(99990101)
				);
--3
INSERT INTO employees
				( emp_no
				,birth_date
				,first_name
				,last_name
				,gender
				,hire_date)
		VALUES(500001
				,NOW()
				,'유정'
				,'백'
				,'F'
				,NOW()
				);
INSERT INTO titles
				(emp_no
				,title
				,from_date
				,to_date)
		VALUES(500001
				,'Staff'
				,NOW()
				,DATE(99990101)
				);
INSERT INTO salaries
				(emp_no
				,salary
				,from_date
				,to_date)
		VALUES(500001
				,88000
				,now()
				,DATE(99990101)
				);
INSERT INTO dept_emp
				(emp_no
				,dept_no
				,from_date
				,to_date)
		VALUES(500001
				,'d002'
				,NOW()
				,DATE(99990101)
				);
--4				
UPDATE dept_emp
SET dept_no = 'd009'
WHERE emp_no = 500000
;
UPDATE dept_emp
SET dept_no = 'd009'
WHERE emp_no = 500001
;
INSERT INTO dept_emp
				(dept_no)
		 VALUE('d001');

--5
DELETE FROM employees
WHERE emp_no=500001
;
--6
UPDATE dept_manager
SET emp_no = 500000, from_date=to_date=NOW()
WHERE emp_no = 111939
;
INSERT INTO dept_manager
				(dept_no 
				,emp_no 
				,from_date 
				,to_date)
		VALUES('d009'
				,111939
				,DATE(19960101)
				,NOW()
				);				
--7
UPDATE titles
SET title='Senior Enginer', to_date=now()
WHERE emp_no = 500000
;
INSERT INTO titles
				(emp_no 
				,title 
				,from_date 
				,to_date)
		VALUES(
				500000
				,'Staff'
				,NOW()
				,NOW()
				);
--8
SELECT emp_no, first_name, last_name
FROM employees
WHERE emp_no=(
				SELECT emp_no
				FROM salaries
				WHERE salary =(
									SELECT MAX(salary)
									FROM salaries))
;
SELECT emp_no, first_name, last_name
FROM employees
WHERE emp_no=(
				SELECT emp_no
				FROM salaries
				WHERE salary =(
									SELECT min(salary)
									FROM salaries))
;
SELECT emp_no, first_name, last_name
FROM employees
WHERE emp_no = (SELECT emp_no FROM salaries ORDER BY salary LIMIT 1)
	or emp_no = (SELECT emp_no FROM salaries ORDER BY salary desc LIMIT 1)
--9
SELECT AVG(salary)
FROM salaries
;
--10
SELECT AVG(salary)
FROM salaries
where emp_no = 499975;

SELECT *
FROM dept_emp
WHERE emp_no=500000;
