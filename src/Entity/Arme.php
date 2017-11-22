<?php
namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Arme
 * @ORM\Entity
     * @ORM\Table(name="armes")
 */
class Arme
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
     * @var decimal
     *
     * @ORM\Column(type="decimal")
     */
    protected $dommageDistanceCoef;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    protected $dommage;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    protected $fireRate;

    /**
     * Arme constructor.
     * @param string $name
     * @param decimal $dommageDistanceCoef
     * @param int $dommage
     * @param int $fireRate
     */
    public function __construct($name,  $dommage, $dommageDistanceCoef,$fireRate)
    {
        $this->name = $name;
        $this->dommageDistanceCoef = $dommageDistanceCoef;
        $this->dommage = $dommage;
        $this->fireRate = $fireRate;
    }


    /**
     * @return int
     */

    public function getId()
    {
        return $this->id;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return decimal
     */
    public function getDommageDistanceCoef()
    {
        return $this->dommageDistanceCoef;
    }


    /**
     * @return int
     */
    public function getDommage()
    {
        return $this->dommage;
    }


    /**
     * @return int
     */
    public function getFireRate()
    {
        return $this->fireRate;
    }


}