use db_bhaskara;

insert into tb_periodo_letivo values
(null, '2024-01-29', '2024-12-06');

insert into tb_cargo values 
(null, 'Aluno'),
(null, 'Professor'),
(null, 'Secretário'),
(null, 'Coordenador'),
(null, 'Diretor');

INSERT INTO `db_bhaskara`.`tb_endereco` (`uf`, `cidade`, `bairro`, `logradouro`, `numero`, `complemento`, `cep`) VALUES
    ('SP', 'São José dos Campos', 'Jardim Aquarius', 'Avenida Cassiopeia', 1000, 'Apto 101', '12244000'),
    ('SP', 'São José dos Campos', 'Centro', 'Rua 15 de Novembro', 300, '', '12210000'),
    ('SP', 'São José dos Campos', 'Jardim das Indústrias', 'Rua Ema', 250, '', '12245000'),
    ('SP', 'São José dos Campos', 'Vila Ema', 'Rua Nair', 75, '', '12227000'),
    ('SP', 'São José dos Campos', 'Vila Maria', 'Avenida São João', 500, 'Bloco 1', '12232000'),
    ('SP', 'São José dos Campos', 'Jardim São Dimas', 'Rua Doutor Siqueira', 10, '', '12240000'),
    ('SP', 'São José dos Campos', 'Vila Industrial', 'Rua Uruguaiana', 90, '', '12222000'),
    ('SP', 'São José dos Campos', 'Parque Industrial', 'Avenida do Pássaro', 600, '', '12247000'),
    ('SP', 'São José dos Campos', 'Jardim Maringá', 'Rua Santa Rita', 200, '', '12227100'),
    ('SP', 'São José dos Campos', 'Urbanova', 'Rua das Orquídeas', 50, 'Casa 2', '12247200'),
    ('SP', 'São José dos Campos', 'Jardim das Colinas', 'Avenida dos Pássaros', 400, '', '12244200'),
    ('SP', 'São José dos Campos', 'Bonsucesso', 'Rua Ângela', 30, '', '12218000'),
    ('SP', 'São José dos Campos', 'Jardim do Mar', 'Rua das Flores', 120, 'Apto 201', '12244300'),
    ('SP', 'São José dos Campos', 'Jardim Satélite', 'Rua Saturno', 85, '', '12232100'),
    ('SP', 'São José dos Campos', 'Vila Brizola', 'Rua Benedito', 45, '', '12236000'),
    ('SP', 'São José dos Campos', 'Vila Adyana', 'Avenida Rio de Janeiro', 700, 'Apto 204', '12240100'),
    ('SP', 'São José dos Campos', 'Parque Jatobá', 'Rua dos Flamboyants', 25, '', '12246000'),
    ('SP', 'São José dos Campos', 'São Francisco', 'Rua Maracatu', 200, '', '12223000'),
    ('SP', 'São José dos Campos', 'Jardim América', 'Avenida América', 999, 'Casa 1', '12250000'),
    ('SP', 'São José dos Campos', 'Jardim Europa', 'Rua do Limoeiro', 33, '', '12242000'),
    ('SP', 'São José dos Campos', 'Vila Nova', 'Rua Olavo Bilac', 70, '', '12220000'),
    ('SP', 'Jacareí', 'Centro', 'Rua Dr. João Batista de Oliveira', 150, '', '12300000'),
    ('SP', 'Jacareí', 'Jardim Paraíso', 'Rua das Palmeiras', 120, '', '12312000'),
    ('SP', 'Jacareí', 'Jardim Santo Antonio', 'Avenida Nove de Julho', 400, 'Casa 4', '12340000'),
    ('SP', 'Jacareí', 'Jardim dos Lírios', 'Rua das Flores', 50, '', '12341000'),
    ('SP', 'Jacareí', 'Parque MeiaLua', 'Rua da Amizade', 75, '', '12330000'),
    ('SP', 'Jacareí', 'Jardim Esperança', 'Rua Esperança', 180, '', '12315000'),
    ('SP', 'Jacareí', 'Jardim das Indústrias', 'Avenida Industrial', 200, '', '12325000'),
    ('SP', 'Jacareí', 'Jardim São Silvestre', 'Rua Santo Expedito', 90, '', '12345000'),
    ('SP', 'Jacareí', 'Vila Garcia', 'Rua da Liberdade', 130, '', '12335000'),
    ('SP', 'Jacareí', 'Jardim Floresta', 'Rua Floresta', 220, '', '12350000'),
    ('SP', 'Santa Branca', 'Centro', 'Rua São Benedito', 300, '', '12360000'),
    ('SP', 'Santa Branca', 'Jardim Santa Branca', 'Rua das Acácias', 45, '', '12361000'),
    ('SP', 'Santa Branca', 'Vila Sônia', 'Rua da Paz', 90, '', '12362000'),
    ('SP', 'Santa Branca', 'Parque São Miguel', 'Rua das Palmeiras', 20, '', '12363000'),
    ('SP', 'Santa Branca', 'Jardim dos Ipês', 'Rua dos Ipês', 80, '', '12364000'),
    ('SP', 'Santa Branca', 'Vila Nova', 'Rua da Amizade', 150, '', '12365000'),
    ('SP', 'Santa Branca', 'Vila Nova', 'Rua da Amizade', 150, '', '12365000'),
    ('SP', 'Santa Branca', 'Vila Nova', 'Rua da Amizade', 150, '', '12365000'),
    ('SP', 'Santa Branca', 'Vila Nova', 'Rua da Amizade', 150, '', '12365000'),
    ('SP', 'Santa Branca', 'Jardim das Flores', 'Rua das Flores', 35, '', '12366000'),
    ('SP', 'Santa Branca', 'Jardim Campo Verde', 'Rua Verde', 60, '', '12367000'),
    ('SP', 'Santa Branca', 'Parque da Liberdade', 'Rua da Liberdade', 25, '', '12368000'),
    ('SP', 'Santa Branca', 'Jardim Bela Vista', 'Rua da Vista', 120, '', '12369000'),
    ('SP', 'São José dos Campos', 'Jardim Satélite', 'Rua das Estrelas', 200, '', '12232200'),
    ('SP', 'São José dos Campos', 'Vila Adyana', 'Avenida Paulista', 800, 'Casa 5', '12244400'),
    ('SP', 'São José dos Campos', 'Jardim São Dimas', 'Rua das Acácias', 300, '', '12247300'),
    ('SP', 'São José dos Campos', 'Vila Maria', 'Rua das Oliveiras', 45, '', '12233100'),
    ('SP', 'São José dos Campos', 'Jardim do Mar', 'Rua do Sol', 90, '', '12228000'),
    ('SP', 'São José dos Campos', 'Jardim das Indústrias', 'Rua José Carlos', 75, '', '12245100'),
    ('SP', 'São José dos Campos', 'Jardim Aquarius', 'Rua da Estrela', 10, '', '12244100'),
    ('SP', 'Jacareí', 'Vila Brizola', 'Rua Cândido', 400, '', '12370000'),
    ('SP', 'Jacareí', 'Jardim Paraíso', 'Rua do Paraíso', 150, '', '12312100'),
    ('SP', 'Jacareí', 'Jardim Esperança', 'Rua da Esperança', 250, '', '12315100'),
    ('SP', 'Jacareí', 'Vila Nova', 'Rua do Sol', 300, '', '12320000'),
    ('SP', 'Santa Branca', 'Centro', 'Rua da Independência', 70, '', '12360100'),
    ('SP', 'Santa Branca', 'Vila Verde', 'Rua Verde', 60, '', '12361100'),
    ('SP', 'Santa Branca', 'Jardim Bela Vista', 'Rua da Vista', 10, '', '12369100'),
    ('SP', 'São José dos Campos', 'Jardim Aquarius', 'Rua das Estrelas', 88, '', '12244200'),
    ('SP', 'São José dos Campos', 'Bonsucesso', 'Rua da Alegria', 30, '', '12218100'),
    ('SP', 'São José dos Campos', 'Jardim São Dimas', 'Rua do Ouro', 300, '', '12247400'),
    ('SP', 'São José dos Campos', 'Vila Adyana', 'Rua do Café', 450, '', '12240200'),
    ('SP', 'São José dos Campos', 'Jardim Maringá', 'Rua das Orquídeas', 55, '', '12227200'),
    ('SP', 'Jacareí', 'Jardim Santo Antonio', 'Rua do Amanhã', 80, '', '12340100'),
    ('SP', 'Jacareí', 'Centro', 'Rua da Liberdade', 90, '', '12300100'),
    ('SP', 'Santa Branca', 'Jardim Santa Branca', 'Rua das Águas', 25, '', '12361200'),
    ('SP', 'São José dos Campos', 'Jardim São Dimas', 'Rua das Palmeiras', 120, '', '12240200'),
    ('SP', 'São José dos Campos', 'Jardim Aquarius', 'Rua do Sol', 45, '', '12244300'),
    ('SP', 'São José dos Campos', 'Vila Maria', 'Rua dos Lírios', 65, '', '12232200'),
    ('SP', 'São José dos Campos', 'Jardim Satélite', 'Rua dos Cometas', 150, '', '12232300'),
    ('SP', 'São José dos Campos', 'Vila Adyana', 'Avenida das Flores', 500, 'Apto 202', '12240300'),
    ('SP', 'São José dos Campos', 'Jardim das Indústrias', 'Rua do Trabalho', 80, '', '12245200'),
    ('SP', 'São José dos Campos', 'Jardim Europa', 'Rua da União', 110, '', '12242200'),
    ('SP', 'Jacareí', 'Jardim Paraíso', 'Rua dos Cravos', 180, '', '12312200'),
    ('SP', 'Jacareí', 'Centro', 'Rua dos Três Irmãos', 220, '', '12300200'),
    ('SP', 'Jacareí', 'Jardim das Indústrias', 'Avenida das Indústrias', 50, '', '12325200'),
    ('SP', 'Jacareí', 'Vila Nova', 'Rua da Esperança', 90, '', '12320100'),
    ('SP', 'Jacareí', 'Jardim dos Lírios', 'Rua dos Lírios', 50, '', '12341100'),
    ('SP', 'Jacareí', 'Parque MeiaLua', 'Rua do Sol', 10, '', '12330100'),
    ('SP', 'Santa Branca', 'Centro', 'Rua do Comércio', 40, '', '12360200'),
    ('SP', 'Santa Branca', 'Jardim dos Pássaros', 'Rua dos Pássaros', 90, '', '12367100'),
    ('SP', 'Santa Branca', 'Vila Sônia', 'Rua das Palmeiras', 100, '', '12362100'),
    ('SP', 'Santa Branca', 'Jardim Santo Antonio', 'Rua São Jorge', 80, '', '12364200'),
    ('SP', 'Santa Branca', 'Jardim das Flores', 'Rua das Orquídeas', 30, '', '12369200'),
    ('SP', 'São José dos Campos', 'Jardim do Mar', 'Avenida dos Navegantes', 70, '', '12228100'),
    ('SP', 'São José dos Campos', 'Bonsucesso', 'Rua das Andorinhas', 65, '', '12218200'),
    ('SP', 'São José dos Campos', 'Vila Industrial', 'Rua da Fraternidade', 220, '', '12222100'),
    ('SP', 'São José dos Campos', 'Jardim Maringá', 'Rua dos Cravos', 40, '', '12227300'),
    ('SP', 'Jacareí', 'Jardim Esperança', 'Rua dos Girassóis', 120, '', '12315200'),
    ('SP', 'Jacareí', 'Vila Brizola', 'Rua da Liberdade', 95, '', '12370100'),
    ('SP', 'Jacareí', 'Jardim Santo Antonio', 'Rua das Flores', 140, '', '12340200'),
    ('SP', 'Santa Branca', 'Centro', 'Rua da Esperança', 60, '', '12360300'),
    ('SP', 'Santa Branca', 'Jardim Santa Branca', 'Rua das Águas', 15, '', '12361300'),
    ('SP', 'São José dos Campos', 'Jardim do Mar', 'Rua das Águas', 12, '', '12228200'),
    ('SP', 'São José dos Campos', 'Vila Adyana', 'Rua das Orquídeas', 55, '', '12240400'),
    ('SP', 'Santa Branca', 'Vila Nova', 'Rua do Sol', 35, '', '12365100'),
    ('SP', 'Santa Branca', 'Jardim Campo Verde', 'Rua dos Sabiás', 20, '', '12368100');

