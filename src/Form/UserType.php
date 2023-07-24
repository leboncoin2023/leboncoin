<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('username', TextType::class, [
            'label' => 'Prénom',
            'attr' => [
                'class' => 'form-control'
            ]
        ])
        
            ->add('email')
            ->add('roles')
            ->add('password')
            ->add('phone', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Sauvegarder',
                'attr' => [
                    'class' => 'btn btn-success form-control'
                ]
            ])
            ->add('roles',ChoiceType::class,[
            'attr'=>['class'=>'form-control'], 
            'choices' =>[
                'Seller' =>["yes"=>"ROLE_USER"],
                'Seller' =>["yes"=>"ROLE_ADMIN"],
                
            ]
            ])           

            ->add('annuler', ButtonType::class, [
                'label' => 'Annuler',
                'attr' => [
                    'class' => 'btn btn-danger form-control'
                ]
                ]);
    
                }
    

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}


