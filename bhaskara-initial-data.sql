use db_bhaskara;

insert into `tb_periodo_letivo` values
(null, '2023-01-29', '2023-12-06', '2023-07-01'),
-- (null, null, null, null);
(null, '2024-01-29', '2024-12-06', '2024-07-01');

insert into `tb_cargo` values 
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
    ('SP', 'Santa Branca', 'Jardim Campo Verde', 'Rua dos Sabiás', 20, '', '12368100'),
    ('SP', 'São José dos Campos', 'Jardim Aquarius', 'Avenida Cassiopeia', 1000, 'Apto 101', '12244-000'),
    ('SP', 'Jacareí', 'Jardim Paraíso', 'Rua das Flores', 200, 'Casa 3', '12345-000'),
    ('SP', 'Santa Branca', 'Centro', 'Rua José Bonifácio', 150, 'Apto 2', '12346-000'),
    ('SP', 'São José dos Campos', 'Jardim Satélite', "Avenida Nelson D'Ávila", 1200, 'Casa 5', '12231-000'),
    ('SP', 'Jacareí', 'Jardim Pindorama', 'Rua São Paulo', 75, 'Apto 4', '12347-000'),
    ('SP', 'Santa Branca', 'Bairro do Campo', 'Estrada da Bica', 300, 'Casa 6', '12348-000'),
    ('SP', 'São José dos Campos', 'Jardim Bergamo', 'Rua dos Rios', 400, 'Apto 10', '12234-000'),
    ('SP', 'Jacareí', 'Vila Branca', 'Avenida da Liberdade', 600, 'Casa 8', '12349-000'),
    ('SP', 'São José dos Campos', 'Jardim Aquarius', 'Avenida Cassiopeia', 1000, 'Apto 101', '12244000'),
    ('SP', 'São José dos Campos', 'Vila Adyana', 'Rua José de Alencar', 200, 'Casa 2', '12242000'),
    ('SP', 'São José dos Campos', 'Jardim Satélite', 'Avenida São João', 1500, 'Apto 305', '12226000'),
    ('SP', 'Jacareí', 'Centro', 'Rua 15 de Novembro', 50, 'Apto 202', '12340000'),
    ('SP', 'Jacareí', 'Jardim do Mar', 'Rua São João', 300, 'Casa 3', '12345000'),
    ('SP', 'Santa Branca', 'Centro', 'Avenida Dom Pedro II', 400, 'Sala 1', '12350000'),
    ('SP', 'São José dos Campos', 'Parque da Cidade', 'Avenida José Longo', 800, 'Apto 204', '12227000'),
    ('SP', 'Jacareí', 'Jardim Paraíso', 'Rua das Orquídeas', 600, 'Casa 7', '12347000'),
    ('SP', 'Santa Branca', 'Vila Santa Branca', 'Rua José Gomes', 250, 'Apto 102', '12351000'),
    ('SP', 'São José dos Campos', 'Jardim Esplanada', 'Rua dos Lírios', 900, 'Casa 5', '12223000');


