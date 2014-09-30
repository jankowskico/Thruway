<?php

namespace Thruway\Authentication;

/**
 * Class AuthenticationDetails
 * 
 * @package Thruway\Authentication
 */

class AuthenticationDetails 
{
    
    private $authId;
    private $authMethod;
    private $challenge;
    private $challengeDetails;

    /**
     * Set challenge details
     * 
     * @param mixed $challengeDetails
     */
    public function setChallengeDetails($challengeDetails)
    {
        $this->challengeDetails = $challengeDetails;
    }

    /**
     * Get challenge details
     * 
     * @return mixed
     */
    public function getChallengeDetails()
    {
        return $this->challengeDetails;
    }

    /**
     * Set challenge info
     * 
     * @param mixed $challenge
     */
    public function setChallenge($challenge)
    {
        $this->challenge = $challenge;
    }

    /**
     * Get challenge data
     * 
     * @return mixed
     */
    public function getChallenge()
    {
        return $this->challenge;
    }

    /**
     * Set authentiocation ID
     * 
     * @param mixed $authId
     */
    public function setAuthId($authId)
    {
        $this->authId = $authId;
    }

    /**
     * Get authentication ID
     * 
     * @return mixed
     */
    public function getAuthId()
    {
        return $this->authId;
    }

    /**
     * Set authentication method
     * 
     * @param mixed $authMethod
     */
    public function setAuthMethod($authMethod)
    {
        $this->authMethod = $authMethod;
    }

    /**
     * Get authentication method
     * 
     * @return mixed
     */
    public function getAuthMethod()
    {
        return $this->authMethod;
    }

    /**
     * Create anonymous
     * 
     * @return \Thruway\Authentication\AuthenticationDetails
     */
    static public function createAnonymous() 
    {
        $authDetails = new AuthenticationDetails();
        $authDetails->setAuthId("anonymous");
        $authDetails->setAuthMethod("anonymous");

        return $authDetails;
    }
}