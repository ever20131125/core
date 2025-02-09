<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSAskAddFriendResp message
 */
class RLSAskAddFriendResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ASKID = 2;
    const ANSWERID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ASKID => array(
            'name' => 'askID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ANSWERID => array(
            'name' => 'answerID',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::ASKID] = null;
        $this->values[self::ANSWERID] = null;
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
     * Sets value of 'askID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAskID($value)
    {
        return $this->set(self::ASKID, $value);
    }

    /**
     * Returns value of 'askID' property
     *
     * @return integer
     */
    public function getAskID()
    {
        $value = $this->get(self::ASKID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'askID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAskID()
    {
        return $this->get(self::ASKID) !== null;
    }

    /**
     * Sets value of 'answerID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAnswerID($value)
    {
        return $this->set(self::ANSWERID, $value);
    }

    /**
     * Returns value of 'answerID' property
     *
     * @return integer
     */
    public function getAnswerID()
    {
        $value = $this->get(self::ANSWERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'answerID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAnswerID()
    {
        return $this->get(self::ANSWERID) !== null;
    }
}
}