INSERT INTO `db_bhaskara`.`tb_responsavel` (`nome_responsavel`, `telefone_responsavel`, `cpf_responsavel`, `email_responsavel`) VALUES
    ('Ana Oliveira', '31912345678', '12345678901', 'ana.oliveira@example.com'),
    ('Bruno Silva', '31923456789', '23456789012', 'bruno.silva@example.com'),
    ('Carlos Santos', '31934567890', '34567890123', 'carlos.santos@example.com'),
    ('Daniela Costa', '31945678901', '45678901234', 'daniela.costa@example.com'),
    ('Eduardo Lima', '31956789012', '56789012345', 'eduardo.lima@example.com'),
    ('Fernanda Almeida', '31967890123', '67890123456', 'fernanda.almeida@example.com'),
    ('Gustavo Rocha', '31978901234', '78901234567', 'gustavo.rocha@example.com'),
    ('Helena Martins', '31989012345', '89012345678', 'helena.martins@example.com'),
    ('Igor Ferreira', '31990123456', '90123456789', 'igor.ferreira@example.com'),
    ('Jéssica Nascimento', '31901234567', '01234567890', 'jessica.nascimento@example.com'),
    ('Lucas Mendes', '31912345679', '12345678902', 'lucas.mendes@example.com'),
    ('Mariana Pinto', '31923456780', '23456789013', 'mariana.pinto@example.com'),
    ('Natália Souza', '31934567891', '34567890124', 'natalia.souza@example.com'),
    ('Otávio Martins', '31945678902', '45678901235', 'otavio.martins@example.com'),
    ('Paula Dias', '31956789013', '56789012346', 'paula.dias@example.com'),
    ('Quintino Almeida', '31967890124', '67890123457', 'quintino.almeida@example.com'),
    ('Rafaela Teixeira', '31978901235', '78901234568', 'rafaela.teixeira@example.com'),
    ('Samuel Santos', '31989012346', '89012345679', 'samuel.santos@example.com'),
    ('Tatiane Lima', '31990123457', '90123456780', 'tatiane.lima@example.com'),
    ('Ulysses Rocha', '31901234578', '01234567891', 'ulysses.rocha@example.com'),
    ('Vânia Ferreira', '31912345680', '12345678903', 'vania.ferreira@example.com'),
    ('Wagner Nascimento', '31923456781', '23456789014', 'wagner.nascimento@example.com'),
    ('Xuxa Almeida', '31934567892', '34567890125', 'xuxa.almeida@example.com'),
    ('Yasmin Costa', '31945678903', '45678901236', 'yasmin.costa@example.com'),
    ('Zé Lima', '31956789014', '56789012347', 'ze.lima@example.com'),
    ('André Martins', '31967890125', '67890123458', 'andre.martins@example.com'),
    ('Beatriz Silva', '31978901236', '78901234569', 'beatriz.silva@example.com'),
    ('Caio Oliveira', '31989012347', '89012345680', 'caio.oliveira@example.com'),
    ('Débora Souza', '31990123458', '90123456781', 'debora.souza@example.com'),
    ('Eduarda Rocha', '31901234579', '01234567892', 'eduarda.rocha@example.com'),
    ('Fábio Almeida', '31912345681', '12345678904', 'fabio.almeida@example.com'),
    ('Gabriela Mendes', '31923456782', '23456789015', 'gabriela.mendes@example.com'),
    ('Henrique Ferreira', '31934567893', '34567890126', 'henrique.ferreira@example.com'),
    ('Isabela Lima', '31945678904', '45678901237', 'isabela.lima@example.com'),
    ('João Martins', '31956789015', '56789012348', 'joao.martins@example.com'),
    ('Karina Nascimento', '31967890126', '67890123459', 'karina.nascimento@example.com'),
    ('Luan Santos', '31978901237', '78901234570', 'luan.santos@example.com'),
    ('Marcos Costa', '31989012348', '89012345681', 'marcos.costa@example.com'),
    ('Nadia Silva', '31990123459', '90123456782', 'nadia.silva@example.com'),
    ('Olívia Almeida', '31901234580', '01234567893', 'olivia.almeida@example.com'),
    ('Pedro Rocha', '31912345682', '12345678905', 'pedro.rocha@example.com'),
    ('Querenza Lima', '31923456783', '23456789016', 'querenza.lima@example.com'),
    ('Ricardo Ferreira', '31934567894', '34567890127', 'ricardo.ferreira@example.com'),
    ('Sofia Santos', '31945678905', '45678901238', 'sofia.santos@example.com'),
    ('Thiago Mendes', '31956789016', '56789012349', 'thiago.mendes@example.com'),
    ('Úrsula Oliveira', '31967890127', '67890123460', 'ursula.oliveira@example.com'),
    ('Vinícius Almeida', '31978901238', '78901234571', 'vinicius.almeida@example.com'),
    ('Wesley Martins', '31989012349', '89012345682', 'wesley.martins@example.com'),
    ('Yasmin Ferreira', '31990123460', '90123456783', 'yasmin.ferreira@example.com'),
    ('Zelda Costa', '31901234581', '01234567894', 'zelda.costa@example.com'),
    ('Adriana Silva', '31912345683', '12345678906', 'adriana.silva@example.com'),
    ('Benedito Rocha', '31923456784', '23456789017', 'benedito.rocha@example.com'),
    ('Cláudia Lima', '31934567895', '34567890128', 'claudia.lima@example.com'),
    ('Davi Almeida', '31945678906', '45678901239', 'davi.almeida@example.com'),
    ('Elisa Santos', '31956789017', '56789012350', 'elisa.santos@example.com'),
    ('Fabiana Nascimento', '31967890128', '67890123461', 'fabiana.nascimento@example.com'),
    ('Geraldo Ferreira', '31978901239', '78901234572', 'geraldo.ferreira@example.com'),
    ('Helena Almeida', '31989012350', '89012345683', 'helena.almeida@example.com'),
    ('Igor Silva', '31990123461', '90123456784', 'igor.silva@example.com'),
    ('Juliana Costa', '31901234582', '01234567895', 'juliana.costa@example.com'),
    ('Karla Martins', '31912345684', '12345678907', 'karla.martins@example.com'),
    ('Leonardo Rocha', '31923456785', '23456789018', 'leonardo.rocha@example.com'),
    ('Marcia Almeida', '31934567896', '34567890129', 'marcia.almeida@example.com'),
    ('Nelson Lima', '31945678907', '45678901240', 'nelson.lima@example.com'),
    ('Otávio Ferreira', '31956789018', '56789012351', 'otavio.ferreira@example.com'),
    ('Patricia Santos', '31967890129', '67890123462', 'patricia.santos@example.com'),
    ('Quintino Silva', '31978901240', '78901234573', 'quintino.silva@example.com'),
    ('Roberta Almeida', '31989012351', '89012345684', 'roberta.almeida@example.com'),
    ('Sérgio Nascimento', '31990123462', '90123456785', 'sergio.nascimento@example.com'),
    ('Tânia Rocha', '31901234583', '01234567896', 'tania.rocha@example.com'),
    ('Ursula Ferreira', '31912345685', '12345678908', 'ursula.ferreira@example.com'),
    ('Vinícius Lima', '31923456786', '23456789019', 'vinicius.lima@example.com'),
    ('Wesley Santos', '31934567897', '34567890130', 'wesley.santos@example.com'),
    ('Xuxa Almeida', '31945678908', '45678901241', 'xuxa.almeida@example.com'),
    ('Yara Rocha', '31956789019', '56789012352', 'yara.rocha@example.com'),
    ('Zé Ferreira', '31967890130', '67890123463', 'ze.ferreira@example.com'),
    ('Adriana Souza', '11987654410', '12345678995', 'adriana.souza@email.com'),
    ('Bruno Lima', '11987654411', '12345678996', 'bruno.lima@email.com'),
    ('Carla Pereira', '11987654412', '12345678997', 'carla.pereira@email.com'),
    ('Diego Martins', '11987654413', '12345678998', 'diego.martins@email.com'),
    ('Eliane Costa', '11987654414', '12345678999', 'eliane.costa@email.com'),
    ('Fernando Almeida', '11987654415', '12345678000', 'fernando.almeida@email.com'),
    ('Gabriela Nunes', '11987654416', '12345678001', 'gabriela.nunes@email.com'),
    ('Henrique Ramos', '11987654417', '12345678002', 'henrique.ramos@email.com'),
    ('Isabella Santos', '11987654418', '12345678003', 'isabella.santos@email.com'),
    ('João Pedro', '11987654419', '12345678004', 'joao.pedro@email.com'),
    ('Karina Ferreira', '11987654420', '12345678005', 'karina.ferreira@email.com'),
    ('Lucas Silva', '11987654421', '12345678006', 'lucas.silva@email.com'),
    ('Mariana Oliveira', '11987654422', '12345678007', 'mariana.oliveira@email.com'),
    ('Nicolas Costa', '11987654423', '12345678008', 'nicolas.costa@email.com'),
    ('Olivia Almeida', '11987654424', '12345678009', 'olivia.almeida@email.com'),
    ('Paulo Henrique', '11987654425', '12345678010', 'paulo.henrique@email.com'),
    ('Quélia Martins', '11987654426', '12345678011', 'quelia.martins@email.com'),
    ('Rafael Mendes', '11987654427', '12345678012', 'rafael.mendes@email.com'),
    ('Sofia Rocha', '11987654428', '12345678013', 'sofia.rocha@email.com'),
    ('Thiago Costa', '11987654429', '12345678014', 'thiago.costa@email.com'),
    ('Vinícius Alves', '11987654430', '12345678015', 'vinicius.alves@email.com'),
    ('Carlos Silva', '31998765432', '98765432100', 'carlos.silva@example.com'),
    ('Mariana Costa', '31976543210', '12345678902', 'mariana.costa@example.com'),
    ('Lucas Pereira', '31912345679', '23456789012', 'lucas.pereira@example.com'),
    ('Fernanda Santos', '31987654321', '34567890123', 'fernanda.santos@example.com'),
    ('Roberto Lima', '31923456789', '45678901234', 'roberto.lima@example.com'),
    ('Juliana Rocha', '31934567890', '56789012345', 'juliana.rocha@example.com'),
    ('Thiago Almeida', '31945678901', '67890123456', 'thiago.almeida@example.com'),
    ('Priscila Martins', '31956789012', '78901234567', 'priscila.martins@example.com'),
    ('João Silva', '31987654321', '23456789012', 'joao.silva@example.com'),
    ('Maria Santos', '31923456789', '34567890123', 'maria.santos@example.com'),
    ('Carlos Lima', '31934567890', '45678901234', 'carlos.lima@example.com'),
    ('Fernanda Costa', '31945678901', '56789012345', 'fernanda.costa@example.com'),
    ('Ricardo Almeida', '31956789012', '67890123456', 'ricardo.almeida@example.com'),
    ('Juliana Rocha', '31967890123', '78901234567', 'juliana.rocha@example.com'),
    ('Tatiane Ferreira', '31978901234', '89012345678', 'tatiane.ferreira@example.com'),
    ('Lucas Martins', '31989012345', '90123456789', 'lucas.martins@example.com'),
    ('Ana Paula', '31990123456', '01234567890', 'ana.paula@example.com'),
    ('Pedro Santos', '31901234567', '12345678901', 'pedro.santos@example.com');


