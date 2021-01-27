<?php

namespace Whiteroom\NewsMetarchivesdata\Domain\Model;


class News extends \GeorgRinger\News\Domain\Model\News {

    /**
     * Subtitle: a subtitle given to the record
     *
     * @var string
     */
    protected $txNewsMetarchivesdataSubtitle;
    
    /**
     * Recordtype: the type the record
     *
     * @var string
     */
    protected $txNewsMetarchivesdataRecordtype;
    
    /**
     * Recordcollection: a collection assigned to the record
     *
     * @var string
     */
    protected $txNewsMetarchivesdataRecordcollection;
    
    /**
     * Recordquarter: The quarter assigned to the record
     *
     * @var string
     */
    protected $txNewsMetarchivesdataRecordquarter;
    
    /**
     * Recordsubprojects: The subprojects assigned to the record
     *
     * @var string
     */
    protected $txNewsMetarchivesdataRecordsubprojects;
    
    /**
     * Recordmanager: the name of the person in charge for the record
     *
     * @var string
     */
    protected $txNewsMetarchivesdataRecordmanager;
    
    

    /**
     * @return string
     */
    public function getMetarchivesdataSubtitle()
    {
        return $this->txNewsMetarchivesdataSubtitle;
    }

    /**
     * @param string $txNewsMetarchivesdataSubtitle
     */
    public function setTxNewsMetarchivesdataSubtitle($txNewsMetarchivesdataSubtitle)
    {
        $this->txNewsMetarchivesdataSubtitle = $txNewsMetarchivesdataSubtitle;
    }



    
    /**
     * @return string
     */
    public function getMetarchivesdataRecordtype()
    {
        return $this->txNewsMetarchivesdataRecordtype;
    }

    /**
     * @param string $txNewsMetarchivesdataRecordtype
     */
    public function setTxNewsMetarchivesdataRecordtype($txNewsMetarchivesdataRecordtype)
    {
        $this->txNewsMetarchivesdataRecordtype = $txNewsMetarchivesdataRecordtype;
    }




    /**
     * @return string
     */
    public function getMetarchivesdataRecordcollection()
    {
        return $this->txNewsMetarchivesdataRecordcollection;
    }

    /**
     * @param string $txNewsMetarchivesdataRecordcollection
     */
    public function setTxNewsMetarchivesdataRecordcollection($txNewsMetarchivesdataRecordcollection)
    {
        $this->txNewsMetarchivesdataRecordcollection = $txNewsMetarchivesdataRecordcollection;
    }




    /**
     * @return string
     */
    public function getMetarchivesdataRecordquarter()
    {
        return $this->txNewsMetarchivesdataRecordquarter;
    }

    /**
     * @param string $txNewsMetarchivesdataRecordquarter
     */
    public function setTxNewsMetarchivesdataRecordquarter($txNewsMetarchivesdataRecordquarter)
    {
        $this->txNewsMetarchivesdataRecordquarter = $txNewsMetarchivesdataRecordquarter;
    }




    /**
     * @return string
     */
    public function getMetarchivesdataRecordsubprojects()
    {
        return $this->txNewsMetarchivesdataRecordsubprojects;
    }

    /**
     * @param string $txNewsMetarchivesdataRecordsubprojects
     */
    public function setTxNewsMetarchivesdataRecordsubprojects($txNewsMetarchivesdataRecordsubprojects)
    {
        $this->txNewsMetarchivesdataRecordsubprojects = $txNewsMetarchivesdataRecordsubprojects;
    }



    /**
     * @return string
     */
    public function getMetarchivesdataRecordmanager()
    {
        return $this->txNewsMetarchivesdataRecordmanager;
    }

    /**
     * @param string $txNewsMetarchivesdataRecordmanager
     */
    public function setTxNewsMetarchivesdataRecordmanager($txNewsMetarchivesdataRecordmanager)
    {
        $this->txNewsMetarchivesdataRecordmanager = $txNewsMetarchivesdataRecordmanager;
    }

  

}






