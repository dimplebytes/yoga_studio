# To store all yoga studi data;
create database yoga_studio;

# To use yoga_studio for all other quries.
use yoga_studio;

# To store yoga studio members infomation.
create table users (
    id int primary key,
    first_name varchar(50),
    last_name varchar(40),
    gender char(1),
    dob date,
    age int,
    address_1 varchar(200),
    address_2 varchar(200),
    city varchar(200),
    pin char(6),
    mobile char(10),
    email_id varchar(100),
    password varchar(20),
    created_ts datetime,
    updated_ts datetime
);

create table classes (
    id int primary key,
    name varchar(100),
    descrition text,
    couch_name varchar(100),
    class_time datetime,
    fees int,
    max_group_count int
);


create table payments (
	id int,
	amount int,
	class_id int,
	user_id int,
	FOREIGN KEY (user_id) REFERENCES users(id),
	FOREIGN KEY (class_id) REFERENCES classes(id)
);


# -- -- -- -- -- -- -- -- -- --

ALTER TABLE
    users
ADD
    gender char(1);
ALTER TABLE
    users
MODIFY
    mobile int NOT NULL;
truncate table users;
ALTER TABLE
    users
ADD
    PRIMARY KEY (id);
ALTER TABLE
    users
MODIFY
    id NOT NULL AUTO_INCREMENT;
describe users;


#-----
insert into users (id, first_name) values (3,'thsd');

insert into classes (2, 'hatha yoga', 'yoga with flows', 'Sagar', '2023-02-20 10:00:00', 100, 10);

INSERT INTO `classes` (3, 'hatah yga', 'yoga with flow', 'sagar', '2023-01-02 10:00:00', 100, 10);

INSERT INTO `classes` (`id`, `name`, `descrition`, `couch_name`, `class_time`, `fees`, `max_group_count`) VALUES
(3, 'hatah yga', 'yoga with flow', 'sagar', '2023-01-02 10:00:00', 100, 10);

insert into payments (id, amount, user_id, class_id) values (1, 100, 1, 2);
 
#--------------------------
    
select
    *
from
    users;