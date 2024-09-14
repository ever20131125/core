<?php
/**
 * Auto generated from playerdbserver.proto at 2021-10-26 06:02:32
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetRoleRankInfoReq message
 */
class PDBGetRoleRankInfoReq extends \ProtobufMessage
{
    /* Field index constants */
    const ARRROLEID = 1;
    const RANKTYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRROLEID => array(
            'name' => 'arrRoleID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RANKTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RankType::enmRankType_None,
            'name' => 'rankType',
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
        $this->values[self::ARRROLEID] = array();
        $this->values[self::RANKTYPE] = self::$fields[self::RANKTYPE]['default'];
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
     * Appends value to 'arrRoleID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrRoleID($value)
    {
        return $this->append(self::ARRROLEID, $value);
    }

    /**
     * Clears 'arrRoleID' list
     *
     * @return null
     */
    public function clearArrRoleID()
    {
        return $this->clear(self::ARRROLEID);
    }

    /**
     * Returns 'arrRoleID' list
     *
     * @return integer[]
     */
    public function getArrRoleID()
    {
        return $this->get(self::ARRROLEID);
    }

    /**
     * Returns true if 'arrRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleID()
    {
        return count($this->get(self::ARRROLEID)) !== 0;
    }

    /**
     * Returns 'arrRoleID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEID));
    }

    /**
     * Returns element from 'arrRoleID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrRoleIDAt($offset)
    {
        return $this->get(self::ARRROLEID, $offset);
    }

    /**
     * Returns count of 'arrRoleID' list
     *
     * @return int
     */
    public function getArrRoleIDCount()
    {
        return $this->count(self::ARRROLEID);
    }

    /**
     * Sets value of 'rankType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRankType($value)
    {
        return $this->set(self::RANKTYPE, $value);
    }

    /**
     * Returns value of 'rankType' property
     *
     * @return integer
     */
    public function getRankType()
    {
        $value = $this->get(self::RANKTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rankType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRankType()
    {
        return $this->get(self::RANKTYPE) !== null;
    }
}
}