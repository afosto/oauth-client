<?php

namespace Afosto\OauthClient\Client\Provider;

use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use League\OAuth2\Client\Token\AccessToken;
use League\OAuth2\Client\Tool\BearerAuthorizationTrait;
use Psr\Http\Message\ResponseInterface;

class Afosto extends AbstractProvider
{
    use BearerAuthorizationTrait;

    /**
     * {@inheritdoc}
     */
    public function getBaseAuthorizationUrl()
    {
        return 'https://app.afosto.com/oauth/authorize';
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseAccessTokenUrl(array $params)
    {
        return 'https://app.afosto.com/oauth/token';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceOwnerDetailsUrl(AccessToken $token)
    {
        return 'https://api.afosto.com/me?access_token=' . $token;
    }

    /**
     * {@inheritdoc}
     */
    protected function getScopeSeparator()
    {
        return ' ';
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultScopes()
    {
        return ['all'];
    }

    /**
     * {@inheritdoc}
     */
    protected function checkResponse(ResponseInterface $response, $data)
    {
        if (!empty($data['message'])) {
            $error = isset($data['message']) ? $data['message'] : '';
            $code = 0;
            if (isset($data['status']) && preg_match('/\d+/', $data['status'], $match)) {
                $code = (int)array_shift($match);
            }
            throw new IdentityProviderException($error, $code, $data);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function createResourceOwner(array $response, AccessToken $token)
    {
        return new AfostoResourceOwner($response, $token);
    }
}
