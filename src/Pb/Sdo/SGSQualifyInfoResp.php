<?php
/**
 * Auto generated from smallgameserver.proto at 2022-06-18 10:46:38
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSQualifyInfoResp message
 */
class SGSQualifyInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const STQUALIFYINFO = 3;
    const STQUALIFYROLE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STQUALIFYINFO => array(
            'name' => 'stQualifyInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\QualifyInfo'
        ),
        self::STQUALIFYROLE => array(
            'name' => 'stQualifyRole',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\QualifyRole'
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
        $this->values[self::NROLEID] = null;
        $this->values[self::STQUALIFYINFO] = null;
        $this->values[self::STQUALIFYROLE] = null;
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
     * Sets value of 'stQualifyInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\QualifyInfo $value Property value
     *
     * @return null
     */
    public function setStQualifyInfo(\Xnhd\Core\Pb\Sdo\QualifyInfo $value=null)
    {
        return $this->set(self::STQUALIFYINFO, $value);
    }

    /**
     * Returns value of 'stQualifyInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyInfo
     */
    public function getStQualifyInfo()
    {
        return $this->get(self::STQUALIFYINFO);
    }

    /**
     * Returns true if 'stQualifyInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStQualifyInfo()
    {
        return $this->get(self::STQUALIFYINFO) !== null;
    }

    /**
     * Sets value of 'stQualifyRole' property
     *
     * @param \Xnhd\Core\Pb\Sdo\QualifyRole $value Property value
     *
     * @return null
     */
    public function setStQualifyRole(\Xnhd\Core\Pb\Sdo\QualifyRole $value=null)
    {
        return $this->set(self::STQUALIFYROLE, $value);
    }

    /**
     * Returns value of 'stQualifyRole' property
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyRole
     */
    public function getStQualifyRole()
    {
        return $this->get(self::STQUALIFYROLE);
    }

    /**
     * Returns true if 'stQualifyRole' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStQualifyRole()
    {
        return $this->get(self::STQUALIFYROLE) !== null;
    }
}
}