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

-- 1.사원의 사원번호,풀네임,직책명 출력
-- 2.사원의 사원번호, 성별, 현재 월급 출력
-- 3.10010 사원의 풀네임, 과거부터 현재까지 월급이력 출력
-- 4.사원의 사원번호 풀네임 소속부서명 출력
-- 5.현재 월급의 상위10위까지 사원의 사번, 풀네임, 월급 출력
-- 6.각 부서의 부서장의 부서명 풀네임 입사일을 출력
-- 7.현재 직책 'staff'인 사원의 현재 전체 평균 월급 출력
-- 8.부서장직 역임했던 모든 사원의 풀네임,입사일,사번,부서번호 출력
-- 9.현재 각 직급별 평균월급중 6만이상인 직급의 직급명, 평균월급(정수)를 내림차순 출력
-- 10. 성별이 여자인 사원들의 직급별 사원수를 출력
-- 11. 직급별 퇴사한 남자 사원수
111111111
SELECT em.emp_no, CONCAT(last_name,' ',first_name) AS fullname, ti.title
FROM employees as em
	INNER JOIN titles as ti
			ON em.emp_no = ti.emp_no;
			WHERE ti.do_date >= NOW()
;
222222
SELECT em.emp_no, em.gender, sl.salary
FROM employees as em
	INNER JOIN salaries as sl
			ON em.emp_no = sl.emp_no
			WHERE sl.to_date = '9999-01-01'
;
			
3333333
SELECT em.emp_no, CONCAT(last_name,' ',first_name) AS fullname, sl.salary
FROM employees as em
	INNER JOIN salaries as sl
			ON em.emp_no = sl.emp_no
			WHERE em.emp_no =10010;
			
4444444
SELECT em.emp_no, CONCAT(last_name,' ',first_name) AS fullname, dp.dept_name
FROM employees as em
	INNER JOIN dept_emp as de
			ON em.emp_no = de.emp_no
	inner JOIN departments AS dp
			ON de.dept_no = dp.dept_no
			WHERE de.do_date >= NOW()
			ORDER BY em.emp_no
;
			
5555555
SELECT em.emp_no, CONCAT(last_name,' ',first_name) AS fullname, sl.salary
FROM employees as em
	INNER JOIN salaries AS sl
		ON em.emp_no = sl.emp_no
		WHERE sl.to_date=DATE(99990101)
		ORDER BY sl.salary desc LIMIT 10;
		
6666666	
SELECT dp.dept_name, CONCAT(last_name,' ',first_name) AS fullname, em.hire_date
FROM employees AS em
		INNER JOIN 	dept_manager AS dm
			ON em.emp_no = dm.emp_no
		INNER JOIN departments AS dp
			ON dp.dept_no= dm.dept_no
			GROUP BY dp.dept_name
			HAVING COUNT(dm.to_date= '9999-01-01')
;

77777777
SELECT tl.title, AVG(salary)
FROM titles as tl
	inner JOIN salaries as sl
		ON sl.emp_no= tl.emp_no
		WHERE tl.title='staff'
		and sl.to_date>=NOW()
;
8888888
select CONCAT(last_name,' ',first_name) AS fullname, em.hire_date, em.emp_no, dm.dept_no
FROM employees AS em
	INNER JOIN dept_manager AS dm
		ON em.emp_no= dm.emp_no
		WHERE dm.to_date < '9999-01-01'
;

9999999 -- 9.현재 각 직급별 평균월급중 6만이상인 직급의 직급명, 평균월급(정수)를 내림차순 출력
SELECT tl.title, CAST(avg(sl.salary) AS INT) 
FROM titles AS tl
	INNER JOIN salaries as sl
	ON tl.emp_no = sl.emp_no
	WHERE avg(sl.slalary) >=60000
	GROUP BY tl.title
	ORDER BY  DESC
;
10
SELECT tl.title, COUNT(*)
FROM titles AS tl
	INNER JOIN employees AS em
		ON tl.emp_no=em.emp_no
		WHERE em.gender='F'
		GROUP BY tl.title
;





11
SELECT COUNT(*)
FROM employees AS em
	LEFT JOIN titles AS tl
			ON	em.emp_no=tl.emp_no
			
			WHERE sl.salary <='9999-01-01' AND 
;			
SELECT a.gender, COUNT(a.gnder)
FROM employees a
INNER JOIN(
				SELECT a.emp_no
				FROM (
						SELECT emp_no
						FROM titles
						GROUP BY emp_no
						HAVING COUNT(emp_no)>1
						)a
			   		WHERE a.emp_no NOT IN(
													SELECT a.emp_no
													FROM titles a
													INNER JOIN(
																SELECT emp_no
																FROM titles
																GROUP BY emp_no
																HAVING COUNT(emp_no)>1
																)b
																ON a.emp_no = b.emp_no
																WHERE to_date = DATE('9999-01-01')
																)
													
				union
													
						SELECT a.emp_no
						FROM titles a
						INNER JOIN(
										SELECT emp_no
										FROM titles
										GROUP BY emp_no
										HAVING COUNT(emp_no)=1
										)b
										ON a.emp_no=b.emp_no
										WHERE a.to_date!= DATE('9999-01-01');
										
SELECT a.gender, COUNT(a.gender) AS cnt
FROM employees a
INNER JOIN(
			SELECT emp_no
			FROM titles
			WHERE to_date<NOW()
			AND (emp_no, to_date) in
			(
				SELECT emp_no, MAX(to_date)
				FROM titles
				GROUP BY emp_no
			)
)b
ON a.emp_no=b.emp_no
GROUP BY a.gender;	

																									