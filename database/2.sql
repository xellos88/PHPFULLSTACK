SELECT emp_no AS 회원번호, CONCAT(first_name,'',last_name) AS 이름 ,gender AS 성별
FROM employees
WHERE emp_no IN(
					SELECT emp_no
					FROM salaries
					GROUP BY emp_no
					HAVING AVG(salary) >= 80000
					);