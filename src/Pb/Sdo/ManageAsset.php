<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ManageAsset message
 */
class ManageAsset extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ASSETTYPE = 2;
    const NASSET = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ASSETTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\AssetType::enmAssetType_None,
            'name' => 'assetType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NASSET => array(
            'name' => 'nAsset',
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
        $this->values[self::ASSETTYPE] = self::$fields[self::ASSETTYPE]['default'];
        $this->values[self::NASSET] = null;
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
     * Sets value of 'assetType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAssetType($value)
    {
        return $this->set(self::ASSETTYPE, $value);
    }

    /**
     * Returns value of 'assetType' property
     *
     * @return integer
     */
    public function getAssetType()
    {
        $value = $this->get(self::ASSETTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'assetType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAssetType()
    {
        return $this->get(self::ASSETTYPE) !== null;
    }

    /**
     * Sets value of 'nAsset' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAsset($value)
    {
        return $this->set(self::NASSET, $value);
    }

    /**
     * Returns value of 'nAsset' property
     *
     * @return integer
     */
    public function getNAsset()
    {
        $value = $this->get(self::NASSET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAsset' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAsset()
    {
        return $this->get(self::NASSET) !== null;
    }
}
}