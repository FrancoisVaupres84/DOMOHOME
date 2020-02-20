<?php

namespace AppBundle\Form;

use AppBundle\AppBundle;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;


/**
 * Description of boutiqueType
 */
class ScenarioType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add(
                'nom',
                TextType::class,
                [
                    'attr' => ['class' => 'form-control']

                ]
            )
            ->add(
                'saison',
                TextType::class,
                [
                    'attr' => ['class' => 'form-control']

                ]
            )
            ->add(
                'lumiere',
                NumberType::class,
                [
                    'attr' => ['class' => 'form-control']

                ]
            )
            ->add(
                'volet',
                NumberType::class,
                [
                    'attr' => ['class' => 'form-control']

                ]
            )
            ->add(
                'mode',
                EntityType::class,

                [
                    'class' => 'AppBundle:Mode_clim_chauffage',
                    'placeholder' => 'Selectionnez un mode',

                    'attr' => [
                        'class' => 'form-control',

                    ],
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('m')
                            ->orderBy('m.nom', 'ASC');
                    },


                ]

            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults(array(
            'edit' => null,
            'data_class' => \AppBundle\Entity\Scenario::class,
        ));
    }
}
