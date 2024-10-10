use db_bhaskara;

insert into tb_periodo_letivo values
(null, '2024-01-29', '2024-12-06');

insert into tb_cargo values 
(null, 'Aluno'),
(null, 'Professor'),
(null, 'Secretário'),
(null, 'Coordenador'),
(null, 'Diretor');

INSERT INTO `db_bhaskara`.`tb_endereco` (uf, cidade, bairro, logradouro, numero, complemento, cep) VALUES
    ('SP', 'São Paulo', 'Centro', 'Rua da Consolação', 123, 'Apto 45', '01301-000'),
    ('RJ', 'Rio de Janeiro', 'Copacabana', 'Avenida Atlântica', 456, 'Bloco B', '22070-001'),
    ('MG', 'Belo Horizonte', 'Savassi', 'Rua da Bahia', 789, 'Sala 101', '30160-000'),
    ('RS', 'Porto Alegre', 'Cidade Baixa', 'Rua João Alfredo', 234, 'Piso Térreo', '90050-000'),
    ('BA', 'Salvador', 'Pelourinho', 'Ladeira do Carmo', 12, 'Casa 3', '40301-000'),
    ('PR', 'Curitiba', 'Batel', 'Avenida do Batel', 567, 'Cobertura', '80420-000'),
    ('SC', 'Florianópolis', 'Centro', 'Rua Dom Jaime Câmara', 890, 'Apto 202', '88015-001'),
    ('SP', 'Campinas', 'Cambuí', 'Rua José de Alencar', 321, 'Casa 4', '13025-000'),
    ('RJ', 'Niterói', 'Icaraí', 'Avenida Niterói', 654, 'Apto 101', '24230-000'),
    ('MG', 'Uberlândia', 'Centro', 'Rua Pará de Minas', 987, 'Casa 5', '38400-000'),
    ('RS', 'Caxias do Sul', 'Centro', 'Rua Bento Gonçalves', 135, 'Apto 3', '95010-000'),
    ('BA', 'Feira de Santana', 'Centro', 'Avenida Getúlio Vargas', 246, 'Prédio 2', '44001-000'),
    ('PR', 'Londrina', 'Centro', 'Rua Sergipe', 357, 'Apto 15', '86010-000'),
    ('SC', 'Joinville', 'Centro', 'Rua do Príncipe', 468, 'Sala 305', '89201-000'),
    ('SP', 'Sorocaba', 'Centro', 'Avenida Rodrigues Alves', 579, 'Casa 8', '18010-000'),
    ('RJ', 'Belford Roxo', 'Centro', 'Rua Gilda', 680, 'Apto 12', '26130-000'),
    ('MG', 'Contagem', 'Centro', 'Rua Doutor Ulisses', 791, 'Casa 9', '32010-000'),
    ('RS', 'Gramado', 'Centro', 'Rua João Pessoa', 802, 'Apto 110', '95670-000'),
    ('BA', 'Vitória da Conquista', 'Centro', 'Avenida da Integração', 913, 'Casa 6', '45000-000'),
    ('PR', 'Maringá', 'Centro', 'Avenida São Paulo', 124, 'Cobertura', '87010-000'),
    ('SC', 'Florianópolis', 'Trindade', 'Rua Dom Jaime Câmara', 235, 'Sala 202', '88025-001'),
    ('SP', 'São José dos Campos', 'Centro', 'Avenida São João', 346, 'Casa 7', '12210-000'),
    ('RJ', 'Duque de Caxias', 'Centro', 'Rua Marechal Floriano', 457, 'Apto 202', '25010-000'),
    ('MG', 'Belo Horizonte', 'Lourdes', 'Avenida do Contorno', 568, 'Loja 1', '30110-000'),
    ('RS', 'Pelotas', 'Centro', 'Rua Lobo da Costa', 679, 'Apto 304', '96010-000'),
    ('BA', 'Salvador', 'Barra', 'Avenida Oceanica', 780, 'Casa 2', '40140-000'),
    ('PR', 'Ponta Grossa', 'Centro', 'Rua XV de Novembro', 891, 'Apto 303', '84010-000'),
    ('SC', 'Blumenau', 'Centro', 'Rua 7 de Setembro', 902, 'Prédio 4', '89010-000'),
    ('SP', 'São Bernardo do Campo', 'Centro', 'Avenida Presidente Vargas', 123, 'Sala 15', '09750-000'),
    ('RJ', 'Rio Bonito', 'Centro', 'Rua Floriano Peixoto', 234, 'Apto 205', '23820-000'),
    ('MG', 'Uberaba', 'Centro', 'Avenida João XXIII', 345, 'Casa 1', '38010-000'),
    ('RS', 'Novo Hamburgo', 'Centro', 'Rua Jacob Luchesi', 456, 'Apto 306', '93310-000'),
    ('BA', 'Ilhéus', 'Centro', 'Avenida Soares Lopes', 567, 'Casa 8', '45653-000'),
    ('PR', 'Cascavel', 'Centro', 'Rua Paraná', 678, 'Apto 110', '85810-000'),
    ('SC', 'Itajaí', 'Centro', 'Avenida José Riemann', 789, 'Loja 2', '88301-000'),
    ('SP', 'Mauá', 'Centro', 'Rua Dr. Avelino de Queiroz', 890, 'Casa 12', '09320-000'),
    ('RJ', 'São Gonçalo', 'Centro', 'Avenida São Gonçalo', 901, 'Apto 110', '24440-000'),
    ('MG', 'Governador Valadares', 'Centro', 'Rua Rio de Janeiro', 123, 'Sala 203', '35010-000'),
    ('RS', 'Santa Maria', 'Centro', 'Rua Floriano Peixoto', 234, 'Casa 4', '97010-000'),
    ('BA', 'Juazeiro', 'Centro', 'Avenida Adolfo Viana', 345, 'Apto 207', '48900-000'),
    ('PR', 'São José dos Pinhais', 'Centro', 'Rua Sebastião de Oliveira', 456, 'Casa 11', '83010-000'),
    ('SC', 'Tijucas', 'Centro', 'Rua Bartolomeu de Gusmão', 567, 'Apto 304', '88200-000'),
    ('SP', 'Santo André', 'Centro', 'Avenida Industrial', 678, 'Loja 3', '09080-000'),
    ('RJ', 'Cabo Frio', 'Centro', 'Avenida da Liberdade', 789, 'Casa 5', '28900-000'),
    ('MG', 'Ipatinga', 'Centro', 'Rua A', 890, 'Apto 106', '35160-000'),
    ('RS', 'Passo Fundo', 'Centro', 'Rua Bento Gonçalves', 901, 'Sala 505', '99010-000'),
    ('BA', 'Camaçari', 'Centro', 'Avenida Jorge Amado', 234, 'Casa 7', '42800-000'),
    ('PR', 'Foz do Iguaçu', 'Centro', 'Rua São Paulo', 345, 'Apto 10', '85851-000'),
    ('SC', 'Chapecó', 'Centro', 'Rua Getúlio Vargas', 456, 'Casa 9', '89810-000'),
    ('SP', 'Guarulhos', 'Centro', 'Avenida Paulo Faccini', 567, 'Apto 302', '07010-000'),
    ('RJ', 'Nilópolis', 'Centro', 'Avenida Doutor Salgado Filho', 678, 'Loja 1', '26510-000'),
    ('MG', 'Divinópolis', 'Centro', 'Rua Goiás', 789, 'Casa 14', '35500-000'),
    ('RS', 'Santa Cruz do Sul', 'Centro', 'Rua Marechal Floriano', 890, 'Apto 8', '96810-000'),
    ('BA', 'Barreiras', 'Centro', 'Avenida Antônio Carlos Magalhães', 901, 'Casa 2', '47800-000'),
    ('PR', 'Londrina', 'Centro', 'Rua Maranhão', 123, 'Apto 12', '86010-000'),
    ('SC', 'São José', 'Centro', 'Rua Dom Jaime Câmara', 234, 'Sala 202', '88102-001'),
    ('SP', 'Sorocaba', 'Centro', 'Rua General Carneiro', 345, 'Casa 3', '18010-000'),
    ('RJ', 'São João de Meriti', 'Centro', 'Avenida Presidente Dutra', 456, 'Apto 305', '25510-000'),
    ('MG', 'Teófilo Otoni', 'Centro', 'Rua Major Aureliano', 567, 'Casa 6', '39800-000'),
    ('RS', 'Rio Grande', 'Centro', 'Rua Silva Paes', 678, 'Loja 4', '96200-000'),
    ('BA', 'Lauro de Freitas', 'Centro', 'Avenida Luis Tarquínio', 789, 'Casa 7', '42700-000'),
    ('PR', 'Arapongas', 'Centro', 'Rua Jacarezinho', 890, 'Apto 110', '86700-000'),
    ('SC', 'Palhoça', 'Centro', 'Rua Dom Jaime Câmara', 901, 'Casa 8', '88130-000');


