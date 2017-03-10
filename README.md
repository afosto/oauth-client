# Afosto Provider for OAuth 2.0 Client

This package provides Afosto OAuth 2.0 support for the PHP League's [OAuth 2.0 Client](https://github.com/thephpleague/oauth2-client).

This package is compliant with [PSR-1][], [PSR-2][], [PSR-4][], and [PSR-7][]. If you notice compliance oversights,
please send a patch via pull request.

[PSR-1]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md
[PSR-2]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
[PSR-4]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md
[PSR-7]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-7-http-message.md

## Installation

To install, use composer:

```
composer require afosto/oauth-client
```

## Usage

Usage is the same as The League's OAuth client, just use `Afosto\OauthClient\Client\Provider\Afosto` as the provider. Please refer to [core package documentation on "Authorization Code Grant"](https://github.com/thephpleague/oauth2-client#usage) for more information.


## Credits

- [Afosto Team](https://afosto.com)
- [All Contributors](https://github.com/afosto/oauth-client/contributors)


## License

Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at

[License File](http://www.apache.org/licenses/LICENSE-2.0)

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
