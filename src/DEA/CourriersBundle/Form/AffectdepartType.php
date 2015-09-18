<?php

namespace DEA\CourriersBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AffectdepartType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateaff')
            ->add('lastaff')
            ->add('daterep')
            ->add('rep')
            ->add('urgent')
            ->add('traitement')
            ->add('depart')
            ->add('division')
            ->add('user')
            ->add('annotation')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DEA\CourriersBundle\Entity\Affectdepart'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dea_courriersbundle_affectdepart';
    }
}
