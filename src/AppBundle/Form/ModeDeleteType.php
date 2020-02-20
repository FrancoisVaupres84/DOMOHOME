<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Description of boutiqueType
 */
class ModeDeleteType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
 

    }

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults(array(
            'edit' => null,
            'data_class' => \AppBundle\Entity\Mode_clim_chauffage::class,
        ));
    }
}
