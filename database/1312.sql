CREATE TABLE `student` (
	`std_no`	INT PRIMARY KEY
	,`std_birth`	DATE	NOT NULL
	,`std_name`	VARCHAR(20)	NOT NULL
	,`std_major`	VARCHAR(20)	NOT NULL
	,`std_addr`	VARCHAR(20)	NOT NULL
	,`std_num`	INT	NOT NULL
	,`std_gen`	ENUM('M','F') NOT	NULL
	,`std_adm_date`	DATE NOT	NULL
	,`std_grd_date`	DATE	NOT NULL
	,`std_sts`	ENUM('Y','N') NOT	NULL
);

ALTER TABLE `study_db`.`student` MODIFY std_num CHAR(11);


CREATE TABLE `grade` (
	`std_no`	INT
	,`lec_num`	INT
	,`grd_sco`	INT	NOT NULL
	,`grd_cls_rank`	INT	NOT NULL
	,`grd_date`	INT	NOT NULL
);

ALTER TABLE `study_db`.`grade` ADD PRIMARY KEY(std_no, lec_num);

CREATE TABLE `Professor` (
	`prof_num`	INT PRIMARY KEY
	,`prof_name`	VARCHAR(20)	NOT NULL
	,`prof_birth_day`	DATE	NOT NULL
	,`prof_drn`	DATE	NOT NULL
	,`prof_mail`	VARCHAR(20)	NOT NULL
	,`prof_position`	VARCHAR(20)	NOT NULL
	,`prof_lap_num`	INT	NOT NULL
	,`prof_gen`	ENUM('M','F')	NOT NULL
	,`prof_app_date`	DATE	NOT NULL
);

CREATE TABLE `lecture` (
	`lec_num`	INT	NOT NULL PRIMARY KEY
	,`lec_name`	VARCHAR(20)	NOT NULL
	,`lec_fix_num`	INT	NOT NULL
	,`lec_sem`	INT	NOT NULL
	,`lec_room`	VARCHAR(20)	NOT NULL
	,`lec_time_start`	DATE	NOT NULL
	,`lec_time_end`	DATE	NOT NULL
	,`lec_req_com`	ENUM('Y','N')	NOT NULL
	,`txt_num`	INT	NOT NULL
	,`prof_num`	INT	NOT NULL
);

CREATE TABLE `textbook` (
	`txt_num`	INT	NOT NULL PRIMARY KEY
	,`txt_name`	VARCHAR(20)	NOT NULL
);