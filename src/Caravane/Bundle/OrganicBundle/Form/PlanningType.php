<?php

namespace Caravane\Bundle\OrganicBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlanningType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('planningtype')
            ->add('startdate')
            ->add('enddate')
            ->add('etat')
            ->add('userid')
            ->add('jobid')
            ->add('offreid')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Caravane\Bundle\OrganicBundle\Entity\Planning'
        ));
    }

    public function getName()
    {
        return 'caravane_bundle_organicbundle_planningtype';
    }
}
