<?php
/**
 * Auto generated from stateserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * STSRegisterReq message
 */
class STSRegisterReq extends \ProtobufMessage
{
    /* Field index constants */
    const SZACCOUNTID = 1;
    const SZCDKEY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SZACCOUNTID => array(
            'name' => 'szAccountID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZCDKEY => array(
            'name' => 'szCDKey',
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
        $this->values[self::SZACCOUNTID] = null;
        $this->values[self::SZCDKEY] = null;
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
     * Sets value of 'szCDKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzCDKey($value)
    {
        return $this->set(self::SZCDKEY, $value);
    }

    /**
     * Returns value of 'szCDKey' property
     *
     * @return string
     */
    public function getSzCDKey()
    {
        $value = $this->get(self::SZCDKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szCDKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzCDKey()
    {
        return $this->get(self::SZCDKEY) !== null;
    }
}
}