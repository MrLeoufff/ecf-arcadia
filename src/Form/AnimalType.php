<?php

namespace App\Form;

use App\Entity\Animal;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnimalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name',TextType::class, [
                'label' => 'Nom de l\'animal',
            ])
            ->add('race', TextType::class, [
                'label' => 'Race',
            ])
            ->add('image', FileType::class, [
                'label' => 'Animal Image (Image file)',
                'multiple' => true,
                'required' => true,
                'mapped' => false,
            ])
            ->add('habitat_id', EntityType::class, [
                'class' => Animal::class,
                'choice_label' => 'name',
                'label' => 'Habitat',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Animal::class,
        ]);
    }
}
