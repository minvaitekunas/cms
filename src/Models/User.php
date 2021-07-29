<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Address")
     * @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     */
    private $address;
    /** 
     * 
     * @ORM\Column(type="string") 
     */
    protected $name;


    public function __construct() {
        $this->groups = ArrayCollection();
    }
}

/**
 * @ORM\Entity
 * @ORM\Table(name="Addresses")
 */
class Address
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /** 
     * @ORM\Column(type="string") 
     */
    protected $addressValue;

    function getAddressValue()
    {
        return $this->addressValue;
    }
}