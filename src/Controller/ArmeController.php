<?php
/**
 * Created by PhpStorm.
 * User: manuel.renaudineau
 * Date: 22/11/17
 * Time: 09:01
 */

namespace App\Controller;
use App\Entity\Person;


use App\Form\PersonType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\HttpFoundation\Request;

class ArmeController extends Controller
{
    public function new(Request $request){
        return;
    }

    public function index(){
       return;
    }
}