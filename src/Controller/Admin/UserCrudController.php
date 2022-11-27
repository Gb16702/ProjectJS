<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    // public function configureFields(string $pageName): iterable
    // {
    //     return [
             // TextField::new('section'),
             // TextField::new('imageFile')->setFormType(VichImageType::class)->onlyOnForms(),
             // ImageField::new('imageName')->setBasePath('/images/partials')->onlyOnIndex(),
    //     ];
    // }
}
