<?php
/**
 * Auto generated from smallgameserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSExitInstanceRoomNoti message
 */
class SGSExitInstanceRoomNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const EXITTYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EXITTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\InstanceExitType::enmInstanceExitType_Normal,
            'name' => 'exitType',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::EXITTYPE] = self::$fields[self::EXITTYPE]['default'];
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
     * Sets value of 'exitType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setExitType($value)
    {
        return $this->set(self::EXITTYPE, $value);
    }

    /**
     * Returns value of 'exitType' property
     *
     * @return integer
     */
    public function getExitType()
    {
        $value = $this->get(self::EXITTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'exitType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExitType()
    {
        return $this->get(self::EXITTYPE) !== null;
    }
}
}