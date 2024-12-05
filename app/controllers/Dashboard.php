<?php

require_once 'Login.php';

class Dashboard extends Controller {

    // Instancia a Controller de Login (controllers/Login.php):
    private $login;

    public function __construct() {
        $this->login = new Login();
    }

    public function index() {
        // Valida se o usuário está autenticado
        if($this->login->estaLogado()) {
            // Se o usuário estiver autenticado

            // Direciona ele para a Dashboard do site
            $this->view('dashboard/index');
        } else {
            // Se o usuário não estiver autenticado
        
            // Carrega a função index() da Controller de Login
            // que exibe o formulário de login:
            $this->login->index();
        }
    }

    public function cadastrarProduto() {
        if($this->login->estaLogado()) {
            // Caso o usuário esteja logado
            // Carrega a lista de categorias do banco
            $categorias = $this->model('Categorias');
            $categoriasData = $categorias->getCategorias();

            // Exibe a tela de cadastro do produto

            $this->view("dashboard/cadastrarProduto", ['categorias'=> $categoriasData]);
        } else {
            // Caso contrário
            // Exibe a tela de login
            $this->login->index();
        }
    }
}<?php

require_once 'Login.php';

class Dashboard extends Controller {

    // Instancia a Controller de Login (controllers/Login.php):
    private $login;

    public function __construct() {
        $this->login = new Login();
    }

    public function index() {
        // Valida se o usuário está autenticado
        if($this->login->estaLogado()) {
            // Se o usuário estiver autenticado

            // Direciona ele para a Dashboard do site
            $this->view('dashboard/index');
        } else {
            // Se o usuário não estiver autenticado
        
            // Carrega a função index() da Controller de Login
            // que exibe o formulário de login:
            $this->login->index();
        }
    }

    public function cadastrarProduto() {
        if($this->login->estaLogado()) {
            // Caso o usuário esteja logado

            // Carrega a lista de categorias do banco
            $categorias = $this->model('Categorias');
            $categoriasData = $categorias->getCategorias();

            // Exibe a tela de cadastro de produtos
            $this->view("dashboard/cadastrarProduto", ['categorias' => $categoriasData]);
        } else {
            // Caso contrário
            // Exibe a tela de login
            $this->login->index();
        }
    }
}