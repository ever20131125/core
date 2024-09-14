<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBSetPlayerOpenReq message
 */
class PDBSetPlayerOpenReq extends \ProtobufMessage
{
    /* Field index constants */
    const NPAYOPEN = 1;
    const NPICUPDATEOPEN = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NPAYOPEN => array(
            'name' => 'nPayOpen',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPICUPDATEOPEN => array(
            'name' => 'nPicUpdateOpen',
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
        $this->values[self::NPAYOPEN] = null;
        $this->values[self::NPICUPDATEOPEN] = null;
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
     * Sets value of 'nPayOpen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPayOpen($value)
    {
        return $this->set(self::NPAYOPEN, $value);
    }

    /**
     * Returns value of 'nPayOpen' property
     *
     * @return integer
     */
    public function getNPayOpen()
    {
        $value = $this->get(self::NPAYOPEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPayOpen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPayOpen()
    {
        return $this->get(self::NPAYOPEN) !== null;
    }

    /**
     * Sets value of 'nPicUpdateOpen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPicUpdateOpen($value)
    {
        return $this->set(self::NPICUPDATEOPEN, $value);
    }

    /**
     * Returns value of 'nPicUpdateOpen' property
     *
     * @return integer
     */
    public function getNPicUpdateOpen()
    {
        $value = $this->get(self::NPICUPDATEOPEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPicUpdateOpen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPicUpdateOpen()
    {
        return $this->get(self::NPICUPDATEOPEN) !== null;
    }
}
}