<?php

namespace AppBundle\Form;

use AppBundle\Entity\Country;
use AppBundle\Entity\Trainer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class AddTeam extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('trainer', EntityType::class, [
                'class' => 'AppBundle\Entity\Trainer',
                'choice_label' => function(Trainer $trainer){
                    return $trainer->getName();
                }
            ])
            ->add('country', EntityType::class,[
                'class' => 'AppBundle\Entity\Country',
                'choice_label' => function(Country $country){
                    return $country->getName();
                }
            ])
            ->add('players', CollectionType::class, [
                'entry_type'   => new PlayerChoice(),
                'allow_add' => true,
                'allow_delete' => true
            ])
            ->add('submit', SubmitType::class)
            ->setMethod('POST')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Team',
            'em' => null
        ]);
    }
}