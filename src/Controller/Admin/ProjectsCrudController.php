<?php

namespace App\Controller\Admin;

use App\Entity\Projects;
use App\Entity\ImagesProjects;
use App\Form\ImagesProjectsType;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProjectsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Projects::class;
    }



    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('name'),
            ImageField::new('imageName')->setBasePath('/images/projets')->onlyOnIndex(),
            // TextField::new('imageFile')->setFormType(VichImageType::class)->onlyOnForms(),
            CollectionField::new('ImagesProjects')
            ->setEntryType(ImagesProjectsType::class)
            -> onlyOnForms(),
        ];
    }

}
