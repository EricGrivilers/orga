<?php

namespace Caravane\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
           // ->add('usernameCanonical')
            ->add('email')
            //->add('emailCanonical')
            ->add('enabled')
            //->add('salt')
            ->add('password')
            //->add('lastLogin')
            ->add('locked')
            //->add('expired')
            //->add('expiresAt')
            //->add('confirmationToken')
            //->add('passwordRequestedAt')
            ->add('roles')
            //->add('credentialsExpired')
           // ->add('credentialsExpireAt')
            ->add('firstname')
            ->add('lastname')
            ->add('iso')
            ->add('title')
            ->add('address')
            ->add('phone')
            ->add('phone2')
            ->add('mobile')
            ->add('fax')
            //->add('lastlog')
            //->add('browser')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Caravane\UserBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'caravane_userbundle_usertype';
    }
}
