/* ENTIRE MS SQL CODE WORKS FINE ON MY SQL*/

USE baby_and_kid_care_company;
INSERT INTO COMPANY
VALUES (1,'Vancouver Branch'), (2,'Toronto Branch'),
(3,'Calgary Branch'),
(4,'Montreal Branch');
INSERT INTO BABY_SITTER
VALUES (123456,'John Smith', '1971-06-19','Canada', 'Male', 'Tuesday', '8:00:00', '17:00:00','Plumber',
'Bachelors Degree',15.6,1),
(234567,'Jay P', '1979-03-11','India', 'Male', 'Friday', '8:00:00', '20:00:00','Carpenter',
'Masters Degree', 20,2),
(1,'USMAN ALI','1978-06-19','PAKISTAN','MALE','Monday','9:10:00','23:20:00','Teacher','DIPLOMA',19.8,3),
(2,'ASAD ALI','1999-06-19','PAKISTAN','MALE','Thursday','8:10:00','19:20:00','Driver','DIPLOMA',18.7,4),
(234560,'Jaya M', '1999-03-1','USA', 'Female', 'Tuesday', '11:00:00', '17:00:00','Cleaner',
'High School',  14.3,1),
(234561,'Madhu P', '1977-03-13','USA', 'Male', 'Wednesday', '12:00:00', '20:00:00','Driver',
'Bachelors', 16.2,2);
INSERT INTO BABY_SITTER_LANGUAGE
VALUES (234567, 'ENGLISH'),
(234567, 'CHINESE'),
(234567, 'JAPANESE'),
(123456, 'FRENCH'),
(123456, 'ENGLISH'),
(1,'ENGLISH'),
(2,'JAPANESE'),
(234560, 'ARABIC'),
(234561, 'URDU');

INSERT INTO BABY_SITTER_SKILL VALUES
(123456, 'Painting'),
(123456, 'Singing'),
(234567, 'Stand up Comedy'),
(123456, 'Playing guitar'),
(2,'Playing guitar'),
(1,'Playing guitar'),
(234560,'Dancing'),
(234560,'Playing guitar'),
(234561,'Painting')
;

INSERT INTO FAMILY VALUES(1, 'Narayan M', 'Married', '99 128 Street', 'Vancouver', 'British Columbia', 'V3T 2Y6',1),
(2, 'Kavitha L', 'Married', '12 110 Street', 'Toronto', 'Ontario', '91710',2),
(3, 'RICHAR K', 'Married', '2436 1410 STREET', 'Calgary', 'Alberta', '91710',3),
(4, 'Ravi L', 'Married', '1418 160 A STREET','Montreal', 'Quebec', '91710',4),
(6, 'Robert', 'Married', '1418 233 STREET','Toronto', 'Ontario', '91710',2),
(5, 'Sarah', 'Married', '1418 140 A STREET','Surrey', 'British Columbia', 'V3T 3T5',1)
;

INSERT INTO FAMILY_EMAIL VALUES
(1,'xyz@gmail.com'),
(2,'yyy@gmail.com'),
(1,'xyy@gmail.com'),
(3,'abc@gmail.com'),
(4,'hgt@gmail.com'),
(5,'hg112t@gmail.com'),
(6,'hgtgg@gmail.com');

INSERT INTO FAMILY_MOBILE_NUMBER
VALUES
(1,'1234567891'),
(2,'2234567891'),
(3,'1234545491'),
(4,'2245566864'),
(5,'1278545491'),
(6,'1221545491');

INSERT INTO CONTRACT
VALUES
(1,'2022-10-01','2022-12-30', 'babysitting', 123456),
(2,'2022-10-01','2022-12-30', 'babysitting', 234567),
(3,'2023-10-01','2022-12-30', 'babysitting', 1),
(4,'2023-10-01','2022-10-11', 'babysitting', 2),
(5,'2023-10-01','2022-12-11', 'babysitting', 234560),
(6,'2023-10-01','2022-12-31', 'babysitting', 234561);

INSERT INTO CONTRACT_SERVICES
VALUES (1, 'watching kids'),
(1, 'playing with kids'),
(1, 'cooking'),
(2, 'watching kids'),
(2, 'house keeping'),
(2, 'tutoring'),
(3, 'tutoring'),
(3, 'playing with kids'),
(3, 'cooking'),
(4, 'tutoring'),
(4, 'house keeping'),
(5, 'singing'),
(5, 'teaching dance'),
(6, 'teaching english')

;

INSERT INTO CHILD
VALUES
(1,1,'betty','2019-04-28','Female', 'no',2600,1),
(1,2,'ravi','2019-12-08','Male', 'yes',2600,1),
(2,1,'mandy','2017-03-18','Male', 'no',2700,1),
(4,1,'usman','2016-01-18','Male', 'no',2700,2),
(3,1,'ali','2012-03-2','Male', 'no',2600,4),
(3,2,'asad','2012-03-2','Male', 'no',2600,3),
(5,1,'john','2018-01-12','Male', 'no',2600,6),
(5,2,'mike','2017-01-21','Male', 'no',2600,6),
(6,1,'rama','2016-02-29','Female', 'no',2700,5);

INSERT INTO CHILD_LANGUAGES_SPOKEN
VALUES
(1,1,'ENGLISH'),
(1,2,'ENGLISH'),
(1,1,'HINDI'),
(2,1,'CHINESE'),
(2,1,'ENGLISH'),
(1,2,'FRENCH'),
(3,1,'HINDI'),
(4,1,'CHINESE'),
(3,1,'ENGLISH'),
(3,2,'FRENCH'),
(5,1,'ENGLISH'),
(6,1,'ENGLISH'),
(5,2,'FRENCH')
;