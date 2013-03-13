<?php

namespace Caravane\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;



class UserType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
		//->add('username')
		->add('plainPassword', 'repeated', array('type' => 'password'))
		//->add('roles')
		;
	}

	 public function getName()
    {
        return 'caravane_userbundle_usertype';
    }

     public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Caravane\UserBundle\Entity\User'
        ));
    }
}