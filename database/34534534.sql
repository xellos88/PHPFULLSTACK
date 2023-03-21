DELIMITER $$
CREATE PROCEDURE test_proc(
	IN in_num int
)
BEGIN
	SELECT *
	FROM employees
	LIMIT in_num;
END $$	
DELIMITER ;	

CALL test_proc(5);

show create procedure test_proc;

DROP procedure test_proc;



DELIMITER $$
CREATE FUNCTION fc_sum(num INT)
	RETURNS INT
BEGIN
	RETURN num + num + num;
END $$
DELIMITER ;	

SELECT fc_sum(2);	

DROP FUNCTION fc_sum;


DELIMITER $$
CREATE PROCEDURE test()
BEGIN
DECLARE sal INT;
DECLARE sum_sal INT;
DECLARE cur_sal INT;
DECLARE end_row BOOLEAN DEFAULT false;

DECLARE cur_sal CURSOR FOR
	SELECT salary FROM salaries WHERE emp_no=10001;
	
DECLARE CONTINUE handler FOR NOT FOUND
	SET end_row = TRUE;
	
OPEN cur_sal;

cursor_loop:loop

	fetch cur_sal INTO sal;
	
	if end_row then
		leave cursor_loop;
	END if;
	
	SET summ_sal= sum_sal+sal;
	


DELIMITER $$
CREATE TRIGGER test_update
AFTER UPDATE
ON departments
FOR EACH ROW
BEGIN
	UPDATE departments
	SET dept_name = 'trigger test'
	WHERE dept_no = 'd010';
END $$
DELIMITER ;

UPDATE departments
SET dept_no = 'd010';



SHOW TRIGGERS;

CREATE TABLE test_text(
	txt_no INT PRIMARY KEY AUTO_INCREMENT
	,f_text VARCHAR(4000)
	,FULLTEXT  idx_full_test_text_f_text(f_text)
);
INSERT INTO test_text(f_text) VALUES('동해물과 백두산이 마르고 닳도록 하나님이 보호하사 우리 대한 만세');
INSERT INTO test_text(f_text) VALUES('무궁화 삼천리 화려강산대한사람 대한으로 길이 보전하세');
INSERT INTO test_text(f_text) VALUES('남산 위에 저 소나무철갑을 두른 듯바람 서리 불변함은우리 기상일세');
INSERT INTO test_text(f_text) VALUES('가을 하늘 공활한데높고 구름 없이밝은 달은 우리 가슴일편단심일세');
INSERT INTO test_text(f_text) VALUES('이 기상과 이 맘으로충성을 다하여괴로우나 즐거우나 나라 사랑하세');

COMMIT;

SELECT * FROM test_text
WHERE MATCH(f_text) AGAINST('동해 하느님');