INSERT INTO `db_bhaskara`.`tb_aluno` (`nome_aluno`, `telefone_aluno`, `cpf_aluno`, `rg_aluno`, `nascimento_aluno`, `senha_aluno`, `id_endereco`, `id_cargo`, `id_responsavel`) VALUES
    ('Alice Silva', '11987654321', '12345678901', '123456789', '2000-05-10', '$2y$10$Wz2GzZXD8p6GfQ9gJ0vl4.tLCOrY9OG.MA0NdjLzQclA26Ed35pSu', 1, 1, 1),
    ('Bruno Costa', '11923456789', '12345678902', '234567890', '1999-06-15', '$2y$10$N.gsdB9Yblsc.gpP3I0dxeN4H7V8X/45Xs2d5F7Mj8ht89g3yOjxW', 2, 1, 2),
    ('Carla Mendes', '11976543210', '12345678903', '345678901', '1998-07-20', '$2y$10$IKGJcNTE2cM3QjKjW15hCeG3nqYeTZgl/aHSq6AuqN6XHGTPGc0wO', 3, 1, 3),
    ('Daniel Oliveira', '11876543210', '12345678904', '456789012', '1997-08-25', '$2y$10$YgLoD3NfN9v50zXLm3F9eO9kuhtHiS3ccl4U89p7f9B2NO1hO28oK', 4, 1, 4),
    ('Eliane Santos', '11987654322', '12345678905', '567890123', '1996-09-30', '$2y$10$h7gkOFeDw1ex4.67OkZQeO/3.SYa9g6Z6flZ1jN8z5y4MkDYO72bW', 5, 1, 5),
    ('Felipe Lima', '11854321678', '12345678906', '678901234', '1995-10-12', '$2y$10$5F4eI6JH7efz0XIN8cR0/ebbsQHa1ucwG7k2kB5BkHTq5BLO3y/mW', 6, 1, 6),
    ('Gabriela Pires', '11987654323', '12345678907', '789012345', '1994-11-18', '$2y$10$QmH4flk5S6zXr.DW4Uab7uV6b2NcPrfQHAsx4hco/U7sfnK6d.A.u', 7, 1, 7),
    ('Hugo Almeida', '11923456790', '12345678908', '890123456', '1993-12-05', '$2y$10$XxREhGZhLDQOlm2Or3gdTu48H9BhQhRiPeUw1j6y1rxoc3OwFSnMK', 8, 1, 8),
    ('Isabela Rocha', '11987654324', '12345678909', '901234567', '1992-01-22', '$2y$10$AqFJz8p0Lna0PCEIQlJk2O.KQ7.b5oFOkci7N1hZj6y0P6lFXUv7K', 9, 1, 9),
    ('Jorge Martins', '11987654325', '12345678910', '012345678', '1991-02-10', '$2y$10$8VPqM3J0.BO27ZZ7kmN8fOZ13w34MvXkjzWkDuzIjUw1F4IkauD5G', 10, 1, 10),
    ('Karina Nascimento', '11987654326', '12345678911', '123456790', '1990-03-15', '$2y$10$9RZ3AqN4LF6YejE/UpG0gO/i.NGrT4O9FfDugI5MkA6guM.0ZQUC.', 11, 1, 11),
    ('Lucas Almeida', '11987654327', '12345678912', '234567891', '1989-04-01', '$2y$10$2uR3fy7zN8tErw3QV8Xw8eWq/NXbRGwPfw5FNcQ59.3eEU71P.L5G', 12, 1, 12),
    ('Mariana Soares', '11987654328', '12345678913', '345678902', '1988-05-20', '$2y$10$K1mLEKoU6t5nGkwyH4reBe1Uk1MJdVPwBevN3iBYxX56lUmD3I5H6', 13, 1, 13),
    ('Natan Pereira', '11987654329', '12345678914', '456789013', '1987-06-12', '$2y$10$4HABQU3.yALnMoYcO2Fm9e5J1oy5NQOv1OcUQzQG4Hfs.VKKXyJ3i', 14, 1, 14),
    ('Olivia Cunha', '11987654330', '12345678915', '567890124', '1986-07-18', '$2y$10$zXZ5hHLYg5AylHRrDqPTkuBuqCJuFiAwEIRaLkkhnA4XzxzG2l8QK', 15, 1, 15),
    ('Paulo Vitor', '11987654331', '12345678916', '678901235', '1985-08-25', '$2y$10$AsJXxEAp8U5gG0I/7T7JYeqUtD7E4ExQ2ympNqvEsE5Dwh7x0/IoO', 16, 1, 16),
    ('Quezia Alves', '11987654332', '12345678917', '789012346', '1984-09-30', '$2y$10$5g3Z7O9Y8xID9PkmhRgq.eFFyYyOnVZXZ9uEQuGt64Qllq8WRSKVi', 17, 1, 17),
    ('Rafael Costa', '11987654333', '12345678918', '890123457', '1983-10-18', '$2y$10$U0JnW4w5yVMTp6dH4z1D/uQ2YYrcA8n6OiMkTcRzySKO4S2QF8fxu', 18, 1, 18),
    ('Sofia Lima', '11987654334', '12345678919', '901234568', '1982-11-12', '$2y$10$PbYQci/4lKiZivS7AwbPoOtQDO2tH3sh5x2rCGG1T4eMDIB9cPBUi', 19, 1, 19),
    ('Thiago Martins', '11987654335', '12345678920', '012345679', '1981-12-05', '$2y$10$2v2U4B05P43WcF8hfZp.kOEPYkFrsAFh8C5DMyB24GL4F4B2Z5jB.', 20, 1, 20),
    ('Ursula Sousa', '11987654336', '12345678921', '123456780', '1980-01-22', '$2y$10$3P1z2ZsHQBlrM9eq4h1OMu8mMsyLphA3U8y8TI5.fyE0MaZ6R0tNW', 21, 1, 21),
    ('Vinicius Lima', '11987654337', '12345678922', '234567891', '1979-02-28', '$2y$10$g/2Q7mX5O67Lzgu2nXKmC.fz5HZ94kKcDQ9NeN2IMuHfZuoIS5Ghu', 22, 1, 22),
    ('Wendy Gonçalves', '11987654338', '12345678923', '345678902', '1978-03-15', '$2y$10$QG49KpFpeYg7PaWw5/.pMefh4AuMx9OlLB4Pl1fyOWBcpN8XaVg3C', 23, 1, 23),
    ('Xuxa Pereira', '11987654339', '12345678924', '456789013', '1977-04-18', '$2y$10$AtU6Wxw8ROm7RBNwXptG.OaYJ6c1.g.pB9yxMUK9Wn98k8u1YHDlC', 24, 1, 24),
    ('Yasmin Santos', '11987654340', '12345678925', '567890124', '1976-05-30', '$2y$10$Dp4N2d/DXrQFrEm7nIN8yOHo3NfJ1N1i26D.O4D7MtcTwnCQg8MiO', 25, 1, 25),
    ('Zé Carlos', '11987654341', '12345678926', '678901235', '1975-06-12', '$2y$10$7UNi2DS62QBBhztTVWjsX.J7uHuyUwxzxfHl47lUJzF0GoA0P.BgK', 26, 1, 26),
    ('Ana Clara', '11987654342', '12345678927', '789012346', '1974-07-23', '$2y$10$hEzAcK3.G1bF2UezhDkDE7xU7ptQd.kFBw1Ma/Hx7E2J0Dda5tsNe', 27, 1, 27),
    ('Beto Gomes', '11987654343', '12345678928', '890123457', '1973-08-30', '$2y$10$F1K2gd7G7Q4o7D3.I8fzQeWmC9FB9hh/ucjOFQf.8mU.1kQOhW4Fm', 28, 1, 28),
    ('Cleo Fernandes', '11987654344', '12345678929', '901234568', '1972-09-14', '$2y$10$R5WxtqE8wi.SENm3/Ti7ee2yPRA7K5sGaUnGfG0UOxhfCEl6oFJ4.', 29, 1, 29),
    ('Diego Castro', '11987654345', '12345678930', '012345679', '1971-10-15', '$2y$10$uDeZ5B00Mb6NgW9c5wRW8.OvlRZZM6wPG3I5HYW5ql3GxVw3aLFBi', 30, 1, 30),
    ('Eliana Rocha', '11987654346', '12345678931', '123456780', '1970-11-21', '$2y$10$2Mb1U.gyVQ8tGq3qpu7Lp.a1DzGpG2FiO0KUMMgC85Qfr63du64Y.', 31, 1, 31),
    ('Felipe Correia', '11987654347', '12345678932', '234567891', '1969-12-19', '$2y$10$8Zq0O.qXlFrN3mbdDPH/CiP6HY71rGRQaO8.9HnBynOnkBRP1j4h2', 32, 1, 32),
    ('Giovanna Almeida', '11987654348', '12345678933', '345678902', '1968-01-27', '$2y$10$9D61WMBIN7P5LRF3xfC4LeKiFwZ1h8f6gZPKqF.M1G1nbPG2KZZF2', 33, 1, 33),
    ('Henrique Lima', '11987654349', '12345678934', '456789013', '1967-02-13', '$2y$10$4Z6U4M35g.BXy4kD4YxTKO5xpe1.S7zX6hzs5E8I7NzZ2e5B62ZKq', 34, 1, 34),
    ('Irene Pires', '11987654350', '12345678935', '567890124', '1966-03-19', '$2y$10$LAG3FpD9jZ3U5L0FeJ8KGOe/n3gj1cH3Lo7fAb/YDltZUGQMFvH6a', 35, 1, 35),
    ('João Paulo', '11987654351', '12345678936', '678901235', '1965-04-29', '$2y$10$eDNG5a.XCC4PY7AxGbAX4OdTR8JHox5hi/m5ZXyGn/iOf0mr9SnkC', 36, 1, 36),
    ('Karla Santos', '11987654352', '12345678937', '789012346', '1964-05-16', '$2y$10$3hrcT0hhf4OCA8EyodmCVuM5CqZ8GxMzytIdSYbY8bSyEa/VtCYYC', 37, 1, 37),
    ('Leonardo Reis', '11987654353', '12345678938', '890123457', '1963-06-10', '$2y$10$9Gm98aD8oc/uZLgf4Q0P/u.tPceATnEefghbPYQnnO.PGmPr/5yGK', 38, 1, 38),
    ('Maria Eduarda', '11987654354', '12345678939', '901234568', '1962-07-23', '$2y$10$yY4D5t66HRbTkgZ1L88/cO7B9mHbHQ2V0WIp8qF2W8FJhJcD3ycuq', 39, 1, 39),
    ('Nicolas Costa', '11987654355', '12345678940', '012345679', '1961-08-14', '$2y$10$3ILQzSn0O6FqX3FQmDgX2O1v7gCilVh8FUmP3r2MvHRhRx9UoJmeO', 40, 1, 40),
    ('Olga Martins', '11987654356', '12345678941', '123456780', '1960-09-30', '$2y$10$1fHy.KKv1vea6DMP5irP6e9mCCdbXXuSe0P6WWPG.10jV60nmngRC', 41, 1, 41),
    ('Pablo Santos', '11987654357', '12345678942', '234567891', '1959-10-01', '$2y$10$3A4HH02vQQHo7cW4Z3Pv6OU6mK4FFd3Wx38bnF1vhpudWoiyucZFu', 42, 1, 42),
    ('Quiteria Silva', '11987654358', '12345678943', '345678902', '1958-11-15', '$2y$10$W8L5wEDkuWObFB3gXfXwEOJBuFb2e90vGcdGb3iG0Cr7gUoMDM1se', 43, 1, 43),
    ('Robson Almeida', '11987654359', '12345678944', '456789013', '1957-12-20', '$2y$10$Ic8bnpZHrjJFN/01kKVtGOL1P4h6Rh1ty83bgG7lf3XLt5r3qghay', 44, 1, 44),
    ('Samantha Rosa', '11987654360', '12345678945', '567890124', '1956-01-11', '$2y$10$M.fZz1.sIqJD2naJYgY6CO5G7oTzC3PG3/s4M8KhI8iv1js/3n1Fy', 45, 1, 45),
    ('Tiago Pereira', '11987654361', '12345678946', '678901235', '1955-02-18', '$2y$10$k2QkIew8IMAN3vUoZitOTOVBEBF6Dle3I3l9XZJFO3pHP0S8F8/5a', 46, 1, 46),
    ('Ulysses Santos', '11987654362', '12345678947', '789012346', '1954-03-29', '$2y$10$EIPoUFnXJn0I1Pp5Go4APO7zyRMvOCSxJhZWq7kK0cMysn7zZ4ST2', 47, 1, 47),
    ('Valentina Lima', '11987654363', '12345678948', '890123457', '1953-04-07', '$2y$10$6A9nO.a63RP4wGp6lGp/YOd1Dpeu2Fz7txCwO0tM1d3GtBnnqufO4', 48, 1, 48),
    ('Wellington Dias', '11987654364', '12345678949', '901234568', '1952-05-26', '$2y$10$P/jhjBZMg3ChjYb6cYfEvu3VGCPLCVbs2GpmjpZXg.Fn1RCbyz9S.', 49, 1, 49),
    ('Xuxa Lopes', '11987654365', '12345678950', '012345679', '1951-06-30', '$2y$10$R.Cqv1W98cYZXhS5PPTBzuD0C8Cv6W1GZrYb9SlCj7YxStEGR41x2', 50, 1, 50),
    ('Yuri Santos', '11987654366', '12345678951', '123456780', '1950-07-14', '$2y$10$Q0YAPyPzOeC7OiHIZ5cQzOq.HzIdYKYkxMPFjbF81Vftc2qmtuxhy', 51, 1, 51),
    ('Zuleika Lima', '11987654367', '12345678952', '234567891', '1949-08-25', '$2y$10$A2kVwWZ.DWZYVHRfhC64R.uLrZ1VGexm9aFuTf/WGVzTEsU03DX92', 52, 1, 52),
    ('Anderson Santos', '11987654368', '12345678953', '345678902', '1948-09-16', '$2y$10$4a.HY7OQtNY5Udo7XkHtxOoyU1Fz39U/zmpUeF3Nn5DO4kpXyP0MC', 53, 1, 53),
    ('Bárbara Dias', '11987654369', '12345678954', '456789013', '1947-10-07', '$2y$10$M4M9uO7T2mAeejA0AG8kPec9y71sEqB4rZ0TAIn.qOHyHhUysZ0a.', 54, 1, 54),
    ('Claudia Alves', '11987654370', '12345678955', '567890124', '1946-11-19', '$2y$10$6sPYnx7OP3UJz5.zlciJKeOTYayHTxAV83TX6W7M9SP5oNmAAJQjK', 55, 1, 55),
    ('Davi Mendes', '11987654371', '12345678956', '678901235', '1945-12-30', '$2y$10$2mKoRnlX7bEDH3VGV6uvP.z20qFQXYmNwb2AD3/1ow9M6i4U82R32', 56, 1, 56),
    ('Eloá Costa', '11987654372', '12345678957', '789012346', '1944-01-12', '$2y$10$20Dxy9P74sK0Y1ClF8hYP6/3nNmzhn61eIo85kNf8u3cddEpq3T7W', 57, 1, 57),
    ('Fernando Lima', '11987654373', '12345678958', '890123457', '1943-02-28', '$2y$10$B1.tK1gQb57j6R8FzG/iUOiM/V9FR7uEM24prNcbF6FzOzDBj5XZy', 58, 1, 58),
    ('Gabrielly Santos', '11987654374', '12345678959', '901234568', '1942-03-31', '$2y$10$PGkOK8z5RJzLZGt5WlRmO.zOFTIufLZ5cPjxGZpG1D6hSeFS3MZJ6', 59, 1, 59),
    ('Henrique Ferreira', '11987654375', '12345678960', '012345679', '1941-04-14', '$2y$10$MiydEbgOKcCHHUkUgHhNWeLJ0lC7H9fXX0AE2l.xIm88Cln7A5G9G', 60, 1, 60),
    ('Isis Ribeiro', '11987654376', '12345678961', '123456780', '1940-05-25', '$2y$10$E2zWsm3c1D/x65tHy9U16OGLujEEHTU0HODUUDg5V0gqB/M19ETRS', 61, 1, 61),
    ('João Victor', '11987654377', '12345678962', '234567891', '1939-06-13', '$2y$10$Q.4hxQHdJhtkQHfDgOjFluLTJTD3P2Y7e0R3Otbzzi1x5f2nxFiJq', 62, 1, 62),
    ('Karol Gomes', '11987654378', '12345678963', '345678902', '1938-07-20', '$2y$10$b3HfIM9X5zQ9pRhYBiU08u4JxFGzt16AwhKiCr9E5QuRkGx9GT8iG', 63, 1, 63),
    ('Luiz Gustavo', '11987654379', '12345678964', '456789013', '1937-08-24', '$2y$10$0BfS4OxN0y9txNgCN/pPbOh9zFuh8TxDnnqBXbD/Jr1S1k7kF2X/2', 64, 1, 64),
    ('Marina Soares', '11987654380', '12345678965', '567890124', '1936-09-18', '$2y$10$7f0AwHbtb7mX9I9NCyES/.9mX.bIZqRehBSJ0Ubx5N1OQL1jFPmVK.', 65, 1, 65),
    ('Nicolas Oliveira', '11987654381', '12345678966', '678901235', '1935-10-31', '$2y$10$YuTrmj1Dh2deudrH.D9ysuZ8ReExldwhqT1VzMby.4Ri0H1mjRt7W', 66, 1, 66),
    ('Olivia Santos', '11987654382', '12345678967', '789012346', '1934-11-29', '$2y$10$1zS9svvVs2FbXHqCQ4ceCeqG3Nfz3GD0np17vqF2IDlSfj70WiMmK', 67, 1, 67),
    ('Pedro Vitor', '11987654383', '12345678968', '890123457', '1933-12-20', '$2y$10$k42Q6tMmX6hRjQ0xC4CsyWIE4nRM6CN7HbVxSzSt2f8EDrZ.1vWeO', 68, 1, 68),
    ('Quésia Ferreira', '11987654384', '12345678969', '901234568', '1932-01-14', '$2y$10$5F2vPLPUnq4n78f8brMApO2NUH9O1FnfbD8eEOCdH64LPVx1MEApG', 69, 1, 69),
    ('Rafael Soares', '11987654385', '12345678970', '012345679', '1931-02-18', '$2y$10$7PO9RjU0/qmgZmbD1xIu4uj6yW2ilj7DP8OK8Dg8zHcPGxgYttZ9m', 70, 1, 70),
    ('Sofia Almeida', '11987654386', '12345678971', '123456780', '1930-03-25', '$2y$10$6Q0ZxMRPFB/lUmVniEK8/20WlzwB2rd0De3RlGiYQmRLM0WkuGiA.', 71, 1, 71),
    ('Thiago Santos', '11987654387', '12345678972', '234567891', '1929-04-19', '$2y$10$uJUS.I3obvFhj/KscQm2zeOlbs5MNCE28ZaS4rcGZOG1G32nQ8ch2', 72, 1, 72),
    ('Ursula Gomes', '11987654388', '12345678973', '345678902', '1928-05-07', '$2y$10$W8odZGCBO5FbxCciALAt5O.7EDHv33HgY8XQPYK9glH51yT6Fxu2j', 73, 1, 73),
    ('Vitor Silva', '11987654389', '12345678974', '456789013', '1927-06-30', '$2y$10$O6BNBKn/smU5iqZVb9FuV6.IaKdtz0vO28sdQ9DSKnZ9PYtSTav4G', 74, 1, 74),
    ('Wesley Costa', '11987654390', '12345678975', '567890124', '1926-07-23', '$2y$10$W8V9N69a8ORQf/lfTPae7.wT6SHMe2QG2U.sOv9RRkF9hb7cmHhzi', 75, 1, 75),
    ('Yasmin Almeida', '11987654391', '12345678976', '678901235', '1925-08-15', '$2y$10$u7bTvnIBU7ZtD9jsjTtWuOaMwbESAzSWOMmo9Pb4JFOSe.S8N7pAm', 76, 1, 76),
    ('Zoe Santos', '11987654392', '12345678977', '789012346', '1924-09-06', '$2y$10$6FzHMNEZj8FvqW3pO2y7Ne3hzMbA6/3WcxyUOgHZTlbAv1b4d0GJm', 77, 1, 77),
    ('Aline Costa', '11987654393', '12345678978', '890123457', '1923-10-29', '$2y$10$6FzHMNEZj8FvqW3pO2y7Ne3hzMbA6/3WcxyUOgHZTlbAv1b4d0GJm', 78, 1, 78),
    ('Bruno Mendes', '11987654394', '12345678979', '012345679', '1922-11-16', '$2y$10$A4v5lCk8bD76q/a9ydIm8Ok57ZyQ7OcmCPa5P1Rm8CBf1IBHqgOsG', 79, 1, 79),
    ('Camila Almeida', '11987654395', '12345678980', '123456780', '1921-12-22', '$2y$10$9dU9O8dKT1U3E3D48g3imO3HwbcbMvU3Dz67jZByE5IjKu21nLFGm', 80, 1, 80),
    ('Daniel Oliveira', '11987654396', '12345678981', '234567891', '1920-01-15', '$2y$10$Dk6H8fGZW0OwSTv3hA7u3OQV1EOM4BKhBX4F/hY2lgRf1T1w6hPvK', 81, 1, 81),
    ('Eduardo Santos', '11987654397', '12345678982', '345678902', '1919-02-10', '$2y$10$2n7U3F9U5pBaZ2Zg5JoFMuMCgrNmC4fukbnG7xY4zO3UKfLPHeX8q', 82, 1, 82),
    ('Fernanda Soares', '11987654398', '12345678983', '456789013', '1918-03-27', '$2y$10$YzCPZt9DXs3ugp2PQXzFneL8BaLjnb0D6p92bxHzmnslW0knbR6U6', 83, 1, 83),
    ('Gustavo Lima', '11987654399', '12345678984', '567890124', '1917-04-14', '$2y$10$4aQ8K5Y9UopgxD8TEHYP8O5BoEzRF4H7UinNU0gf54zFh9wH8HzH6', 84, 1, 84),
    ('Heloísa Martins', '11987654400', '12345678985', '678901235', '1916-05-18', '$2y$10$ZqAuvvJWY96plYeLC8MlY.jFnW71sURwlU6UyS6Iz5M55Jb5MmZgS', 85, 1, 85),
    ('Igor Ferreira', '11987654401', '12345678986', '789012346', '1915-06-29', '$2y$10$V1wP4OW0UFl3ONZGbmPVOu5oh9C/fG10GBv6q3rbprvFmDAt6IcPq', 86, 1, 86),
    ('Juliana Silva', '11987654402', '12345678987', '890123457', '1914-07-30', '$2y$10$g0EPx5x2F0cQ2QpYY2B7zG4PQY2I3qizn3aPdvRwoJ7VP3D4GTEXu', 87, 1, 87),
    ('Kátia Almeida', '11987654403', '12345678988', '901234568', '1913-08-25', '$2y$10$8kZbgFTeQ0uVth1e8x0wUO2l5mN/QeJmRY3GOrK/bW.LTh6zbdYI.', 88, 1, 88),
    ('Leonardo Torres', '11987654404', '12345678989', '012345679', '1912-09-20', '$2y$10$F3Pq3D85rfNE0TrBPU7QWeAo4K1Q29U6FgxQaq7C3DCYBy2peP7DG', 89, 1, 89),
    ('Mariana Lopes', '11987654405', '12345678990', '123456780', '1911-10-18', '$2y$10$3MYxFC9esAq7bt1O89V2guvTxS2w9pM6RaL3FVxN61H0H15T7WBi2', 90, 1, 90),
    ('Nathalia Pires', '11987654406', '12345678991', '234567891', '1910-11-12', '$2y$10$G5dFb4nZkndvZP.7WW.I6e2JbvnGPIy6nPaUwrw6hM7Z8h5p1OW.q', 91, 1, 91),
    ('Otávio Santos', '11987654407', '12345678992', '345678902', '1909-12-01', '$2y$10$2FZcB0A8s5cZQhW4F8VY2OSNHAcFe5RZcr9aytPh4YKu8ddK5Uif2', 92, 1, 92),
    ('Priscila Nunes', '11987654408', '12345678993', '456789013', '1908-01-14', '$2y$10$H9kfr2PfSMztOWP3Fzi.IudF7Wk0jMSqXkL/9zUbI0vpcNU0cZ6ku', 93, 1, 93),
    ('Quintino Ribeiro', '11987654409', '12345678994', '567890124', '1907-02-21', '$2y$10$AZE4y3.sFsH8BAlwFF/6W.zfF4vUbED2FD3QbsYAAawGH22.cpbQK', 94, 1, 94),
    ('Alice Silva', '1234567890', '12345678431', '1234567890', '2000-01-15', '$2y$10$KIXeKoDlv5K2tR1U42e6QO3FrC3PAX6fnTL7zYkx0l5.kA.qQwNE.', 95, 1, 95),
    ('Bruno Santos', '0987654321', '23456789012', '2345678901', '2001-02-20', '$2y$10$KIXeKoDlv5K2tR1U42e6QO3FrC3PAX6fnTL7zYkx0l5.kA.qQwNE.', 96, 1, 96),
    ('Carla Oliveira', '1122334455', '34567890123', '3456789012', '1999-03-25', '$2y$10$KIXeKoDlv5K2tR1U42e6QO3FrC3PAX6fnTL7zYkx0l5.kA.qQwNE.', 97, 1, 97),
    ('Daniela Pereira', '2233445566', '45678901234', '4567890123', '1998-04-30', '$2y$10$KIXeKoDlv5K2tR1U42e6QO3FrC3PAX6fnTL7zYkx0l5.kA.qQwNE.', 98, 1, 98),
    ('Eduardo Lima', '3344556677', '56789012345', '5678901234', '1997-05-05', '$2y$10$KIXeKoDlv5K2tR1U42e6QO3FrC3PAX6fnTL7zYkx0l5.kA.qQwNE.', 99, 1, 99),
    ('Fernanda Costa', '4455667788', '67890123456', '6789012345', '2002-06-10', '$2y$10$KIXeKoDlv5K2tR1U42e6QO3FrC3PAX6fnTL7zYkx0l5.kA.qQwNE.', 100, 1, 100),
    ('Gabriel Rocha', '5566778899', '78901234567', '7890123456', '1996-07-15', '$2y$10$KIXeKoDlv5K2tR1U42e6QO3FrC3PAX6fnTL7zYkx0l5.kA.qQwNE.', 101, 1, 101),
    ('Helena Almeida', '6677889900', '89012345678', '8901234567', '1995-08-20', '$2y$10$KIXeKoDlv5K2tR1U42e6QO3FrC3PAX6fnTL7zYkx0l5.kA.qQwNE.', 102, 1, 102),
    ('Maria Oliveira', '6677889911', '89012345691', '8901234576', '1996-07-20', '$2y$10$abcde1234567890abcdef1234567890abcdef1234567890abcdef.', 103, 1, 103),
    ('Pedro Santos', '6677889912', '89012345692', '8901234577', '1992-02-28', '$2y$10$abcde1234567890abcdef1234567890abcdef1234567890abcdef.', 104, 1, 104),
    ('Ana Costa', '6677889913', '89012345693', '8901234578', '1993-11-30', '$2y$10$abcde1234567890abcdef1234567890abcdef1234567890abcdef.', 105, 1, 105),
    ('Carlos Almeida', '6677889914', '89012345694', '8901234579', '1989-04-12', '$2y$10$abcde1234567890abcdef1234567890abcdef1234567890abcdef.', 106, 1, 106),
    ('Fernanda Lima', '6677889915', '89012345695', '8901234580', '1990-09-14', '$2y$10$abcde1234567890abcdef1234567890abcdef1234567890abcdef.', 107, 1, 107),
    ('Ricardo Pereira', '6677889916', '89012345696', '8901234581', '1988-12-25', '$2y$10$abcde1234567890abcdef1234567890abcdef1234567890abcdef.', 108, 1, 108),
    ('Juliana Rocha', '6677889917', '89012345697', '8901234582', '1991-01-01', '$2y$10$abcde1234567890abcdef1234567890abcdef1234567890abcdef.', 109, 1, 109),
    ('Lucas Martins', '6677889918', '89012345698', '8901234583', '1994-06-06', '$2y$10$abcde1234567890abcdef1234567890abcdef1234567890abcdef.', 110, 1, 110),
    ('Tatiane Ferreira', '6677889919', '89012345699', '8901234584', '1997-03-03', '$2y$10$abcde1234567890abcdef1234567890abcdef1234567890abcdef.', 111, 1, 111),
    ('João Silva', '6677889910', '89012345690', '8901234575', '1995-05-15', '$2y$10$abcde1234567890abcdef1234567890abcdef1234567890abcdef.', 112, 1, 112);


