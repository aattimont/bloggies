<?php

namespace MyApp\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CategoryForm extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {        
        $builder->add('name');

    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'MyApp\BlogBundle\Entity\Category',
        );
    }
    
     public function getName(){
        return 'category';
    }
}