-- WebIS TestDB Copyright 2014 by Timothy Middelkoop License Apache 2.0
-- database must be loaded with Eclipse first or with
-- mysql --user=root --password=webis database <testdb.sql

DROP TABLE IF EXISTS Test;
CREATE TABLE Test (
	k integer,
	v varchar(30)
);

-- Do not run in same query as create table with Eclipse.
INSERT INTO Test (k,v) VALUES (1,'one');
SELECT * FROM Test;

INSERT INTO Test (k,v) VALUES (2,'世界');
SELECT * FROM Test;
