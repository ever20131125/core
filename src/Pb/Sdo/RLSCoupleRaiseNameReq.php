<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSCoupleRaiseNameReq message
 */
class RLSCoupleRaiseNameReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NRAISEID = 2;
    const STRNAME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRAISEID => array(
            'name' => 'nRaiseID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STRNAME => array(
            'name' => 'strName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::NRAISEID] = null;
        $this->values[self::STRNAME] = null;
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
     * Sets value of 'nRaiseID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRaiseID($value)
    {
        return $this->set(self::NRAISEID, $value);
    }

    /**
     * Returns value of 'nRaiseID' property
     *
     * @return integer
     */
    public function getNRaiseID()
    {
        $value = $this->get(self::NRAISEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRaiseID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRaiseID()
    {
        return $this->get(self::NRAISEID) !== null;
    }

    /**
     * Sets value of 'strName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStrName($value)
    {
        return $this->set(self::STRNAME, $value);
    }

    /**
     * Returns value of 'strName' property
     *
     * @return string
     */
    public function getStrName()
    {
        $value = $this->get(self::STRNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'strName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStrName()
    {
        return $this->get(self::STRNAME) !== null;
    }
}
}