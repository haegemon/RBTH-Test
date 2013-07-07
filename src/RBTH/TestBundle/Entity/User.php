<?php

namespace RBTH\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Table()
 * @ORM\Entity()
 * @UniqueEntity(fields="username", message="Мнение пользователя с таким именем уже учтено")
 * @UniqueEntity(fields="email", message="Мнение пользователя с таким email уже учтено")
 */
class User
{
    public static $sexKinds = array(
        '0' => 'Не выбранно',
        '1' => 'Мужчина',
        '2' => 'Женщина'
    );
    
    public static $childrenKinds = array(
        '0' => 'Не выбранно',
        '1' => 'Мужчина',
        '2' => 'Женщина'
    );

    public static $familyKinds = array(
        '0' => 'Не выбранно',
        '1' => 'Женат/замужем',
        '2' => 'Холост/не замужем',
        '3' => 'Разведен (а)',
        '4' => 'Гражданский брак'

    );
    public static $educationKinds = array(
        '0' => 'Не выбранно',
        '1' => 'Научная степень',
        '2' => 'незаконченное высшее',
        '3' => 'среднее специальное',
        '4' => 'среднее',
        '5' => 'незаконченное среднее'
    );
 
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable=false)
     * @Assert\NotBlank(message="Поле обязательно для заполнения")
     */
    protected $username;

    /**
     * @ORM\Column(type="string", nullable=false)
     * @Assert\NotBlank(message="Поле обязательно для заполнения")
     * @Email(message="Значение не является email-адресом")
     */
    protected $email;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $sex = 0;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $phone = '';
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Поле обязательно для заполнения")
     */
    protected $country = '';
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $address = '';
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $postIndex = '';

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $opinion = '';
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $faminyStatus = 0;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $childrenStatus = 0;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $countChildren = 0;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $educationStatus = 0;
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set sex
     *
     * @param integer $sex
     * @return User
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    
        return $this;
    }

    /**
     * Get sex
     *
     * @return integer 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postIndex
     *
     * @param string $postIndex
     * @return User
     */
    public function setPostIndex($postIndex)
    {
        $this->postIndex = $postIndex;
    
        return $this;
    }

    /**
     * Get postIndex
     *
     * @return string 
     */
    public function getPostIndex()
    {
        return $this->postIndex;
    }

    /**
     * Set opinion
     *
     * @param string $opinion
     * @return User
     */
    public function setOpinion($opinion)
    {
        $this->opinion = $opinion;
    
        return $this;
    }

    /**
     * Get opinion
     *
     * @return string 
     */
    public function getOpinion()
    {
        return $this->opinion;
    }

    /**
     * Set faminyStatus
     *
     * @param integer $faminyStatus
     * @return User
     */
    public function setFaminyStatus($faminyStatus)
    {
        $this->faminyStatus = $faminyStatus;
    
        return $this;
    }

    /**
     * Get faminyStatus
     *
     * @return integer 
     */
    public function getFaminyStatus()
    {
        return $this->faminyStatus;
    }

    /**
     * Set childrenStatus
     *
     * @param integer $childrenStatus
     * @return User
     */
    public function setChildrenStatus($childrenStatus)
    {
        $this->childrenStatus = $childrenStatus;
    
        return $this;
    }

    /**
     * Get childrenStatus
     *
     * @return integer 
     */
    public function getChildrenStatus()
    {
        return $this->childrenStatus;
    }

    /**
     * Set countChildren
     *
     * @param integer $countChildren
     * @return User
     */
    public function setCountChildren($countChildren)
    {
        $this->countChildren = $countChildren;
    
        return $this;
    }

    /**
     * Get countChildren
     *
     * @return integer 
     */
    public function getCountChildren()
    {
        return $this->countChildren;
    }

    /**
     * Set educationStatus
     *
     * @param integer $educationStatus
     * @return User
     */
    public function setEducationStatus($educationStatus)
    {
        $this->educationStatus = $educationStatus;
    
        return $this;
    }

    /**
     * Get educationStatus
     *
     * @return integer 
     */
    public function getEducationStatus()
    {
        return $this->educationStatus;
    }
}