insert into `tb_matricula` values
    (1, 2, DEFAULT),
    (2, 2, DEFAULT),
    (3, 2, DEFAULT),
    (4, 2, DEFAULT),
    (5, 2, DEFAULT),
    (6, 2, DEFAULT),
    (7, 2, DEFAULT),
    (8, 2, DEFAULT),
    (9, 2, DEFAULT),
    (10, 2, DEFAULT),
    (11, 2, DEFAULT),
    (12, 2, DEFAULT),
    (13, 2, DEFAULT),
    (14, 2, DEFAULT),
    (15, 2, DEFAULT),
    (16, 2, DEFAULT),
    (17, 2, DEFAULT),
    (18, 2, DEFAULT),
    (19, 2, DEFAULT),
    (20, 2, DEFAULT),
    (21, 2, DEFAULT),
    (22, 2, DEFAULT),
    (23, 2, DEFAULT),
    (24, 2, DEFAULT),
    (25, 2, DEFAULT),
    (26, 2, DEFAULT),
    (27, 2, DEFAULT),
    (28, 2, DEFAULT),
    (29, 2, DEFAULT),
    (30, 2, DEFAULT),
    (31, 2, DEFAULT),
    (32, 2, DEFAULT),
    (33, 2, DEFAULT),
    (34, 2, DEFAULT),
    (35, 2, DEFAULT),
    (36, 2, DEFAULT),
    (37, 2, DEFAULT),
    (38, 2, DEFAULT),
    (39, 2, DEFAULT),
    (40, 2, DEFAULT),
    (41, 2, DEFAULT),
    (42, 2, DEFAULT),
    (43, 2, DEFAULT),
    (44, 2, DEFAULT),
    (45, 2, DEFAULT),
    (46, 2, DEFAULT),
    (47, 2, DEFAULT),
    (48, 2, DEFAULT),
    (49, 2, DEFAULT),
    (50, 2, DEFAULT),
    (51, 2, DEFAULT),
    (52, 2, DEFAULT),
    (53, 2, DEFAULT),
    (54, 2, DEFAULT),
    (55, 2, DEFAULT),
    (56, 2, DEFAULT),
    (57, 2, DEFAULT),
    (58, 2, DEFAULT),
    (59, 2, DEFAULT),
    (60, 2, DEFAULT),
    (61, 2, DEFAULT),
    (62, 2, DEFAULT),
    (63, 2, DEFAULT),
    (64, 2, DEFAULT),
    (65, 2, DEFAULT),
    (66, 2, DEFAULT),
    (67, 2, DEFAULT),
    (68, 2, DEFAULT),
    (69, 2, DEFAULT),
    (70, 2, DEFAULT),
    (71, 2, DEFAULT),
    (72, 2, DEFAULT),
    (73, 2, DEFAULT),
    (74, 2, DEFAULT),
    (75, 2, DEFAULT),
    (76, 2, DEFAULT),
    (77, 2, DEFAULT),
    (78, 2, DEFAULT),
    (79, 2, DEFAULT),
    (80, 2, DEFAULT),
    (81, 2, DEFAULT),
    (82, 2, DEFAULT),
    (83, 2, DEFAULT),
    (84, 2, DEFAULT),
    (85, 2, DEFAULT),
    (86, 2, DEFAULT),
    (87, 2, DEFAULT),
    (88, 2, DEFAULT),
    (89, 2, DEFAULT),
    (90, 2, DEFAULT),
    (91, 2, DEFAULT),
    (92, 2, DEFAULT),
    (93, 2, DEFAULT),
    (94, 2, DEFAULT),
    (95, 2, DEFAULT),
    (96, 2, DEFAULT),
    (97, 2, DEFAULT),
    (98, 2, DEFAULT),
    (99, 2, DEFAULT),
    (100, 2, DEFAULT),
    (101, 2, DEFAULT),
    (102, 2, DEFAULT),
    (103, 2, DEFAULT),
    (104, 2, DEFAULT),
    (105, 2, DEFAULT),
    (106, 2, DEFAULT),
    (107, 2, DEFAULT),
    (108, 2, DEFAULT),
    (109, 2, DEFAULT),
    (110, 2, DEFAULT),
    (111, 2, DEFAULT),
    (112, 2, DEFAULT);

