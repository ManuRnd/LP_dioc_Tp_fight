<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Person
 * @ORM\Entity
 * @ORM\Table(name="persons")
 */
class Person
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string",length=50)
     */
    protected $name;


    /**
     * @ORM\ManyToOne(targetEntity="Arme")
     */
    private $armeCourante;


    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    protected $pointVie=100;


    /**
     * @return int
     */

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }


    /**
     * @return int
     */
    public function getPointVie(): int
    {
        return $this->pointVie;
    }

    /**
     * @param int $pointVie
     */
    public function setPointVie(int $pointVie)
    {
        $this->pointVie = $pointVie;
    }

    /**
     * @return mixed
     */
    public function getArmeCourante()
    {
        return $this->armeCourante;
    }

    /**
     * @param mixed $armeCourante
     */
    public function setArmeCourante($armeCourante)
    {
        $this->armeCourante = $armeCourante;
    }







}