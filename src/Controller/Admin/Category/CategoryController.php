<?php

namespace App\Controller\Admin\Category;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/categories', name: 'admin_categories_')]
class CategoryController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('admin/category/index.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }

    #[Route('/ajouter', name: 'add')]
    public function add(): Response
    {
        return $this->render('admin/category/add.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }

    #[Route('/modifier/{id}', name: 'edit')]
    public function edit(int $id): Response
    {
        return $this->render('admin/category/edit.html.twig', [
            'controller_name' => 'CategoryController',
            'id' => $id
        ]);
    }

    #[Route('/supprimer/{id}', name: 'delete')]
    public function delete(int $id): Response
    {
        // Logique de suppression à implémenter
        return $this->redirectToRoute('admin_categories_index');
    }
} 