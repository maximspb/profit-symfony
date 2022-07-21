<?php


namespace App\EventListener;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class UsernameAndPasswordListener
{
    private const ADMIN_USERNAME = 'admin';
    private const PASSWORD = '123456';

    public function onKernelRequest(RequestEvent $event)
    {
        $request = $event->getRequest();

        $unauthorizedResponse = new Response(status: Response::HTTP_UNAUTHORIZED);

        if (
            $request->headers->get('X-UserName') !== self::ADMIN_USERNAME
            ||
            false === password_verify(self::PASSWORD, $request->headers->get('X-Password'))
        ) {
            $event->setResponse($unauthorizedResponse);
        }
    }
}