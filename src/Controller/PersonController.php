<?php
namespace App\Controller;
use App\Entity\Person;


use App\Form\PersonType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;



/**
 * Created by PhpStorm.
 * User: manuel.renaudineau
 * Date: 13/11/17
 * Time: 14:31
 */
class PersonController extends Controller
{


    public function indexAction()
    {
        $players = $this->getDoctrine()->getRepository(Person::class)->findAll();

        return $this->render('Person/index.html.twig', ['players' => $players]);
    }

    public function new(){
        return;
    }


}