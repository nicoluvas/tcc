<?php

namespace App;

abstract class Router {
    protected $routes = [];
    protected function declareRoutes(){

        // Página principal
        $routes['index'] = [
            'router' => '/',
            'controller' => 'Index\\IndexController',
            'action' => 'Index',
            'method' => ['GET']
        ];

        // Página de login
        $routes['login'] = [
            'router' => '/login',
            'controller' => 'Index\\IndexController',
            'action' => 'LoginPage',
            'method' => ['GET']
        ];

        // Autentificar login
        $routes['loginAuth'] = [
            'router' => '/login/auth',
            'controller' => 'Index\\IndexController',
            'action' => 'LoginAuth',
            'method' => ['POST']
        ];

        $routes['logout'] = [
            'router' => '/logout',
            'controller' => 'Index\\IndexController',
            'action' => 'Logout',
            'method' => ['GET']
        ];

        // trio estatico
        $routes['info'] = [
            'router' => '/info',
            'controller' => 'Index\\IndexController',
            'action' => 'Info',
            'method' => ['GET']
        ];
        $routes['contato'] = [
            'router' => '/contato',
            'controller' => 'Index\\IndexController',
            'action' => 'Contato',
            'method' => ['GET']
        ];
        $routes['metodo'] = [
            'router' => '/metodo',
            'controller' => 'Index\\IndexController',
            'action' => 'Metodo',
            'method' => ['GET']
        ];

        $this->DocenteRoutes();
        $this->ProfessorRoutes();
        $this->AlunosRoutes();
        
        $this->routes = array_merge($this->routes, $routes);
    }

    private function DocenteRoutes() {
        // Páginas de administração
        $routes['DocenteHome'] = [
            'router' => '/docente/home',
            'controller' => 'Docente\\DocenteController',
            'action' => 'Dashboard',
            'method' => ['GET']
        ];

        $routes['Cadastrar Aluno'] = [
            'router' => '/docente/aluno/cadastrar',
            'controller' => 'Docente\\DocenteAlunoController',
            'action' => 'CadastrarAluno',
            'method' => ['GET', 'POST']
        ];

        $routes['Alunos'] = [
            'router' => '/docente/alunos',
            'controller' => 'Docente\\DocenteAlunoController',
            'action' => 'AlunosGeral',
            'method' => ['GET']
        ];

        $routes['Alunos Por Serie'] = [
            'router' => '/docente/alunos/turma/[0-9]+',
            'controller' => 'Docente\\DocenteAlunoController',
            'action' => 'AlunosPorTurma',
            'method' => ['GET'],
            'params' => ['turma']
        ];

        $routes['Aluno info'] = [
            'router' => '/docente/aluno/[0-9]+/info',
            'controller' => 'Docente\\DocenteAlunoController',
            'action' => 'AlunoInfo',
            'method' => ['GET', 'POST'],
            'params' => ['idaluno']
        ];

        $routes['Aluno Cancelar Matricula'] = [
            'router' => '/docente/aluno/[0-9]+/cancelar-matricula',
            'controller' => 'Docente\\DocenteAlunoController',
            'action' => 'CancelarMatricula',
            'method' => ['POST'],
            'params' => ['aluno']
        ];
        
        $routes['Cadastrar Docente'] = [
            'router' => '/docente/docente/cadastrar',
            'controller' => 'Docente\\DocenteDocenteController',
            'action' => 'CadastrarDocente',
            'method' => ['GET', 'POST']
        ];
        
        $routes['Listar Docente'] = [
            'router' => '/docente/docente/listar',
            'controller' => 'Docente\\DocenteDocenteController',
            'action' => 'ListarDocente',
            'method' => ['GET']
        ];
        
        $routes['Docente info'] = [
            'router' => '/docente/docente/[0-9]+/info',
            'controller' => 'Docente\\DocenteDocenteController',
            'action' => 'DocenteInfo',
            'method' => ['GET', 'POST'],
            'params' => ['iddocente']
        ];
        
        $routes['Docente Desligar'] = [
            'router' => '/docente/docente/[0-9]+/desligar',
            'controller' => 'Docente\\DocenteDocenteController',
            'action' => 'DesligarDocente',
            'method' => ['POST'],
            'params' => ['iddocente']
        ];

        $routes['Gerenciar periodo letivo'] = [
            'router' => '/docente/gerenciamento/periodo-letivo',
            'controller' => 'Docente\\DocenteGerenciamentoController',
            'action' => 'PeriodoLetivo',
            'method' => ['GET']
        ];

        $routes['Gerenciar iniciar periodo letivo'] = [
            'router' => '/docente/gerenciamento/periodo-letivo/iniciar',
            'controller' => 'Docente\\DocenteGerenciamentoController',
            'action' => 'IniciarPeriodoLetivo',
            'method' => ['POST']
        ];

        $routes['Gerenciar relacao materia professor'] = [
            'router' => '/docente/gerenciamento/materias',
            'controller' => 'Docente\\DocenteGerenciamentoController',
            'action' => 'Materias',
            'method' => ['GET', 'POST']
        ];

        $routes['Gerenciar faltas'] = [
            'router' => '/docente/gerenciamento/faltas',
            'controller' => 'Docente\\DocenteGerenciamentoController',
            'action' => 'Faltas',
            'method' => ['GET', 'POST']
        ];

        $routes['Gerenciar faltas justificar'] = [
            'router' => '/docente/gerenciamento/faltas/justificar',
            'controller' => 'Docente\\DocenteGerenciamentoController',
            'action' => 'JustificarFalta',
            'method' => ['POST']
        ];

        $routes['Alterar Senha'] = [
            'router' => '/docente/alterar/senha/[da]/[0-9]+',
            'controller' => 'Docente\\DocenteController',
            'action' => 'AlterarSenha',
            'method' => ['POST'],
            'params' => ['tipo', 'cd']
        ];

        $this->routes = array_merge($this->routes, $routes);
    }

