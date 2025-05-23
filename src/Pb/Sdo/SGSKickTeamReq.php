<?php
/**
 * Auto generated from smallgameserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSKickTeamReq message
 */
class SGSKickTeamReq extends \ProtobufMessage
{
    /* Field index constants */
    const NLEADERID = 1;
    const NTARGETID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NLEADERID => array(
            'name' => 'nLeaderID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTARGETID => array(
            'name' => 'nTargetID',
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
        $this->values[self::NLEADERID] = null;
        $this->values[self::NTARGETID] = null;
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
     * Sets value of 'nLeaderID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLeaderID($value)
    {
        return $this->set(self::NLEADERID, $value);
    }

    /**
     * Returns value of 'nLeaderID' property
     *
     * @return integer
     */
    public function getNLeaderID()
    {
        $value = $this->get(self::NLEADERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLeaderID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLeaderID()
    {
        return $this->get(self::NLEADERID) !== null;
    }

    /**
     * Sets value of 'nTargetID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTargetID($value)
    {
        return $this->set(self::NTARGETID, $value);
    }

    /**
     * Returns value of 'nTargetID' property
     *
     * @return integer
     */
    public function getNTargetID()
    {
        $value = $this->get(self::NTARGETID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTargetID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTargetID()
    {
        return $this->get(self::NTARGETID) !== null;
    }
}
}