INSERT INTO `db_bhaskara`.`tb_responsavel` (nome_responsavel, telefone_responsavel, cpf_responsavel, rg_responsavel) VALUES
    ('Ana Silva', '31987654321', '12345678901', '12345678'),
    ('Carlos Oliveira', '31998765432', '23456789012', '23456789'),
    ('Fernanda Santos', '31912345678', '34567890123', '34567890'),
    ('Ricardo Costa', '31965432109', '45678901234', '45678901'),
    ('Mariana Almeida', '31987654321', '56789012345', '56789012'),
    ('João Pereira', '31998765432', '67890123456', '67890123'),
    ('Patrícia Ferreira', '31912345678', '78901234567', '78901234'),
    ('André Martins', '31965432109', '89012345678', '89012345'),
    ('Juliana Souza', '31987654321', '90123456789', '90123456'),
    ('Eduardo Lima', '31998765432', '01234567890', '01234567'),
    ('Vanessa Rocha', '31912345678', '12345678902', '12345679'),
    ('Lucas Mendes', '31965432109', '23456789013', '23456780'),
    ('Tatiane Nunes', '31987654321', '34567890124', '34567891'),
    ('Felipe Ribeiro', '31998765432', '45678901235', '45678902'),
    ('Aline Martins', '31912345678', '56789012346', '56789013'),
    ('Bruno Gomes', '31965432109', '67890123457', '67890124'),
    ('Renata Dias', '31987654321', '78901234568', '78901235'),
    ('Thiago Teixeira', '31998765432', '89012345679', '89012346'),
    ('Claudia Santos', '31912345678', '90123456780', '90123457'),
    ('Gustavo Cardoso', '31965432109', '01234567891', '01234568'),
    ('Isabela Ferreira', '31987654321', '12345678903', '12345680'),
    ('Leonardo Almeida', '31998765432', '23456789014', '23456781'),
    ('Camila Costa', '31912345678', '34567890125', '34567892'),
    ('Diego Nascimento', '31965432109', '45678901236', '45678903'),
    ('Luciana Lima', '31987654321', '56789012347', '56789014'),
    ('Rodrigo Souza', '31998765432', '67890123458', '67890125'),
    ('Nathalia Pereira', '31912345678', '78901234569', '78901236'),
    ('Leandro Rocha', '31965432109', '89012345670', '89012347'),
    ('Priscila Martins', '31987654321', '90123456781', '90123458'),
    ('Wellington Ferreira', '31998765432', '01234567892', '01234569'),
    ('Natália Souza', '31912345678', '12345678904', '12345681'),
    ('Fábio Costa', '31965432109', '23456789015', '23456782'),
    ('Vanessa Lima', '31987654321', '34567890126', '34567893'),
    ('Ricardo Nunes', '31998765432', '45678901237', '45678904'),
    ('Joana Martins', '31912345678', '56789012348', '56789015'),
    ('Sérgio Almeida', '31965432109', '67890123459', '67890126'),
    ('Tatiane Souza', '31987654321', '78901234570', '78901237'),
    ('Henrique Dias', '31998765432', '89012345680', '89012348'),
    ('Luciana Pereira', '31912345678', '90123456791', '90123459'),
    ('Bruno Teixeira', '31965432109', '01234567802', '01234570'),
    ('Marcia Santos', '31987654321', '12345678905', '12345682'),
    ('Fernando Nascimento', '31998765432', '23456789016', '23456783'),
    ('Isabel Almeida', '31912345678', '34567890127', '34567894'),
    ('Rafael Costa', '31965432109', '45678901238', '45678905'),
    ('Clara Ferreira', '31987654321', '56789012349', '56789016'),
    ('Alberto Rocha', '31998765432', '67890123460', '67890127'),
    ('Eliane Martins', '31912345678', '78901234571', '78901238'),
    ('Samuel Souza', '31965432109', '89012345681', '89012349'),
    ('Vanessa Lima', '31987654321', '90123456792', '90123460'),
    ('Igor Pereira', '31998765432', '01234567803', '01234571'),
    ('Tânia Nunes', '31912345678', '12345678906', '12345683'),
    ('Eduardo Ferreira', '31965432109', '23456789017', '23456784'),
    ('Fabiane Gomes', '31987654321', '34567890128', '34567895'),
    ('Mário Almeida', '31998765432', '45678901239', '45678906'),
    ('Silvia Martins', '31912345678', '56789012350', '56789017'),
    ('Ricardo Cardoso', '31965432109', '67890123461', '67890128'),
    ('Camila Rocha', '31987654321', '78901234572', '78901239'),
    ('Felipe Dias', '31998765432', '89012345682', '89012350'),
    ('Jéssica Souza', '31912345678', '90123456793', '90123461'),
    ('André Nascimento', '31965432109', '01234567804', '01234572'),
    ('Elisa Teixeira', '31987654321', '12345678907', '12345684'),
    ('Lucas Ferreira', '31998765432', '23456789018', '23456785'),
    ('Priscila Gomes', '31912345678', '34567890129', '34567896'),
    ('Vinícius Almeida', '31965432109', '45678901240', '45678907'),
    ('Mariana Rocha', '31987654321', '56789012351', '56789018'),
    ('Samuel Nunes', '31998765432', '67890123462', '67890129'),
    ('Adriana Lima', '31987654322', '78901234573', '78901240'),
    ('Diego Costa', '31998765433', '89012345683', '89012351'),
    ('Juliana Ferreira', '31912345679', '90123456794', '90123462'),
    ('Matheus Santos', '31965432110', '01234567805', '01234573'),
    ('Flávia Almeida', '31987654322', '12345678908', '12345685'),
    ('Gustavo Teixeira', '31998765433', '23456789019', '23456786'),
    ('Ana Paula Rocha', '31912345679', '34567890130', '34567897'),
    ('Roberto Nascimento', '31965432110', '45678901241', '45678908'),
    ('Carla Gomes', '31987654322', '56789012352', '56789019'),
    ('Thiago Dias', '31998765433', '67890123463', '67890130'),
    ('Mariana Souza', '31912345679', '78901234574', '78901241'),
    ('Felipe Almeida', '31965432110', '89012345684', '89012352'),
    ('Natália Rocha', '31987654322', '90123456795', '90123463'),
    ('Daniela Martins', '31998765433', '01234567806', '01234574'),
    ('Rafael Costa', '31912345679', '12345678909', '12345686'),
    ('Karina Ferreira', '31965432110', '23456789020', '23456787'),
    ('Lucas Teixeira', '31987654322', '34567890131', '34567898'),
    ('Eliane Santos', '31998765433', '45678901242', '45678909'),
    ('Anderson Lima', '31912345679', '56789012353', '56789020'),
    ('Patrícia Gomes', '31965432110', '67890123464', '67890131'),
    ('Bruno Nascimento', '31987654322', '78901234575', '78901242'),
    ('Maria da Silva', '11987654321', '12345678901', '12345678'),
    ('João Pereira', '11998765432', '23456789012', '23456789'),
    ('Ana Costa', '11987654322', '34567890123', '34567890'),
    ('Carlos Oliveira', '11976543210', '45678901234', '45678901'),
    ('Fernanda Santos', '11912345678', '56789012345', '56789012'),
    ('Lucas Almeida', '11923456789', '67890123456', '67890123'),
    ('Patrícia Lima', '11934567890', '78901234567', '78901234'),
    ('Roberto Souza', '11945678901', '89012345678', '89012345'),
    ('Juliana Martins', '11956789012', '90123456789', '90123456'),
    ('Felipe Rocha', '11967890123', '01234567890', '01234567');