INSERT INTO `db_bhaskara`.`tb_responsavel` 
    (`nome_responsavel`, `telefone_responsavel`, `cpf_responsavel`, `rg_responsavel`) VALUES
    ('Ana Maria Silva', '11987654321', '12345678901', '123456789'),
    ('Carlos Eduardo Santos', '11987654322', '23456789012', '234567890'),
    ('Maria Clara Souza', '11987654323', '34567890123', '345678901'),
    ('João Pedro Lima', '11987654324', '45678901234', '456789012'),
    ('Fernanda Pereira', '11987654325', '56789012345', '567890123'),
    ('Lucas Alves', '11987654326', '67890123456', '678901234'),
    ('Juliana Costa', '11987654327', '78901234567', '789012345'),
    ('Ricardo Gomes', '11987654328', '89012345678', '890123456'),
    ('Mariana Oliveira', '11987654329', '90123456789', '901234567'),
    ('Eduardo Martins', '11987654330', '12309845671', '123098456'),
    ('Sofia Ribeiro', '11987654331', '23410956782', '234109567'),
    ('Gabriel Santos', '11987654332', '34521067893', '345210678'),
    ('Patrícia Lima', '11987654333', '45632178904', '456321789'),
    ('Bruno Ferreira', '11987654334', '56743289015', '567432890'),
    ('Tatiane Nascimento', '11987654335', '67854390126', '678543901'),
    ('Ricardo Silva', '11987654336', '78965401237', '789654012'),
    ('Aline Alves', '11987654337', '89076512348', '890765123'),
    ('André Costa', '11987654338', '90187623459', '901876234'),
    ('Luciana Martins', '11987654339', '12398734560', '123987345'),
    ('Vanessa Oliveira', '11987654340', '23409845671', '234098456'),
    ('Felipe Nunes', '11987654341', '34510956782', '345109567'),
    ('Juliana Silva', '11987654342', '45621067893', '456210678'),
    ('Carlos Alberto', '11987654343', '56732178904', '567321789'),
    ('Simone Costa', '11987654344', '67843289015', '678432890'),
    ('Marcelo Ferreira', '11987654345', '78954390126', '789543901'),
    ('Tatiane Santos', '11987654346', '89065401237', '890654012'),
    ('Renato Ribeiro', '11987654347', '90176512348', '901765123'),
    ('Elaine Almeida', '11987654348', '12387623459', '123876234'),
    ('Lucas Mendes', '11987654349', '23498734560', '234987345'),
    ('Marcia Nascimento', '11987654350', '34509845671', '345098456'),
    ('Fábio Lima', '11987654351', '45610956782', '456109567'),
    ('Roberta Almeida', '11987654352', '56721067893', '567210678'),
    ('Daniel Silva', '11987654353', '67832178904', '678321789'),
    ('Giovana Ferreira', '11987654354', '78943289015', '789432890'),
    ('Claudio Santos', '11987654355', '89054390126', '890543901'),
    ('Sabrina Costa', '11987654356', '90165401237', '901654012'),
    ('Julio Nunes', '11987654357', '12376512348', '123765123'),
    ('Tatiane Ribeiro', '11987654358', '23487623459', '234876234'),
    ('Bruno Almeida', '11987654359', '34598734560', '345987345'),
    ('Robson Ferreira', '11987654360', '45609845671', '456098456'),
    ('Ana Paula Lima', '11987654361', '56710956782', '567109567'),
    ('Mariana Costa', '11987654362', '67821067893', '678210678'),
    ('Felipe Alves', '11987654363', '78932178904', '789321789'),
    ('Lucas Ribeiro', '11987654364', '89043289015', '890432890'),
    ('Tatiane Santos', '11987654365', '90154390126', '901543901'),
    ('Ricardo Lima', '11987654366', '12365401237', '123654012'),
    ('Priscila Martins', '11987654367', '23476512348', '234765123'),
    ('Daniel Nascimento', '11987654368', '34587623459', '345876234'),
    ('Juliana Mendes', '11987654369', '45698734560', '456987345'),
    ('Patricia Ferreira', '11987654370', '56709845671', '567098456'),
    ('Fernando Oliveira', '11987654371', '67810956782', '678109567'),
    ('Simone Costa', '11987654372', '78921067893', '789210678'),
    ('João Nunes', '11987654373', '89032178904', '890321789'),
    ('Amanda Santos', '11987654374', '90143289015', '901432890'),
    ('Ricardo Alves', '11987654375', '12354390126', '123543901'),
    ('Maria Clara Ferreira', '11987654376', '23465401237', '234654012'),
    ('Luciana Lima', '11987654377', '34576512348', '345765123'),
    ('Sérgio Almeida', '11987654378', '45687623459', '456876234'),
    ('Marcio Ribeiro', '11987654379', '56798734560', '567987345'),
    ('Isabel Costa', '11987654380', '67809845671', '678098456'),
    ('Marcelo Nascimento', '11987654381', '78910956782', '789109567'),
    ('Gustavo Ferreira', '11987654382', '89021067893', '890210678'),
    ('Ana Paula Santos', '11987654383', '90132178904', '901321789'),
    ('Carlos Eduardo Lima', '11987654384', '12343289015', '123432890'),
    ('Juliana Almeida', '11987654385', '23454390126', '234543901'),
    ('Felipe Ribeiro', '11987654386', '34565401237', '345654012'),
    ('Sabrina Nunes', '11987654387', '45676512348', '456765123'),
    ('André Santos', '11987654388', '56787623459', '567876234'),
    ('Patrícia Martins', '11987654389', '67898734560', '678987345'),
    ('Ricardo Ferreira', '11987654390', '78909845671', '789098456'),
    ('Gabriela Lima', '11987654391', '89010956782', '890109567'),
    ('Marcio Santos', '11987654392', '90121067893', '901210678'),
    ('Elaine Costa', '11987654393', '12332178904', '123321789'),
    ('Robson Ribeiro', '11987654394', '23443289015', '234432890'),
    ('Daniela Almeida', '11987654395', '34554390126', '345543901'),
    ('Felipe Silva', '11987654396', '45665401237', '456654012');


