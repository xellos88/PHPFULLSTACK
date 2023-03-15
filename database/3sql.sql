SELECT CAST(1234 AS CHAR(4));
SELECT convert(1234 ,CHAR(4)); 

SELECT emp_no, IF(emp_no = 10001, first_name, birth_date)
FROM employees;

SELECT IFNULL(NULL, 'AA');
SELECT IFNULL('123','AA');
SELECT IFNULL(' ','AA');

SELECT NULLIF(1,1);

SELECT
	emp_no
	,gender
	,case gender
		when 'M' then '남자'
		ELSE '여자'
	end
FROM employees LIMIT 10;


SELECT
	emp_no
	,case title
		when 'Senior Engineer' then '관리자'
		ELSE '팀원'
	end AS 'k_title'
FROM titles;
