<?php
/**
 * Auto generated from relationserver.proto at 2021-10-26 06:02:40
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSWearTokenResp message
 */
class RLSWearTokenResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const STTOKENINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::STTOKENINFO => array(
            'name' => 'stTokenInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\TokenInfo'
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
        $this->values[self::STTOKENINFO] = null;
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
     * Sets value of 'stTokenInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\TokenInfo $value Property value
     *
     * @return null
     */
    public function setStTokenInfo(\Xnhd\Core\Pb\Sdo\TokenInfo $value=null)
    {
        return $this->set(self::STTOKENINFO, $value);
    }

    /**
     * Returns value of 'stTokenInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\TokenInfo
     */
    public function getStTokenInfo()
    {
        return $this->get(self::STTOKENINFO);
    }

    /**
     * Returns true if 'stTokenInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStTokenInfo()
    {
        return $this->get(self::STTOKENINFO) !== null;
    }
}
}