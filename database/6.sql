CREATE VIEW test_view AS 
SELECT ti.title, COUNT(*) cnt
FROM employees emp
	INNER JOIN titles ti
	ON emp.emp_no=ti.emp_no
WHERE emp.gender='f'
AND ti.to_date= DATE(99990101)
GROUP BY ti.title
;
CREATE OR REPLACE VIEW test_view AS 
SELECT ti.title, COUNT(*) cnt
FROM employees emp
	INNER JOIN titles ti
	ON emp.emp_no=ti.emp_no
WHERE emp.gender='f'
AND ti.to_date= DATE(99990101)
GROUP BY ti.title
;

SELECT * from test_view WHERE title ='Staff';

DROP VIEW test_view;
