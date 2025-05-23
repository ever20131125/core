<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetItemCountResp message
 */
class PDBGetItemCountResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRITEMID = 3;
    const ARRQUANTITY = 4;

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
        self::ARRITEMID => array(
            'name' => 'arrItemID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRQUANTITY => array(
            'name' => 'arrQuantity',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::ARRITEMID] = array();
        $this->values[self::ARRQUANTITY] = array();
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
     * Appends value to 'arrItemID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrItemID($value)
    {
        return $this->append(self::ARRITEMID, $value);
    }

    /**
     * Clears 'arrItemID' list
     *
     * @return null
     */
    public function clearArrItemID()
    {
        return $this->clear(self::ARRITEMID);
    }

    /**
     * Returns 'arrItemID' list
     *
     * @return integer[]
     */
    public function getArrItemID()
    {
        return $this->get(self::ARRITEMID);
    }

    /**
     * Returns true if 'arrItemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemID()
    {
        return count($this->get(self::ARRITEMID)) !== 0;
    }

    /**
     * Returns 'arrItemID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMID));
    }

    /**
     * Returns element from 'arrItemID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrItemIDAt($offset)
    {
        return $this->get(self::ARRITEMID, $offset);
    }

    /**
     * Returns count of 'arrItemID' list
     *
     * @return int
     */
    public function getArrItemIDCount()
    {
        return $this->count(self::ARRITEMID);
    }

    /**
     * Appends value to 'arrQuantity' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrQuantity($value)
    {
        return $this->append(self::ARRQUANTITY, $value);
    }

    /**
     * Clears 'arrQuantity' list
     *
     * @return null
     */
    public function clearArrQuantity()
    {
        return $this->clear(self::ARRQUANTITY);
    }

    /**
     * Returns 'arrQuantity' list
     *
     * @return integer[]
     */
    public function getArrQuantity()
    {
        return $this->get(self::ARRQUANTITY);
    }

    /**
     * Returns true if 'arrQuantity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrQuantity()
    {
        return count($this->get(self::ARRQUANTITY)) !== 0;
    }

    /**
     * Returns 'arrQuantity' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrQuantityIterator()
    {
        return new \ArrayIterator($this->get(self::ARRQUANTITY));
    }

    /**
     * Returns element from 'arrQuantity' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrQuantityAt($offset)
    {
        return $this->get(self::ARRQUANTITY, $offset);
    }

    /**
     * Returns count of 'arrQuantity' list
     *
     * @return int
     */
    public function getArrQuantityCount()
    {
        return $this->count(self::ARRQUANTITY);
    }
}
}