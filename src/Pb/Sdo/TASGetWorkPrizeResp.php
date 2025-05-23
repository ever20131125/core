<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASGetWorkPrizeResp message
 */
class TASGetWorkPrizeResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const ARRWORKPRIZE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRWORKPRIZE => array(
            'name' => 'arrWorkPrize',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\WorkPrize'
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
        $this->values[self::ROLEID] = null;
        $this->values[self::ARRWORKPRIZE] = array();
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
     * Appends value to 'arrWorkPrize' list
     *
     * @param \Xnhd\Core\Pb\Sdo\WorkPrize $value Value to append
     *
     * @return null
     */
    public function appendArrWorkPrize(\Xnhd\Core\Pb\Sdo\WorkPrize $value)
    {
        return $this->append(self::ARRWORKPRIZE, $value);
    }

    /**
     * Clears 'arrWorkPrize' list
     *
     * @return null
     */
    public function clearArrWorkPrize()
    {
        return $this->clear(self::ARRWORKPRIZE);
    }

    /**
     * Returns 'arrWorkPrize' list
     *
     * @return \Xnhd\Core\Pb\Sdo\WorkPrize[]
     */
    public function getArrWorkPrize()
    {
        return $this->get(self::ARRWORKPRIZE);
    }

    /**
     * Returns true if 'arrWorkPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrWorkPrize()
    {
        return count($this->get(self::ARRWORKPRIZE)) !== 0;
    }

    /**
     * Returns 'arrWorkPrize' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrWorkPrizeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRWORKPRIZE));
    }

    /**
     * Returns element from 'arrWorkPrize' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\WorkPrize
     */
    public function getArrWorkPrizeAt($offset)
    {
        return $this->get(self::ARRWORKPRIZE, $offset);
    }

    /**
     * Returns count of 'arrWorkPrize' list
     *
     * @return int
     */
    public function getArrWorkPrizeCount()
    {
        return $this->count(self::ARRWORKPRIZE);
    }
}
}