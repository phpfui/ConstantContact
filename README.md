# ConstantContact [![Tests](https://github.com/phpfui/ConstantContact/actions/workflows/tests.yml/badge.svg)](https://github.com/phpfui/ConstantContact/actions?query=workflow%3Atests) [![Latest Packagist release](https://img.shields.io/packagist/v/phpfui/constantcontact.svg)](https://packagist.org/packages/phpfui/constantcontact) ![](https://img.shields.io/badge/PHPStan-level%205-brightgreen.svg?style=flat)

PHP Object Oriented wrapper for the Constant Contact V3 API.

**PHPFUI/ConstantContact** is a [modern](#php-versions) PHP library that tracks the latest changes to the Constant Contact API.

**PHPFUI/ConstantContact** reads the [YAML](https://api.cc.email/v3/swagger.yaml) file from the Constant Contact documentation and generates PHP classes directly from the YAML file. The library is auto updated nightly. This means the library is always up to date with the latest changes. See the [versioning](#Versioning) section for further details.

## Installation
Since this library is constantly updated when Constant Contact updates their API, it is best to modify the Composer version constraint from '^' to '>=', for example:
```
"phpfui/constantcontact": "^22.3",
```
should be changed to:
```
"phpfui/constantcontact": ">=22.3",
```

## Requirements
This library requires PHP Session support for authentication. See [PHP Manual](https://www.php.net/manual/en/session.security.php) and [a good best practices article](https://www.phparch.com/2018/01/php-sessions-in-depth/). You can provide your own session management by specifying a callback with **setSessionCallback**.

## Namespaces
This library normalizes the [Constant Contact API](https://v3.developer.constantcontact.com/api_guide/index.html) to modern PHP class standards.  All endpoints are first character capitialized. Underscores are removed and followed by a capital letter. Each end point is a class with methods matching the standard REST methods (ie. put, post, delete, put, etc.).  The methods take required and optional parameters matching the name specified in the Constant Contact YAML API.  In addition, this library supports all definitions of types in the API.  See below.

Due to a mistake in naming conventions by Constant Contact API designers, several end points are duplicated between the end point that returns all objects, and the end point that just works with one object. Normally this is dealt with by using the singular form of the noun for CRUD type operations on a single object, and the plural noun form returns a list of objects. This library follows the correct naming convention (single nouns for CRUD and plural nouns for collections) and not the Constant Contact naming convention.

## Definitions
This Constant Contact API defines all types of objects to interact with the API. They are defined in the **PHPFUI\ConstantContact\Definition** namespace. Only valid fields are allowed to be accessed. Types are fully validated as to the best ability of PHP.  Min and max lengths are enforced for strings.

## Usage Once Authorized (see below)
```PHP
// Create a client
$client = new \PHPFUI\ConstantContact\Client($apiKey, $secret, $redirectURI);
// Set access and refresh tokens on client
$client->accessToken = $accessTokenFromDatabase;
$client->refreshToken = $refreshTokenFromDatabase;
// Refresh the tokens.  This should be done on a regular (daily) basis so the token does not expire.
$client->refreshToken();
// save $client->accessToken and $client->refreshToken to database.

// $client is now ready to use
$listEndPoint = new \PHPFUI\ConstantContact\V3\ContactLists($client);
$lists = $listEndPoint->get();
do {
  print_r($lists);
  $lists = $listEndPoint->next();
} while ($lists);
```

## Constant Contact Setup
In order to use this library, you will need to set up Constant Contact correctly. Go to [Constant Contact API](https://app.constantcontact.com) and create an application. Get an *API Key* and *Secret* and save it off for the **\PHPFUI\ConstantContact\Client** constructor.  You will also need to set up and add a *Redirect URI*. You can use https://localhost if you want to authorize manually, but it is recommended to allow your users to authorize directly.  The *Redirect URI* will receive a code that you will need to authorize the app, and then store the generated access token and refresh token.  You should also provide the URL to your site's App logo.  This will be shown to your user when they authenticate the app. They will need to sign into Constant Contact if they have not already done so. Fill out the other information as appropriate, but it is for informational purposes only.

## Authorization Control Flow
You will need to set up a web page where your user can enter the *API Key* and *Secret*.  You should also provide an **"Authorize"** button if the API returns an error, meaning it was not authorized. This allows the user to control the authorization process. Authorization needs to be done interactively.  The user will have to log in to Constant Contact and then authorize the application. Once this is done, the app can run in the background and refresh the token daily and it should not expire or need to be reauthorized as long as the Secret has not been changed.  Change the secret to require reauthorization.

## The Authorization control flow is as follows:

### 1. Create A Client and Redirect to Authorization URL
```php
$redirectURI = 'http://yourdomain/php_script_in_step2.php';
$client = new \PHPFUI\ConstantContact\Client($apiKey, $secret, $redirectURI);
// set any scopes here, defaults to all scopes. Your user will need to accept what ever scopes you specify.
\header('location: ' . $client->getAuthorizationURL());
```
The above will ask the user to authorize the app for the scopes you specified.  The default is all scopes, but you can specify different scopes after constructing the client and before you authorize.

### 2. Retrieve the Code sent to the $redirectURI
```php
$client->acquireAccessToken($_GET);
// Save $client->accessToken and $client->refreshToken to the database
// redirect back to your businesss logic (Step 3)
```
You have now recieved authorization to access the API according to the scopes you requested.

### 3. Use in your code
```php
$client = new \PHPFUI\ConstantContact\Client($apiKey, $secret, $redirectURI);
$client->accessToken = $accessTokenFromDatabase;
$client->refreshToken = $refreshTokenFromDatabase;
$listEndPoint = new \PHPFUI\ConstantContact\V3\ContactLists($client);
$lists = $listEndPoint->get();
do {
  print_r($lists);
  $lists = $listEndPoint->next();
} while ($lists);
```
You can now access the API with the scopes you requested.

### 4. Refresh the token on a regular basis
```php
$client->refreshToken();
// save $client->accessToken and $client->refreshToken to database.
```
The token will expire requiring your user to reauthorize your app unless you refresh the token.  You should refresh the token on a regular basis to avoid reauthorization.

## Versioning
Since the [Constant Contact API](https://v3.developer.constantcontact.com/api_guide/index.html) is constantly being updated, this library will track all updates on a calendar based versioning schema. The major version will be the last two digits of the year the update was released. The minor version will be the month it was released. Any bug fixes will be a patch version.  So V21.8.0 would be the first August 2021 version, and V21.8.1 would be a bug fix to V21.8.  All bug fixes will be included in subsequent versions, so V21.9.0 would include all fixes from the V21.8 version. YAML changes are tracked nightly and a new version will be generated automatically. Multiple YAML changes in a month will be tracked as patch versions.

## Full Class Documentation
[PHPFUI/InstaDoc](http://www.phpfui.com/?n=PHPFUI%5CConstantContact)

## License
**PHPFUI/ConstantContact** is distributed under the MIT License.

### PHP Versions
This library only supports PHP 8.0 and higher versions of PHP. While we would love to support PHP from the late Ming Dynasty, the advantages of modern PHP versions far out weigh quaint notions of backward compatibility. Time to upgrade.
