<?php
/**
 * Auto generated from petserver.proto at 2022-08-17 12:02:08
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PESGetWorkStatusReq message
 */
class PESGetWorkStatusReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const UUID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UUID => array(
            'name' => 'uuid',
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
        $this->values[self::UUID] = null;
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
     * Sets value of 'roleId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleId($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleId' property
     *
     * @return integer
     */
    public function getRoleId()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleId()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'uuid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUuid($value)
    {
        return $this->set(self::UUID, $value);
    }

    /**
     * Returns value of 'uuid' property
     *
     * @return integer
     */
    public function getUuid()
    {
        $value = $this->get(self::UUID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'uuid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUuid()
    {
        return $this->get(self::UUID) !== null;
    }
}
}