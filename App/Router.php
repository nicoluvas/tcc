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

        $routes['Gerenciar periodo letivo'] = [
            'router' => '/docente/gerenciamento/periodo-letivo',
            'controller' => 'Docente\\DocenteGerenciamentoController',
            'action' => 'PeriodoLetivo',
            'method' => ['GET']
        ];

        $this->routes = array_merge($this->routes, $routes);
    }
}