INSERT INTO `db_bhaskara`.`tb_aluno` (
  `nome_aluno`, 
  `telefone_aluno`, 
  `cpf_aluno`, 
  `rg_aluno`, 
  `email_aluno`, 
  `nascimento_aluno`, 
  `senha_aluno`, 
  `id_endereco`, 
  `id_cargo`, 
  `id_responsavel`
) VALUES
    ('Lucas Silva', '11987654321', '12345678900', '123456789', 'lucas.silva@example.com', '2000-01-01', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 1, 1, 1),
    ('Mariana Oliveira', '11987654322', '12345678901', '123456790', 'mariana.oliveira@example.com', '2000-01-02', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 2, 1, 2),
    ('Carlos Pereira', '11987654323', '12345678902', '123456791', 'carlos.pereira@example.com', '2000-01-03', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 3, 1, 3),
    ('Fernanda Santos', '11987654324', '12345678903', '123456792', 'fernanda.santos@example.com', '2000-01-04', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 4, 1, 4),
    ('Roberto Lima', '11987654325', '12345678904', '123456793', 'roberto.lima@example.com', '2000-01-05', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 5, 1, 5),
    ('Ana Costa', '11987654326', '12345678905', '123456794', 'ana.costa@example.com', '2000-01-06', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 6, 1, 6),
    ('Júlio Almeida', '11987654327', '12345678906', '123456795', 'julio.almeida@example.com', '2000-01-07', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 7, 1, 7),
    ('Patrícia Rocha', '11987654328', '12345678907', '123456796', 'patricia.rocha@example.com', '2000-01-08', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 8, 1, 8),
    ('Felipe Martins', '11987654329', '12345678908', '123456797', 'felipe.martins@example.com', '2000-01-09', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 9, 1, 9),
    ('Juliana Ferreira', '11987654330', '12345678909', '123456798', 'juliana.ferreira@example.com', '2000-01-10', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 10, 1, 10),
    ('Gustavo Nunes', '11987654331', '12345678910', '123456799', 'gustavo.nunes@example.com', '2000-01-11', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 11, 1, 11),
    ('Bruna Santos', '11987654332', '12345678911', '123456700', 'bruna.santos@example.com', '2000-01-12', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 12, 1, 12),
    ('Rafael Gomes', '11987654333', '12345678912', '123456701', 'rafael.gomes@example.com', '2000-01-13', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 13, 1, 13),
    ('Natália Lima', '11987654334', '12345678913', '123456702', 'natalia.lima@example.com', '2000-01-14', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 14, 1, 14),
    ('Leonardo Alves', '11987654335', '12345678914', '123456703', 'leonardo.alves@example.com', '2000-01-15', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 15, 1, 15),
    ('Sofia Ribeiro', '11987654336', '12345678915', '123456704', 'sofia.ribeiro@example.com', '2000-01-16', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 16, 1, 16),
    ('Thiago Pires', '11987654337', '12345678916', '123456705', 'thiago.pires@example.com', '2000-01-17', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 17, 1, 17),
    ('Daniela Mendes', '11987654338', '12345678917', '123456706', 'daniela.mendes@example.com', '2000-01-18', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 18, 1, 18),
    ('Eduardo Cordeiro', '11987654339', '12345678918', '123456707', 'eduardo.cordeiro@example.com', '2000-01-19', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 19, 1, 19),
    ('Isabela Martins', '11987654340', '12345678919', '123456708', 'isabela.martins@example.com', '2000-01-20', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 20, 1, 20),
    ('Vinícius Sousa', '11987654341', '12345678920', '123456709', 'vinicius.sousa@example.com', '2000-01-21', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 21, 1, 21),
    ('Renata Teixeira', '11987654342', '12345678921', '123456710', 'renata.teixeira@example.com', '2000-01-22', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 22, 1, 22),
    ('Guilherme Freitas', '11987654343', '12345678922', '123456711', 'guilherme.freitas@example.com', '2000-01-23', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 23, 1, 23),
    ('Clara Ramos', '11987654344', '12345678923', '123456712', 'clara.ramos@example.com', '2000-01-24', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 24, 1, 24),
    ('Fábio Costa', '11987654345', '12345678924', '123456713', 'fabio.costa@example.com', '2000-01-25', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 25, 1, 25),
    ('Lívia Almeida', '11987654346', '12345678925', '123456714', 'livia.almeida@example.com', '2000-01-26', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 26, 1, 26),
    ('André Vieira', '11987654347', '12345678926', '123456715', 'andre.vieira@example.com', '2000-01-27', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 27, 1, 27),
    ('Paula Ribeiro', '11987654348', '12345678927', '123456716', 'paula.ribeiro@example.com', '2000-01-28', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 28, 1, 28),
    ('Samuel Pimentel', '11987654349', '12345678928', '123456717', 'samuel.pimentel@example.com', '2000-01-29', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 29, 1, 29),
    ('Letícia Cardoso', '11987654350', '12345678929', '123456718', 'leticia.cardoso@example.com', '2000-01-30', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 30, 1, 30),
    ('Marcelo Lopes', '11987654351', '12345678930', '123456719', 'marcelo.lopes@example.com', '2000-01-31', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 31, 1, 31),
    ('Silvia Oliveira', '11987654352', '12345678931', '123456720', 'silvia.oliveira@example.com', '2000-02-01', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 32, 1, 32),
    ('Juliana Santos', '11987654353', '12345678932', '123456721', 'juliana.santos@example.com', '2000-02-02', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 33, 1, 33),
    ('Guilherme Silva', '11987654354', '12345678933', '123456722', 'guilherme.silva@example.com', '2000-02-03', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 34, 1, 34),
    ('Renan Martins', '11987654355', '12345678934', '123456723', 'renan.martins@example.com', '2000-02-04', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 35, 1, 35),
    ('Cynthia Ferreira', '11987654356', '12345678935', '123456724', 'cynthia.ferreira@example.com', '2000-02-05', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 36, 1, 36),
    ('Sérgio Alves', '11987654357', '12345678936', '123456725', 'sergio.alves@example.com', '2000-02-06', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 37, 1, 37),
    ('Tatiane Costa', '11987654358', '12345678937', '123456726', 'tatiane.costa@example.com', '2000-02-07', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 38, 1, 38),
    ('Wellington Nunes', '11987654359', '12345678938', '123456727', 'wellington.nunes@example.com', '2000-02-08', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 39, 1, 39),
    ('Patrícia Martins', '11987654360', '12345678939', '123456728', 'patricia.martins@example.com', '2000-02-09', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 40, 1, 40),
    ('Ricardo Souza', '11987654361', '12345678940', '123456729', 'ricardo.souza@example.com', '2000-02-10', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 41, 1, 41),
    ('Bianca Almeida', '11987654362', '12345678941', '123456730', 'bianca.almeida@example.com', '2000-02-11', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 42, 1, 42),
    ('Robson Lima', '11987654363', '12345678942', '123456731', 'robson.lima@example.com', '2000-02-12', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 43, 1, 43),
    ('Fernanda Dias', '11987654364', '12345678943', '123456732', 'fernanda.dias@example.com', '2000-02-13', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 44, 1, 44),
    ('Diego Ferreira', '11987654365', '12345678944', '123456733', 'diego.ferreira@example.com', '2000-02-14', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 45, 1, 45),
    ('Tatiane Ribeiro', '11987654366', '12345678945', '123456734', 'tatiane.ribeiro@example.com', '2000-02-15', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 46, 1, 46),
    ('Carlos Eduardo', '11987654367', '12345678946', '123456735', 'carlos.eduardo@example.com', '2000-02-16', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 47, 1, 47),
    ('Ana Clara', '11987654368', '12345678947', '123456736', 'ana.clara@example.com', '2000-02-17', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 48, 1, 48),
    ('Leandro Ribeiro', '11987654369', '12345678948', '123456737', 'leandro.ribeiro@example.com', '2000-02-18', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 49, 1, 49),
    ('Tânia Lima', '11987654370', '12345678949', '123456738', 'tania.lima@example.com', '2000-02-19', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 50, 1, 50),
    ('Vinícius Ferreira', '11987654371', '12345678950', '123456739', 'vinicius.ferreira@example.com', '2000-02-20', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 51, 1, 51),
    ('Cristina Pires', '11987654372', '12345678951', '123456740', 'cristina.pires@example.com', '2000-02-21', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 52, 1, 52),
    ('Raquel Teixeira', '11987654373', '12345678952', '123456741', 'raquel.teixeira@example.com', '2000-02-22', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 53, 1, 53),
    ('Julio Ferreira', '11987654374', '12345678953', '123456742', 'julio.ferreira@example.com', '2000-02-23', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 54, 1, 54),
    ('Claudio Gomes', '11987654375', '12345678954', '123456743', 'claudio.gomes@example.com', '2000-02-24', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 55, 1, 55),
    ('Luzia Almeida', '11987654376', '12345678955', '123456744', 'luzia.almeida@example.com', '2000-02-25', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 56, 1, 56),
    ('João Vitor', '11987654377', '12345678956', '123456745', 'joao.vitor@example.com', '2000-02-26', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 57, 1, 57),
    ('Alana Freitas', '11987654378', '12345678957', '123456746', 'alana.freitas@example.com', '2000-02-27', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 58, 1, 58),
    ('Wagner Rodrigues', '11987654379', '12345678958', '123456747', 'wagner.rodrigues@example.com', '2000-02-28', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 59, 1, 59),
    ('Tatiane Souza', '11987654380', '12345678959', '123456748', 'tatiane.souza@example.com', '2000-02-29', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 60, 1, 60),
    ('Alan Costa', '11987654381', '12345678960', '123456749', 'alan.costa@example.com', '2000-03-01', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 61, 1, 61),
    ('Jasmine Lima', '11987654382', '12345678961', '123456750', 'jasmine.lima@example.com', '2000-03-02', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 62, 1, 62),
    ('Bruno Mello', '11987654383', '12345678962', '123456751', 'bruno.mello@example.com', '2000-03-03', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 63, 1, 63),
    ('Karla Dias', '11987654384', '12345678963', '123456752', 'karla.dias@example.com', '2000-03-04', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 64, 1, 64),
    ('Samuel Almeida', '11987654385', '12345678964', '123456753', 'samuel.almeida@example.com', '2000-03-05', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 65, 1, 65),
    ('Ana Beatriz', '11987654386', '12345678965', '123456754', 'ana.beatriz@example.com', '2000-03-06', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 66, 1, 66),
    ('Lucas Costa', '11987654387', '12345678966', '123456755', 'lucas.costa@example.com', '2000-03-07', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 67, 1, 67),
    ('Marcos Vinicius', '11987654388', '12345678967', '123456756', 'marcos.vinicius@example.com', '2000-03-08', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 68, 1, 68),
    ('Sofia Martins', '11987654389', '12345678968', '123456757', 'sofia.martins@example.com', '2000-03-09', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 69, 1, 69),
    ('Fábio Silva', '11987654390', '12345678969', '123456758', 'fabio.silva@example.com', '2000-03-10', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 70, 1, 70),
    ('Aline Ferreira', '11987654391', '12345678970', '123456759', 'aline.ferreira@example.com', '2000-03-11', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 71, 1, 71),
    ('Ricardo Almeida', '11987654392', '12345678971', '123456760', 'ricardo.almeida@example.com', '2000-03-12', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 72, 1, 72),
    ('Luana Martins', '11987654393', '12345678972', '123456761', 'luana.martins@example.com', '2000-03-13', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 73, 1, 73),
    ('Gustavo Santos', '11987654394', '12345678973', '123456762', 'gustavo.santos@example.com', '2000-03-14', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 74, 1, 74),
    ('Nathalia Oliveira', '11987654395', '12345678974', '123456763', 'nathalia.oliveira@example.com', '2000-03-15', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 75, 1, 75),
    ('Davi Nascimento', '11987654396', '12345678975', '123456764', 'davi.nascimento@example.com', '2000-03-16', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 76, 1, 76),
    ('Rafaela Alves', '11987654397', '12345678976', '123456765', 'rafaela.alves@example.com', '2000-03-17', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 77, 1, 77),
    ('Emanuelly Costa', '11987654398', '12345678977', '123456766', 'emanuelly.costa@example.com', '2000-03-18', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 78, 1, 78),
    ('Felipe Souza', '11987654399', '12345678978', '123456767', 'felipe.souza@example.com', '2000-03-19', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 79, 1, 79),
    ('Juliana Alves', '11987654400', '12345678979', '123456768', 'juliana.alves@example.com', '2000-03-20', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 80, 1, 80),
    ('Luan Santos', '11987654401', '12345678980', '123456769', 'luan.santos@example.com', '2000-03-21', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 81, 1, 81),
    ('Maíra Silva', '11987654402', '12345678981', '123456770', 'maira.silva@example.com', '2000-03-22', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 82, 1, 82),
    ('Leonardo Almeida', '11987654403', '12345678982', '123456771', 'leonardo.almeida@example.com', '2000-03-23', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 83, 1, 83),
    ('Samantha Costa', '11987654404', '12345678983', '123456772', 'samantha.costa@example.com', '2000-03-24', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 84, 1, 84),
    ('Paulo Oliveira', '11987654405', '12345678984', '123456773', 'paulo.oliveira@example.com', '2000-03-25', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 85, 1, 85),
    ('Laura Silva', '11987654406', '12345678985', '123456774', 'laura.silva@example.com', '2000-03-26', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 86, 1, 86),
    ('Rafael Pereira', '11987654407', '12345678986', '123456775', 'rafael.pereira@example.com', '2000-03-27', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 87, 1, 87),
    ('Gabriela Costa', '11987654408', '12345678987', '123456776', 'gabriela.costa@example.com', '2000-03-28', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 88, 1, 88),
    ('Eduardo Gomes', '11987654409', '12345678988', '123456777', 'eduardo.gomes@example.com', '2000-03-29', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 89, 1, 89),
    ('Priscila Almeida', '11987654410', '12345678989', '123456778', 'priscila.almeida@example.com', '2000-03-30', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 90, 1, 90),
    ('Tiago Martins', '11987654411', '12345678990', '123456779', 'tiago.martins@example.com', '2000-03-31', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 91, 1, 91),
    ('Cláudia Souza', '11987654412', '12345678991', '123456780', 'claudia.souza@example.com', '2000-04-01', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 92, 1, 92),
    ('Felipe Oliveira', '11987654413', '12345678992', '123456781', 'felipe.oliveira@example.com', '2000-04-02', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 93, 1, 93),
    ('Monique Lima', '11987654414', '12345678993', '123456782', 'monique.lima@example.com', '2000-04-03', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 94, 1, 94),
    ('André Santos', '11987654415', '12345678994', '123456783', 'andre.santos@example.com', '2000-04-04', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 95, 1, 95),
    ('Larissa Almeida', '11987654416', '12345678995', '123456784', 'larissa.almeida@example.com', '2000-04-05', '$2y$10$EixZ7G1Pud/1e/wZMBctUuHd0hUkh3B1pQ4z2R1/RZz9ECgGpWlqe', 96, 1, 96);

insert into tb_docente values
(null, 'Ricardo', '12999999999', '12121222121', '121212221', 'ricardo@gmail.com', '$2y$12$s4JRRT8DVJGDgcjjhkI.yeUUPN8na7NSvl8ZERJ7SKw/jyQSdY4zO', DEFAULT, NULL, DEFAULT, 1, 2),
(null, 'Lilian', '12999999999', '12121212221', '122212221', 'lilian@gmail.com', '$2y$12$F/3F7SgiBroBIGYUyuU0GOIJjlhqC6i1R.JvHi78BrgYCDUuVAuoK', DEFAULT, NULL, DEFAULT, 1, 2),
(null, 'Helder', '12999999999', '12121212122', '122212121', 'herdel@gmail.com', '$2y$12$NGxYjewoGQBHx/br8AEIdeBONAF4n1xsaetsez.UongNdpfRu9TZe', DEFAULT, NULL, DEFAULT, 1, 2),
(null, 'Aroldo', '12999999999', '11121212122', '122212111', 'aroldo@gmail.com', '$2y$12$uqbLj6nIKUXL.KD.cTV4Le1d/2kVblgXE9BSFu66uSDdJeoQs1S/6', DEFAULT, NULL, DEFAULT, 1, 3);

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
