use db_bhaskara;

insert into tb_periodo_letivo values
(null, '2024-01-29', '2024-12-06');

insert into tb_cargo values 
(null, 'Aluno'),
(null, 'Professor'),
(null, 'Secretário'),
(null, 'Coordenador'),
(null, 'Diretor');

insert into tb_endereco values 
(null, 'SP', 'São José dos Campos', 'Jardim América', 'Rua Koichi Matsumura', '103', 'perto do pabilhao', '12235180');

insert into tb_responsavel values
(null, 'Done Susana', '12999999999', '12131212121', '121112218'),
(null, 'Done Liliane', '12888888888', '121241212121', '121212218'),
(null, 'Done PEPEs', '12777777777', '12121212121', '121212812');

insert into tb_aluno values
(null, 'DR THELMO', '12999999999', '12121152121', '182121217', 'drthelmo@gmail.com', '2006-07-06', '$2y$12$MsULJIj/O9NCQzPq0QLsDeWBRAwIUL/6Yb3wVV9yXaz1iz8a4eAZK', DEFAULT, 1, 1, 1),
(null, 'LEMELINHA', '12999999999', '12126512121', '128212121', 'leme@gmail.com', '2006-08-30', '$2y$12$C2JIgkVdnHedy8pIVA8Sz.OaX5mQNC3fOQQ.Tez9LWvMWLUcYhPU2', DEFAULT, 1, 1, 2),
(null, 'PEPE', '12999999999', '12121232121', '121212821', 'pepe@gmail.com', '2006-11-25', '$2y$12$o1h9gYqN0mTJEMijGrC3B.Fdm3aAh8OAQYyba8ElflacIQBHLp3b2', DEFAULT, 1, 1, 3);

insert into tb_matricula values
(1, 1, '2024-01-12', null),
(2, 1, '2024-01-22', null),
(3, 1, '2024-01-19', null);

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
