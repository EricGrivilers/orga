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
            ->add('plainPassword', 'repeated', array('type' => 'password'))
            ->add('roles','choice',array(
                'required' => true,
                'multiple' => true,
                'choices'=>$this->refactorRoles($options['roles'])
            ))
            ;

    }



    public function getName()
    {
        return 'caravane_user_admin_edit';
    }

    private function refactorRoles($originRoles)
{
    $roles = array();
    $rolesAdded = array();

    // Add herited roles
    foreach ($originRoles as $roleParent => $rolesHerit) {
        $tmpRoles = array_values($rolesHerit);
        $rolesAdded = array_merge($rolesAdded, $tmpRoles);
        $roles[$roleParent] = array_combine($tmpRoles, $tmpRoles);
    }
    // Add missing superparent roles
    $rolesParent = array_keys($originRoles);
    foreach ($rolesParent as $roleParent) {
        if (!in_array($roleParent, $rolesAdded)) {
            $roles['-----'][$roleParent] = $roleParent;
        }
    }

    return $roles;
}
}
