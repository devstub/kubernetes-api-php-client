# kubernetesAPI-PHP-client
PHP client library for the [Kubernetes](https://github.com/GoogleCloudPlatform/Kubernetes) API

** Current Version : v0.1.0 **

### Contents
* [Usage](#usage)
	*  [Basic Usage](#basic_usage)
	*  [How to use the library](#howto)
	*  [Configuration](#config)
	*  [API Endpoints](#endpoints)
	*  [Response](#response)
* [Installation](#installation)
	*  [Requirements](#requirements)
	*  [Install with composer](#composer)
* [To Do](#todo)
* [About](#about)

## <a name="usage"></a>Usage
### <a name="basic_usage"></a>Basic Usage
* Install the client and all of its required libraries ([instructions](#installation))
* Register an PSR-0 compatible autoloader
* Create ``\DevStub\KubernetesAPIClient\Client()`` object instance
* Setup all of the configuration options
* Send a request

```php
require '../vendor/autoload.php';
$client = new \DevStub\KubernetesAPIClient\Client();
$client->config()
    ->setAPINodeUrl("https://kubernetesServerAPI.com/api/") //
    ->setAPIVersion('v1beta1')
    ->setAuthType(\DevStub\KubernetesAPIClient\Config::AUTH_TYPE_HTTP_BASIC) // if we are using http authentication
    ->setAuthOptions(['username' => 'username', 'password' => 'password']); // we set the auth credentials

$response = null;

// here we create a new service by passing a json text
// we can also create the request structure with objects and method chaining .. read below for instructions
$client->services()->create(
    '{
  "id": "framework-dev",
  "kind": "Service",
  "apiVersion": "v1beta1",
  "port": 80,
  "containerPort": 80,
  "selector": {
    "name": "app-instance"
  }
}
',$response
);

$statusObj = $response->getContentObject();
// ... process the response here... 
```

### <a name="howto"></a>How to use the library
For most of the functionality Client supports 3 ways of setting properties and options.
*Not all 3 ways are always supported yet so check the each object and it's method for it support*

1. Explicitly instantiating objects and passing them as properties

```php
$pod  = new \DevStub\KubernetesAPIClient\Entity\v1beta1\Pod();
$pod->setId("app-instance-dev-test".time());
$pod->setKind("Pod");
$pod->setApiVersion("v1beta1");

$desiredState = new \DevStub\KubernetesAPIClient\Entity\v1beta1\PodState();
// we prepare the desired state object
// ...
// then we pass it to the pod 
$pod->setDesiredState($desiredState);
// ...
// ... we continue the same process for all other options
// ...

```
2. Implicit creation of object by not setting the param

```php
$client->pods()->create(null,$response)
    ->setId("app-instance-dev-test".time())
    ->setKind("Pod")
    ->setApiVersion("v1beta1")
    ->setDesiredState() // new object is automatically instantiated here
        ->setManifest() //new object is automatically instantiated here
            ->setVolumes() new object is automatically instantiated here
                ->append() // add array item
                    ->setName("data") // set property name
                    ->setSource() new object is automatically instantiated here
                        ->setEmptyDir()->end() new object is automatically instantiated here and closed
                        ->end() // we close the setSource
                    ->end() //we close the append
                ->end() // we close the setVolumes
            ->setVersion("v1beta1")
            ->setId("app-instance-dev-test".time())
            ->setContainers()
                ->append()
                    ->setName("framework")
                    ->setImage("registry.domain/user/dev-framework:v0.1.304")
                    ->setImagePullPolicy("PullIfNotPresent")
                    ->setLifecycle()
                        ->setPostStart()
                            ->setExec()
                                ->setCommand()
                                    ->append("/opt/conf/poststart.sh")
                                    ->end()
                                ->end()
                            ->end()
                        ->end()
                    ->setVolumeMounts()
                        ->append()
                            ->setName("data")
                            ->setMountPath("/data")
                            ->end()
                        ->end()
                    ->setPorts()
                        ->append()
                            ->setContainerPort(80)
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ->end()
    ->end();
```


3. Passing a json string as an argument
In below example we are just passing the full service request as json

```php
$response = '';

$client->services()->create(
    '{
  "id": "framework-dev",
  "kind": "Service",
  "apiVersion": "v1beta1",
  "port": 80,
  "containerPort": 80,
  "selector": {
    "name": "app-instance"
  }
}
',$response
);
var_dump($response);
```

### <a name="config"></a>Configuration
Before any requests can be made with the client you will need to setup some configuration options.


Following options are available

**setSslVerify($value)**
*$value = TRUE | FALSE - defaults: [TRUE]*
Set it to false when you don't want to verify the SSL cert. (Useful for development)

**setAPINodeUrl($value)**
*$value = String *
Set it to the full url of the Kubernetes API server.
Note: don't include the version path portion. It is added by the client.
```php
->setAPINodeUrl("https://kubernetesServerAPI.com/api/") //
```

**setAPIVersion($value)**
*$value = String - defaults: [v1beta1]*
Set the version of the API Schema
```php
->setApiVersion("v1beta1");
```

**setAuthType($value)**
*$value = String - defaults: [Config::AUTH_TYPE_HTTP_BASIC]*
*Options: Config::AUTH_TYPE_HTTP_BASIC, Config::AUTH_TYPE_NONE*
At this time only one type of auth type is supported
```php
->setAuthType(\DevStub\KubernetesAPIClient\Config::AUTH_TYPE_HTTP_BASIC)
```

**setAuthOptions($value)**
*$value = Array *
*Options: username, password
Set the array which provides auth data based on the authType Selected
```php
->setAuthOptions(['username' => 'username', 'password' => 'password']); // we set the auth credentials
```

**setConnectionAdapter($value)**
*$value = String - defaults: [Config::CONNECTION_ADAPTER_GUZZLE]*
*Options: CONNECTION_ADAPTER_GUZZLE
Sets the type of rest http adapter to use, currently only guzzle is supported. 
```php
->setConnectionAdapter(\DevStub\KubernetesAPIClient\Config::CONNECTION_ADAPTER_GUZZLE)
```

*Configuration setting Example:*
```php
$clientConfig = new \DevStub\KubernetesAPIClient\Config();

$clientConfig->setAPINodeUrl("https://162.242.254.164/api/");
$clientConfig->setAPIVersion('v1beta1');
$client->config($clientConfig)

// or you can use method chaining on config

$clientConfig->setAPINodeUrl("https://162.242.254.164/api/")
			 ->setAPIVersion('v1beta1');
$client->config($clientConfig)

```

### <a name="endpoints"></a>API Endpoints
To make requests to the API endpoints you call endpoint methods on the client object, which returns an endpoint object on which you can call: create, update, delete and get methods. 

```php
$client->services()->create($serviceObject);
```

Available endpoint methods on the client object:
* pods()
* replicationControllers()
* endpoints()
* services()
* minions()
* events()
* bindings()

### <a name="response"></a>Response
All of the requests will return an instance AdapterResponse class.
With it you can check the status of the response:
```PHP
$response = $client->pods()->get();
if ($response->getStatusCode() == 500) { // we check against http status code 500
    throw \Exception("error retrieving the response");
}
```
or retrieve the response content as JSON :
```PHP
$response = $client->pods()->get();
$responseContent = $response->getContentRaw(); // this returns a json string
var_dump($responseContent);
```
or as nested objects :
```PHP
$response = $client->pods()->get();
/* @var \DevStub\KubernetesAPIClient\Entity\v1beta1\PodList $podList */
$podList = $response->getContentObject();
/* @var \DevStub\KubernetesAPIClient\Entity\v1beta1\Pod $pod */
foreach ($podList->getItems() as $pod) {
	print "\n".$pod->getId();
}
```

For a full list of available kubernetes entities check the ``\DevStub\KubernetesAPIClient\Entity`` namespace


## <a name="installation"></a>Installation

### <a name="requirements"></a>Requirements
* [Guzzle Http client](https://github.com/guzzle/guzzle)
* [JsonMapper](https://github.com/netresearch/jsonmapper)

Easies way to retrieve all of the dependencies is by using composer

### <a name="composer"></a>Install with composer
The recommended way is to use [Composer](http://getcomposer.org) to install the kubernetes PHP API Client

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Next run composer to install the latest version of the kubernetes PHP API Client:

```bash
composer require devstub/kubernetes-api-php-client
```

And don't forget to require the autoloader in your project:

```php
require 'vendor/autoload.php';
```

Alternatively you can also  specify the dependency in your exisitng composer.json
```json
 {
   "require": {
      "devstub/kubernetes-api-php-client": "*"
   }
}
```

## <a name="todo"></a>To do

- [ ] Add unit tests
- [ ] Support other API Versions
- [ ] Support additional REST adapters
- [ ] Add way to poll/watch the endpoints for changes


## <a name="about"></a>About
### License
Kubernetes PHP API Client  is licensed under [Apache 2.0](http://www.apache.org/licenses/LICENSE-2.0)

### Author
Faruk Brbovic, [DevStub.com](http://www.devstub.com)
