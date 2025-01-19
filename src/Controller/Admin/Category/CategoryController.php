<?php

namespace App\Controller\Admin\Category;

use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/categories', name: 'admin_category_')]
class CategoryController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $categories = $entityManager->getRepository(Category::class)->findAll();

        return $this->render('admin/category/index.html.twig', [
            'categories' => $categories
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