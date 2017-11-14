<?php

namespace MyMoney\Http;


use Core\DataBinderInterface;
use Core\TemplateInterface;
use MyMoney\Http\HttpHandlerAbstract;
use MyMoney\Service\UserServiceInterface;
use MyMoney\UserDTO;

class UserHttpHandler extends HttpHandlerAbstract
{
    /**
     * @var UserServiceInterface
     */
    private $userService;


    public function __construct(UserServiceInterface $userService,
                                TemplateInterface $template,
                                DataBinderInterface $binder)
    {
        parent::__construct($template, $binder);
        $this->userService = $userService;
    }


    public function login(array $formData = [])
    {
        if (!isset($formData['login'])) {
            $this->render("users/login");
        } else {
            $this->handleLoginProcess($formData);
        }
    }

    public function register(array $formData = [])
    {
        if (!isset($formData['register'])) {
            $this->render("users/register");
        } else {
            $this->handleRegisterProcess($formData);
        }
    }


    public function handleLoginProcess(UserServiceInterface $userService, array $formData = [])
    {
        try {
            $loggedUser = $userService->login($formData['username'], $formData['password']);
            if(null !== $loggedUser) {
                $_SESSION['id'] = $loggedUser->getId();
                $this->redirect("users/sucsses.php");
            }
        } catch (\Exception $e) {
            $user = $this->binder->bind($formData, UserDTO::class);
            $this->render("users/login", $user, [$e->getMessage()]);
        }
    }

    public function handleRegisterProcess(array $formData = [])
    {
        try {
            $user = $this->binder->bind($formData, UserDTO::class);
            $this->userService->register($user, $formData['confirm_password']);
            $this->redirect("success.php");
        } catch (\Exception $e) {
            $user = $this->binder->bind($formData, UserDTO::class);
            $this->render("users/register", $user, [$e->getMessage()]);
        }
    }
}