INSERT INTO `db_bhaskara`.`tb_aluno` 
    (`nome_aluno`, `telefone_aluno`, `cpf_aluno`, `rg_aluno`, `email_aluno`, `nascimento_aluno`, `senha_aluno`, `id_endereco`, `id_cargo`, `id_responsavel`) VALUES
    ('Ana Oliveira', '31987654321', '12345678901', '112233445', 'ana.oliveira@example.com', '2000-01-15', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 1, 1, 1),
    ('Bruno Silva', '31998765432', '12345678902', '223344556', 'bruno.silva@example.com', '1999-02-16', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 2, 1, 2),
    ('Carla Santos', '31987654322', '12345678903', '334455667', 'carla.santos@example.com', '1998-03-17', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 3, 1, 3),
    ('Daniela Costa', '31976543210', '12345678904', '445566778', 'daniela.costa@example.com', '1997-04-18', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 4, 1, 4),
    ('Eduardo Almeida', '31965432109', '12345678905', '556677889', 'eduardo.almeida@example.com', '1996-05-19', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 5, 1, 5),
    ('Fernanda Lima', '31954321098', '12345678906', '667788990', 'fernanda.lima@example.com', '1995-06-20', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 6, 1, 6),
    ('Gabriel Ferreira', '31943210987', '12345678907', '778899001', 'gabriel.ferreira@example.com', '1994-07-21', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 7, 1, 7),
    ('Heloísa Martins', '31932109876', '12345678908', '889900112', 'heloisa.martins@example.com', '1993-08-22', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 8, 1, 8),
    ('Igor Santos', '31921098765', '12345678909', '990011223', 'igor.santos@example.com', '1992-09-23', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 9, 1, 9),
    ('Jéssica Ribeiro', '31910987654', '12345678910', '101122334', 'jessica.ribeiro@example.com', '1991-10-24', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 10, 1, 10),
    ('Lucas Nascimento', '31909876543', '12345678911', '212233445', 'lucas.nascimento@example.com', '1990-11-25', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 11, 1, 11),
    ('Mariana Costa', '31998765431', '12345678912', '323344556', 'mariana.costa@example.com', '1989-12-26', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 12, 1, 12),
    ('Natan Ferreira', '31987654320', '12345678913', '434455667', 'natan.ferreira@example.com', '1988-01-27', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 13, 1, 13),
    ('Olga Almeida', '31976543209', '12345678914', '545566778', 'olga.almeida@example.com', '1987-02-28', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 14, 1, 14),
    ('Pablo Costa', '31965432108', '12345678915', '656677889', 'pablo.costa@example.com', '1986-03-29', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 15, 1, 15),
    ('Quésia Lima', '31954321097', '12345678916', '767788990', 'quesia.lima@example.com', '1985-04-30', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 16, 1, 16),
    ('Raquel Santos', '31943210986', '12345678917', '878899001', 'raquel.santos@example.com', '1984-05-31', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 17, 1, 17),
    ('Simone Almeida', '31932109875', '12345678918', '989900112', 'simone.almeida@example.com', '1983-06-01', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 18, 1, 18),
    ('Thiago Ferreira', '31921098764', '12345678919', '101122334', 'thiago.ferreira@example.com', '1982-07-02', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 19, 1, 19),
    ('Ursula Costa', '31910987653', '12345678920', '212233445', 'ursula.costa@example.com', '1981-08-03', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 20, 1, 20),
    ('Vinícius Nascimento', '31909876542', '12345678921', '323344556', 'vinicius.nascimento@example.com', '1980-09-04', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 21, 1, 21),
    ('Wanda Almeida', '31998765430', '12345678922', '434455667', 'wanda.almeida@example.com', '1979-10-05', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 22, 1, 22),
    ('Xuxa Ferreira', '31987654319', '12345678923', '545566778', 'xuxa.ferreira@example.com', '1978-11-06', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 23, 1, 23),
    ('Yasmin Santos', '31976543218', '12345678924', '656677889', 'yasmin.santos@example.com', '1977-12-07', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 24, 1, 24),
    ('Zé Almeida', '31965432117', '12345678925', '767788990', 'ze.almeida@example.com', '1976-01-08', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 25, 1, 25),
    ('Aline Lima', '31954321016', '12345678926', '878899001', 'aline.lima@example.com', '1975-02-09', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 26, 1, 26),
    ('Bernardo Costa', '31943210915', '12345678927', '989900112', 'bernardo.costa@example.com', '1974-03-10', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 27, 1, 27),
    ('Catarina Almeida', '31932109814', '12345678928', '101122334', 'catarina.almeida@example.com', '1973-04-11', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 28, 1, 28),
    ('Diego Ferreira', '31921098713', '12345678929', '212233445', 'diego.ferreira@example.com', '1972-05-12', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 29, 1, 29),
    ('Eliane Santos', '31910987612', '12345678930', '323344556', 'eliane.santos@example.com', '1971-06-13', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 30, 1, 30),
    ('Felipe Almeida', '31909876511', '12345678931', '434455667', 'felipe.almeida@example.com', '1970-07-14', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 31, 1, 31),
    ('Gabriela Costa', '31998765410', '12345678932', '545566778', 'gabriela.costa@example.com', '1969-08-15', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 32, 1, 32),
    ('Hugo Lima', '31987654309', '12345678933', '656677889', 'hugo.lima@example.com', '1968-09-16', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 33, 1, 33),
    ('Isabela Santos', '31976543208', '12345678934', '767788990', 'isabela.santos@example.com', '1967-10-17', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 34, 1, 34),
    ('Julius Costa', '31965432107', '12345678935', '878899001', 'julius.costa@example.com', '1966-11-18', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 35, 1, 35),
    ('Karla Almeida', '31954321006', '12345678936', '989900112', 'karla.almeida@example.com', '1965-12-19', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 36, 1, 36),
    ('Leonardo Ferreira', '31943210905', '12345678937', '101122334', 'leonardo.ferreira@example.com', '1964-01-20', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 37, 1, 37),
    ('Mariana Lima', '31932109804', '12345678938', '212233445', 'mariana.lima@example.com', '1963-02-21', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 38, 1, 38),
    ('Nicolas Santos', '31921098703', '12345678939', '323344556', 'nicolas.santos@example.com', '1962-03-22', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 39, 1, 39),
    ('Olivia Almeida', '31910987602', '12345678940', '434455667', 'olivia.almeida@example.com', '1961-04-23', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 40, 1, 40),
    ('Paulo Ferreira', '31909876501', '12345678941', '545566778', 'paulo.ferreira@example.com', '1960-05-24', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 41, 1, 41),
    ('Quinn Costa', '31998765400', '12345678942', '656677889', 'quinn.costa@example.com', '1959-06-25', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 42, 1, 42),
    ('Rafaela Santos', '31987654399', '12345678943', '767788990', 'rafaela.santos@example.com', '1958-07-26', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 43, 1, 43),
    ('Samuel Almeida', '31976543298', '12345678944', '878899001', 'samuel.almeida@example.com', '1957-08-27', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 44, 1, 44),
    ('Tatiane Ferreira', '31965432197', '12345678945', '989900112', 'tatiane.ferreira@example.com', '1956-09-28', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 45, 1, 45),
    ('Ulysses Costa', '31954321096', '12345678946', '101122334', 'ulysses.costa@example.com', '1955-10-29', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 46, 1, 46),
    ('Valéria Almeida', '31943210995', '12345678947', '212233445', 'valeria.almeida@example.com', '1954-11-30', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 47, 1, 47),
    ('Wesley Ferreira', '31932109894', '12345678948', '323344556', 'wesley.ferreira@example.com', '1953-12-31', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 48, 1, 48),
    ('Xandor Santos', '31921098793', '12345678949', '434455667', 'xandor.santos@example.com', '1952-01-01', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 49, 1, 49),
    ('Yago Almeida', '31910987692', '12345678950', '545566778', 'yago.almeida@example.com', '1951-02-02', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 50, 1, 50),
    ('Zara Costa', '31909876591', '12345678951', '656677889', 'zara.costa@example.com', '1950-03-03', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 51, 1, 51),
    ('Ana Paula', '31998765490', '12345678952', '767788990', 'anapaula@example.com', '1949-04-04', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 52, 1, 52),
    ('Bruno Henrique', '31987654389', '12345678953', '878899001', 'brunohenrique@example.com', '1948-05-05', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 53, 1, 53),
    ('Claudia Almeida', '31976543278', '12345678954', '989900112', 'claudia.almeida@example.com', '1947-06-06', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 54, 1, 54),
    ('Diego Costa', '31965432167', '12345678955', '101122334', 'diego.costa@example.com', '1946-07-07', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 55, 1, 55),
    ('Eliana Santos', '31954321056', '12345678956', '212233445', 'eliana.santos@example.com', '1945-08-08', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 56, 1, 56),
    ('Fernando Lima', '31943210945', '12345678957', '323344556', 'fernando.lima@example.com', '1944-09-09', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 57, 1, 57),
    ('Gustavo Almeida', '31932109834', '12345678958', '434455667', 'gustavo.almeida@example.com', '1943-10-10', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 58, 1, 58),
    ('Helena Costa', '31921098723', '12345678959', '545566778', 'helena.costa@example.com', '1942-11-11', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 59, 1, 59),
    ('Ivo Ferreira', '31910987612', '12345678960', '656677889', 'ivo.ferreira@example.com', '1941-12-12', '$2y$10$e0MYT0gP8G0hDQmHJvqHfOe1CZ2XwC72CSoZ0bR2C5IP5ql1P8Cke', 60, 1, 60);


