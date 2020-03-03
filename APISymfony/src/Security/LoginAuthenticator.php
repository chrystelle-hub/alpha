<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;


class LoginAuthenticator extends AbstractGuardAuthenticator
{
    private $passwordEncoder;
    private $user;
    public function __construct(UserPasswordEncoderInterface $passwordEncoder,RouterInterface $router)
    {
        $this->passwordEncoder = $passwordEncoder;
         $this->router = $router;
    }

   public function supports(Request $request)
    {
        return $request->get("_route") === "login" && $request->isMethod("POST");
    }

    public function getCredentials(Request $request)
    {
        return [
            'email' => $request->request->get("email"),
            'password' => $request->request->get("password")
        ];
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        return $userProvider->loadUserByUsername($credentials['email']);
        /* $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $credentials['email']]);

        if (!$user) {
            // fail authentication with a custom error
            throw new CustomUserMessageAuthenticationException('Email ou mot de passe incorrect');
        }

        return $user;*/
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
         $this->user=$user;
         return $this->passwordEncoder->isPasswordValid($user, $credentials['password']);
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        return new JsonResponse([
           'login' => false
       ]);
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
         return new RedirectResponse($this->router->generate('token',['id'=>$this->user->getId()]));
       /* return new JsonResponse([
           'login' => true, 'token'=>$token
       ]);*/
    }

    public function start(Request $request, AuthenticationException $authException = null)
    {
        return new JsonResponse([
           'error' => 'Access Denied'
       ]);
    }

    public function supportsRememberMe()
    {
        return false;
    }
}