insert into `tb_docente` values
    (null, 'Ana Paula Silva', '11987654321', '12345678901', '123456789', 'ana.silva@email.com', '$2y$12$s4JRRT8DVJGDgcjjhkI.yeUUPN8na7NSvl8ZERJ7SKw/jyQSdY4zO', NOW(), NULL, 'A', 1, 2),
    (null, 'Bruno Alves Costa', '11976543210', '23456789012', '234567890', 'bruno.costa@email.com', '$2y$12$s4JRRT8DVJGDgcjjhkI.yeUUPN8na7NSvl8ZERJ7SKw/jyQSdY4zO', NOW(), NULL, 'A', 2, 2),
    (null, 'Carla Fernanda Lima', '11965432109', '34567890123', '345678901', 'carla.lima@email.com', '$2y$12$s4JRRT8DVJGDgcjjhkI.yeUUPN8na7NSvl8ZERJ7SKw/jyQSdY4zO', NOW(), NULL, 'A', 3, 2),
    (null, 'Diego Pereira Santos', '11954321098', '45678901234', '456789012', 'diego.santos@email.com', '$2y$12$s4JRRT8DVJGDgcjjhkI.yeUUPN8na7NSvl8ZERJ7SKw/jyQSdY4zO', NOW(), NULL, 'A', 4, 3),
    (null, 'Eliana Rodrigues Martins', '11943210987', '56789012345', '567890123', 'eliana.martins@email.com', '$2y$12$s4JRRT8DVJGDgcjjhkI.yeUUPN8na7NSvl8ZERJ7SKw/jyQSdY4zO', NOW(), NULL, 'A', 5, 4),
    (null, 'Fabio Henrique Oliveira', '11932109876', '67890123456', '678901234', 'fabio.oliveira@email.com', '$2y$12$s4JRRT8DVJGDgcjjhkI.yeUUPN8na7NSvl8ZERJ7SKw/jyQSdY4zO', NOW(), NULL, 'A', 6, 5);

