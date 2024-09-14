<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASReceiveTourRewardReq message
 */
class TASReceiveTourRewardReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const THEMEID = 2;
    const REWARDID = 3;
    const TYPE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::THEMEID => array(
            'name' => 'themeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REWARDID => array(
            'name' => 'rewardID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\TourInfoType::enmTourInfoType_Invalid,
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
        $this->values[self::THEMEID] = null;
        $this->values[self::REWARDID] = null;
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
     * Sets value of 'themeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setThemeID($value)
    {
        return $this->set(self::THEMEID, $value);
    }

    /**
     * Returns value of 'themeID' property
     *
     * @return integer
     */
    public function getThemeID()
    {
        $value = $this->get(self::THEMEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'themeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasThemeID()
    {
        return $this->get(self::THEMEID) !== null;
    }

    /**
     * Sets value of 'rewardID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRewardID($value)
    {
        return $this->set(self::REWARDID, $value);
    }

    /**
     * Returns value of 'rewardID' property
     *
     * @return integer
     */
    public function getRewardID()
    {
        $value = $this->get(self::REWARDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rewardID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRewardID()
    {
        return $this->get(self::REWARDID) !== null;
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