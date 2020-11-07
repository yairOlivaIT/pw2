<?php


class UserController
{
    private $renderer;
    private $model;

    public function __construct($renderer, $model){
        $this->renderer = $renderer;
        $this->model = $model;
    }

    public function index(){
        echo $this->renderer->render( "view/login.php");
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = MD5($_POST['password']);

        $usuario_encontrado = $this->model->getUsuarioPorEmail($email);

        if (!empty($usuario_encontrado['0'])){

            if ($password === $usuario_encontrado['0']['password']){
                $_SESSION['logueado'] = 1;
                $_SESSION['rol'] = $usuario_encontrado['0']['rol_id'];
                $_SESSION['user'] = $usuario_encontrado['0']['id'];
                header('Location: /user/home');
                die();
            }
        }

        $error = "Usuario o contraseña incorrecta";
        $data['error'] = $error;
        echo $this->renderer->render( "view/login.php", $data);
    }

    public function home()
    {
        if (isset($_SESSION['logueado'])){
            $empleado = $this->model->getEmpleado($_SESSION['user']);
            echo $this->renderer->render( "view/inicio/home.php", $empleado['0']);
        }
        else{
            header('Location: /');
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: /');
    }
}