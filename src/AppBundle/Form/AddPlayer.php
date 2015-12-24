<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Team;

class AddPlayer extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('age', NumberType::class)
            ->add('number', NumberType::class)
            ->add('position', TextType::class)
            ->add('team', EntityType::class, [
                'class' => 'AppBundle\Entity\Team',
                'choice_label' => function(Team $team){
                    return $team->getCountry()->getName();
                }
            ])
            ->add('submit', SubmitType::class)
            ->setMethod('POST')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Player',
            'em' => null
        ]);
    }
}