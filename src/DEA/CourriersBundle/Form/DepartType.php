<?php

namespace DEA\CourriersBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DepartType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dea', 'integer')
            ->add('centrale', 'integer')
            ->add('type', 'choice', array(
                "choices" => array(
                    "Bordereau d'envoi" => "Bordereau d'envoi",
                    "Compte rendu" => "Compte rendu",
                    "Lettre de transmission" => "Lettre de transmission",
                    "Lettre" => "Lettre",
                    "Fax" => "Fax",
                    "Note ou circulaire" => "Note ou circulaire",
                )
            ))
            ->add('refint', 'text')
            ->add('refintpre', 'text', array(
                'required' => false,
            ))
            ->add('dateenvoi', 'date', array(
                "widget" => "single_text",
                "format" => "dd/MM/yyyy",
            ))
            ->add('dateboc', 'date', array(
                "widget" => "single_text",
                "format" => "dd/MM/yyyy",
            ))
            ->add('refdest', 'text')
            ->add('dest', 'text')
            ->add('objet', 'text')
            ->add('com', 'textarea')
            ->add('flagaffect', 'choice', array(
                "choices" => array(
                    "0" => "Non",
                    "1" => "Oui",
                ),
                "required" => false,
                "expanded" => true,
                "data" => "0",
            ))
            ->add('flagtraite', 'choice', array(
                "choices" => array(
                    "0" => "Non",
                    "1" => "Oui",
                ),
                "required" => false,
                "expanded" => true,
                "data" => "0",
            ))
            ->add('flagvalide', 'choice', array(
                "choices" => array(
                    "0" => "Non",
                    "1" => "Oui",
                ),
                "required" => false,
                "expanded" => true,
                "data" => "0",
            ))
            ->add('flagretard', 'choice', array(
                "choices" => array(
                    "0" => "Non",
                    "1" => "Oui",
                ),
                "required" => false,
                "expanded" => true,
                "data" => "0",
            ))
            ->add('flagarchive', 'choice', array(
                "choices" => array(
                    "0" => "Non",
                    "1" => "Oui",
                ),
                "required" => false,
                "expanded" => true,
                "data" => "0",
            ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DEA\CourriersBundle\Entity\Depart'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dea_courriersbundle_depart';
    }
}