INSERT INTO `db_bhaskara`.`tb_docente` 
    (`nome_docente`, `telefone_docente`, `cpf_docente`, `rg_docente`, `email_docente`, `senha_docente`, `dt_entrada`, `id_endereco`, `id_cargo`) 
VALUES 
    ('Maria Silva', '11912345678', '12345678901', '123456789', 'maria.silva@email.com', 'senhaMaria123', NOW(), 1, 2),
    ('João Pereira', '11923456789', '10987654321', '987654321', 'joao.pereira@email.com', 'senhaJoao123', NOW(), 2, 2),
    ('Ana Costa', '11934567890', '12312312312', '112223334', 'ana.costa@email.com', 'senhaAna123', NOW(), 3, 2);


insert into tb_turma values
(null, '6º A'),
(null, '6º B'),
(null, '7º A'),
(null, '7º B'),
(null, '8º A'),
(null, '8º B'),
(null, '9º A'),
(null, '9º B');

insert into tb_materia values
(null, 'Ciências'),
(null, 'História'),
(null, 'Geografia'),
(null, 'Artes'),
(null, 'Inglês'),
(null, 'ED Física'),
(null, 'Álgebra'),
(null, 'Geometria'),
(null, 'Literatura'),
(null, 'Gramática'),
(null, 'Produção de Textos'),
(null, 'Física'),
(null, 'Química'),
(null, 'Filosofia'),
(null, 'Sociologia');

