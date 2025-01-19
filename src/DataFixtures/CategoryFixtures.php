<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categories = [
            [
                'name' => 'Vêtements Femme',
                'description' => 'Découvrez notre collection de vêtements pour femme : robes, tops, pantalons, vestes et plus encore.',
                'status' => true
            ],
            [
                'name' => 'Vêtements Homme',
                'description' => 'Une sélection moderne de vêtements pour homme : chemises, pantalons, costumes, pulls et vestes.',
                'status' => true
            ],
            [
                'name' => 'Chaussures',
                'description' => 'Large gamme de chaussures : sneakers, escarpins, bottes, mocassins pour hommes et femmes.',
                'status' => true
            ],
            [
                'name' => 'Accessoires',
                'description' => 'Complétez votre look avec nos accessoires : sacs, bijoux, ceintures, écharpes et chapeaux.',
                'status' => true
            ],
            [
                'name' => 'Sport & Fitness',
                'description' => 'Vêtements et accessoires de sport : leggings, t-shirts techniques, baskets et équipements.',
                'status' => true
            ],
            [
                'name' => 'Lingerie',
                'description' => 'Collection de lingerie raffinée : sous-vêtements, pyjamas, maillots de bain.',
                'status' => true
            ],
            [
                'name' => 'Collections Enfant',
                'description' => 'Vêtements et accessoires pour enfants : de la naissance à l\'adolescence.',
                'status' => true
            ],
            [
                'name' => 'Grandes Tailles',
                'description' => 'Mode inclusive et tendance : vêtements et accessoires en grandes tailles.',
                'status' => true
            ],
            [
                'name' => 'Bijoux',
                'description' => 'Bijoux fantaisie et précieux : colliers, bagues, bracelets, boucles d\'oreilles.',
                'status' => true
            ],
            [
                'name' => 'Outlet',
                'description' => 'Promotions et fins de séries sur une sélection de vêtements et accessoires.',
                'status' => false
            ]
        ];

        foreach ($categories as $categoryData) {
            $category = new Category();
            $category->setName($categoryData['name']);
            $category->setDescription($categoryData['description']);
            $category->setStatus($categoryData['status']);
            
            $manager->persist($category);
        }

        $manager->flush();
    }
} 