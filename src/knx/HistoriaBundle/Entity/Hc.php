<?php

namespace knx\HistoriaBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Tests\Component\Translation\String;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 *  
 * knx\HcBundle\Entity\Hc
 *
 * @ORM\Table(name="hc")
 * @ORM\Entity
 * 
 * @ORM\Entity(repositoryClass="knx\HistoriaBundle\Entity\Repository\HcRepository")
 */
class Hc
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var datetime $fechaIngre
     *
     * @ORM\Column(name="fecha_ingre", type="datetime", nullable=true)
     */
    private $fechaIngre;
    
    /**
     * @var datetime $fechaEgre
     *
     * @ORM\Column(name="fecha_egre", type="datetime", nullable=true)
     */
    private $fechaEgre;
    
    
    /**
     * @var string $serviIngre
     *
     * @ORM\Column(name="servi_ingre", type="string", length=30, nullable=false)
     */
       private $serviIngre;
       
       
     /**
     * @var string $serviEgre
     *
     * @ORM\Column(name="servi_egre", type="string", length=30, nullable=false)
     */
       private $serviEgre;

     /**
     * @var text $motivo
     *
     * @ORM\Column(name="motivo", type="text", nullable=false)
     */
       private $motivo;
       
       
     /**
     * @var text $estadoGen
     *
     * @ORM\Column(name="estado_gen", type="text", nullable=false)
     */
       private $estadoGen;


     /**
     * @var text $enfermedad
     *
     * @ORM\Column(name="enfermedad", type="text", nullable=false)
     */
        private $enfermedad;

     /**
     * @var string $causaExt
     *
     * @ORM\Column(name="causaExt", type="string", length=30, nullable=false)
     */
       private $causaExt;
       
       
     /**
     * @var string $tipoAtencion
     *
     * @ORM\Column(name="tipo_atencion", type="string", length=30, nullable=false)
     */
       private $tipoAtencion;
       
     /**
     * @var text $antecedentesGenerales
     *
     * @ORM\Column(name="antecedentes_generales", type="text")
     */
       private $antecedentesGenerales;

    /**
     * @var text $antecedentesFisio
     *
     * @ORM\Column(name="antecedentes_fisio", type="text")
     */
       private $antecedentesFisio;


    /**
     * @var text $antecedentesGine
     *
     * @ORM\Column(name="$antecedentes_gine", type="text")
     */
       private $antecedentesGine;

       

    /**
     * @var text $antecedentesPatologicos
     *
     * @ORM\Column(name="antecedentes_patologicos", type="text")
     */
       private $antecedentesPatologicos;


    /**
     * @var text $habitos_nocivos
     *
     * @ORM\Column(name="habitos_nocivos", type="text")
     */
       private $habitos_nocivos;


    /**
     * @var text $inmunizaciones
     *
     * @ORM\Column(name="inmunizaciones", type="text")
     */
       private $inmunizaciones;


    /**
     * @var text $alergias
     *
     * @ORM\Column(name="alergias", type="text")
     */
       private $alergias;
       
       
    /**
     * @var text $antecedentesFami
     *
     * @ORM\Column(name="antecedentes_fami", type="text")
     */
       private $antecedentesFami;


       /**
     * @var text $revSistema
     *
     * @ORM\Column(name="rev_sistema", type="text")
     */
       private $revSistema;


     /**
     * @var text $cabeza
     *
     * @ORM\Column(name="cabeza", type="text")
     */
       private $cabeza;


      /**
     * @var text $cara
     *
     * @ORM\Column(name="cara", type="text")
     */
       private $cara;
       
       
     /**
     * @var text $ojos
     *
     * @ORM\Column(name="ojos", type="text")
     */
       private $ojos;
       
       
     /**
     * @var text $oidos
     *
     * @ORM\Column(name="oidos", type="text")
     */
       private $oidos;
       
       
       
       
     /**
     * @var text $nariz
     *
     * @ORM\Column(name="nariz", type="text")
     */
       private $nariz;
       
       
     /**
     * @var text $boca
     *
     * @ORM\Column(name="boca", type="text")
     */
       private $boca;


     /**
     * @var text $cuello
     *
     * @ORM\Column(name="cuello", type="text")
     */
       private $cuello;


     /**
     * @var text $torax
     *
     * @ORM\Column(name="torax", type="text")
     */
       private $torax;



     /**
     * @var text $pulmones
     *
     * @ORM\Column(name="pulmones", type="text")
     */
       private $pulmones;
       
       
     /**
     * @var text $cardiaco
     *
     * @ORM\Column(name="cardiaco", type="text")
     */
       private $cardiaco;



     /**
     * @var text $abdomen
     *
     * @ORM\Column(name="abdomen", type="text")
     */
       private $abdomen;
       
       
       
     /**
     * @var text $espalda
     *
     * @ORM\Column(name="espalda", type="text")
     */
       private $espalda;
       
       
     /**
     * @var text $extremidades
     *
     * @ORM\Column(name="extremidades", type="text")
     */
       private $extremidades;
       
       
     /**
     * @var text $genitales
     *
     * @ORM\Column(name="genitales", type="text")
     */
       private $genitales;
       
       
       
     /**
     * @var integer $temp
     *
     * @ORM\Column(name="temp", type="integer", nullable=true)
     */
       private $temp;
       

     /**
     * @var integer $pulso
     *
     * @ORM\Column(name="pulso", type="integer", nullable=true)
     */
       private $pulso;

     /**
     * @var integer $fC
     *
     * @ORM\Column(name="f_c", type="integer", nullable=true)
     */
    private $fC;

    /**
     * @var integer $fR
     *
     * @ORM\Column(name="f_r", type="integer", nullable=true)
     */
    private $fR;
    
    
    
    
      /**
     * @var string $ta
     *
     * @ORM\Column(name="ta", type="string", nullable=false)
     */
    private $ta;
    
    
    
     /**
     * @var integer $peso
     *
     * @ORM\Column(name="peso", type="integer", nullable=true)
     */
    private $peso;

    /**
     * @var integer $estatura
     *
     * @ORM\Column(name="estatura", type="integer", nullable=true)
     */
       private $estatura;



     /**
     * @var string $glasgow
     *
     * @ORM\Column(name="glasgow", type="string", nullable=false)
     */
    private $glasgow;



     /**
     * @var integer $imc
     *
     * @ORM\Column(name="imc", type="integer")
     */
       private $imc;
       
       
     /**
     * @var text $dxPrin
     *
     * @ORM\Column(name="dxPrin", type="text", nullable=true)
     */
    private $dxPrin;
    
    
    
 /**
     * @var text $dxre1
     *
     * @ORM\Column(name="dxre1", type="text")
     */
    private $dxre1;


     /**
     * @var text $dxre2
     *
     * @ORM\Column(name="dxre2", type="text")
     */
    private $dxre2;


     /**
     * @var text $dxre3
     *
     * @ORM\Column(name="dxre3", type="text")
     */
    private $dxre3;

    

     /**
     * @var text $tipoDx
     *
     * @ORM\Column(name="tipo_dx", type="text", nullable=true)
     */
    private $tipoDx;


     /**
     * @var text $conducta
     *
     * @ORM\Column(name="conducta", type="text", nullable=true)
     */
    private $conducta;
    
    
    
    /**
     * @var text $evolucion
     *
     * @ORM\Column(name="evolucion", type="text", nullable=true)
     */
    private $evolucion;

     /**
     * @var text $dxSalida
     *
     * @ORM\Column(name="dx_salida", type="text", nullable=false)
     */
    private $dxSalida;


       /**
     * @var text $condSalida
     *
     * @ORM\Column(name="cond_salida", type="text", nullable=true)
     */
    private $condSalida;


     /**
     * @var text $manejoSalida
     *
     * @ORM\Column(name="manejo_salida", type="text", nullable=true)
     */
    private $manejoSalida;   
    
    
     /**
     * @var text $destino
     *
     * @ORM\Column(name="destino", type="text", nullable=true)
     */
    private $destino;
    
    
    /**
     * @ORM\OneToOne(targetEntity="knx\FacturacionBundle\Entity\Factura", mappedBy="hc")
     */    

    private $factura;
    
     /** @var date $created
    *
    * @Gedmo\Timestampable(on="create")
    * @ORM\Column(name="created", type="date")
    */
   private $created;

     /**
      * @var datetime $updated
      *
      * @Gedmo\Timestampable(on="update")
      * @ORM\Column(name="updated", type="datetime")
      */
   private $updated;

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
     * Set fechaIngre
     *
     * @param \DateTime $fechaIngre
     * @return Hc
     */
    public function setFechaIngre($fechaIngre)
    {
        $this->fechaIngre = $fechaIngre;
    
        return $this;
    }

    /**
     * Get fechaIngre
     *
     * @return \DateTime 
     */
    public function getFechaIngre()
    {
        return $this->fechaIngre;
    }

    /**
     * Set fechaEgre
     *
     * @param \DateTime $fechaEgre
     * @return Hc
     */
    public function setFechaEgre($fechaEgre)
    {
        $this->fechaEgre = $fechaEgre;
    
        return $this;
    }

    /**
     * Get fechaEgre
     *
     * @return \DateTime 
     */
    public function getFechaEgre()
    {
        return $this->fechaEgre;
    }

    /**
     * Set serviIngre
     *
     * @param string $serviIngre
     * @return Hc
     */
    public function setServiIngre($serviIngre)
    {
        $this->serviIngre = $serviIngre;
    
        return $this;
    }

    /**
     * Get serviIngre
     *
     * @return string 
     */
    public function getServiIngre()
    {
        return $this->serviIngre;
    }

    /**
     * Set serviEgre
     *
     * @param string $serviEgre
     * @return Hc
     */
    public function setServiEgre($serviEgre)
    {
        $this->serviEgre = $serviEgre;
    
        return $this;
    }

    /**
     * Get serviEgre
     *
     * @return string 
     */
    public function getServiEgre()
    {
        return $this->serviEgre;
    }

    /**
     * Set motivo
     *
     * @param string $motivo
     * @return Hc
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;
    
        return $this;
    }

    /**
     * Get motivo
     *
     * @return string 
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set estadoGen
     *
     * @param string $estadoGen
     * @return Hc
     */
    public function setEstadoGen($estadoGen)
    {
        $this->estadoGen = $estadoGen;
    
        return $this;
    }

    /**
     * Get estadoGen
     *
     * @return string 
     */
    public function getEstadoGen()
    {
        return $this->estadoGen;
    }

    /**
     * Set enfermedad
     *
     * @param string $enfermedad
     * @return Hc
     */
    public function setEnfermedad($enfermedad)
    {
        $this->enfermedad = $enfermedad;
    
        return $this;
    }

    /**
     * Get enfermedad
     *
     * @return string 
     */
    public function getEnfermedad()
    {
        return $this->enfermedad;
    }

    /**
     * Set causaExt
     *
     * @param string $causaExt
     * @return Hc
     */
    public function setCausaExt($causaExt)
    {
        $this->causaExt = $causaExt;
    
        return $this;
    }

    /**
     * Get causaExt
     *
     * @return string 
     */
    public function getCausaExt()
    {
        return $this->causaExt;
    }

    /**
     * Set tipoAtencion
     *
     * @param string $tipoAtencion
     * @return Hc
     */
    public function setTipoAtencion($tipoAtencion)
    {
        $this->tipoAtencion = $tipoAtencion;
    
        return $this;
    }

    /**
     * Get tipoAtencion
     *
     * @return string 
     */
    public function getTipoAtencion()
    {
        return $this->tipoAtencion;
    }

    /**
     * Set antecedentesGenerales
     *
     * @param string $antecedentesGenerales
     * @return Hc
     */
    public function setAntecedentesGenerales($antecedentesGenerales)
    {
        $this->antecedentesGenerales = $antecedentesGenerales;
    
        return $this;
    }

    /**
     * Get antecedentesGenerales
     *
     * @return string 
     */
    public function getAntecedentesGenerales()
    {
        return $this->antecedentesGenerales;
    }

    /**
     * Set antecedentesFisio
     *
     * @param string $antecedentesFisio
     * @return Hc
     */
    public function setAntecedentesFisio($antecedentesFisio)
    {
        $this->antecedentesFisio = $antecedentesFisio;
    
        return $this;
    }

    /**
     * Get antecedentesFisio
     *
     * @return string 
     */
    public function getAntecedentesFisio()
    {
        return $this->antecedentesFisio;
    }

    /**
     * Set antecedentesGine
     *
     * @param string $antecedentesGine
     * @return Hc
     */
    public function setAntecedentesGine($antecedentesGine)
    {
        $this->antecedentesGine = $antecedentesGine;
    
        return $this;
    }

    /**
     * Get antecedentesGine
     *
     * @return string 
     */
    public function getAntecedentesGine()
    {
        return $this->antecedentesGine;
    }

    /**
     * Set antecedentesPatologicos
     *
     * @param string $antecedentesPatologicos
     * @return Hc
     */
    public function setAntecedentesPatologicos($antecedentesPatologicos)
    {
        $this->antecedentesPatologicos = $antecedentesPatologicos;
    
        return $this;
    }

    /**
     * Get antecedentesPatologicos
     *
     * @return string 
     */
    public function getAntecedentesPatologicos()
    {
        return $this->antecedentesPatologicos;
    }

    /**
     * Set habitos_nocivos
     *
     * @param string $habitosNocivos
     * @return Hc
     */
    public function setHabitosNocivos($habitosNocivos)
    {
        $this->habitos_nocivos = $habitosNocivos;
    
        return $this;
    }

    /**
     * Get habitos_nocivos
     *
     * @return string 
     */
    public function getHabitosNocivos()
    {
        return $this->habitos_nocivos;
    }

    /**
     * Set inmunizaciones
     *
     * @param string $inmunizaciones
     * @return Hc
     */
    public function setInmunizaciones($inmunizaciones)
    {
        $this->inmunizaciones = $inmunizaciones;
    
        return $this;
    }

    /**
     * Get inmunizaciones
     *
     * @return string 
     */
    public function getInmunizaciones()
    {
        return $this->inmunizaciones;
    }

    /**
     * Set alergias
     *
     * @param string $alergias
     * @return Hc
     */
    public function setAlergias($alergias)
    {
        $this->alergias = $alergias;
    
        return $this;
    }

    /**
     * Get alergias
     *
     * @return string 
     */
    public function getAlergias()
    {
        return $this->alergias;
    }

    /**
     * Set antecedentesFami
     *
     * @param string $antecedentesFami
     * @return Hc
     */
    public function setAntecedentesFami($antecedentesFami)
    {
        $this->antecedentesFami = $antecedentesFami;
    
        return $this;
    }

    /**
     * Get antecedentesFami
     *
     * @return string 
     */
    public function getAntecedentesFami()
    {
        return $this->antecedentesFami;
    }

    /**
     * Set revSistema
     *
     * @param string $revSistema
     * @return Hc
     */
    public function setRevSistema($revSistema)
    {
        $this->revSistema = $revSistema;
    
        return $this;
    }

    /**
     * Get revSistema
     *
     * @return string 
     */
    public function getRevSistema()
    {
        return $this->revSistema;
    }

    /**
     * Set cabeza
     *
     * @param string $cabeza
     * @return Hc
     */
    public function setCabeza($cabeza)
    {
        $this->cabeza = $cabeza;
    
        return $this;
    }

    /**
     * Get cabeza
     *
     * @return string 
     */
    public function getCabeza()
    {
        return $this->cabeza;
    }

    /**
     * Set cara
     *
     * @param string $cara
     * @return Hc
     */
    public function setCara($cara)
    {
        $this->cara = $cara;
    
        return $this;
    }

    /**
     * Get cara
     *
     * @return string 
     */
    public function getCara()
    {
        return $this->cara;
    }

    /**
     * Set ojos
     *
     * @param string $ojos
     * @return Hc
     */
    public function setOjos($ojos)
    {
        $this->ojos = $ojos;
    
        return $this;
    }

    /**
     * Get ojos
     *
     * @return string 
     */
    public function getOjos()
    {
        return $this->ojos;
    }

    /**
     * Set oidos
     *
     * @param string $oidos
     * @return Hc
     */
    public function setOidos($oidos)
    {
        $this->oidos = $oidos;
    
        return $this;
    }

    /**
     * Get oidos
     *
     * @return string 
     */
    public function getOidos()
    {
        return $this->oidos;
    }

    /**
     * Set nariz
     *
     * @param string $nariz
     * @return Hc
     */
    public function setNariz($nariz)
    {
        $this->nariz = $nariz;
    
        return $this;
    }

    /**
     * Get nariz
     *
     * @return string 
     */
    public function getNariz()
    {
        return $this->nariz;
    }

    /**
     * Set boca
     *
     * @param string $boca
     * @return Hc
     */
    public function setBoca($boca)
    {
        $this->boca = $boca;
    
        return $this;
    }

    /**
     * Get boca
     *
     * @return string 
     */
    public function getBoca()
    {
        return $this->boca;
    }

    /**
     * Set cuello
     *
     * @param string $cuello
     * @return Hc
     */
    public function setCuello($cuello)
    {
        $this->cuello = $cuello;
    
        return $this;
    }

    /**
     * Get cuello
     *
     * @return string 
     */
    public function getCuello()
    {
        return $this->cuello;
    }

    /**
     * Set torax
     *
     * @param string $torax
     * @return Hc
     */
    public function setTorax($torax)
    {
        $this->torax = $torax;
    
        return $this;
    }

    /**
     * Get torax
     *
     * @return string 
     */
    public function getTorax()
    {
        return $this->torax;
    }

    /**
     * Set pulmones
     *
     * @param string $pulmones
     * @return Hc
     */
    public function setPulmones($pulmones)
    {
        $this->pulmones = $pulmones;
    
        return $this;
    }

    /**
     * Get pulmones
     *
     * @return string 
     */
    public function getPulmones()
    {
        return $this->pulmones;
    }

    /**
     * Set cardiaco
     *
     * @param string $cardiaco
     * @return Hc
     */
    public function setCardiaco($cardiaco)
    {
        $this->cardiaco = $cardiaco;
    
        return $this;
    }

    /**
     * Get cardiaco
     *
     * @return string 
     */
    public function getCardiaco()
    {
        return $this->cardiaco;
    }

    /**
     * Set abdomen
     *
     * @param string $abdomen
     * @return Hc
     */
    public function setAbdomen($abdomen)
    {
        $this->abdomen = $abdomen;
    
        return $this;
    }

    /**
     * Get abdomen
     *
     * @return string 
     */
    public function getAbdomen()
    {
        return $this->abdomen;
    }

    /**
     * Set espalda
     *
     * @param string $espalda
     * @return Hc
     */
    public function setEspalda($espalda)
    {
        $this->espalda = $espalda;
    
        return $this;
    }

    /**
     * Get espalda
     *
     * @return string 
     */
    public function getEspalda()
    {
        return $this->espalda;
    }

    /**
     * Set extremidades
     *
     * @param string $extremidades
     * @return Hc
     */
    public function setExtremidades($extremidades)
    {
        $this->extremidades = $extremidades;
    
        return $this;
    }

    /**
     * Get extremidades
     *
     * @return string 
     */
    public function getExtremidades()
    {
        return $this->extremidades;
    }

    /**
     * Set genitales
     *
     * @param string $genitales
     * @return Hc
     */
    public function setGenitales($genitales)
    {
        $this->genitales = $genitales;
    
        return $this;
    }

    /**
     * Get genitales
     *
     * @return string 
     */
    public function getGenitales()
    {
        return $this->genitales;
    }

    /**
     * Set temp
     *
     * @param integer $temp
     * @return Hc
     */
    public function setTemp($temp)
    {
        $this->temp = $temp;
    
        return $this;
    }

    /**
     * Get temp
     *
     * @return integer 
     */
    public function getTemp()
    {
        return $this->temp;
    }

    /**
     * Set pulso
     *
     * @param integer $pulso
     * @return Hc
     */
    public function setPulso($pulso)
    {
        $this->pulso = $pulso;
    
        return $this;
    }

    /**
     * Get pulso
     *
     * @return integer 
     */
    public function getPulso()
    {
        return $this->pulso;
    }

    /**
     * Set fC
     *
     * @param integer $fC
     * @return Hc
     */
    public function setFC($fC)
    {
        $this->fC = $fC;
    
        return $this;
    }

    /**
     * Get fC
     *
     * @return integer 
     */
    public function getFC()
    {
        return $this->fC;
    }

    /**
     * Set fR
     *
     * @param integer $fR
     * @return Hc
     */
    public function setFR($fR)
    {
        $this->fR = $fR;
    
        return $this;
    }

    /**
     * Get fR
     *
     * @return integer 
     */
    public function getFR()
    {
        return $this->fR;
    }

    /**
     * Set ta
     *
     * @param string $ta
     * @return Hc
     */
    public function setTa(\string $ta)
    {
        $this->ta = $ta;
    
        return $this;
    }

    /**
     * Get ta
     *
     * @return string 
     */
    public function getTa()
    {
        return $this->ta;
    }

    /**
     * Set peso
     *
     * @param integer $peso
     * @return Hc
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
    
        return $this;
    }

    /**
     * Get peso
     *
     * @return integer 
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set estatura
     *
     * @param integer $estatura
     * @return Hc
     */
    public function setEstatura($estatura)
    {
        $this->estatura = $estatura;
    
        return $this;
    }

    /**
     * Get estatura
     *
     * @return integer 
     */
    public function getEstatura()
    {
        return $this->estatura;
    }

    /**
     * Set glasgow
     *
     * @param string $glasgow
     * @return Hc
     */
    public function setGlasgow(\string $glasgow)
    {
        $this->glasgow = $glasgow;
    
        return $this;
    }

    /**
     * Get glasgow
     *
     * @return string 
     */
    public function getGlasgow()
    {
        return $this->glasgow;
    }

    /**
     * Set imc
     *
     * @param integer $imc
     * @return Hc
     */
    public function setImc($imc)
    {
        $this->imc = $imc;
    
        return $this;
    }

    /**
     * Get imc
     *
     * @return integer 
     */
    public function getImc()
    {
        return $this->imc;
    }

    /**
     * Set dxPrin
     *
     * @param string $dxPrin
     * @return Hc
     */
    public function setDxPrin($dxPrin)
    {
        $this->dxPrin = $dxPrin;
    
        return $this;
    }

    /**
     * Get dxPrin
     *
     * @return string 
     */
    public function getDxPrin()
    {
        return $this->dxPrin;
    }

    /**
     * Set dxre1
     *
     * @param string $dxre1
     * @return Hc
     */
    public function setDxre1($dxre1)
    {
        $this->dxre1 = $dxre1;
    
        return $this;
    }

    /**
     * Get dxre1
     *
     * @return string 
     */
    public function getDxre1()
    {
        return $this->dxre1;
    }

    /**
     * Set dxre2
     *
     * @param string $dxre2
     * @return Hc
     */
    public function setDxre2($dxre2)
    {
        $this->dxre2 = $dxre2;
    
        return $this;
    }

    /**
     * Get dxre2
     *
     * @return string 
     */
    public function getDxre2()
    {
        return $this->dxre2;
    }

    /**
     * Set dxre3
     *
     * @param string $dxre3
     * @return Hc
     */
    public function setDxre3($dxre3)
    {
        $this->dxre3 = $dxre3;
    
        return $this;
    }

    /**
     * Get dxre3
     *
     * @return string 
     */
    public function getDxre3()
    {
        return $this->dxre3;
    }

    /**
     * Set tipoDx
     *
     * @param string $tipoDx
     * @return Hc
     */
    public function setTipoDx($tipoDx)
    {
        $this->tipoDx = $tipoDx;
    
        return $this;
    }

    /**
     * Get tipoDx
     *
     * @return string 
     */
    public function getTipoDx()
    {
        return $this->tipoDx;
    }

    /**
     * Set conducta
     *
     * @param string $conducta
     * @return Hc
     */
    public function setConducta($conducta)
    {
        $this->conducta = $conducta;
    
        return $this;
    }

    /**
     * Get conducta
     *
     * @return string 
     */
    public function getConducta()
    {
        return $this->conducta;
    }

    /**
     * Set evolucion
     *
     * @param string $evolucion
     * @return Hc
     */
    public function setEvolucion($evolucion)
    {
        $this->evolucion = $evolucion;
    
        return $this;
    }

    /**
     * Get evolucion
     *
     * @return string 
     */
    public function getEvolucion()
    {
        return $this->evolucion;
    }

    /**
     * Set dxSalida
     *
     * @param string $dxSalida
     * @return Hc
     */
    public function setDxSalida($dxSalida)
    {
        $this->dxSalida = $dxSalida;
    
        return $this;
    }

    /**
     * Get dxSalida
     *
     * @return string 
     */
    public function getDxSalida()
    {
        return $this->dxSalida;
    }

    /**
     * Set condSalida
     *
     * @param string $condSalida
     * @return Hc
     */
    public function setCondSalida($condSalida)
    {
        $this->condSalida = $condSalida;
    
        return $this;
    }

    /**
     * Get condSalida
     *
     * @return string 
     */
    public function getCondSalida()
    {
        return $this->condSalida;
    }

    /**
     * Set manejoSalida
     *
     * @param string $manejoSalida
     * @return Hc
     */
    public function setManejoSalida($manejoSalida)
    {
        $this->manejoSalida = $manejoSalida;
    
        return $this;
    }

    /**
     * Get manejoSalida
     *
     * @return string 
     */
    public function getManejoSalida()
    {
        return $this->manejoSalida;
    }

    /**
     * Set destino
     *
     * @param string $destino
     * @return Hc
     */
    public function setDestino($destino)
    {
        $this->destino = $destino;
    
        return $this;
    }

    /**
     * Get destino
     *
     * @return string 
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Hc
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Hc
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set factura
     *
     * @param \knx\FacturacionBundle\Entity\Factura $factura
     * @return Hc
     */
    public function setFactura(\knx\FacturacionBundle\Entity\Factura $factura = null)
    {
        $this->factura = $factura;
    
        return $this;
    }

    /**
     * Get factura
     *
     * @return \knx\FacturacionBundle\Entity\Factura 
     */
    public function getFactura()
    {
        return $this->factura;
    }
}