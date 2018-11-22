<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('attr' => array('placeholder' => 'contact_form.name')))
            ->add('subject', TextType::class, array('attr' => array('placeholder' => 'contact_form.subject')))
            ->add('email', EmailType::class, array('attr' => array('placeholder' => 'contact_form.email')))
            ->add('message', TextareaType::class, array('attr' => array('placeholder' => 'contact_form.message')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'error_bubbling' => true,
            'validation_groups' => ['Default']
        ));
    }

    public function getBlockPrefix()
    {
        return 'contact';
    }
}