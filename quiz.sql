create table question(
	id int(11) auto_increment,
	description varchar(255) not null,
	option_a varchar(255) not null,
	option_b varchar(255) not null,
	option_c varchar(255) not null,
	option_d varchar(255) not null,
	answer varchar(1) not null,
	primary key(id)
);

insert into question values
	(NULL, "Thằng nào đẹp trai nhất", "cu tí", "cu tèo", "cu to", "cu dài", "A");

insert into question values
	(NULL, "Em nào đẹp gái nhất", "em hoa", "em hồng", "em huệ", "em cúc", "C");

