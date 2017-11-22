<?php
namespace App\Form;
use App\Entity\Person;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Created by PhpStorm.
 * User: manuel.renaudineau
 * Date: 13/11/17
 * Time: 16:14
 */
class PersonType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class'=>Person::class));
    }



    public function buildForm(FormBuilderInterface $builder, array $options)
    {
          $builder
            ->add('name',TextType::class)
            ->add('save',SubmitType::class,array('label'=>'Créer'))
            ->getForm();
    }
}
