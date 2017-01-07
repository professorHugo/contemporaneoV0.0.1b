/*Criar o banco de dados*/
CREATE DATABASE contemporaneo DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*Tabela ALUNOS */
CREATE TABLE alunos (
 matricula_aluno int(11) NOT NULL AUTO_INCREMENT,
 nome_aluno varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
 escolaridade_aluno varchar(255) NOT NULL,
 telefone_aluno varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 nome_mae varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 telefone_mae varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 nome_pai varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 telefone_pai varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 foto_aluno varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'img/fotos/default.png',
 cep_endereco varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 endereco_completo varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 numero_endereco int(11) DEFAULT NULL,
 bairro_endereco varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 cidade_endereco varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 estado_endereco varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 complemento_endereco varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 cupom_desconto varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 PRIMARY KEY (matricula_aluno)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

/*Tabela de Agendamento de aulas*/
CREATE TABLE agenda_aulas (
 id int(11) NOT NULL AUTO_INCREMENT,
 matricula_aluno int(11) DEFAULT NULL,
 nome_aluno varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
 data varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
 sala varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
 prof varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
 entrada varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
 saida varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
 materia varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
 qtd_hora float NOT NULL,
 valor float NOT NULL,
 pagamento varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
 PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
/*Fim Tabema de Agendamento de aulas*/

/*Matérias Disponíveis*/
CREATE TABLE materias_disponiveis (
 id int(11) NOT NULL AUTO_INCREMENT,
 materia varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
 PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
/*Inserir Registros das materias_disponiveis*/
INSERT INTO materias_disponiveis(materia) VALUES 
('Artes'),
('Geografia'),
('HistÃ³ria'),
('Filosofia'),
('MatemÃ¡tica'),
('Sociologia'),
('Biologia'),
('FÃ­sica'),
('InglÃªs'),
('PortuguÃªs')
;
/*Fim de Matérias Disponíveis*/

/*Professores*/

CREATE TABLE professores (
 id int(11) NOT NULL AUTO_INCREMENT,
 nome varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
 materia varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 telefone_principal varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 telefone_contato varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 cep_endereco varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 endereco_completo varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 numero_endereco int(11) DEFAULT NULL,
 bairro_endereco varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 cidade_endereco varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 estado_endereco varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 complemento_endereco varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 banco_professor varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 agencia_banco_professor varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 dig_agencia_banco_professor varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 conta_banco_professor varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 valor_hora float DEFAULT NULL,
 dia_pagamento int(11) DEFAULT NULL,
 PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
/*Professor de Testes*/
INSERT INTO professores (id, nome, materia, telefone_principal, telefone_contato, cep_endereco, endereco_completo, numero_endereco, bairro_endereco, cidade_endereco, estado_endereco, complemento_endereco, banco_professor, agencia_banco_professor, dig_agencia_banco_professor, conta_banco_professor, valor_hora, dia_pagamento) VALUES
(1, 'Ariosvaldo dos Santos', 'Artes', '11946792419', '11946792419', '03977380', 'Rua Sargento EdÃ©sio Afonso de Carvalho', 128, 'Conjunto Habitacional Marechal Mascarenhas de Morais', 'Conjunto Habitacional Marechal Mascarenhas de Morais', 'SP', 'Casa 1', '', '8452', '', '130860', 10, 5);
/*Fim de Professores*/


/*Salas de aulas*/
/*Criar Tabela de nomes salas */
	CREATE TABLE salas (
	 cod_sala int(11) NOT NULL,
	 nome_sala varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
	 PRIMARY KEY (cod_sala)
	) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
	/*Inserir nomes das salas*/
	INSERT INTO salas(cod_sala,nome_sala) VALUES (1,'sala1'),(2,'sala2'),(3,'sala3'),(4,'sala4'),(5,'sala5'),(6,'sala6');

/*Sala 1*/
CREATE TABLE sala1 (
 id int(11) NOT NULL,
 entrada float DEFAULT NULL,
 saida float DEFAULT NULL,
 status int(11) NOT NULL DEFAULT '0',
 exibir_entrada varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 exibir_saida varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
/*Registros da Sala 1*/
INSERT INTO sala1 (id, entrada, saida, status, exibir_entrada, exibir_saida) VALUES (1, 8, 8.5, 0,"08:00","08:30"),(2, 8.5, 9, 0,"08:30","09:00"),(3, 9, 9.5, 0,"09:00","09:30"),(4, 9.5, 10, 0,"09:30","10:00"),(5, 10, 10.5, 0,"10:00","10:30"),(6, 10.5, 11, 0,"10:30","11:00"),(7, 11, 11.5, 0,"11:00","11:30"),(8, 11.5, 12, 0,"11:30","12:00"),(9, 12, 12.5, 0,"12:00","12:30"),(10, 12.5, 13, 0,"12:30","13:00"),(11, 13, 13.5, 0,"13:00","13:30"),(12, 13.5, 14, 0,"13:30","14:00"),(13, 14, 14.5, 0,"14:00","14:30"),(14, 14.5, 15, 0,"14:30","15:00"),(15, 15, 15.5, 0,"15:00","15:30"),(16, 15.5, 16, 0,"15:30","16:00"),(17, 16, 16.5, 0,"16:00","16:30"),(18, 16.5, 17, 0,"16:30","17:00"),(19, 17, 17.5, 0,"17:00","17:30"),(20, 17.5, 18, 0,"17:30","18:00"),(21, 18, 18.5, 0,"18:00","18:30"),(22, 18.5, 19, 0,"18:30","19:00"),(23, 19, 19.5, 0,"19:00","19:30"),(24, 19.5, 20, 0,"19:30","20:00"),(25, 20, 20.5, 0,"20:00","20:30"),(26, 20.5, 21, 0,"20:30","21:00"),(27, 21, 21.5, 0,"21:00","21:30"),(28, 21.5, 22, 0,"21:30","22:00");

/*Sala 2*/
CREATE TABLE sala2 (
 id int(11) NOT NULL,
 entrada float DEFAULT NULL,
 saida float DEFAULT NULL,
 status int(11) NOT NULL DEFAULT '0',
 exibir_entrada varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 exibir_saida varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
/*Registros da Sala 2*/
INSERT INTO sala2 (id, entrada, saida, status, exibir_entrada, exibir_saida) VALUES (1, 8, 8.5, 0,"08:00","08:30"),(2, 8.5, 9, 0,"08:30","09:00"),(3, 9, 9.5, 0,"09:00","09:30"),(4, 9.5, 10, 0,"09:30","10:00"),(5, 10, 10.5, 0,"10:00","10:30"),(6, 10.5, 11, 0,"10:30","11:00"),(7, 11, 11.5, 0,"11:00","11:30"),(8, 11.5, 12, 0,"11:30","12:00"),(9, 12, 12.5, 0,"12:00","12:30"),(10, 12.5, 13, 0,"12:30","13:00"),(11, 13, 13.5, 0,"13:00","13:30"),(12, 13.5, 14, 0,"13:30","14:00"),(13, 14, 14.5, 0,"14:00","14:30"),(14, 14.5, 15, 0,"14:30","15:00"),(15, 15, 15.5, 0,"15:00","15:30"),(16, 15.5, 16, 0,"15:30","16:00"),(17, 16, 16.5, 0,"16:00","16:30"),(18, 16.5, 17, 0,"16:30","17:00"),(19, 17, 17.5, 0,"17:00","17:30"),(20, 17.5, 18, 0,"17:30","18:00"),(21, 18, 18.5, 0,"18:00","18:30"),(22, 18.5, 19, 0,"18:30","19:00"),(23, 19, 19.5, 0,"19:00","19:30"),(24, 19.5, 20, 0,"19:30","20:00"),(25, 20, 20.5, 0,"20:00","20:30"),(26, 20.5, 21, 0,"20:30","21:00"),(27, 21, 21.5, 0,"21:00","21:30"),(28, 21.5, 22, 0,"21:30","22:00");

/*Sala 3*/
CREATE TABLE sala3 (
 id int(11) NOT NULL,
 entrada float DEFAULT NULL,
 saida float DEFAULT NULL,
 status int(11) NOT NULL DEFAULT '0',
 exibir_entrada varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 exibir_saida varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
/*Registros da Sala 3*/
INSERT INTO sala3 (id, entrada, saida, status, exibir_entrada, exibir_saida) VALUES (1, 8, 8.5, 0,"08:00","08:30"),(2, 8.5, 9, 0,"08:30","09:00"),(3, 9, 9.5, 0,"09:00","09:30"),(4, 9.5, 10, 0,"09:30","10:00"),(5, 10, 10.5, 0,"10:00","10:30"),(6, 10.5, 11, 0,"10:30","11:00"),(7, 11, 11.5, 0,"11:00","11:30"),(8, 11.5, 12, 0,"11:30","12:00"),(9, 12, 12.5, 0,"12:00","12:30"),(10, 12.5, 13, 0,"12:30","13:00"),(11, 13, 13.5, 0,"13:00","13:30"),(12, 13.5, 14, 0,"13:30","14:00"),(13, 14, 14.5, 0,"14:00","14:30"),(14, 14.5, 15, 0,"14:30","15:00"),(15, 15, 15.5, 0,"15:00","15:30"),(16, 15.5, 16, 0,"15:30","16:00"),(17, 16, 16.5, 0,"16:00","16:30"),(18, 16.5, 17, 0,"16:30","17:00"),(19, 17, 17.5, 0,"17:00","17:30"),(20, 17.5, 18, 0,"17:30","18:00"),(21, 18, 18.5, 0,"18:00","18:30"),(22, 18.5, 19, 0,"18:30","19:00"),(23, 19, 19.5, 0,"19:00","19:30"),(24, 19.5, 20, 0,"19:30","20:00"),(25, 20, 20.5, 0,"20:00","20:30"),(26, 20.5, 21, 0,"20:30","21:00"),(27, 21, 21.5, 0,"21:00","21:30"),(28, 21.5, 22, 0,"21:30","22:00");

/*Sala 4*/
CREATE TABLE sala4 (
 id int(11) NOT NULL,
 entrada float DEFAULT NULL,
 saida float DEFAULT NULL,
 status int(11) NOT NULL DEFAULT '0',
 exibir_entrada varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 exibir_saida varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
/*Registros da Sala 4*/
INSERT INTO sala4 (id, entrada, saida, status, exibir_entrada, exibir_saida) VALUES (1, 8, 8.5, 0,"08:00","08:30"),(2, 8.5, 9, 0,"08:30","09:00"),(3, 9, 9.5, 0,"09:00","09:30"),(4, 9.5, 10, 0,"09:30","10:00"),(5, 10, 10.5, 0,"10:00","10:30"),(6, 10.5, 11, 0,"10:30","11:00"),(7, 11, 11.5, 0,"11:00","11:30"),(8, 11.5, 12, 0,"11:30","12:00"),(9, 12, 12.5, 0,"12:00","12:30"),(10, 12.5, 13, 0,"12:30","13:00"),(11, 13, 13.5, 0,"13:00","13:30"),(12, 13.5, 14, 0,"13:30","14:00"),(13, 14, 14.5, 0,"14:00","14:30"),(14, 14.5, 15, 0,"14:30","15:00"),(15, 15, 15.5, 0,"15:00","15:30"),(16, 15.5, 16, 0,"15:30","16:00"),(17, 16, 16.5, 0,"16:00","16:30"),(18, 16.5, 17, 0,"16:30","17:00"),(19, 17, 17.5, 0,"17:00","17:30"),(20, 17.5, 18, 0,"17:30","18:00"),(21, 18, 18.5, 0,"18:00","18:30"),(22, 18.5, 19, 0,"18:30","19:00"),(23, 19, 19.5, 0,"19:00","19:30"),(24, 19.5, 20, 0,"19:30","20:00"),(25, 20, 20.5, 0,"20:00","20:30"),(26, 20.5, 21, 0,"20:30","21:00"),(27, 21, 21.5, 0,"21:00","21:30"),(28, 21.5, 22, 0,"21:30","22:00");

/*Sala 5*/
CREATE TABLE sala5 (
 id int(11) NOT NULL,
 entrada float DEFAULT NULL,
 saida float DEFAULT NULL,
 status int(11) NOT NULL DEFAULT '0',
 exibir_entrada varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 exibir_saida varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
/*Registros da Sala 5*/
INSERT INTO sala5 (id, entrada, saida, status, exibir_entrada, exibir_saida) VALUES (1, 8, 8.5, 0,"08:00","08:30"),(2, 8.5, 9, 0,"08:30","09:00"),(3, 9, 9.5, 0,"09:00","09:30"),(4, 9.5, 10, 0,"09:30","10:00"),(5, 10, 10.5, 0,"10:00","10:30"),(6, 10.5, 11, 0,"10:30","11:00"),(7, 11, 11.5, 0,"11:00","11:30"),(8, 11.5, 12, 0,"11:30","12:00"),(9, 12, 12.5, 0,"12:00","12:30"),(10, 12.5, 13, 0,"12:30","13:00"),(11, 13, 13.5, 0,"13:00","13:30"),(12, 13.5, 14, 0,"13:30","14:00"),(13, 14, 14.5, 0,"14:00","14:30"),(14, 14.5, 15, 0,"14:30","15:00"),(15, 15, 15.5, 0,"15:00","15:30"),(16, 15.5, 16, 0,"15:30","16:00"),(17, 16, 16.5, 0,"16:00","16:30"),(18, 16.5, 17, 0,"16:30","17:00"),(19, 17, 17.5, 0,"17:00","17:30"),(20, 17.5, 18, 0,"17:30","18:00"),(21, 18, 18.5, 0,"18:00","18:30"),(22, 18.5, 19, 0,"18:30","19:00"),(23, 19, 19.5, 0,"19:00","19:30"),(24, 19.5, 20, 0,"19:30","20:00"),(25, 20, 20.5, 0,"20:00","20:30"),(26, 20.5, 21, 0,"20:30","21:00"),(27, 21, 21.5, 0,"21:00","21:30"),(28, 21.5, 22, 0,"21:30","22:00");

/*Sala 6*/
CREATE TABLE sala6 (
 id int(11) NOT NULL,
 entrada float DEFAULT NULL,
 saida float DEFAULT NULL,
 status int(11) NOT NULL DEFAULT '0',
 exibir_entrada varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 exibir_saida varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
/*Registros da Sala 6*/
INSERT INTO sala6 (id, entrada, saida, status, exibir_entrada, exibir_saida) VALUES (1, 8, 8.5, 0,"08:00","08:30"),(2, 8.5, 9, 0,"08:30","09:00"),(3, 9, 9.5, 0,"09:00","09:30"),(4, 9.5, 10, 0,"09:30","10:00"),(5, 10, 10.5, 0,"10:00","10:30"),(6, 10.5, 11, 0,"10:30","11:00"),(7, 11, 11.5, 0,"11:00","11:30"),(8, 11.5, 12, 0,"11:30","12:00"),(9, 12, 12.5, 0,"12:00","12:30"),(10, 12.5, 13, 0,"12:30","13:00"),(11, 13, 13.5, 0,"13:00","13:30"),(12, 13.5, 14, 0,"13:30","14:00"),(13, 14, 14.5, 0,"14:00","14:30"),(14, 14.5, 15, 0,"14:30","15:00"),(15, 15, 15.5, 0,"15:00","15:30"),(16, 15.5, 16, 0,"15:30","16:00"),(17, 16, 16.5, 0,"16:00","16:30"),(18, 16.5, 17, 0,"16:30","17:00"),(19, 17, 17.5, 0,"17:00","17:30"),(20, 17.5, 18, 0,"17:30","18:00"),(21, 18, 18.5, 0,"18:00","18:30"),(22, 18.5, 19, 0,"18:30","19:00"),(23, 19, 19.5, 0,"19:00","19:30"),(24, 19.5, 20, 0,"19:30","20:00"),(25, 20, 20.5, 0,"20:00","20:30"),(26, 20.5, 21, 0,"20:30","21:00"),(27, 21, 21.5, 0,"21:00","21:30"),(28, 21.5, 22, 0,"21:30","22:00");
/*Fim da criação das salas de aula*/

/*Tabela de usuários*/
CREATE TABLE usuarios (
 id int(11) NOT NULL AUTO_INCREMENT,
 nome varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
 usuario varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
 usuario_md5 varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL COMMENT 'Usuário com criptografia md5',
 senha varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
 senha_md5 varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
 departamento varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
 level_acesso int(11) NOT NULL,
 foto varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'img/default.png',
 PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
/*Registro do usuário Master*/
INSERT INTO usuarios(id,nome,usuario,usuario_md5,senha,senha_md5,departamento,level_acesso,foto) VALUES(1,'Administrador do Sistema','mater','eb0a191797624dd3a48fa681d3061212','master','eb0a191797624dd3a48fa681d3061212','Adm Sis',0,'img/fotos/admin.png');
/*Fim da tabela de usuários*/




/*Valores para pagamento de aulas (base)*/
CREATE TABLE escolaridade_aluno (
id int(10) not null primary key auto_increment,
nivel varchar(255),
valor float
)ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
/*Inserir Valores na tabela de preço por escolaridade_aluno */
INSERT INTO escolaridade_aluno (nivel,valor)VALUES ('Fundamental','10'),('Medio','20'),('Colegial','30'),('Cursinho','40'),('Tutoria','50'),('Grupo','60'),('Faculdade','40');
/*Fim Valores para pagamento de aulas (base)*/

/*
**Tabela variação escritório/residencial
** date('m') < 04 = linha 1
** date('m') >=04 = linha 2
*/
CREATE TABLE variacao_preco (
id int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
variar float DEFAULT '0'
)ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
/*Insert Variações*/
INSERT INTO variacao_preco(id,variar) VALUES(1,0),(2,40);
/*Fim variações*/

/*Fazer Tabela Yoshio*/