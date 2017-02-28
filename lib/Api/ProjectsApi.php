<?php
/**
 * ProjectsApi
 * PHP version 5
 *
 * @category Class
 * @package  Autodesk\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Forge SDK
 *
 * The Forge Platform contains an expanding collection of web service components that can be used with Autodesk cloud-based products or your own technologies. Take advantage of Autodesk’s expertise in design and engineering.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: forge.help@autodesk.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Autodesk\Client\Api;

use \Autodesk\Client\ApiClient;
use \Autodesk\Client\ApiException;
use \Autodesk\Client\Configuration;
use \Autodesk\Client\ObjectSerializer;

/**
 * ProjectsApi Class Doc Comment
 *
 * @category Class
 * @package  Autodesk\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectsApi extends AbstractApi
{
    /**
     * Operation getHubProjects
     *
     *
     *
     * @param string $hub_id the &#x60;hub id&#x60; for the current operation (required)
     * @param string[] $filter_id filter by the &#x60;id&#x60; of the &#x60;ref&#x60; target (optional)
     * @param string[] $filter_extension_type filter by the extension type (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\Projects
     */
    public function getHubProjects($hub_id, $filter_id = null, $filter_extension_type = null)
    {
        list($response) = $this->getHubProjectsWithHttpInfo($hub_id, $filter_id, $filter_extension_type);
        return $response;
    }

    /**
     * Operation getHubProjectsWithHttpInfo
     *
     *
     *
     * @param string $hub_id the &#x60;hub id&#x60; for the current operation (required)
     * @param string[] $filter_id filter by the &#x60;id&#x60; of the &#x60;ref&#x60; target (optional)
     * @param string[] $filter_extension_type filter by the extension type (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\Projects, HTTP status code, HTTP response headers (array of strings)
     */
    public function getHubProjectsWithHttpInfo($hub_id, $filter_id = null, $filter_extension_type = null)
    {
        // verify the required parameter 'hub_id' is set
        if ($hub_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $hub_id when calling getHubProjects');
        }
        // parse inputs
        $resourcePath = "/project/v1/hubs/{hub_id}/projects";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.api+json']);

        // query params
        if (is_array($filter_id)) {
            $filter_id = $this->apiClient->getSerializer()->serializeCollection($filter_id, 'csv', true);
        }
        if ($filter_id !== null) {
            $queryParams['filter[id]'] = $this->apiClient->getSerializer()->toQueryValue($filter_id);
        }
        // query params
        if (is_array($filter_extension_type)) {
            $filter_extension_type = $this->apiClient->getSerializer()->serializeCollection($filter_extension_type,
                'csv', true);
        }
        if ($filter_extension_type !== null) {
            $queryParams['filter[extension.type]'] = $this->apiClient->getSerializer()->toQueryValue($filter_extension_type);
        }
        // path params
        if ($hub_id !== null) {
            $resourcePath = str_replace(
                "{" . "hub_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($hub_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Client\Model\Projects',
                '/project/v1/hubs/{hub_id}/projects'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\Projects',
                    $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\Projects', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getProject
     *
     *
     *
     * @param string $hub_id the &#x60;hub id&#x60; for the current operation (required)
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\Project
     */
    public function getProject($hub_id, $project_id)
    {
        list($response) = $this->getProjectWithHttpInfo($hub_id, $project_id);
        return $response;
    }

    /**
     * Operation getProjectWithHttpInfo
     *
     *
     *
     * @param string $hub_id the &#x60;hub id&#x60; for the current operation (required)
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\Project, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProjectWithHttpInfo($hub_id, $project_id)
    {
        // verify the required parameter 'hub_id' is set
        if ($hub_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $hub_id when calling getProject');
        }
        // verify the required parameter 'project_id' is set
        if ($project_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $project_id when calling getProject');
        }
        // parse inputs
        $resourcePath = "/project/v1/hubs/{hub_id}/projects/{project_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.api+json']);

        // path params
        if ($hub_id !== null) {
            $resourcePath = str_replace(
                "{" . "hub_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($hub_id),
                $resourcePath
            );
        }
        // path params
        if ($project_id !== null) {
            $resourcePath = str_replace(
                "{" . "project_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($project_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Client\Model\Project',
                '/project/v1/hubs/{hub_id}/projects/{project_id}'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\Project',
                    $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\Project', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getProjectHub
     *
     *
     *
     * @param string $hub_id the &#x60;hub id&#x60; for the current operation (required)
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\Hub
     */
    public function getProjectHub($hub_id, $project_id)
    {
        list($response) = $this->getProjectHubWithHttpInfo($hub_id, $project_id);
        return $response;
    }

    /**
     * Operation getProjectHubWithHttpInfo
     *
     *
     *
     * @param string $hub_id the &#x60;hub id&#x60; for the current operation (required)
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\Hub, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProjectHubWithHttpInfo($hub_id, $project_id)
    {
        // verify the required parameter 'hub_id' is set
        if ($hub_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $hub_id when calling getProjectHub');
        }
        // verify the required parameter 'project_id' is set
        if ($project_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $project_id when calling getProjectHub');
        }
        // parse inputs
        $resourcePath = "/project/v1/hubs/{hub_id}/projects/{project_id}/hub";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.api+json']);

        // path params
        if ($hub_id !== null) {
            $resourcePath = str_replace(
                "{" . "hub_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($hub_id),
                $resourcePath
            );
        }
        // path params
        if ($project_id !== null) {
            $resourcePath = str_replace(
                "{" . "project_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($project_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Client\Model\Hub',
                '/project/v1/hubs/{hub_id}/projects/{project_id}/hub'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\Hub', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\Hub', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postStorage
     *
     *
     *
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @param \Autodesk\Client\Model\CreateStorage $body describe the file the storage is created for (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\StorageCreated
     */
    public function postStorage($project_id, $body)
    {
        list($response) = $this->postStorageWithHttpInfo($project_id, $body);
        return $response;
    }

    /**
     * Operation postStorageWithHttpInfo
     *
     *
     *
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @param \Autodesk\Client\Model\CreateStorage $body describe the file the storage is created for (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\StorageCreated, HTTP status code, HTTP response headers (array of strings)
     */
    public function postStorageWithHttpInfo($project_id, $body)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $project_id when calling postStorage');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling postStorage');
        }
        // parse inputs
        $resourcePath = "/data/v1/projects/{project_id}/storage";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.api+json']);

        // path params
        if ($project_id !== null) {
            $resourcePath = str_replace(
                "{" . "project_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($project_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Client\Model\StorageCreated',
                '/data/v1/projects/{project_id}/storage'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\StorageCreated',
                    $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\StorageCreated', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\BadInput', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postVersion
     *
     *
     *
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @param \Autodesk\Client\Model\CreateVersion $body describe the version to be created (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\VersionCreated
     */
    public function postVersion($project_id, $body)
    {
        list($response) = $this->postVersionWithHttpInfo($project_id, $body);
        return $response;
    }

    /**
     * Operation postVersionWithHttpInfo
     *
     *
     *
     * @param string $project_id the &#x60;project id&#x60; (required)
     * @param \Autodesk\Client\Model\CreateVersion $body describe the version to be created (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\VersionCreated, HTTP status code, HTTP response headers (array of strings)
     */
    public function postVersionWithHttpInfo($project_id, $body)
    {
        // verify the required parameter 'project_id' is set
        if ($project_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $project_id when calling postVersion');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling postVersion');
        }
        // parse inputs
        $resourcePath = "/data/v1/projects/{project_id}/versions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.api+json']);

        // path params
        if ($project_id !== null) {
            $resourcePath = str_replace(
                "{" . "project_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($project_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Client\Model\VersionCreated',
                '/data/v1/projects/{project_id}/versions'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\VersionCreated',
                    $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\VersionCreated', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\BadInput', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\Conflict', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
