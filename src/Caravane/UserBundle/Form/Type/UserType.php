<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Caravane\UserBundle\Form\Type;


use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

use Caravane\CrmBundle\Form\ContactType;

class AdminUserFormType extends BaseType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('email', 'email')
            ->add('plainPassword', 'repeated', array('type' => 'password'))
            ->add('firstname','text')
            ->add('lastname','text')
            ->add('newsletter','checkbox',array('data'=>true,'required'=>false,'attr'=>array('checked'=>'checked')))
            ->add('event','checkbox',array('data'=>true,'required'=>false,'attr'=>array('checked'=>'checked')))
            ;

    }



    public function getName()
    {
        return 'caravane_user_registration';
    }
}
