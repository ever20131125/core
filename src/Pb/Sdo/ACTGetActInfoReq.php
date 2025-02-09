<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetActInfoReq message
 */
class ACTGetActInfoReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const ARRACTID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRACTID => array(
            'name' => 'arrActID',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::ARRACTID] = array();
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Appends value to 'arrActID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrActID($value)
    {
        return $this->append(self::ARRACTID, $value);
    }

    /**
     * Clears 'arrActID' list
     *
     * @return null
     */
    public function clearArrActID()
    {
        return $this->clear(self::ARRACTID);
    }

    /**
     * Returns 'arrActID' list
     *
     * @return integer[]
     */
    public function getArrActID()
    {
        return $this->get(self::ARRACTID);
    }

    /**
     * Returns true if 'arrActID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrActID()
    {
        return count($this->get(self::ARRACTID)) !== 0;
    }

    /**
     * Returns 'arrActID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrActIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRACTID));
    }

    /**
     * Returns element from 'arrActID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrActIDAt($offset)
    {
        return $this->get(self::ARRACTID, $offset);
    }

    /**
     * Returns count of 'arrActID' list
     *
     * @return int
     */
    public function getArrActIDCount()
    {
        return $this->count(self::ARRACTID);
    }
}
}