<?php
namespace RBTH\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use RBTH\TestBundle\Entity\User;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add(
            $builder->create('username', 'text', array(
                'required' => true,
                'label' => 'ФИО'
            ))
        );
        $builder->add(
            $builder->create('sex', 'choice', array(
                'required' => false,
                'choices' => User::$sexKinds,
                'empty_value' => false,
                'label' => 'Пол'
            ))
        );
        $builder->add(
            $builder->create('email', 'email', array(
                'required' => true,
                'label' => 'Email'
            ))
        );
        $builder->add(
            $builder->create('phone', 'text', array(
                'required' => false,
                'label' => 'Телефон'
            ))
        );
        $builder->add(
            $builder->create('country', 'text', array(
                'required' => true,
                'label' => 'Страна'
            ))
        );
        $builder->add(
            $builder->create('address', 'text', array(
                'required' => false,
                'label' => 'Адрес'
            ))
        );
        $builder->add(
            $builder->create('postIndex', 'text', array(
                'required' => false,
                'label' => 'Индекс'
            ))
        );
        $builder->add(
            $builder->create('opinion', 'textarea', array(
                'required' => false,
                'label' => 'Что вы думаете о …'
            ))
        );
        $builder->add(
            $builder->create('faminyStatus', 'choice', array(
                'required' => false,
                'choices' => User::$familyKinds,
                'empty_value' => false,
                'label' => 'Семейное положение'
            ))
        );
        $builder->add(
            $builder->create('childrenStatus', 'choice', array(
                'required' => false,
                'choices' => User::$childrenKinds,
                'empty_value' => false,
                'label' => 'Наличие детей'
            ))
        );
        $builder->add(
            $builder->create('countChildren', 'integer', array(
                'required' => false,
                'label' => 'Сколько детей?'
            ))
        );
        $builder->add(
            $builder->create('educationStatus', 'choice', array(
                'required' => false,
                'choices' => User::$educationKinds,
                'empty_value' => false,
                'label' => 'Образование'
            ))
        );


    }

    public function getName()
    {
        return 'user';
    }
}