<?php
/**
 * User: parth
 * Date: 10/8/15
 * Time: 12:39 PM
 */

class Bill
{
    private $command;
    private $accessToken;
    private $uniqueId;
    private $comments;
    private $udf;
    private $hash;
    private $returnUrl;
    private $notificationUrl;
    private $amount;
    private $currency;

    /**
     * @return mixed
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * @param mixed $command
     * @return Bill
     */
    public function setCommand($command)
    {
        $this->command = $command;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param mixed $accessToken
     * @return Bill
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * @param mixed $uniqueId
     * @return Bill
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param mixed $comments
     * @return Bill
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUdf()
    {
        return $this->udf;
    }

    /**
     * @param mixed $udf
     * @return Bill
     */
    public function setUdf($udf)
    {
        $this->udf = $udf;
        return $this;
    }

    function __toString()
    {
        return $this->accessToken . "|" .
        $this->uniqueId . "|" .
        $this->comments . "|" .
        $this->udf . "|" .
        $this->returnUrl . "|" .
        $this->notificationUrl . "|" .
        $this->currency . "|" .
        $this->amount;
    }


    /**
     * @return mixed
     */
    public function getHash($salt)
    {
        $ola_hash = openssl_digest($this->__toString() . "|" . $salt, 'sha512');
        return $ola_hash;
    }

    /**
     * @param mixed $hash
     * @return Bill
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * @param mixed $returnUrl
     * @return Bill
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNotificationUrl()
    {
        return $this->notificationUrl;
    }

    /**
     * @param mixed $notificationUrl
     * @return Bill
     */
    public function setNotificationUrl($notificationUrl)
    {
        $this->notificationUrl = $notificationUrl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     * @return Bill
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     * @return Bill
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

}