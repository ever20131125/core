<?php
/**
 * Auto generated from mailserver.proto at 2023-02-13 12:39:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MAIReceiveMailResp message
 */
class MAIReceiveMailResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRSUCCMAILID = 3;
    const ARRITEMBASE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRSUCCMAILID => array(
            'name' => 'arrSuccMailID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMBASE => array(
            'name' => 'arrItemBase',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRSUCCMAILID] = array();
        $this->values[self::ARRITEMBASE] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
    }

    /**
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Appends value to 'arrSuccMailID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrSuccMailID($value)
    {
        return $this->append(self::ARRSUCCMAILID, $value);
    }

    /**
     * Clears 'arrSuccMailID' list
     *
     * @return null
     */
    public function clearArrSuccMailID()
    {
        return $this->clear(self::ARRSUCCMAILID);
    }

    /**
     * Returns 'arrSuccMailID' list
     *
     * @return integer[]
     */
    public function getArrSuccMailID()
    {
        return $this->get(self::ARRSUCCMAILID);
    }

    /**
     * Returns true if 'arrSuccMailID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrSuccMailID()
    {
        return count($this->get(self::ARRSUCCMAILID)) !== 0;
    }

    /**
     * Returns 'arrSuccMailID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrSuccMailIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSUCCMAILID));
    }

    /**
     * Returns element from 'arrSuccMailID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrSuccMailIDAt($offset)
    {
        return $this->get(self::ARRSUCCMAILID, $offset);
    }

    /**
     * Returns count of 'arrSuccMailID' list
     *
     * @return int
     */
    public function getArrSuccMailIDCount()
    {
        return $this->count(self::ARRSUCCMAILID);
    }

    /**
     * Appends value to 'arrItemBase' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrItemBase(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRITEMBASE, $value);
    }

    /**
     * Clears 'arrItemBase' list
     *
     * @return null
     */
    public function clearArrItemBase()
    {
        return $this->clear(self::ARRITEMBASE);
    }

    /**
     * Returns 'arrItemBase' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrItemBase()
    {
        return $this->get(self::ARRITEMBASE);
    }

    /**
     * Returns true if 'arrItemBase' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemBase()
    {
        return count($this->get(self::ARRITEMBASE)) !== 0;
    }

    /**
     * Returns 'arrItemBase' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemBaseIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMBASE));
    }

    /**
     * Returns element from 'arrItemBase' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrItemBaseAt($offset)
    {
        return $this->get(self::ARRITEMBASE, $offset);
    }

    /**
     * Returns count of 'arrItemBase' list
     *
     * @return int
     */
    public function getArrItemBaseCount()
    {
        return $this->count(self::ARRITEMBASE);
    }
}
}