<?php
/**
 * Auto generated from accountdbserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ADBCreateRoleResp message
 */
class ADBCreateRoleResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const SZACCOUNTID = 2;
    const NZONEID = 3;
    const STROLEPUBLICINFO = 4;
    const STROLEPRIVATEINFO = 5;
    const STAVATARINFO = 6;
    const NSELECT = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::SZACCOUNTID => array(
            'name' => 'szAccountID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NZONEID => array(
            'name' => 'nZoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROLEPUBLICINFO => array(
            'name' => 'stRolePublicInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::STROLEPRIVATEINFO => array(
            'name' => 'stRolePrivateInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePrivateInfo'
        ),
        self::STAVATARINFO => array(
            'name' => 'stAvatarInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\AvatarInfo'
        ),
        self::NSELECT => array(
            'name' => 'nSelect',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::SZACCOUNTID] = null;
        $this->values[self::NZONEID] = null;
        $this->values[self::STROLEPUBLICINFO] = null;
        $this->values[self::STROLEPRIVATEINFO] = null;
        $this->values[self::STAVATARINFO] = null;
        $this->values[self::NSELECT] = null;
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
     * Sets value of 'szAccountID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzAccountID($value)
    {
        return $this->set(self::SZACCOUNTID, $value);
    }

    /**
     * Returns value of 'szAccountID' property
     *
     * @return string
     */
    public function getSzAccountID()
    {
        $value = $this->get(self::SZACCOUNTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szAccountID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzAccountID()
    {
        return $this->get(self::SZACCOUNTID) !== null;
    }

    /**
     * Sets value of 'nZoneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNZoneID($value)
    {
        return $this->set(self::NZONEID, $value);
    }

    /**
     * Returns value of 'nZoneID' property
     *
     * @return integer
     */
    public function getNZoneID()
    {
        $value = $this->get(self::NZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nZoneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNZoneID()
    {
        return $this->get(self::NZONEID) !== null;
    }

    /**
     * Sets value of 'stRolePublicInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setStRolePublicInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::STROLEPUBLICINFO, $value);
    }

    /**
     * Returns value of 'stRolePublicInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getStRolePublicInfo()
    {
        return $this->get(self::STROLEPUBLICINFO);
    }

    /**
     * Returns true if 'stRolePublicInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRolePublicInfo()
    {
        return $this->get(self::STROLEPUBLICINFO) !== null;
    }

    /**
     * Sets value of 'stRolePrivateInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePrivateInfo $value Property value
     *
     * @return null
     */
    public function setStRolePrivateInfo(\Xnhd\Core\Pb\Sdo\RolePrivateInfo $value=null)
    {
        return $this->set(self::STROLEPRIVATEINFO, $value);
    }

    /**
     * Returns value of 'stRolePrivateInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePrivateInfo
     */
    public function getStRolePrivateInfo()
    {
        return $this->get(self::STROLEPRIVATEINFO);
    }

    /**
     * Returns true if 'stRolePrivateInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRolePrivateInfo()
    {
        return $this->get(self::STROLEPRIVATEINFO) !== null;
    }

    /**
     * Sets value of 'stAvatarInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\AvatarInfo $value Property value
     *
     * @return null
     */
    public function setStAvatarInfo(\Xnhd\Core\Pb\Sdo\AvatarInfo $value=null)
    {
        return $this->set(self::STAVATARINFO, $value);
    }

    /**
     * Returns value of 'stAvatarInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\AvatarInfo
     */
    public function getStAvatarInfo()
    {
        return $this->get(self::STAVATARINFO);
    }

    /**
     * Returns true if 'stAvatarInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStAvatarInfo()
    {
        return $this->get(self::STAVATARINFO) !== null;
    }

    /**
     * Sets value of 'nSelect' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSelect($value)
    {
        return $this->set(self::NSELECT, $value);
    }

    /**
     * Returns value of 'nSelect' property
     *
     * @return integer
     */
    public function getNSelect()
    {
        $value = $this->get(self::NSELECT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSelect' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSelect()
    {
        return $this->get(self::NSELECT) !== null;
    }
}
}