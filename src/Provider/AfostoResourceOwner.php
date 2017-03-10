<?php

namespace Afosto\OauthClient\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Token\AccessToken;

class AfostoResourceOwner implements ResourceOwnerInterface
{
    /**
     * Raw response
     *
     * @var array
     */
    protected $response;

    /**
     * Token
     *
     * @var \League\OAuth2\Client\Token\AccessToken
     */
    protected $token;

    /**
     * Creates new resource owner.
     *
     * @param array $response
     */
    public function __construct(array $response, AccessToken $token)
    {
        $this->response = $response;
        $this->token = $token;
    }

    /**
     * Get resource owner id.
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->response['id'];
    }

    /**
     * Get resource owner's display name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->response['name'];
    }


    /**
     * Return all of the owner details available as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->response;
    }
}
