<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSGetChannelInfoReq message
 */
class COSGetChannelInfoReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NCHANNELID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCHANNELID => array(
            'name' => 'nChannelID',
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
        $this->values[self::NCHANNELID] = null;
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
     * Sets value of 'nChannelID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNChannelID($value)
    {
        return $this->set(self::NCHANNELID, $value);
    }

    /**
     * Returns value of 'nChannelID' property
     *
     * @return integer
     */
    public function getNChannelID()
    {
        $value = $this->get(self::NCHANNELID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nChannelID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNChannelID()
    {
        return $this->get(self::NCHANNELID) !== null;
    }
}
}