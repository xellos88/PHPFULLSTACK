SELECT em.emp_no, em.first_name, de.dept_no
FROM	employees AS em
	inner JOIN	dept_emp AS de 
	ON	em.emp_no = de.emp_no
	WHERE em.emp_no =10001;
	
SELECT em.emp_no AS 회원번호, em.first_name AS 이름, dp.dept_no AS 소속부서번호, dp.dept_name AS 부서명
FROM	employees AS em
	inner JOIN	dept_emp AS de 
	ON	em.emp_no = de.emp_no
	inner JOIN	departments AS dp 
	ON	de.dept_no = dp.dept_no
	WHERE em.emp_no =10001;	