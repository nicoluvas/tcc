use db_bhaskara;

-- As senhas serão o nome de usuário seguido da palavra 'senha'
-- Ex: aluno1senha
insert into
	tb_login
values
	(default, 'aluno1', '$2y$10$lQChj2JOK7TjcdGkGwM/k.iFM3QkrvXniYjNz7G9Mn.RF/M2AWuoC', 'aluno'),
    (default, 'aluno2', '$2y$10$jri7or4qaHmpkJJ06mSnIeQNeytKHFYnfuJvRajmU7Mbi84W6nNwK', 'aluno'),
    (default, 'aluno3', '$2y$10$qJFBB/l2e1KqLGXUTB.D0OEcO69Fp3vYNCv7FsCJb/1vT9uXdFrFi', 'aluno'),
    (default, 'professor1', '$2y$10$HFGe8avfxPzCA1IOGxxDL.xBehWCW7RojZP7Dl59AO6MYMCEWtmc6', 'professor'),
    (default, 'professor2', '$2y$10$LfjxHH6RC3NSOfkBZxL6a..TWkDDemPi0/c.GNRmO5SKMCPTHTmUy', 'professor'),
    (default, 'professor3', '$2y$10$HfHbmSK5ZjLVaK2UsyL8D./qKiYn6I14kczNLN4yM7p3T1EwaPN1i', 'professor'),
    (default, 'admin', '$2y$10$m52ypu71V41jERf0PHJ.geSzdIDne33oTxCr1IjIvG7/bvwWzGzRe', 'admin')
;

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
