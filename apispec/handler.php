<?php
require(__DIR__ . '/../common/config/common-func.php');
if (isset($_GET))
{

	$ApiSpec=array (
			  'swagger' => '2.0',
			  'info' => 
			  array (
			    'description' => 'Este es el servidor ApiRest para Pradsis.',
			    'version' => '1.0.0',
			    'title' => 'Sarest Pradsis',
			    'termsOfService' => 'http://swagger.io/terms/',
			    'contact' => 
			    array (
			      'email' => 'apiteam@swagger.io',
			    ),
			    'license' => 
			    array (
			      'name' => 'Apache 2.0',
			      'url' => 'http://www.apache.org/licenses/LICENSE-2.0.html',
			    ),
			  ),
			  'host' => 'petstore.swagger.io',
			  'basePath' => '/v2',
			  'tags' => 
			  array (
			    0 => 
			    array (
			      'name' => 'pet',
			      'description' => 'Everything about your Pets',
			      'externalDocs' => 
			      array (
			        'description' => 'Find out more',
			        'url' => 'http://swagger.io',
			      ),
			    ),
			    1 => 
			    array (
			      'name' => 'store',
			      'description' => 'Access to Petstore orders',
			    ),
			    2 => 
			    array (
			      'name' => 'user',
			      'description' => 'Operations about user',
			      'externalDocs' => 
			      array (
			        'description' => 'Find out more about our store',
			        'url' => 'http://swagger.io',
			      ),
			    ),
			  ),
			  'schemes' => 
			  array (
			    0 => 'http',
			  ),
			  'paths' => 
			  array (
			    '/pet' => 
			    array (
			      'post' => 
			      array (
			        'tags' => 
			        array (
			          0 => 'pet',
			        ),
			        'summary' => 'Add a new pet to the store',
			        'description' => '',
			        'operationId' => 'addPet',
			        'consumes' => 
			        array (
			          0 => 'application/json',
			          1 => 'application/xml',
			        ),
			        'produces' => 
			        array (
			          0 => 'application/xml',
			          1 => 'application/json',
			        ),
			        'parameters' => 
			        array (
			          0 => 
			          array (
			            'in' => 'body',
			            'name' => 'body',
			            'description' => 'Pet object that needs to be added to the store',
			            'required' => true,
			            'schema' => 
			            array (
			              '$ref' => '#/definitions/Pet',
			            ),
			          ),
			        ),
			        'responses' => 
			        array (
			          405 => 
			          array (
			            'description' => 'Invalid input',
			          ),
			        ),
			        'security' => 
			        array (
			          0 => 
			          array (
			            'petstore_auth' => 
			            array (
			              0 => 'write:pets',
			              1 => 'read:pets',
			            ),
			          ),
			        ),
			      ),
			      'put' => 
			      array (
			        'tags' => 
			        array (
			          0 => 'pet',
			        ),
			        'summary' => 'Update an existing pet',
			        'description' => '',
			        'operationId' => 'updatePet',
			        'consumes' => 
			        array (
			          0 => 'application/json',
			          1 => 'application/xml',
			        ),
			        'produces' => 
			        array (
			          0 => 'application/xml',
			          1 => 'application/json',
			        ),
			        'parameters' => 
			        array (
			          0 => 
			          array (
			            'in' => 'body',
			            'name' => 'body',
			            'description' => 'Pet object that needs to be added to the store',
			            'required' => true,
			            'schema' => 
			            array (
			              '$ref' => '#/definitions/Pet',
			            ),
			          ),
			        ),
			        'responses' => 
			        array (
			          400 => 
			          array (
			            'description' => 'Invalid ID supplied',
			          ),
			          404 => 
			          array (
			            'description' => 'Pet not found',
			          ),
			          405 => 
			          array (
			            'description' => 'Validation exception',
			          ),
			        ),
			        'security' => 
			        array (
			          0 => 
			          array (
			            'petstore_auth' => 
			            array (
			              0 => 'write:pets',
			              1 => 'read:pets',
			            ),
			          ),
			        ),
			      ),
			    ),
			    '/pet/findByStatus' => 
			    array (
			      'get' => 
			      array (
			        'tags' => 
			        array (
			          0 => 'pet',
			        ),
			        'summary' => 'Finds Pets by status',
			        'description' => 'Multiple status values can be provided with comma separated strings',
			        'operationId' => 'findPetsByStatus',
			        'produces' => 
			        array (
			          0 => 'application/xml',
			          1 => 'application/json',
			        ),
			        'parameters' => 
			        array (
			          0 => 
			          array (
			            'name' => 'status',
			            'in' => 'query',
			            'description' => 'Status values that need to be considered for filter',
			            'required' => true,
			            'type' => 'array',
			            'items' => 
			            array (
			              'type' => 'string',
			              'enum' => 
			              array (
			                0 => 'available',
			                1 => 'pending',
			                2 => 'sold',
			              ),
			              'default' => 'available',
			            ),
			            'collectionFormat' => 'multi',
			          ),
			        ),
			        'responses' => 
			        array (
			          200 => 
			          array (
			            'description' => 'successful operation',
			            'schema' => 
			            array (
			              'type' => 'array',
			              'items' => 
			              array (
			                '$ref' => '#/definitions/Pet',
			              ),
			            ),
			          ),
			          400 => 
			          array (
			            'description' => 'Invalid status value',
			          ),
			        ),
			        'security' => 
			        array (
			          0 => 
			          array (
			            'petstore_auth' => 
			            array (
			              0 => 'write:pets',
			              1 => 'read:pets',
			            ),
			          ),
			        ),
			      ),
			    ),
			    '/pet/findByTags' => 
			    array (
			      'get' => 
			      array (
			        'tags' => 
			        array (
			          0 => 'pet',
			        ),
			        'summary' => 'Finds Pets by tags',
			        'description' => 'Muliple tags can be provided with comma separated strings. Use tag1, tag2, tag3 for testing.',
			        'operationId' => 'findPetsByTags',
			        'produces' => 
			        array (
			          0 => 'application/xml',
			          1 => 'application/json',
			        ),
			        'parameters' => 
			        array (
			          0 => 
			          array (
			            'name' => 'tags',
			            'in' => 'query',
			            'description' => 'Tags to filter by',
			            'required' => true,
			            'type' => 'array',
			            'items' => 
			            array (
			              'type' => 'string',
			            ),
			            'collectionFormat' => 'multi',
			          ),
			        ),
			        'responses' => 
			        array (
			          200 => 
			          array (
			            'description' => 'successful operation',
			            'schema' => 
			            array (
			              'type' => 'array',
			              'items' => 
			              array (
			                '$ref' => '#/definitions/Pet',
			              ),
			            ),
			          ),
			          400 => 
			          array (
			            'description' => 'Invalid tag value',
			          ),
			        ),
			        'security' => 
			        array (
			          0 => 
			          array (
			            'petstore_auth' => 
			            array (
			              0 => 'write:pets',
			              1 => 'read:pets',
			            ),
			          ),
			        ),
			        'deprecated' => true,
			      ),
			    ),
			    '/pet/{petId}' => 
			    array (
			      'get' => 
			      array (
			        'tags' => 
			        array (
			          0 => 'pet',
			        ),
			        'summary' => 'Find pet by ID',
			        'description' => 'Returns a single pet',
			        'operationId' => 'getPetById',
			        'produces' => 
			        array (
			          0 => 'application/xml',
			          1 => 'application/json',
			        ),
			        'parameters' => 
			        array (
			          0 => 
			          array (
			            'name' => 'petId',
			            'in' => 'path',
			            'description' => 'ID of pet to return',
			            'required' => true,
			            'type' => 'integer',
			            'format' => 'int64',
			          ),
			        ),
			        'responses' => 
			        array (
			          200 => 
			          array (
			            'description' => 'successful operation',
			            'schema' => 
			            array (
			              '$ref' => '#/definitions/Pet',
			            ),
			          ),
			          400 => 
			          array (
			            'description' => 'Invalid ID supplied',
			          ),
			          404 => 
			          array (
			            'description' => 'Pet not found',
			          ),
			        ),
			        'security' => 
			        array (
			          0 => 
			          array (
			            'api_key' => 
			            array (
			            ),
			          ),
			        ),
			      ),
			      'post' => 
			      array (
			        'tags' => 
			        array (
			          0 => 'pet',
			        ),
			        'summary' => 'Updates a pet in the store with form data',
			        'description' => '',
			        'operationId' => 'updatePetWithForm',
			        'consumes' => 
			        array (
			          0 => 'application/x-www-form-urlencoded',
			        ),
			        'produces' => 
			        array (
			          0 => 'application/xml',
			          1 => 'application/json',
			        ),
			        'parameters' => 
			        array (
			          0 => 
			          array (
			            'name' => 'petId',
			            'in' => 'path',
			            'description' => 'ID of pet that needs to be updated',
			            'required' => true,
			            'type' => 'integer',
			            'format' => 'int64',
			          ),
			          1 => 
			          array (
			            'name' => 'name',
			            'in' => 'formData',
			            'description' => 'Updated name of the pet',
			            'required' => false,
			            'type' => 'string',
			          ),
			          2 => 
			          array (
			            'name' => 'status',
			            'in' => 'formData',
			            'description' => 'Updated status of the pet',
			            'required' => false,
			            'type' => 'string',
			          ),
			        ),
			        'responses' => 
			        array (
			          405 => 
			          array (
			            'description' => 'Invalid input',
			          ),
			        ),
			        'security' => 
			        array (
			          0 => 
			          array (
			            'petstore_auth' => 
			            array (
			              0 => 'write:pets',
			              1 => 'read:pets',
			            ),
			          ),
			        ),
			      ),
			      'delete' => 
			      array (
			        'tags' => 
			        array (
			          0 => 'pet',
			        ),
			        'summary' => 'Deletes a pet',
			        'description' => '',
			        'operationId' => 'deletePet',
			        'produces' => 
			        array (
			          0 => 'application/xml',
			          1 => 'application/json',
			        ),
			        'parameters' => 
			        array (
			          0 => 
			          array (
			            'name' => 'api_key',
			            'in' => 'header',
			            'required' => false,
			            'type' => 'string',
			          ),
			          1 => 
			          array (
			            'name' => 'petId',
			            'in' => 'path',
			            'description' => 'Pet id to delete',
			            'required' => true,
			            'type' => 'integer',
			            'format' => 'int64',
			          ),
			        ),
			        'responses' => 
			        array (
			          400 => 
			          array (
			            'description' => 'Invalid ID supplied',
			          ),
			          404 => 
			          array (
			            'description' => 'Pet not found',
			          ),
			        ),
			        'security' => 
			        array (
			          0 => 
			          array (
			            'petstore_auth' => 
			            array (
			              0 => 'write:pets',
			              1 => 'read:pets',
			            ),
			          ),
			        ),
			      ),
			    ),
			    '/pet/{petId}/uploadImage' => 
			    array (
			      'post' => 
			      array (
			        'tags' => 
			        array (
			          0 => 'pet',
			        ),
			        'summary' => 'uploads an image',
			        'description' => '',
			        'operationId' => 'uploadFile',
			        'consumes' => 
			        array (
			          0 => 'multipart/form-data',
			        ),
			        'produces' => 
			        array (
			          0 => 'application/json',
			        ),
			        'parameters' => 
			        array (
			          0 => 
			          array (
			            'name' => 'petId',
			            'in' => 'path',
			            'description' => 'ID of pet to update',
			            'required' => true,
			            'type' => 'integer',
			            'format' => 'int64',
			          ),
			          1 => 
			          array (
			            'name' => 'additionalMetadata',
			            'in' => 'formData',
			            'description' => 'Additional data to pass to server',
			            'required' => false,
			            'type' => 'string',
			          ),
			          2 => 
			          array (
			            'name' => 'file',
			            'in' => 'formData',
			            'description' => 'file to upload',
			            'required' => false,
			            'type' => 'file',
			          ),
			        ),
			        'responses' => 
			        array (
			          200 => 
			          array (
			            'description' => 'successful operation',
			            'schema' => 
			            array (
			              '$ref' => '#/definitions/ApiResponse',
			            ),
			          ),
			        ),
			        'security' => 
			        array (
			          0 => 
			          array (
			            'petstore_auth' => 
			            array (
			              0 => 'write:pets',
			              1 => 'read:pets',
			            ),
			          ),
			        ),
			      ),
			    ),
			    '/store/inventory' => 
			    array (
			      'get' => 
			      array (
			        'tags' => 
			        array (
			          0 => 'store',
			        ),
			        'summary' => 'Returns pet inventories by status',
			        'description' => 'Returns a map of status codes to quantities',
			        'operationId' => 'getInventory',
			        'produces' => 
			        array (
			          0 => 'application/json',
			        ),
			        'parameters' => 
			        array (
			        ),
			        'responses' => 
			        array (
			          200 => 
			          array (
			            'description' => 'successful operation',
			            'schema' => 
			            array (
			              'type' => 'object',
			              'additionalProperties' => 
			              array (
			                'type' => 'integer',
			                'format' => 'int32',
			              ),
			            ),
			          ),
			        ),
			        'security' => 
			        array (
			          0 => 
			          array (
			            'api_key' => 
			            array (
			            ),
			          ),
			        ),
			      ),
			    ),
			    '/store/order' => 
			    array (
			      'post' => 
			      array (
			        'tags' => 
			        array (
			          0 => 'store',
			        ),
			        'summary' => 'Place an order for a pet',
			        'description' => '',
			        'operationId' => 'placeOrder',
			        'produces' => 
			        array (
			          0 => 'application/xml',
			          1 => 'application/json',
			        ),
			        'parameters' => 
			        array (
			          0 => 
			          array (
			            'in' => 'body',
			            'name' => 'body',
			            'description' => 'order placed for purchasing the pet',
			            'required' => true,
			            'schema' => 
			            array (
			              '$ref' => '#/definitions/Order',
			            ),
			          ),
			        ),
			        'responses' => 
			        array (
			          200 => 
			          array (
			            'description' => 'successful operation',
			            'schema' => 
			            array (
			              '$ref' => '#/definitions/Order',
			            ),
			          ),
			          400 => 
			          array (
			            'description' => 'Invalid Order',
			          ),
			        ),
			      ),
			    ),
			    '/store/order/{orderId}' => 
			    array (
			      'get' => 
			      array (
			        'tags' => 
			        array (
			          0 => 'store',
			        ),
			        'summary' => 'Find purchase order by ID',
			        'description' => 'For valid response try integer IDs with value >= 1 and <= 10. Other values will generated exceptions',
			        'operationId' => 'getOrderById',
			        'produces' => 
			        array (
			          0 => 'application/xml',
			          1 => 'application/json',
			        ),
			        'parameters' => 
			        array (
			          0 => 
			          array (
			            'name' => 'orderId',
			            'in' => 'path',
			            'description' => 'ID of pet that needs to be fetched',
			            'required' => true,
			            'type' => 'integer',
			            'maximum' => 10,
			            'minimum' => 1,
			            'format' => 'int64',
			          ),
			        ),
			        'responses' => 
			        array (
			          200 => 
			          array (
			            'description' => 'successful operation',
			            'schema' => 
			            array (
			              '$ref' => '#/definitions/Order',
			            ),
			          ),
			          400 => 
			          array (
			            'description' => 'Invalid ID supplied',
			          ),
			          404 => 
			          array (
			            'description' => 'Order not found',
			          ),
			        ),
			      ),
			      'delete' => 
			      array (
			        'tags' => 
			        array (
			          0 => 'store',
			        ),
			        'summary' => 'Delete purchase order by ID',
			        'description' => 'For valid response try integer IDs with positive integer value. Negative or non-integer values will generate API errors',
			        'operationId' => 'deleteOrder',
			        'produces' => 
			        array (
			          0 => 'application/xml',
			          1 => 'application/json',
			        ),
			        'parameters' => 
			        array (
			          0 => 
			          array (
			            'name' => 'orderId',
			            'in' => 'path',
			            'description' => 'ID of the order that needs to be deleted',
			            'required' => true,
			            'type' => 'integer',
			            'minimum' => 1,
			            'format' => 'int64',
			          ),
			        ),
			        'responses' => 
			        array (
			          400 => 
			          array (
			            'description' => 'Invalid ID supplied',
			          ),
			          404 => 
			          array (
			            'description' => 'Order not found',
			          ),
			        ),
			      ),
			    ),
			    '/user' => 
			    array (
			      'post' => 
			      array (
			        'tags' => 
			        array (
			          0 => 'user',
			        ),
			        'summary' => 'Create user',
			        'description' => 'This can only be done by the logged in user.',
			        'operationId' => 'createUser',
			        'produces' => 
			        array (
			          0 => 'application/xml',
			          1 => 'application/json',
			        ),
			        'parameters' => 
			        array (
			          0 => 
			          array (
			            'in' => 'body',
			            'name' => 'body',
			            'description' => 'Created user object',
			            'required' => true,
			            'schema' => 
			            array (
			              '$ref' => '#/definitions/User',
			            ),
			          ),
			        ),
			        'responses' => 
			        array (
			          'default' => 
			          array (
			            'description' => 'successful operation',
			          ),
			        ),
			      ),
			    ),
			    '/user/createWithArray' => 
			    array (
			      'post' => 
			      array (
			        'tags' => 
			        array (
			          0 => 'user',
			        ),
			        'summary' => 'Creates list of users with given input array',
			        'description' => '',
			        'operationId' => 'createUsersWithArrayInput',
			        'produces' => 
			        array (
			          0 => 'application/xml',
			          1 => 'application/json',
			        ),
			        'parameters' => 
			        array (
			          0 => 
			          array (
			            'in' => 'body',
			            'name' => 'body',
			            'description' => 'List of user object',
			            'required' => true,
			            'schema' => 
			            array (
			              'type' => 'array',
			              'items' => 
			              array (
			                '$ref' => '#/definitions/User',
			              ),
			            ),
			          ),
			        ),
			        'responses' => 
			        array (
			          'default' => 
			          array (
			            'description' => 'successful operation',
			          ),
			        ),
			      ),
			    ),
			    '/user/createWithList' => 
			    array (
			      'post' => 
			      array (
			        'tags' => 
			        array (
			          0 => 'user',
			        ),
			        'summary' => 'Creates list of users with given input array',
			        'description' => '',
			        'operationId' => 'createUsersWithListInput',
			        'produces' => 
			        array (
			          0 => 'application/xml',
			          1 => 'application/json',
			        ),
			        'parameters' => 
			        array (
			          0 => 
			          array (
			            'in' => 'body',
			            'name' => 'body',
			            'description' => 'List of user object',
			            'required' => true,
			            'schema' => 
			            array (
			              'type' => 'array',
			              'items' => 
			              array (
			                '$ref' => '#/definitions/User',
			              ),
			            ),
			          ),
			        ),
			        'responses' => 
			        array (
			          'default' => 
			          array (
			            'description' => 'successful operation',
			          ),
			        ),
			      ),
			    ),
			    '/user/login' => 
			    array (
			      'get' => 
			      array (
			        'tags' => 
			        array (
			          0 => 'user',
			        ),
			        'summary' => 'Logs user into the system',
			        'description' => '',
			        'operationId' => 'loginUser',
			        'produces' => 
			        array (
			          0 => 'application/xml',
			          1 => 'application/json',
			        ),
			        'parameters' => 
			        array (
			          0 => 
			          array (
			            'name' => 'username',
			            'in' => 'query',
			            'description' => 'The user name for login',
			            'required' => true,
			            'type' => 'string',
			          ),
			          1 => 
			          array (
			            'name' => 'password',
			            'in' => 'query',
			            'description' => 'The password for login in clear text',
			            'required' => true,
			            'type' => 'string',
			          ),
			        ),
			        'responses' => 
			        array (
			          200 => 
			          array (
			            'description' => 'successful operation',
			            'schema' => 
			            array (
			              'type' => 'string',
			            ),
			            'headers' => 
			            array (
			              'X-Rate-Limit' => 
			              array (
			                'type' => 'integer',
			                'format' => 'int32',
			                'description' => 'calls per hour allowed by the user',
			              ),
			              'X-Expires-After' => 
			              array (
			                'type' => 'string',
			                'format' => 'date-time',
			                'description' => 'date in UTC when token expires',
			              ),
			            ),
			          ),
			          400 => 
			          array (
			            'description' => 'Invalid username/password supplied',
			          ),
			        ),
			      ),
			    ),
			    '/user/logout' => 
			    array (
			      'get' => 
			      array (
			        'tags' => 
			        array (
			          0 => 'user',
			        ),
			        'summary' => 'Logs out current logged in user session',
			        'description' => '',
			        'operationId' => 'logoutUser',
			        'produces' => 
			        array (
			          0 => 'application/xml',
			          1 => 'application/json',
			        ),
			        'parameters' => 
			        array (
			        ),
			        'responses' => 
			        array (
			          'default' => 
			          array (
			            'description' => 'successful operation',
			          ),
			        ),
			      ),
			    ),
			    '/user/{username}' => 
			    array (
			      'get' => 
			      array (
			        'tags' => 
			        array (
			          0 => 'user',
			        ),
			        'summary' => 'Get user by user name',
			        'description' => '',
			        'operationId' => 'getUserByName',
			        'produces' => 
			        array (
			          0 => 'application/xml',
			          1 => 'application/json',
			        ),
			        'parameters' => 
			        array (
			          0 => 
			          array (
			            'name' => 'username',
			            'in' => 'path',
			            'description' => 'The name that needs to be fetched. Use user1 for testing. ',
			            'required' => true,
			            'type' => 'string',
			          ),
			        ),
			        'responses' => 
			        array (
			          200 => 
			          array (
			            'description' => 'successful operation',
			            'schema' => 
			            array (
			              '$ref' => '#/definitions/User',
			            ),
			          ),
			          400 => 
			          array (
			            'description' => 'Invalid username supplied',
			          ),
			          404 => 
			          array (
			            'description' => 'User not found',
			          ),
			        ),
			      ),
			      'put' => 
			      array (
			        'tags' => 
			        array (
			          0 => 'user',
			        ),
			        'summary' => 'Updated user',
			        'description' => 'This can only be done by the logged in user.',
			        'operationId' => 'updateUser',
			        'produces' => 
			        array (
			          0 => 'application/xml',
			          1 => 'application/json',
			        ),
			        'parameters' => 
			        array (
			          0 => 
			          array (
			            'name' => 'username',
			            'in' => 'path',
			            'description' => 'name that need to be updated',
			            'required' => true,
			            'type' => 'string',
			          ),
			          1 => 
			          array (
			            'in' => 'body',
			            'name' => 'body',
			            'description' => 'Updated user object',
			            'required' => true,
			            'schema' => 
			            array (
			              '$ref' => '#/definitions/User',
			            ),
			          ),
			        ),
			        'responses' => 
			        array (
			          400 => 
			          array (
			            'description' => 'Invalid user supplied',
			          ),
			          404 => 
			          array (
			            'description' => 'User not found',
			          ),
			        ),
			      ),
			      'delete' => 
			      array (
			        'tags' => 
			        array (
			          0 => 'user',
			        ),
			        'summary' => 'Delete user',
			        'description' => 'This can only be done by the logged in user.',
			        'operationId' => 'deleteUser',
			        'produces' => 
			        array (
			          0 => 'application/xml',
			          1 => 'application/json',
			        ),
			        'parameters' => 
			        array (
			          0 => 
			          array (
			            'name' => 'username',
			            'in' => 'path',
			            'description' => 'The name that needs to be deleted',
			            'required' => true,
			            'type' => 'string',
			          ),
			        ),
			        'responses' => 
			        array (
			          400 => 
			          array (
			            'description' => 'Invalid username supplied',
			          ),
			          404 => 
			          array (
			            'description' => 'User not found',
			          ),
			        ),
			      ),
			    ),
			  ),
			  'securityDefinitions' => 
			  array (
			    'petstore_auth' => 
			    array (
			      'type' => 'oauth2',
			      'authorizationUrl' => 'http://petstore.swagger.io/oauth/dialog',
			      'flow' => 'implicit',
			      'scopes' => 
			      array (
			        'write:pets' => 'modify pets in your account',
			        'read:pets' => 'read your pets',
			      ),
			    ),
			    'api_key' => 
			    array (
			      'type' => 'apiKey',
			      'name' => 'api_key',
			      'in' => 'header',
			    ),
			  ),
			  'definitions' => 
			  array (
			    'Order' => 
			    array (
			      'type' => 'object',
			      'properties' => 
			      array (
			        'id' => 
			        array (
			          'type' => 'integer',
			          'format' => 'int64',
			        ),
			        'petId' => 
			        array (
			          'type' => 'integer',
			          'format' => 'int64',
			        ),
			        'quantity' => 
			        array (
			          'type' => 'integer',
			          'format' => 'int32',
			        ),
			        'shipDate' => 
			        array (
			          'type' => 'string',
			          'format' => 'date-time',
			        ),
			        'status' => 
			        array (
			          'type' => 'string',
			          'description' => 'Order Status',
			          'enum' => 
			          array (
			            0 => 'placed',
			            1 => 'approved',
			            2 => 'delivered',
			          ),
			        ),
			        'complete' => 
			        array (
			          'type' => 'boolean',
			          'default' => false,
			        ),
			      ),
			      'xml' => 
			      array (
			        'name' => 'Order',
			      ),
			    ),
			    'Category' => 
			    array (
			      'type' => 'object',
			      'properties' => 
			      array (
			        'id' => 
			        array (
			          'type' => 'integer',
			          'format' => 'int64',
			        ),
			        'name' => 
			        array (
			          'type' => 'string',
			        ),
			      ),
			      'xml' => 
			      array (
			        'name' => 'Category',
			      ),
			    ),
			    'User' => 
			    array (
			      'type' => 'object',
			      'properties' => 
			      array (
			        'id' => 
			        array (
			          'type' => 'integer',
			          'format' => 'int64',
			        ),
			        'username' => 
			        array (
			          'type' => 'string',
			        ),
			        'firstName' => 
			        array (
			          'type' => 'string',
			        ),
			        'lastName' => 
			        array (
			          'type' => 'string',
			        ),
			        'email' => 
			        array (
			          'type' => 'string',
			        ),
			        'password' => 
			        array (
			          'type' => 'string',
			        ),
			        'phone' => 
			        array (
			          'type' => 'string',
			        ),
			        'userStatus' => 
			        array (
			          'type' => 'integer',
			          'format' => 'int32',
			          'description' => 'User Status',
			        ),
			      ),
			      'xml' => 
			      array (
			        'name' => 'User',
			      ),
			    ),
			    'Tag' => 
			    array (
			      'type' => 'object',
			      'properties' => 
			      array (
			        'id' => 
			        array (
			          'type' => 'integer',
			          'format' => 'int64',
			        ),
			        'name' => 
			        array (
			          'type' => 'string',
			        ),
			      ),
			      'xml' => 
			      array (
			        'name' => 'Tag',
			      ),
			    ),
			    'Pet' => 
			    array (
			      'type' => 'object',
			      'required' => 
			      array (
			        0 => 'name',
			        1 => 'photoUrls',
			      ),
			      'properties' => 
			      array (
			        'id' => 
			        array (
			          'type' => 'integer',
			          'format' => 'int64',
			        ),
			        'category' => 
			        array (
			          '$ref' => '#/definitions/Category',
			        ),
			        'name' => 
			        array (
			          'type' => 'string',
			          'example' => 'doggie',
			        ),
			        'photoUrls' => 
			        array (
			          'type' => 'array',
			          'xml' => 
			          array (
			            'name' => 'photoUrl',
			            'wrapped' => true,
			          ),
			          'items' => 
			          array (
			            'type' => 'string',
			          ),
			        ),
			        'tags' => 
			        array (
			          'type' => 'array',
			          'xml' => 
			          array (
			            'name' => 'tag',
			            'wrapped' => true,
			          ),
			          'items' => 
			          array (
			            '$ref' => '#/definitions/Tag',
			          ),
			        ),
			        'status' => 
			        array (
			          'type' => 'string',
			          'description' => 'pet status in the store',
			          'enum' => 
			          array (
			            0 => 'available',
			            1 => 'pending',
			            2 => 'sold',
			          ),
			        ),
			      ),
			      'xml' => 
			      array (
			        'name' => 'Pet',
			      ),
			    ),
			    'ApiResponse' => 
			    array (
			      'type' => 'object',
			      'properties' => 
			      array (
			        'code' => 
			        array (
			          'type' => 'integer',
			          'format' => 'int32',
			        ),
			        'type' => 
			        array (
			          'type' => 'string',
			        ),
			        'message' => 
			        array (
			          'type' => 'string',
			        ),
			      ),
			    ),
			  ),
			  'externalDocs' => 
			  array (
			    'description' => 'Find out more about Swagger',
			    'url' => 'http://swagger.io',
			  ),
			);
	//echo json_encode($ApiSpec);
	$api=explode('/', $_GET['param']);
	$page=$api[0];
	$version=$api[1];

	
	$url=array('url'=>getApiRestUrl($page,$version));
	echo json_encode($url);
}
?>