<?php

namespace App\Form;

use App\Entity\Animal;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VeterinaryReportFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('start_date', DateType::class, [
                'widget' => 'single_text',
                'attr' => ['id' => 'start_date'],
                'required' => false,
            ])
            ->add('end_date', DateType::class, [
                'widget' => 'single_text',
                'attr' => ['id' => 'end_date'],
                'required' => false,
            ])
            ->add('animal', EntityType::class, [
                'class' => Animal::class,
                'choice_label' => 'name',
                'placeholder' => 'Choisissez un animal',
                'attr' => ['id' => 'animal'],
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([]);
    }
}
