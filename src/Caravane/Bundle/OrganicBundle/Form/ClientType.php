<?php

namespace Caravane\Bundle\OrganicBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('reference')
            ->add('clienttype')
            ->add('isowner')
            ->add('name')
            ->add('firstname')
            ->add('lastname')
            ->add('clienttitle')
            ->add('cietype')
            ->add('vat')
            ->add('address')
            ->add('number')
            ->add('zip')
            ->add('city')
            ->add('country')
            ->add('phone')
            ->add('phone2')
            ->add('mobile')
            ->add('fax')
            ->add('email')
            ->add('url')
            ->add('language')
            ->add('origin')
            //->add('insertdate')
            //->add('updatedate')
            ->add('public')
            //->add('jobid')
            ->add('userid')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Caravane\Bundle\OrganicBundle\Entity\Client'
        ));
    }

    public function getName()
    {
        return 'caravane_bundle_organicbundle_clienttype';
    }
}