insert into tb_turma_materia values
(1, 1, 2), -- 6º A
(1, 2, 3), -- 6º A
(1, 3, 2), -- 6º A
(1, 4, 2), -- 6º A
(1, 5, 1), -- 6º A
(1, 6, 1), -- 6º A
(1, 7, 3), -- 6º A
(1, 8, 2), -- 6º A
(1, 9, 1), -- 6º A
(1, 10, 1), -- 6º A
(1, 11, 3), -- 6º A

(2, 1, 2), -- 6º B
(2, 2, 3), -- 6º B
(2, 3, 1), -- 6º B
(2, 4, 2), -- 6º B
(2, 5, 3), -- 6º B
(2, 6, 1), -- 6º B
(2, 7, 1), -- 6º B
(2, 8, 2), -- 6º B
(2, 9, 3), -- 6º B
(2, 10, 3), -- 6º B
(2, 11, 1), -- 6º B

(3, 1, 2), -- 7º A
(3, 2, 3), -- 7º A
(3, 3, 1), -- 7º A
(3, 4, 2), -- 7º A
(3, 5, 3), -- 7º A
(3, 6, 3), -- 7º A
(3, 7, 1), -- 7º A
(3, 8, 2), -- 7º A
(3, 9, 2), -- 7º A
(3, 10, 1), -- 7º A
(3, 11, 1), -- 7º A

