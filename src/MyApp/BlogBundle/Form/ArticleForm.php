<?php

namespace MyApp\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ArticleForm extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {        
        $builder->add('title');
        $builder->add('category','entity', array(
            'class' => 'MyApp\BlogBundle\Entity\Category',
            'property' => 'name',
            'multiple' => false,
            'required' => false
            ));        
        $builder->add('content', 'textarea');

    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'MyApp\BlogBundle\Entity\Article',
        );
    }
    
     public function getName(){
        return 'article';
    }
}