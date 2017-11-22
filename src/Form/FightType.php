<?php
/**
 * Created by PhpStorm.
 * User: manuel.renaudineau
 * Date: 22/11/17
 * Time: 10:12
 */

namespace App\Form;
use App\Figth\Fight;
use App\Entity\Person;



use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;

class FightType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'person',
                EntityType::class,
                [
                    'class'=>Person::class,
                    'choice_label'=>'name',
                    'multiple'=>false,
                    'expanded'=>false,
                ]
            )
            ->add(
                'distance',
                IntegerType::class
            )
            ->add(
                'cible',
                EntityType::class
            );
    }
}