<?php

namespace MyApp\FilmothequeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class FilmForm extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {        
        $builder->add('titre');
        $builder->add('description', 'textarea');
        
        $builder->add('categorie','entity', array(
            'class' => 'MyApp\FilmothequeBundle\Entity\Categorie',
            'property' => 'nom',
            'multiple' => false,
            'required' => false
            ));        
        
        $builder->add('acteurs', 'entity', array(
            'class' => 'MyApp\FilmothequeBundle\Entity\Acteur',
            'property' => 'nom',
            'expanded' => true,
            'multiple' => true,
            'required' => false
            ));

    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'MyApp\FilmothequeBundle\Entity\Film',
        );
    }
    
     public function getName(){
        return 'film';
    }
}