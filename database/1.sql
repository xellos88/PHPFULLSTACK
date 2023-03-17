SELECT emp_no 
FROM salaries
WHERE emp_NO
BETWEEN 10003 AND 10005
;

SELECT *
from employees
WHERE emp_no IN(10001,10005)
;

SELECT *
from employees
WHERE first_name LIKE('m___');

SELECT emp_no, title
FROM titles
WHERE title LIKE('%engineer%');

SELECT distinct emp_no
FROM dept_emp;

SELECT *
FROM employees
LIMIT 10 OFFSET 4;

SELECT *
FROM employees
ORDER BY first_name ASC, last_name ASC;

SELECT avg(salary)
FROM salaries
;

SELECT MAX(salary)
FROM salaries
;

SELECT min(salary)
FROM salaries
;

SELECT title, COUNT(title)
FROM titles
GROUP BY title HAVING COUNT(Title) >=100000;

SELECT emp_no, AVG(salary) AS avg_s
FROM salaries
GROUP BY emp_no
HAVING avg_s >= 30000 AND avg_s <= 50000
;

SELECT concat(last_name,'',first_name) AS fullname
FROM employees;

SELECT *
FROM dept_manager
WHERE emp_no = any (
						SELECT emp_no
						FROM dept_manager
						WHERE dept_no = 'd009'
						);
						
SELECT *
FROM dept_manager
WHERE dept_no =(
						SELECT emp_no
						FROM dept_manager
						WHERE emp_no IN(110344,11035)
						);
						
SELECT emp_no, first_name, last_name, gender
FROM employees
WHERE emp_no in (
					SELECT emp_no
					FROM salaries
					GROUP BY emp_no
					HAVING AVG(salary) >= 70000
);

SELECT *,NOW()
FROM titles
WHERE emp_no = 10009
AND to_date >= NOW();

SELECT emp_no, last_name
FROM employees
WHERE emp_no in(
					select emp_no
					FROM titles
					WHERE title = 'Senior Engineer' 
					AND to_date >= NOW()
					);
					




