
-- Criação do banco de dados e seleção do mesmo
create database solidariza;
use solidariza;


-- Tabela de usuários
create table usuarios(
id int auto_increment primary key,
nome varchar(120) not null,
email varchar(150) not null unique,
senha varchar(255) not null,
cep char(8) not null,
logradouro varchar(150) not null,
bairro varchar(100) not null,
localidade varchar(100) not null,
uf char(2) not null,
nivel_acesso ENUM('doador', 'admin') not null default 'doador',
data_cadastro datetime not null default current_timestamp
);

-- Tabela de campanhas
create table campanhas(
id int auto_increment primary key,
titulo varchar(150) not null,
descricao text not null,
status ENUM('ativa', 'encerrada') not null default 'ativa',
data_criacao datetime not null default current_timestamp
);

-- tabela de doações   
create table doacoes(
id int auto_increment primary key,
usuario_id int not null,
campanha_id int not null,
item_descricao varchar(255) not null,
quantidade int not null,
status_logistica ENUM('pendente', 'em_transito', 'entregue') not null default 'pendente',
data_registro datetime not null default current_timestamp,
foreign key (usuario_id) references usuarios(id),
foreign key (campanha_id) references campanhas(id)
);