insert into `tb_turma` value
(null, '6º A'),
(null, '6º B'),
(null, '7º A'),
(null, '7º B'),
(null, '8º A'),
(null, '8º B'),
(null, '9º A'),
(null, '9º B'),
(null, '1ºEM A'),
(null, '1ºEM B'),
(null, '2ºEM A'),
(null, '2ºEM B'),
(null, '3ºEM A'),
(null, '3ºEM B');

insert into `tb_matricula_turma` values
    (1, 2, 1),
    (2, 2, 1),
    (3, 2, 1),
    (4, 2, 1),
    (5, 2, 1),
    (6, 2, 1),
    (7, 2, 1),
    (8, 2, 1),
    (9, 2, 2),
    (10, 2, 2),
    (11, 2, 2),
    (12, 2, 2),
    (13, 2, 2),
    (14, 2, 2),
    (15, 2, 2),
    (16, 2, 2),
    (17, 2, 3),
    (18, 2, 3),
    (19, 2, 3),
    (20, 2, 3),
    (21, 2, 3),
    (22, 2, 3),
    (23, 2, 3),
    (24, 2, 3),
    (25, 2, 4),
    (26, 2, 4),
    (27, 2, 4),
    (28, 2, 4),
    (29, 2, 4),
    (30, 2, 4),
    (31, 2, 4),
    (32, 2, 4),
    (33, 2, 5),
    (34, 2, 5),
    (35, 2, 5),
    (36, 2, 5),
    (37, 2, 5),
    (38, 2, 5),
    (39, 2, 5),
    (40, 2, 5),
    (41, 2, 6),
    (42, 2, 6),
    (43, 2, 6),
    (44, 2, 6),
    (45, 2, 6),
    (46, 2, 6),
    (47, 2, 6),
    (48, 2, 6),
    (49, 2, 7),
    (50, 2, 7),
    (51, 2, 7),
    (52, 2, 7),
    (53, 2, 7),
    (54, 2, 7),
    (55, 2, 7),
    (56, 2, 7),
    (57, 2, 8),
    (58, 2, 8),
    (59, 2, 8),
    (60, 2, 8),
    (61, 2, 8),
    (62, 2, 8),
    (63, 2, 8),
    (64, 2, 8),
    (65, 2, 9),
    (66, 2, 9),
    (67, 2, 9),
    (68, 2, 9),
    (69, 2, 9),
    (70, 2, 9),
    (71, 2, 9),
    (72, 2, 9),
    (73, 2, 10),
    (74, 2, 10),
    (75, 2, 10),
    (76, 2, 10),
    (77, 2, 10),
    (78, 2, 10),
    (79, 2, 10),
    (80, 2, 10),
    (81, 2, 11),
    (82, 2, 11),
    (83, 2, 11),
    (84, 2, 11),
    (85, 2, 11),
    (86, 2, 11),
    (87, 2, 11),
    (88, 2, 11),
    (89, 2, 12),
    (90, 2, 12),
    (91, 2, 12),
    (92, 2, 12),
    (93, 2, 12),
    (94, 2, 12),
    (95, 2, 12),
    (96, 2, 12),
    (97, 2, 13),
    (98, 2, 13),
    (99, 2, 13),
    (100, 2, 13),
    (101, 2, 13),
    (102, 2, 13),
    (103, 2, 13),
    (104, 2, 13),
    (105, 2, 14),
    (106, 2, 14),
    (107, 2, 14),
    (108, 2, 14),
    (109, 2, 14),
    (110, 2, 14),
    (111, 2, 14),
    (112, 2, 14);



