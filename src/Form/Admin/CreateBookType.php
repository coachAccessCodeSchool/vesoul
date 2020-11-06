<?php


namespace App\Form\Admin;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class CreateBookType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'Titre',
                ]
            ])
            ->add('description', TextareaType::class, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'Description',
                ]
            ])
            ->add('price', NumberType::class, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'Prix',
                ]
            ])
            ->add('isbn', TextType::class, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'isbn',
                ]
            ])
            ->add('stock', NumberType::class, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'stock',
                ]
            ])
            ->add('new', ChoiceType::class, [
                'required' => true,
                'label' => false,
                'choices'  => [
                    'Oui' => true,
                    'Non' => false
                ],
            ])
            ->add('width', NumberType::class, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'width',
                ]
            ])
            ->add('page', NumberType::class, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'page',
                ]
            ])
            ->add('height', NumberType::class, [
                'required' => true,
                'label' => false,
                'attr' => [
                    'autocomplete' => 'off',
                    'placeholder' => 'height',
                ]
            ])
        ;
    }
}