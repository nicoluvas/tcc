use db_bhaskara;

insert into 
	tb_sexo
values
	(default, 'Homem Cisgênero'),
	(default, 'Mulher Cisgênero'),
	(default, 'Homem Transgênero'),
	(default, 'Mulher Transgênero'),
	(default, 'Não binário')
;

insert into
	tb_pcd
values
	(default, 'N/A'),
	(default, 'TDHA'),
	(default, 'Autismo'),
	(default, 'Cego'),
	(default, 'Paraplégico')
;

insert into 
	tb_telefone
values
	(default, '12999999999'),
	(default, '12888888888'),
	(default, '12777777777'),
	(default, '12666666666'),
	(default, '12555555555'),
	(default, '12444444444'),
	(default, '12333333333')
;

insert into
	tb_endereco
values
	(default, 'SP', 'sjc', 'jardim america', 'rua 1', 'complementoo'),
	(default, 'SP', 'sjc', 'jardim america', 'rua 2', 'complementoo'),
	(default, 'SP', 'sjc', 'jardim america', 'rua 3', 'complementoo'),
	(default, 'SP', 'sjc', 'jardim america', 'rua 4', 'complementoo'),
	(default, 'SP', 'sjc', 'jardim america', 'rua 5', 'complementoo'),
	(default, 'SP', 'sjc', 'jardim america', 'rua 6', 'complementoo')
;

insert into
	tb_tipo_sanguineo
values
	(default, 'A-'),
	(default, 'A+'),
	(default, 'B-'),
	(default, 'B+'),
	(default, 'AB-'),
	(default, 'AB+'),
	(default, 'O-'),
	(default, 'O+')
;

-- As senhas serão o nome de usuário seguido da palavra 'senha'
-- Ex: aluno1senha

insert into
	tb_aluno
values
	(default, 'Lucas leme', '999999999', '99999999999', '2006-08-30', null, 1, 1, 1, 1, 1, 'aluno1', '$2y$10$lQChj2JOK7TjcdGkGwM/k.iFM3QkrvXniYjNz7G9Mn.RF/M2AWuoC', default, default),
	(default, 'Nicoluvas', '888888888', '88888888888', '2006-11-25', null, 1, 1, 1, 2, 2, 'aluno2', '$2y$10$jri7or4qaHmpkJJ06mSnIeQNeytKHFYnfuJvRajmU7Mbi84W6nNwK', default, default),
	(default, 'Theodre', '777777777', '77777777777', '2006-07-06', null, 1, 1, 1, 3, 3, 'aluno3', '$2y$10$qJFBB/l2e1KqLGXUTB.D0OEcO69Fp3vYNCv7FsCJb/1vT9uXdFrFi', default, default)
;

insert into
	tb_professor
values
	(default, 'Ricardo', '666666666', '66666666666', 'email1', null, 1, 1, 1, 4, 4, 'professor1', '$2y$10$HFGe8avfxPzCA1IOGxxDL.xBehWCW7RojZP7Dl59AO6MYMCEWtmc6', default, default),
	(default, 'helder', '555555555', '55555555555', 'email2', null, 1, 1, 1, 5, 5, 'professor2', '$2y$10$LfjxHH6RC3NSOfkBZxL6a..TWkDDemPi0/c.GNRmO5SKMCPTHTmUy', default, default),
	(default, 'lilain', '444444444', '44444444444', 'email3', null, 1, 1, 1, 6, 6, 'professor3', '$2y$10$HfHbmSK5ZjLVaK2UsyL8D./qKiYn6I14kczNLN4yM7p3T1EwaPN1i', default, default)
;

insert into
	tb_admin
values
	(default, 'admin', '$2y$10$m52ypu71V41jERf0PHJ.geSzdIDne33oTxCr1IjIvG7/bvwWzGzRe')
;
