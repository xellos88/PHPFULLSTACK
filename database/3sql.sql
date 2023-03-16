SELECT CONCAT('안녕하세요.',  '좋은아침입니다');

SELECT CONCAT(,last_name,' ',first_name)
FROM employees
WHERE emp_no=500000;

SELECT CONCAT_WS('@',last_name,' ',first_name)
FROM employees
WHERE emp_no=500000;

SELECT FORMAT(123456789.123456,3);


SELECT LEFT('ABCDEFG',3);
SELECT RIGHT('ABCDEFG',3);

SELECT UPPER('abcdefg');
SELECT lowER('ABCDEFG');

SELECT LPAD('abcdefg',10,'#');
SELECT RPAD('abcdefg',10,'#');

SELECT TRIM(' abc                                 ');
SELECT LTRIM('                    abc                                 ');
SELECT RTRIM('                abc                                 ');
SELECT TRIM(trailing 'abc' FROM ' abcdefgabc');

SELECT SUBSTRING('abcdef', 1, 3);
SELECT SUBSTRING_index('ab.cd.ef.gh', '.', 4);

SELECT CEILING(1.1);
SELECT FLOOR(1.1);
SELECT ROUND(1.5);
SELECT TRUNCATE(1234.56789,-2);

SELECT NOW();
SELECT DATE(20001212);
SELECT DATE(NOW());
SELECT ADDDATE(NOW(),INTERVAL -1 DAY);
SELECT SUBDATE(NOW(),INTERVAL 1 DAY);
SELECT ADDTIME(NOW(),'1:1:1');

SELECT emp_no, salary, RANK() over(ORDER BY salary ASC)
FROM salaries;
SELECT emp_no, salary, row_number() over(ORDER BY salary ASC) r
FROM salaries;


























