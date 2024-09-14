<?php
/**
 * Auto generated from roledbserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RDBRoleInfoUpdateNoti message
 */
class RDBRoleInfoUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NROLEDATATYPE = 2;
    const NNAMERGB = 3;
    const NBIRTHDAY = 4;
    const NCITY = 5;
    const SZVOICE = 6;
    const SZWORD = 7;
    const ARRMYLABEL = 8;
    const ARRFAVLABEL = 9;
    const STHEADPIC = 10;
    const NSETTING = 11;
    const NLASTLOGOUTTIME = 12;
    const NTOTALLOGINCOUNT = 13;
    const NTOTALONLINETIME = 14;
    const NTODAYLOGINCOUNT = 15;
    const NTODAYONLINETIME = 16;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEDATATYPE => array(
            'name' => 'nRoleDataType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NNAMERGB => array(
            'name' => 'nNameRGB',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBIRTHDAY => array(
            'name' => 'nBirthday',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCITY => array(
            'name' => 'nCity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZVOICE => array(
            'name' => 'szVoice',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZWORD => array(
            'name' => 'szWord',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ARRMYLABEL => array(
            'name' => 'arrMyLabel',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRFAVLABEL => array(
            'name' => 'arrFavLabel',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STHEADPIC => array(
            'name' => 'stHeadPic',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\PicInfo'
        ),
        self::NSETTING => array(
            'name' => 'nSetting',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLASTLOGOUTTIME => array(
            'name' => 'nLastLogoutTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTOTALLOGINCOUNT => array(
            'name' => 'nTotalLoginCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTOTALONLINETIME => array(
            'name' => 'nTotalOnlineTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTODAYLOGINCOUNT => array(
            'name' => 'nTodayLoginCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTODAYONLINETIME => array(
            'name' => 'nTodayOnlineTime',
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
        $this->values[self::NROLEDATATYPE] = null;
        $this->values[self::NNAMERGB] = null;
        $this->values[self::NBIRTHDAY] = null;
        $this->values[self::NCITY] = null;
        $this->values[self::SZVOICE] = null;
        $this->values[self::SZWORD] = null;
        $this->values[self::ARRMYLABEL] = array();
        $this->values[self::ARRFAVLABEL] = array();
        $this->values[self::STHEADPIC] = null;
        $this->values[self::NSETTING] = null;
        $this->values[self::NLASTLOGOUTTIME] = null;
        $this->values[self::NTOTALLOGINCOUNT] = null;
        $this->values[self::NTOTALONLINETIME] = null;
        $this->values[self::NTODAYLOGINCOUNT] = null;
        $this->values[self::NTODAYONLINETIME] = null;
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
     * Sets value of 'nRoleDataType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleDataType($value)
    {
        return $this->set(self::NROLEDATATYPE, $value);
    }

    /**
     * Returns value of 'nRoleDataType' property
     *
     * @return integer
     */
    public function getNRoleDataType()
    {
        $value = $this->get(self::NROLEDATATYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleDataType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleDataType()
    {
        return $this->get(self::NROLEDATATYPE) !== null;
    }

    /**
     * Sets value of 'nNameRGB' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNameRGB($value)
    {
        return $this->set(self::NNAMERGB, $value);
    }

    /**
     * Returns value of 'nNameRGB' property
     *
     * @return integer
     */
    public function getNNameRGB()
    {
        $value = $this->get(self::NNAMERGB);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNameRGB' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNameRGB()
    {
        return $this->get(self::NNAMERGB) !== null;
    }

    /**
     * Sets value of 'nBirthday' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBirthday($value)
    {
        return $this->set(self::NBIRTHDAY, $value);
    }

    /**
     * Returns value of 'nBirthday' property
     *
     * @return integer
     */
    public function getNBirthday()
    {
        $value = $this->get(self::NBIRTHDAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBirthday' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBirthday()
    {
        return $this->get(self::NBIRTHDAY) !== null;
    }

    /**
     * Sets value of 'nCity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCity($value)
    {
        return $this->set(self::NCITY, $value);
    }

    /**
     * Returns value of 'nCity' property
     *
     * @return integer
     */
    public function getNCity()
    {
        $value = $this->get(self::NCITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCity()
    {
        return $this->get(self::NCITY) !== null;
    }

    /**
     * Sets value of 'szVoice' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzVoice($value)
    {
        return $this->set(self::SZVOICE, $value);
    }

    /**
     * Returns value of 'szVoice' property
     *
     * @return string
     */
    public function getSzVoice()
    {
        $value = $this->get(self::SZVOICE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szVoice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzVoice()
    {
        return $this->get(self::SZVOICE) !== null;
    }

    /**
     * Sets value of 'szWord' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzWord($value)
    {
        return $this->set(self::SZWORD, $value);
    }

    /**
     * Returns value of 'szWord' property
     *
     * @return string
     */
    public function getSzWord()
    {
        $value = $this->get(self::SZWORD);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szWord' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzWord()
    {
        return $this->get(self::SZWORD) !== null;
    }

    /**
     * Appends value to 'arrMyLabel' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrMyLabel($value)
    {
        return $this->append(self::ARRMYLABEL, $value);
    }

    /**
     * Clears 'arrMyLabel' list
     *
     * @return null
     */
    public function clearArrMyLabel()
    {
        return $this->clear(self::ARRMYLABEL);
    }

    /**
     * Returns 'arrMyLabel' list
     *
     * @return integer[]
     */
    public function getArrMyLabel()
    {
        return $this->get(self::ARRMYLABEL);
    }

    /**
     * Returns true if 'arrMyLabel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrMyLabel()
    {
        return count($this->get(self::ARRMYLABEL)) !== 0;
    }

    /**
     * Returns 'arrMyLabel' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrMyLabelIterator()
    {
        return new \ArrayIterator($this->get(self::ARRMYLABEL));
    }

    /**
     * Returns element from 'arrMyLabel' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrMyLabelAt($offset)
    {
        return $this->get(self::ARRMYLABEL, $offset);
    }

    /**
     * Returns count of 'arrMyLabel' list
     *
     * @return int
     */
    public function getArrMyLabelCount()
    {
        return $this->count(self::ARRMYLABEL);
    }

    /**
     * Appends value to 'arrFavLabel' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrFavLabel($value)
    {
        return $this->append(self::ARRFAVLABEL, $value);
    }

    /**
     * Clears 'arrFavLabel' list
     *
     * @return null
     */
    public function clearArrFavLabel()
    {
        return $this->clear(self::ARRFAVLABEL);
    }

    /**
     * Returns 'arrFavLabel' list
     *
     * @return integer[]
     */
    public function getArrFavLabel()
    {
        return $this->get(self::ARRFAVLABEL);
    }

    /**
     * Returns true if 'arrFavLabel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrFavLabel()
    {
        return count($this->get(self::ARRFAVLABEL)) !== 0;
    }

    /**
     * Returns 'arrFavLabel' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrFavLabelIterator()
    {
        return new \ArrayIterator($this->get(self::ARRFAVLABEL));
    }

    /**
     * Returns element from 'arrFavLabel' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrFavLabelAt($offset)
    {
        return $this->get(self::ARRFAVLABEL, $offset);
    }

    /**
     * Returns count of 'arrFavLabel' list
     *
     * @return int
     */
    public function getArrFavLabelCount()
    {
        return $this->count(self::ARRFAVLABEL);
    }

    /**
     * Sets value of 'stHeadPic' property
     *
     * @param \Xnhd\Core\Pb\Sdo\PicInfo $value Property value
     *
     * @return null
     */
    public function setStHeadPic(\Xnhd\Core\Pb\Sdo\PicInfo $value=null)
    {
        return $this->set(self::STHEADPIC, $value);
    }

    /**
     * Returns value of 'stHeadPic' property
     *
     * @return \Xnhd\Core\Pb\Sdo\PicInfo
     */
    public function getStHeadPic()
    {
        return $this->get(self::STHEADPIC);
    }

    /**
     * Returns true if 'stHeadPic' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStHeadPic()
    {
        return $this->get(self::STHEADPIC) !== null;
    }

    /**
     * Sets value of 'nSetting' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSetting($value)
    {
        return $this->set(self::NSETTING, $value);
    }

    /**
     * Returns value of 'nSetting' property
     *
     * @return integer
     */
    public function getNSetting()
    {
        $value = $this->get(self::NSETTING);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSetting' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSetting()
    {
        return $this->get(self::NSETTING) !== null;
    }

    /**
     * Sets value of 'nLastLogoutTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLastLogoutTime($value)
    {
        return $this->set(self::NLASTLOGOUTTIME, $value);
    }

    /**
     * Returns value of 'nLastLogoutTime' property
     *
     * @return integer
     */
    public function getNLastLogoutTime()
    {
        $value = $this->get(self::NLASTLOGOUTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLastLogoutTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLastLogoutTime()
    {
        return $this->get(self::NLASTLOGOUTTIME) !== null;
    }

    /**
     * Sets value of 'nTotalLoginCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTotalLoginCount($value)
    {
        return $this->set(self::NTOTALLOGINCOUNT, $value);
    }

    /**
     * Returns value of 'nTotalLoginCount' property
     *
     * @return integer
     */
    public function getNTotalLoginCount()
    {
        $value = $this->get(self::NTOTALLOGINCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTotalLoginCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTotalLoginCount()
    {
        return $this->get(self::NTOTALLOGINCOUNT) !== null;
    }

    /**
     * Sets value of 'nTotalOnlineTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTotalOnlineTime($value)
    {
        return $this->set(self::NTOTALONLINETIME, $value);
    }

    /**
     * Returns value of 'nTotalOnlineTime' property
     *
     * @return integer
     */
    public function getNTotalOnlineTime()
    {
        $value = $this->get(self::NTOTALONLINETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTotalOnlineTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTotalOnlineTime()
    {
        return $this->get(self::NTOTALONLINETIME) !== null;
    }

    /**
     * Sets value of 'nTodayLoginCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTodayLoginCount($value)
    {
        return $this->set(self::NTODAYLOGINCOUNT, $value);
    }

    /**
     * Returns value of 'nTodayLoginCount' property
     *
     * @return integer
     */
    public function getNTodayLoginCount()
    {
        $value = $this->get(self::NTODAYLOGINCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTodayLoginCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTodayLoginCount()
    {
        return $this->get(self::NTODAYLOGINCOUNT) !== null;
    }

    /**
     * Sets value of 'nTodayOnlineTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTodayOnlineTime($value)
    {
        return $this->set(self::NTODAYONLINETIME, $value);
    }

    /**
     * Returns value of 'nTodayOnlineTime' property
     *
     * @return integer
     */
    public function getNTodayOnlineTime()
    {
        $value = $this->get(self::NTODAYONLINETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTodayOnlineTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTodayOnlineTime()
    {
        return $this->get(self::NTODAYONLINETIME) !== null;
    }
}
}