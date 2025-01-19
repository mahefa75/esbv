<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

#[Route('/admin', name: 'admin_')]
class AdminController extends AbstractController
{
    #[Route('', name: 'dashboard')]
    public function index(Request $request, SessionInterface $session): Response
    {
        if (!$session->get('is_authenticated')) {
            return $this->render('admin/login.html.twig');
        }
        
        return $this->render('admin/dashboard.html.twig');
    }

    #[Route('/login', name: 'login', methods: ['POST'])]
    public function login(Request $request, SessionInterface $session): Response
    {
        $username = $request->request->get('username');
        $password = $request->request->get('password');

        if ($username === 'admin' && $password === 'admin') {
            $session->set('is_authenticated', true);
            return $this->redirectToRoute('admin_dashboard');
        }

        return $this->redirectToRoute('admin_dashboard');
    }

    #[Route('/deconnexion', name: 'deconnexion')]
    public function deconnexion(SessionInterface $session): Response
    {
        $session->remove('is_authenticated');
        return $this->redirectToRoute('admin_dashboard');
    }
} 