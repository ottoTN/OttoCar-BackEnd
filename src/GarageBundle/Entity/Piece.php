<?php

namespace GarageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Piece
 *
 * @ORM\Table(name="piece")
 * @ORM\Entity
 */
class Piece
{
    /**
     * @var string
     *
     * @ORM\Column(name="refpiece", type="string", length=50, nullable=false)
     */
    private $refpiece;

    /**
     * @var string
     *
     * @ORM\Column(name="marquepiece", type="string", length=50, nullable=false)
     */
    private $marquepiece;

    /**
     * @var float
     *
     * @ORM\Column(name="prixpiece", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixpiece;

    /**
     * @var string
     *
     * @ORM\Column(name="typepiece", type="string", length=50, nullable=false)
     */
    private $typepiece;

    /**
     * @var string
     *
     * @ORM\Column(name="libellepiece", type="string", length=100, nullable=false)
     */
    private $libellepiece;


    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set refpiece
     *
     * @param string $refpiece
     *
     * @return Piece
     */
    public function setRefpiece($refpiece)
    {
        $this->refpiece = $refpiece;

        return $this;
    }

    /**
     * Get refpiece
     *
     * @return string
     */
    public function getRefpiece()
    {
        return $this->refpiece;
    }

    /**
     * Set marquepiece
     *
     * @param string $marquepiece
     *
     * @return Piece
     */
    public function setMarquepiece($marquepiece)
    {
        $this->marquepiece = $marquepiece;

        return $this;
    }

    /**
     * Get marquepiece
     *
     * @return string
     */
    public function getMarquepiece()
    {
        return $this->marquepiece;
    }

    /**
     * Set prixpiece
     *
     * @param float $prixpiece
     *
     * @return Piece
     */
    public function setPrixpiece($prixpiece)
    {
        $this->prixpiece = $prixpiece;

        return $this;
    }

    /**
     * Get prixpiece
     *
     * @return float
     */
    public function getPrixpiece()
    {
        return $this->prixpiece;
    }

    /**
     * Set typepiece
     *
     * @param string $typepiece
     *
     * @return Piece
     */
    public function setTypepiece($typepiece)
    {
        $this->typepiece = $typepiece;

        return $this;
    }

    /**
     * Get typepiece
     *
     * @return string
     */
    public function getTypepiece()
    {
        return $this->typepiece;
    }

    /**
     * Set libellepiece
     *
     * @param string $libellepiece
     *
     * @return Piece
     */
    public function setLibellepiece($libellepiece)
    {
        $this->libellepiece = $libellepiece;

        return $this;
    }

    /**
     * Get libellepiece
     *
     * @return string
     */
    public function getLibellepiece()
    {
        return $this->libellepiece;
    }
    
    
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
