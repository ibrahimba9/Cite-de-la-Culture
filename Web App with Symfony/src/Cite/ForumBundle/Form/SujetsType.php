<?php

namespace Cite\ForumBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Cite\ForumBundle\Form\MotsMasquesType;

class SujetsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('theme', ChoiceType::class, [
            'choices' =>[
                'Art' => "art",
                'Cinéma' => "cinema",
                'Culture' => "culture",
                'Dance' => 'dance',
                'Exposition' => 'exposition',
                'Litérature' => "literature",
                'Musique' => 'musique',
                'Théâtre' => "theatre"
            ]
        ])
            ->add('titre', TextType::class)

            ->add('valider', SubmitType::class);

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cite\ForumBundle\Entity\Sujets'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cite_forumbundle_sujets';
    }


}
