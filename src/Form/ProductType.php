<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('price')
            ->add('productName')
            ->add('about')
            ->add('size')
            ->add('imageFile', VichImageType::class, array(
                'label' => '1ère image de la paire',
                'label_attr' => [
                    'class' => 'mb-4'
                ],
                'required'      => false,
                'allow_delete'  => true,
            ))
            ->add('imageFile2', VichImageType::class, array(
                'label' => '2e image de la paire',
                'label_attr' => [
                    'class' => 'mb-4'
                ],
                'required'      => false,
                'allow_delete'  => true,
            ))
            ->add('imageFile3', VichImageType::class, array(
                'label' => '3e image de la paire',
                'label_attr' => [
                    'class' => 'mb-4'
                ],
                'required'      => false,
                'allow_delete'  => true,
            ))
            ->add('imageFile4', VichImageType::class, array(
                'label' => '4e image de la paire',
                'label_attr' => [
                    'class' => 'mb-4'
                ],
                'required'      => false,
                'allow_delete'  => true,
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
