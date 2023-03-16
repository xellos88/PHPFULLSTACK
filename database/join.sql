SELECT 테이블1.컬럼명, 테이블2.컬럼명
FROM 테이블1 AS 별칭
	INNER JOIN 테이블2 AS 별칭
		ON 테이블1.컬럼명1 = 테이블2.컬럼명2;

INSERT INTO departments
VALUES(
'd010'
,'test'
);

COMMIT;

SELECT *
FROM departments

SELECT emp.emp_no, demp.dept_no, emp.first_name
FROM employees as emp
	INNER JOIN dept_emp as demp
		ON emp.emp_no = demp.emp_no
LIMIT 10;

SELECT dept.dept_no, dept.dept_name, d_m.emp_no
FROM departments AS dept
	full outer JOIN dept_manager AS d_m
		ON dept.dept_no = d_m.dept_no;
		
SELECT dept.dept_no, dept.dept_name, d_m.emp_no
FROM departments AS dept
	cross JOIN dept_manager AS d_m;

ALTER TABLE employees ADD COLUMN sup_no INT(11);

SELECT emp2.*
FROM employees as emp1
	INNER JOIN employees as emp2
		ON emp1.sup_no= emp2.emp_no
WHERE emp1.emp_no=10001;	
	
SELECT * FROM employees WHERE emp_no=10001
UNION 
SELECT * FROM employees WHERE emp_no=10005;
	
SELECT * FROM employees WHERE emp_no=10001 or emp_no=10005
UNION all
SELECT * FROM employees WHERE emp_no=10005;	