<?php

namespace Caravane\Bundle\OrganicBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('reference')
            ->add('kit')
            ->add('owner')
            ->add('color')
            ->add('length')
            ->add('width')
            ->add('m2')
            ->add('weight')
            ->add('piquets')
            ->add('status')
            ->add('etat')
            ->add('comments')
            ->add('winter')
            ->add('issue')
            //->add('insertdate')
            //->add('updatedate')
            ->add('public')
            ->add('winteroffreid')
            ->add('ownerid')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Caravane\Bundle\OrganicBundle\Entity\Tent'
        ));
    }

    public function getName()
    {
        return 'caravane_bundle_organicbundle_tenttype';
    }
}
