<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSNewMsgNoti message
 */
class RLSNewMsgNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 2;
    const NEWFANSCNT = 3;
    const NEWFCOIN = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEWFANSCNT => array(
            'name' => 'newFansCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEWFCOIN => array(
            'name' => 'newFCoin',
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
        $this->values[self::NEWFANSCNT] = null;
        $this->values[self::NEWFCOIN] = null;
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
     * Sets value of 'newFansCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewFansCnt($value)
    {
        return $this->set(self::NEWFANSCNT, $value);
    }

    /**
     * Returns value of 'newFansCnt' property
     *
     * @return integer
     */
    public function getNewFansCnt()
    {
        $value = $this->get(self::NEWFANSCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'newFansCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewFansCnt()
    {
        return $this->get(self::NEWFANSCNT) !== null;
    }

    /**
     * Sets value of 'newFCoin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewFCoin($value)
    {
        return $this->set(self::NEWFCOIN, $value);
    }

    /**
     * Returns value of 'newFCoin' property
     *
     * @return integer
     */
    public function getNewFCoin()
    {
        $value = $this->get(self::NEWFCOIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'newFCoin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewFCoin()
    {
        return $this->get(self::NEWFCOIN) !== null;
    }
}
}