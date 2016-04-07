<?php

namespace Dota2Api\Mappers;

/**
 * Common part for match mappers (web and db)
 *
 * @author kronus
 */
abstract class MatchMapper
{
    /**
     * @var int
     */
    private $_match_id;

    /**
     * @var string
     */
    private $_ip;

    /**
     * @var string
     */
    private $_apiKey;

    /**
     * @param int $matchId
     * @return MatchMapper
     */
    public function setMatchId($matchId = null)
    {
        if (null !== $matchId) {
            $this->_match_id = (int)$matchId;
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getMatchId()
    {
        return $this->_match_id;
    }

    /**
     * @param string $ip
     * @return MatchMapper
     */
    public function setIP($ip = false)
    {
        $this->_ip = $ip;

        return $this;
    }

    /**
     * @return string
     */
    public function getIP()
    {
        return $this->_ip;
    }

    /**
     * @param string $ip
     * @return MatchMapper
     */
    public function setAPI($apiKey = false)
    {
        $this->_apiKey = $apiKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getAPI()
    {
        return $this->_apiKey;
    }

    /**
     * @param int $matchId
     */
    public function __construct($matchId = null, $ip = false, $apiKey = false)
    {
        if (null !== $matchId) {
            $this->setMatchId($matchId);
        }

        if ($ip)
            $this->setIP($ip);

        if ($apiKey)
            $this->setAPI($apiKey);
    }

    /**
     * Load info by match_id
     * @return mixed
     */
    abstract public function load();
}
