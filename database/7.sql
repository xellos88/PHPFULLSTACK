-- 2. auto_increment 생성
CREATE TABLE test_member(
mem_no  INT(11) PRIMARY KEY AUTO_INCREMENT
,mem_name VARCHAR(50)
);

INSERT INTO test_member(mem_name)
VALUES('박진영');
INSERT INTO test_member(mem_name)
VALUES('박상준');
COMMIT;

SELECT *
FROM test_member;

DELETE FROM test_member 
WHERE mem_no=2;
TRUNCATE TABLE test_member;
DROP TABLE test_member;

-- 3. auto_increment 수정
ALTER TABLE test_member MODIFY mem_no
INT(11) NOT NULL AUTO_INCREMENT;

--	- auto_increment의 값을 초기화 할 때
ALTER TABLE test_member AUTO_INCREMENT=10;

-- 1. Transaction 이란?
-- 	논리적 기능을 수행하기 위한 작업의 단위 또는 한번에 모두 수행되어야 할 일련의 연산들
-- 
-- 2. Transaction의 특징
-- 	- 트랜잭션은 데이터베이스 시스템에서 병행 제어 및 회복 작업 시 처리되는 작업의 논리적 단위입니다.
-- 	- 사용자가 시스템에 대한 서비스 요구 시 시스템이 응답하기 위한 상태 변환 과정의 작업단위입니다.
-- 	- 하나의 트랜잭션은 Commit되거나 Rollback되어야 합니다.
-- 
-- 3. Transaction의 성질
-- 	3-1. 원자성(Atomicity)
-- 		- 트랜잭션 내의 모든 명령은 반드시 완벽히 수행되어야 합니다.
-- 		- 전부가 완벽히 수행되지 않고 어느하나라도 오류가 발생하면 트랜잭션 전부가 취소되어야 합니다.
-- 
-- 	3-2 . 일관성(Consistency)
-- 		- 트랜잭션이 그 실행을 성공적으로 완료하면 언제나 일관성 있는 데이터베이스 상태로 변환합니다.
-- 		- 시스템이 가지고 있는 고정요소는 트랜잭션 수행 전과 트랜잭션 수행 완료 후의 상태가 같아야 합니다.
-- 
-- 	3-3. 독립성(Isolation)
-- 		- 둘 이상의 트랜잭션이 동시에 병행 실행되는 경우 어느 하나의 트랜잭션 실행중에 다른 트랜잭션의 연산이 끼어들 수 없습니다.
-- 		- 수행중인 트랜잭션은 완전히 완료될 때까지 다른 트랜잭션에서 수행 결과를 참조할 수 없습니다.
-- 
-- 	3-4. 영속성(Durablility)
-- 		- 성공적으로 완료된 트랜잭션의 결과는 시스템이 고장나더라도 영구적으로 반영되어야 합니다.
-- 
-- 4. Transaction의 상태
-- 	활동(Active) : 트랜잭션이 실행중인 상태
-- 	실패(Failed) : 트랜잭션 실행에 오류가 발생하여 중단된 상태
-- 	철회(Aborted) : 트랜잭션이 비정상적으로 종료되어 Rollback 연산을 수행한 상태
-- 	부분 완료(Partially Committed) : 트랜잭션의 마지막 연산까지 실행하고, Commit 연산이 실행되기 직전의 상태
-- 	완료(Committed) : 트랜잭션이 성공적으로 종료되어 Commit 연산을 실행한 후의 상태
-- 
-- 5. Transaction의 연산
-- 	- COMMIT;
-- 		연산의 결과를 DB에 적용합니다.
-- 	- ROLLBACK;
-- 		연산의 결과를 취소하여, 연산 이전의 DB상태로 되돌아 갑니다.

-- 0. INDEX란?
-- 	데이터베이스 테이블에 대한 검색 성능의 속도를 높여주는 기능
-- 	인덱스 생성 시 데이터를 오름차순으로 정렬
--	일반적으로 DB에서는 "B+ Tree 인덱스" 방식을 사용

-- 1. INDEX의 종류
-- 	- 클러스터 인덱스(Clustered Index) : 
-- 		> PK생성시 자동으로 생성되는 인덱스
-- 		> 테이블당 1개만 존재
-- 	- 보조 인덱스(Secondary Index) : 
-- 		> 개발자가 필요에 따라 지정하여 생성하는 인덱스
-- 		> 복수 설정 가능

-- 2. INDEX의 장점
-- 	- 테이블을 조회하는 속도와 그에 따른 성능 향상
-- 	- 전반적인 시스템의 부하 감소

-- 3. INDEX의 단점
-- 	- 인덱스를 관리하기 위해 DB의 약 10%에 해당하는 추가 저장공간이 필요
-- 	- 인덱스를 관리하기 위해 추가 작업이 필요
-- 	- 인덱스 관리에 미흡하면 오히려 성능 저하

-- 4. INDEX 사용시 주의점
-- 	- INSERT, UPDATE, DELETE가 빈번하게 일어나는 테이블은 주의
-- 	- 검색하고자 하는 데이터가 테이블의 10~15% 이하 일 경우 가장 효율적
-- 	- 속도 향상을 위해서는 우선 쿼리를 좀 더 효율적으로 짜는 방향을 고려(인덱스는 최후의 수단)
-- 	- 인덱스를 추가 했다면 대량의 데이터로 해당 테이블의 CRUD를 테스트
-- 	- 사용하지 않는 인덱스는 제거
-- 	- FK를 지정한 열은 자동으로 FK 인덱스가 생성(*DBMS에 따라 상이하므로 주의)

-- 5. 인덱스를 사용하기 좋은 상황
-- 	- 규모가 작지 않은 테이블
-- 	- INSERT, UPDATE, DELETE가 자주 발생하지 않는 칼럼
-- 	- JOIN이나 WHERE 또는 ORDER BY에 자주 사용되는 칼럼
-- 	- 데이터의 중복도가 낮은 칼럼

-- 5. INDEX 확인
-- 	SHOW INDEX FROM 테이블;
SHOW INDEX FROM employees;

SELECT * FROM employees WHERE last_name='swan';

-- 6. INDEX 생성
-- 	CREATE INDEX 인덱스명 ON 테이블(컬럼);
-- 	CREATE INDEX 인덱스명 ON 테이블(컬럼1,컬럼2...);

CREATE INDEX idx_employees_last_name ON employees(last_name);

-- 7. INDEX 제거
-- 	DROP INDEX 인덱스명;

DROP INDEX idx_employees_last_name ON employees;