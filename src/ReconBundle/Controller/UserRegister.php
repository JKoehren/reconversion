<?php

namespace ReconBundle\Controller;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType; 
use Symfony\Component\Form\Extension\Core\Type\FormType; 
use Symfony\Component\Form\Extension\Core\Type\SubmitType; 
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType; 
use Symfony\Component\Form\Extension\Core\Type\EmailType; 
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserRegister extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $civilite = [
            'Madame' => 0,
            'Monsieur' => 1
        ];
        

        $builder
        ->add('civilite', ChoiceType::class,  [
            'choices' => $civilite,
            'expanded' => true, // -> boutons
            'multiple' => false,
            'label' => "Civilité"
        ])
        ->add('dateDeNaissance', DateType::class, [
            'label' => 'Date de naissance',
            'format'=>'d-M-y',
            'widget' => 'choice'
        ])
        ->add('adresse', TextType::class, ['label' => 'Adresse'])
        ->add('codePostal', TextType::class, ['label' => 'Code Postal'])
        ->add('ville', TextType::class, ['label' => 'Ville'])
        ->add('tel', TextType::class, ['label' => 'Tél'])
        ->add('pass', PasswordType::class, ['label' => 'Mot de passe'])
        ->add('projet', TextareaType::class, ['label' => 'Votre projet'])
        ->add('attente', TextareaType::class, ['label' => 'Vos attentes'])
        ->add('save', SubmitType::class, ['label' => 'Valider']);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ReconBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'reconbundle_user';
    }
    
}
