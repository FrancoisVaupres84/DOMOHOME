<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Description of boutiqueType
 */
class ModeType extends AbstractType
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
                'temp_min',
                NumberType::class,
                [
                    'attr' => ['class' => 'form-control'],
                    'required'   => false,


                ]
            )
            ->add(
                'temp_max',
                NumberType::class,
                [
                    'attr' => ['class' => 'form-control'],
                    'required'   => false,


                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults(array(
            'edit' => null,
            'data_class' => \AppBundle\Entity\Mode_clim_chauffage::class,
        ));
    }
}
