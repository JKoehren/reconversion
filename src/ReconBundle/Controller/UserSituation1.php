<?php

namespace ReconBundle\Controller;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use ReconBundle\Entity\Contrat; 
use ReconBundle\Entity\Situation;
use ReconBundle\Entity\CSP;
use ReconBundle\Entity\Taille;
use ReconBundle\Entity\Etudes;
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
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserSituation1 extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $anneeExp = [];
        for ($i=0; $i<=42; $i++){
            $anneeExp[$i] = $i;
        }

        $builder
        ->add('contrat_id', EntityType::class,  [
            'class' => Contrat::class,
            'choice_label' => 'type',
            'expanded' => true,
            'multiple' => true // -> boutons
        ])
        ->add('fonction', TextType::class, ['label' => 'Nom'])
        ->add('csp_id', EntityType::class,  [
            'class' => CSP::class,
            'choice_label' => 'type',
            'label' => "SCP"
        ])
        ->add('anneeExp', ChoiceType::class,  [
            'choices' => $anneeExp,
            'label' => "Année Expérience"
        ])
        ->add('etudes_id', EntityType::class,  [
            'class' => Etudes::class,
            'choice_label' => 'type',
            'label' => "Etudes"
        ])
        ->add('nomEntreprise', TextType::class, ['label' => 'Nom'])
        ->add('codePostal', TextType::class, ['label' => 'Code postal'])
        ->add('ville', TextType::class, ['label' => 'Ville'])
        ->add('taille_id', EntityType::class,  [
            'class' => Taille::class,
            'choice_label' => 'type',
            'label' => "Taille de l'entreprise"
        ])
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
