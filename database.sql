create database databs 

create table BOOKS(
book_id int constraint book_pk primary key,
book_title varchar(50),
Author varchar(50),
Edition varchar(50),
availability_of_book bit,
Rate int check(Rate in('1','2','3','4','5')),
publication_Date date,
category_id int,
);
create table categories(
category_id int constraint category_pk primary key,
category_name varchar(50),
book_id int,
constraint books_category
foreign key (book_id) references BOOKS (book_id)
);
create table librarian (
librarian_id int constraint librarian_pk primary key,
Name varchar(50),
job_period datetime
);
create table borrow_transaction(
borrower_id int constraint borrower_PK primary key ,
librarian_id int not null,
book_id int not null,
borrow_transaction varchar(50),
borrowed_datetime datetime,
returned_datetime datetime,
contact_data_id int,
constraint books_borrow
foreign key (book_id) references BOOKS (book_id),
constraint librarian_fk
foreign key (librarian_id) references librarian (librarian_id),
);
create table contact_data (
borrower_id int,
constraint borrower_fk
foreign key (borrower_id) references borrow_transaction (borrower_id),
borrower_name varchar(50),
borrower_phone int,
borrower_Email varchar(30),
borrower_job varchar(50) check(borrower_job in ('student','professor','professor_assistant','other')),
borrower_gender varchar(30),
contact_person_phone int
);

create table problems( 
borrower_id int,
borrower_name varchar(50),
borrower_problem varchar(100),
borrower_Email varchar(30)

);

create table audios(

id int not null primary key AUTO_INCREMENT,
filename varchar(50)

);
 
/* function insert to add a new row in the table */
insert into BOOKS
(book_id, book_title ,Author ,Edition ,availability_of_book ,Rate ,publication_Date,category_id )
values(10,'Al ATHER','ali omar','version_3', 10 , 4, 2/10/2016,4);

/* function update to modify or change some or all of the values in an existing row of a table */
update categories
set category_id= category_id+10, category_name= 'Department of Architecture'
where book_id=5;

/* function To Search all the values between two values (range) in the tables */
SELECT borrower_id
FROM borrow_transaction
Where book_id between 1 and 10;

/* function To calculate the numbers elements in a column in the tables */
SELECT COUNT(borrow_transaction) 
FROM borrow_transaction

/* function To sum the numbers elements in a column in the tables */
SELECT SUM(books_category)
FROM categories

/* function To calculate the numbers elements in a column in the tables */
SELECT COUNT(librarian_id) 
FROM librarian
WHERE job_period  between 2016 and 2017;

/* function To average the numbers elements in a column in the tables */
SELECT AVG(Rate)
FROM BOOKS
WHERE book_title LIKE 'THE SUN'

/* function To calculate the numbers elements in a column in the tables */
SELECT COUNT(borrower_name) 
FROM contact_data 