insert into `tb_materia` values
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

insert into `tb_turma_materia` values
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
(8, 15, 1), -- 9º B

-- Adicionar mais materias para ensino medio

(9, 2, 1), -- 1º A
(9, 3, 2), -- 1º A
(9, 4, 3), -- 1º A
(9, 5, 1), -- 1º A
(9, 6, 2), -- 1º A
(9, 7, 3), -- 1º A
(9, 8, 1), -- 1º A
(9, 9, 1), -- 1º A
(9, 10, 1), -- 1º A
(9, 11, 3), -- 1º A
(9, 12, 2), -- 1º A
(9, 13, 2), -- 1º A
(9, 14, 3), -- 1º A
(9, 15, 1), -- 1º A

(10, 2, 1), -- 1º B
(10, 3, 2), -- 1º B
(10, 4, 3), -- 1º B
(10, 5, 1), -- 1º B
(10, 6, 2), -- 1º B
(10, 7, 3), -- 1º B
(10, 8, 1), -- 1º B
(10, 9, 1), -- 1º B
(10, 10, 1), -- 1º B
(10, 11, 3), -- 1º B
(10, 12, 2), -- 1º B
(10, 13, 2), -- 1º B
(10, 14, 3), -- 1º B
(10, 15, 1), -- 1º B