(4, 1, 2), -- 7º B
(4, 2, 3), -- 7º B
(4, 3, 1), -- 7º B
(4, 4, 2), -- 7º B
(4, 5, 3), -- 7º B
(4, 6, 2), -- 7º B
(4, 7, 2), -- 7º B
(4, 8, 3), -- 7º B
(4, 9, 3), -- 7º B
(4, 10, 1), -- 7º B
(4, 11, 1), -- 7º B

(5, 2, 2), -- 8º A
(5, 3, 2), -- 8º A
(5, 4, 1), -- 8º A
(5, 5, 3), -- 8º A
(5, 6, 3), -- 8º A
(5, 7, 1), -- 8º A
(5, 8, 1), -- 8º A
(5, 9, 3), -- 8º A
(5, 10, 2), -- 8º A
(5, 11, 2), -- 8º A
(5, 12, 3), -- 8º A
(5, 13, 1), -- 8º A
(5, 14, 3), -- 8º A

(6, 2, 1), -- 8º B
(6, 3, 2), -- 8º B
(6, 4, 3), -- 8º B
(6, 5, 3), -- 8º B
(6, 6, 3), -- 8º B
(6, 7, 3), -- 8º B
(6, 8, 1), -- 8º B
(6, 9, 2), -- 8º B
(6, 10, 3), -- 8º B
(6, 11, 1), -- 8º B
(6, 12, 2), -- 8º B
(6, 13, 1), -- 8º B
(6, 14, 1), -- 8º B

(7, 2, 1), -- 9º A
(7, 3, 2), -- 9º A
(7, 4, 3), -- 9º A
(7, 5, 1), -- 9º A
(7, 6, 2), -- 9º A
(7, 7, 3), -- 9º A
(7, 8, 1), -- 9º A
(7, 9, 2), -- 9º A
(7, 10, 1), -- 9º A
(7, 11, 2), -- 9º A
(7, 12, 3), -- 9º A
(7, 13, 1), -- 9º A
(7, 14, 3), -- 9º A
(7, 15, 2), -- 9º A

(8, 2, 1), -- 9º B
(8, 3, 2), -- 9º B
(8, 4, 3), -- 9º B
(8, 5, 1), -- 9º B
(8, 6, 2), -- 9º B
(8, 7, 3), -- 9º B
(8, 8, 1), -- 9º B
(8, 9, 1), -- 9º B
(8, 10, 1), -- 9º B
(8, 11, 3), -- 9º B
(8, 12, 2), -- 9º B
(8, 13, 2), -- 9º B
(8, 14, 3), -- 9º B
(8, 15, 1); -- 9º B
