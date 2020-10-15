<?php

namespace Cite\ForumBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RechercheType extends AbstractType
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
            ],
            'required' => false
        ])
            ->add('titre', TextType::class, ['required' => false])
            ->add('auteur', TextType::class, ['required' => false])
            ->add('Chercher', SubmitType::class);
    }

/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cite\ForumBundle\Entity\Recherche'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cite_forumbundle_recherche';
    }


}
