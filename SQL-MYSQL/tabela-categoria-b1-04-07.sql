CREATE TABLE categoria
(id int not null auto_increment,
nome_categoria varchar (50),
deleted_at datetime,
created_at datetime,
updated_at datetime,
primary key (id)
);



CREATE TABLE fabricantes
(id int not null auto_increment,
nome_fabricantes varchar (50),
deleted_at datetime,
created_at datetime,
updated_at datetime,
primary key (id)
);


CREATE TABLE unidade_medida
(id int not null auto_increment,
nome_unidade_medida varchar (50),
deleted_at datetime,
created_at datetime,
updated_at datetime,
primary key (id)
);


insert into unidade_medida
(nome_unidade_medida)
values (''); 