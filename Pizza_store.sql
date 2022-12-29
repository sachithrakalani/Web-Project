Create database Pizza_store;

Use Pizza_store;

create table User(
	User_ID varchar(30) not null,
	Email varchar(25) not null,
	Password int not null,
	primary key(User_ID)
	);

create table Our_Menu(
	Menu_ID int not null,
	Menu_Name varchar(50) not null,
	primary key(Menu_ID)
);

insert into Our_Menu(Menu_ID,Menu_Name) values
	(100,'Chicken'),(200,'Cheese'),(300,'All');

	

create table Pizza(
	Pizza_ID int not null,
	Pizza_Name varchar(50) not null,
	Pizza_Ingredients varchar(400) not null,
	How_to_make_Pizza varchar(1000) not null,
	Pizza_Image varchar(100),
	Menu_ID int,
	primary key(Pizza_ID),
	foreign key(Menu_ID) references Our_Menu(Menu_ID)
	);