(11, 2, 1), -- 2º A
(11, 3, 2), -- 2º A
(11, 4, 3), -- 2º A
(11, 5, 1), -- 2º A
(11, 6, 2), -- 2º A
(11, 7, 3), -- 2º A
(11, 8, 1), -- 2º A
(11, 9, 1), -- 2º A
(11, 10, 1), -- 2º A
(11, 11, 3), -- 2º A
(11, 12, 2), -- 2º A
(11, 13, 2), -- 2º A
(11, 14, 3), -- 2º A
(11, 15, 1), -- 2º A

(12, 2, 1), -- 2º B
(12, 3, 2), -- 2º B
(12, 4, 3), -- 2º B
(12, 5, 1), -- 2º B
(12, 6, 2), -- 2º B
(12, 7, 3), -- 2º B
(12, 8, 1), -- 2º B
(12, 9, 1), -- 2º B
(12, 10, 1), -- 2º B
(12, 11, 3), -- 2º B
(12, 12, 2), -- 2º B
(12, 13, 2), -- 2º B
(12, 14, 3), -- 2º B
(12, 15, 1), -- 2º B

(13, 2, 1), -- 3º A
(13, 3, 2), -- 3º A
(13, 4, 3), -- 3º A
(13, 5, 1), -- 3º A
(13, 6, 2), -- 3º A
(13, 7, 3), -- 3º A
(13, 8, 1), -- 3º A
(13, 9, 1), -- 3º A
(13, 10, 1), -- 3º A
(13, 11, 3), -- 3º A
(13, 12, 2), -- 3º A
(13, 13, 2), -- 3º A
(13, 14, 3), -- 3º A
(13, 15, 1), -- 3º A

(14, 2, 1), -- 3º B
(14, 3, 2), -- 3º B
(14, 4, 3), -- 3º B
(14, 5, 1), -- 3º B
(14, 6, 2), -- 3º B
(14, 7, 3), -- 3º B
(14, 8, 1), -- 3º B
(14, 9, 1), -- 3º B
(14, 10, 1), -- 3º B
(14, 11, 3), -- 3º B
(14, 12, 2), -- 3º B
(14, 13, 2), -- 3º B
(14, 14, 3), -- 3º B
(14, 15, 1); -- 3º B
