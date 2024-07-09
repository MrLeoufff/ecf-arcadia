<?php

namespace App\Form;

use App\Entity\Animal;
use App\Entity\AnimalFeeding;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnimalFeedingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('feeding_date', DateTimeType::class, [
                'widget' => 'single_text',
                'required' => true,
                'label' => 'Date et heure du nourrissage'
            ])
            ->add('food', TextType::class, [
                'required' => true,
                'label' => 'Nourriture'
            ])
            ->add('quantity', IntegerType::class, [
                'required' => true,
                'label' => 'Quantité'
            ])
            ->add('animal_id', EntityType::class, [
                'class' => Animal::class,
                'choice_label' => 'name',
                'required' => true,
                'label' => 'Animal'
            ])
            ->add('user_id', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'email',
                'required' => true,
                'label' => 'Utilisateur'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AnimalFeeding::class,
        ]);
    }
}
