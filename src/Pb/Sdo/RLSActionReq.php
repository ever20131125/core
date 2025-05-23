<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSActionReq message
 */
class RLSActionReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const ARRTARGETID = 2;
    const TYPE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRTARGETID => array(
            'name' => 'arrTargetid',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\InteractType::enmInteractType_None,
            'name' => 'type',
            'required' => false,
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
        $this->values[self::ARRTARGETID] = array();
        $this->values[self::TYPE] = self::$fields[self::TYPE]['default'];
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
     * Sets value of 'roleid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleid($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleid' property
     *
     * @return integer
     */
    public function getRoleid()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleid()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Appends value to 'arrTargetid' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrTargetid($value)
    {
        return $this->append(self::ARRTARGETID, $value);
    }

    /**
     * Clears 'arrTargetid' list
     *
     * @return null
     */
    public function clearArrTargetid()
    {
        return $this->clear(self::ARRTARGETID);
    }

    /**
     * Returns 'arrTargetid' list
     *
     * @return integer[]
     */
    public function getArrTargetid()
    {
        return $this->get(self::ARRTARGETID);
    }

    /**
     * Returns true if 'arrTargetid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTargetid()
    {
        return count($this->get(self::ARRTARGETID)) !== 0;
    }

    /**
     * Returns 'arrTargetid' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTargetidIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTARGETID));
    }

    /**
     * Returns element from 'arrTargetid' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrTargetidAt($offset)
    {
        return $this->get(self::ARRTARGETID, $offset);
    }

    /**
     * Returns count of 'arrTargetid' list
     *
     * @return int
     */
    public function getArrTargetidCount()
    {
        return $this->count(self::ARRTARGETID);
    }

    /**
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }
}
}