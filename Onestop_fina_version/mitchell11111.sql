show databases;
create database onestop_furniture;
desc onestop_furniture;
show tables;
describe addressInfo;
drop table address;
select * from addressInfo;
delete from addressInfo where zipcode = '0';
CREATE TABLE `addressInfo` (
  `name` text NOT NULL,
  `country` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zipcode` int(10) NOT NULL,
  `address` varchar(10) NOT NULL
);

select * from addressInfo;

CREATE TABLE `checkout` (
  `name` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip code` int(11) NOT NULL,
  `address` varchar(11) NOT NULL,
  `card name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `sign up` (
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


ALTER TABLE `address`
  ADD KEY `zip code` (`zip code`);


ALTER TABLE `checkout`
  ADD PRIMARY KEY (`zip code`);
COMMIT;

drop table addressInfo;