    private function ProfessorRoutes() {
        
        $routes['Professor home'] = [
            'router' => '/professor/home',
            'controller' => 'Professor\\ProfessorController',
            'action' => 'Home',
            'method' => ['GET']
        ];

        $routes['Professor chamada'] = [
            'router' => '/professor/chamada',
            'controller' => 'Professor\\ProfessorController',
            'action' => 'Chamada',
            'method' => ['GET', 'POST']
        ];

        $routes['Professor chamada pegar alunos'] = [
            'router' => '/professor/chamada/alunos/turma/[0-9]+/qa/[1-3]',
            'controller' => 'Professor\\ProfessorController',
            'action' => 'AlunosPorTurmaChamada',
            'method' => ['GET'],
            'params' => ['turma', 'qt_aulas']
        ];

        $routes['Professor notas'] = [
            'router' => '/professor/notas/alunos',
            'controller' => 'Professor\\ProfessorController',
            'action' => 'Notas',
            'method' => ['GET']
        ];
        
        $routes['Professor pegar nota do aluno'] = [
            'router' => '/professor/notas/aluno/[0-9]+/materia/[0-9]+',
            'controller' => 'Professor\\ProfessorController',
            'action' => 'NotasAluno',
            'method' => ['GET'],
            'params' => ['aluno', 'materia']
        ];

        $routes['Professor salvar nota'] = [
            'router' => '/professor/notas/aluno/salvar',
            'controller' => 'Professor\\ProfessorController',
            'action' => 'SalvarNotas',
            'method' => ['POST']
        ];

        $routes['Professor situação dos alunos'] = [
            'router' => '/professor/situacao/alunos',
            'controller' => 'Professor\\ProfessorController',
            'action' => 'SituacaoAlunos',
            'method' => ['GET']
        ];

        $routes['Professor situação turma materia'] = [
            'router' => '/professor/situcacao/turma/[0-9]+/materia/[0-9]+/unidade/[0-9]+',
            'controller' => 'Professor\\ProfessorController',
            'action' => 'SituacaoAlunosTurmaMateria',
            'method' => ['GET'],
            'params' => ['turma', 'materia', 'unidade']
        ];
        
        $this->routes = array_merge($this->routes, $routes);
    }

    private function AlunosRoutes() {
        $routes['Aluno index'] = [
            'router' => '/aluno/home',
            'controller' => 'Aluno\\AlunoController',
            'action' => 'Home',
            'method' => ['GET']
        ];
        
        $routes['Aluno aulas'] = [
            'router' => '/aluno/frequencia',
            'controller' => 'Aluno\\AlunoController',
            'action' => 'Aulas',
            'method' => ['GET']
        ];
        
        $routes['Aluno notas'] = [
            'router' => '/aluno/boletim',
            'controller' => 'Aluno\\AlunoController',
            'action' => 'Notas',
            'method' => ['GET']
        ];

        $this->routes = array_merge($this->routes, $routes);
    }
}
