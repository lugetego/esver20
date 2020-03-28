<?php

namespace RegistroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;




/**
 * Form
 *
 * @ORM\Table(name="form")
 * @ORM\Entity(repositoryClass="RegistroBundle\Repository\FormRepository")
 * @Vich\Uploadable
 * @UniqueEntity("mail")
 * @ORM\HasLifecycleCallbacks
 */
class Form
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="paterno", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $paterno;

    /**
     * @var string
     *
     * @ORM\Column(name="materno", type="string", length=50, nullable=true)
     * @Assert\NotBlank()
     */
    private $materno;

    /**
     * @var bool
     *
     * @ORM\Column(name="sexo", type="boolean", nullable=true)
     */
    private $sexo;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nacimiento", type="date")
     * @Assert\NotBlank()
     */
    private $nacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=20)
     * @Assert\Type(type="digit")
     * @Assert\Length(
     *      min = 10,
     *      max = 15,
     *      minMessage = "El teléfono debe contener mínimo {{ limit }} caracteres",
     *      maxMessage = "El teléfono no puede se de más de {{ limit }} caracteres"
     * )
     */

    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="procedencia", type="string", length=100)
     * @Assert\NotBlank()
     */
    private $procedencia;

    /**
     * @var string
     *
     * @ORM\Column(name="carrera", type="string", length=100)
     * @Assert\NotBlank()
     */
    private $carrera;

    /**
     * @var string
     *
     * @ORM\Column(name="semestre", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $semestre;

    /**
     * @var string
     *
     * @ORM\Column(name="porcentaje", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $porcentaje;

    /**
     * @var string
     *
     * @ORM\Column(name="promedio", type="string", length=50)
     */
    private $promedio;

    /**
     * @var string
     *
     * @ORM\Column(name="profesor", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $profesor;

    /**
     * @var string
     *
     * @ORM\Column(name="univprofesor", type="string", length=100)
     * @Assert\NotBlank()
     */
    private $univprofesor;

    /**
     * @var string
     *
     * @ORM\Column(name="mailprofesor", type="string", length=50)
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true)
     * @Assert\NotBlank()
     */

    private $mailprofesor;


    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="esver19_historial", fileNameProperty="historialName")
     *
     * @Assert\File(
     *     maxSize = "2M",
     * uploadFormSizeErrorMessage = "El archivo debe ser menor a 2 MB",
     *     mimeTypes = {"application/pdf", "application/x-pdf"},
     *     mimeTypesMessage = "Please upload a valid PDF"
     * )
     *
     * @var File
     */
    public $historialFile;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $historialName;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="esver19_carta", fileNameProperty="cartaName")
     *
     * @Assert\File(
     *     maxSize = "2M",
     * uploadFormSizeErrorMessage = "El archivo debe ser menor a 2 MB",
     *     mimeTypes = {"application/pdf", "application/x-pdf"},
     *     mimeTypesMessage = "Please upload a valid PDF"
     * )
     *
     * @var File
     */
    public $cartaFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cartaName;

    /**
     * @var bool
     *
     * @ORM\Column(name="participado", type="boolean", nullable=true)
     */
    private $participado;

    /**
     * @var bool
     *
     * @ORM\Column(name="confirmado", type="boolean", nullable=true)
     */
    private $confirmado;

    /**
     * @var string
     *
     * @ORM\Column(name="cursog1", type="string", length=100)
     * @Assert\NotBlank()
     */
    private $cursog1;

    /**
     * @var string
     *
     * @ORM\Column(name="cursog2", type="string", length=100)
     * @Assert\NotBlank()
     */
    private $cursog2;

    /**
     * @var string
     *
     * @ORM\Column(name="cursog3", type="string", length=100)
     * @Assert\NotBlank()
     */
    private $cursog3;

    /**
     * @var bool
     *
     * @ORM\Column(name="vegetariano", type="boolean", nullable=true)
     */
    private $vegetariano;

    /**
     * @var bool
     *
     * @ORM\Column(name="aceptado", type="boolean", nullable=true)
     */
    private $aceptado;

    /**
     * @var string
     *
     * @ORM\Column(name="evento", type="string", length=1000, nullable=true)
     * @Assert\Length(
     *      max = 1000,
     *      maxMessage = "No se permiten más de {{ limit }} caracteres"
     * )
     */
    private $evento;

    /**
     * @var string
     *
     * @ORM\Column(name="beca", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $beca;

    /**
     * @var string
     *
     * @ORM\Column(name="razones", type="text")
     * @Assert\NotBlank()
     * @Assert\Length(
     *      max = 2000,
     *      maxMessage = "No se permiten más de {{ limit }} caracteres"
     * )
     */
    private $razones;


    /**
     * @var string
     *
     * @ORM\Column(name="comentarios", type="text", nullable=true)
     * @Assert\Length(
     *      max = 6000,
     *      maxMessage = "No se permiten más de {{ limit }} caracteres"
     * )
     */
    private $comentarios;

    /**
     * @var string
     *
     * @ORM\Column(name="recomendacion", type="text", nullable=true)
     * @Assert\Length(
     *      max = 6000,
     *      maxMessage = "No se permiten más de {{ limit }} caracteres"
     * )
     */
    private $recomendacion;

    /**
     * @Gedmo\Slug(fields={"nombre", "paterno"})
     * @ORM\Column(name="slug", type="string", length=60, unique=true)
     */
    private $slug;


    /**
     * @var bool
     *
     * @ORM\Column(name="examen", type="boolean", nullable=true)
     */
    private $examen;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $createdAt;

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
     * Set nombre
     *
     * @param string $nombre
     * @return Form
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set paterno
     *
     * @param string $paterno
     * @return Form
     */
    public function setPaterno($paterno)
    {
        $this->paterno = $paterno;

        return $this;
    }

    /**
     * Get paterno
     *
     * @return string 
     */
    public function getPaterno()
    {
        return $this->paterno;
    }

    /**
     * Set materno
     *
     * @param string $materno
     * @return Form
     */
    public function setMaterno($materno)
    {
        $this->materno = $materno;

        return $this;
    }

    /**
     * Get materno
     *
     * @return string 
     */
    public function getMaterno()
    {
        return $this->materno;
    }

    /**
     * Set sexo
     *
     * @param boolean $sexo
     * @return Form
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return boolean 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set nacimiento
     *
     * @param \DateTime $nacimiento
     * @return Form
     */
    public function setNacimiento($nacimiento)
    {
        $this->nacimiento = $nacimiento;

        return $this;
    }

    /**
     * Get nacimiento
     *
     * @return \DateTime 
     */
    public function getNacimiento()
    {
        return $this->nacimiento;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Form
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Form
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set procedencia
     *
     * @param string $procedencia
     * @return Form
     */
    public function setProcedencia($procedencia)
    {
        $this->procedencia = $procedencia;

        return $this;
    }

    /**
     * Get procedencia
     *
     * @return string 
     */
    public function getProcedencia()
    {
        return $this->procedencia;
    }

    /**
     * Set carrera
     *
     * @param string $carrera
     * @return Form
     */
    public function setCarrera($carrera)
    {
        $this->carrera = $carrera;

        return $this;
    }

    /**
     * Get carrera
     *
     * @return string 
     */
    public function getCarrera()
    {
        return $this->carrera;
    }

    /**
     * Set semestre
     *
     * @param string $semestre
     * @return Form
     */
    public function setSemestre($semestre)
    {
        $this->semestre = $semestre;

        return $this;
    }

    /**
     * Get semestre
     *
     * @return string 
     */
    public function getSemestre()
    {
        return $this->semestre;
    }

    /**
     * Set porcentaje
     *
     * @param string $porcentaje
     * @return Form
     */
    public function setPorcentaje($porcentaje)
    {
        $this->porcentaje = $porcentaje;

        return $this;
    }

    /**
     * Get porcentaje
     *
     * @return string 
     */
    public function getPorcentaje()
    {
        return $this->porcentaje;
    }

    /**
     * Set promedio
     *
     * @param string $promedio
     * @return Form
     */
    public function setPromedio($promedio)
    {
        $this->promedio = $promedio;

        return $this;
    }

    /**
     * Get promedio
     *
     * @return string 
     */
    public function getPromedio()
    {
        return $this->promedio;
    }

    /**
     * Set profesor
     *
     * @param string $profesor
     * @return Form
     */
    public function setProfesor($profesor)
    {
        $this->profesor = $profesor;

        return $this;
    }

    /**
     * Get profesor
     *
     * @return string 
     */
    public function getProfesor()
    {
        return $this->profesor;
    }

    /**
     * Set univprofesor
     *
     * @param string $univprofesor
     * @return Form
     */
    public function setUnivprofesor($univprofesor)
    {
        $this->univprofesor = $univprofesor;

        return $this;
    }

    /**
     * Get univprofesor
     *
     * @return string 
     */
    public function getUnivprofesor()
    {
        return $this->univprofesor;
    }

    /**
     * Set mailprofesor
     *
     * @param string $mailprofesor
     * @return Form
     */
    public function setMailprofesor($mailprofesor)
    {
        $this->mailprofesor = $mailprofesor;

        return $this;
    }

    /**
     * Get mailprofesor
     *
     * @return string 
     */
    public function getMailprofesor()
    {
        return $this->mailprofesor;
    }

    /**
     * Set participado
     *
     * @param boolean $participado
     * @return Form
     */
    public function setParticipado($participado)
    {
        $this->participado = $participado;

        return $this;
    }

    /**
     * Get participado
     *
     * @return boolean 
     */
    public function getParticipado()
    {
        return $this->participado;
    }

    /**
     * @return bool
     */
    public function isVegetariano()
    {
        return $this->vegetariano;
    }

    /**
     * @param bool $vegetariano
     */
    public function setVegetariano($vegetariano)
    {
        $this->vegetariano = $vegetariano;
    }

    /**
     * @return string
     */
    public function getCursog1()
    {
        return $this->cursog1;
    }

    /**
     * @param string $cursog1
     */
    public function setCursog1($cursog1)
    {
        $this->cursog1 = $cursog1;
    }

    /**
     * @return string
     */
    public function getCursog2()
    {
        return $this->cursog2;
    }

    /**
     * @param string $cursog2
     */
    public function setCursog2($cursog2)
    {
        $this->cursog2 = $cursog2;
    }

    /**
     * @return string
     */
    public function getCursog3()
    {
        return $this->cursog3;
    }

    /**
     * @param string $cursog3
     */
    public function setCursog3($cursog3)
    {
        $this->cursog3 = $cursog3;
    }

    /**
     * Set evento
     *
     * @param string $evento
     * @return Form
     */
    public function setEvento($evento)
    {
        $this->evento = $evento;

        return $this;
    }

    /**
     * Get evento
     *
     * @return string 
     */
    public function getEvento()
    {
        return $this->evento;
    }

    /**
     * Set beca
     *
     * @param string $beca
     * @return Form
     */
    public function setBeca($beca)
    {
        $this->beca = $beca;

        return $this;
    }

    /**
     * Get beca
     *
     * @return string 
     */
    public function getBeca()
    {
        return $this->beca;
    }

    /**
     * Set razones
     *
     * @param string $razones
     * @return Form
     */
    public function setRazones($razones)
    {
        $this->razones = $razones;

        return $this;
    }

    /**
     * Get razones
     *
     * @return string 
     */
    public function getRazones()
    {
        return $this->razones;
    }




    /**
     * Set cartaFile
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $recommendation
     */
    public function setCartaFile(File $carta = null)
    {
        $this->cartaFile = $carta;
        if ($carta) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }
    }

    /**
     * Get cartaFile
     *
     * @return File
     */
    public function getCartaFile()
    {
        return $this->cartaFile;
    }

    /**
     * @return mixed
     */
    public function getCartaName()
    {
        return $this->cartaName;
    }

    /**
     * @param mixed $cartaName
     */
    public function setCartaName($cartaName)
    {
        $this->cartaName = $cartaName;
    }


    /**
     * @return mixed
     */
    public function getHistorialName()
    {
        return $this->historialName;
    }

    /**
     * @param mixed $historialName
     */
    public function setHistorialName($historialName)
    {
        $this->historialName = $historialName;
    }


    /**
     * Set historialFile
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $recommendation
     */
    public function setHistorialFile(File $historial = null)
    {
        $this->historialFile = $historial;
        if ($historial) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->createdAt = new \DateTime('now');
        }
    }

    /**
     * Get historialFile
     *
     * @return File
     */
    public function getHistorialFile()
    {
        return $this->historialFile;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Form
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Form
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * @param string $comentarios
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;
    }

    /**
     * @return boolean
     */
    public function isConfirmado()
    {
        return $this->confirmado;
    }

    /**
     * @param boolean $confirmado
     */
    public function setConfirmado($confirmado)
    {
        $this->confirmado = $confirmado;
    }

    /**
     * @return boolean
     */
    public function isAceptado()
    {
        return $this->aceptado;
    }

    /**
     * @param boolean $aceptado
     */
    public function setAceptado($aceptado)
    {
        $this->aceptado = $aceptado;
    }

    /**
     * @return string
     */
    public function getRecomendacion()
    {
        return $this->recomendacion;
    }

    /**
     * @param string $recomendacion
     */
    public function setRecomendacion($recomendacion)
    {
        $this->recomendacion = $recomendacion;
    }

    /**
     * @return boolean
     */
    public function isExamen()
    {
        return $this->examen;
    }

    /**
     * @param boolean $examen
     */
    public function setExamen($examen)
    {
        $this->examen = $examen;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }


}