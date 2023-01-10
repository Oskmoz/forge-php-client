<?php
/**
 * BucketsApi
 * PHP version 5
 *
 * @category Class
 * @package  Autodesk\Forge\Client
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

namespace Autodesk\Forge\Client\Api;

use \Autodesk\Forge\Client\ApiException;

/**
 * BucketsApi Class Doc Comment
 *
 * @category Class
 * @package  Autodesk\Forge\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccApi extends AbstractApi
{
    /**
     * Operation createIndex
     * 
     * @throws \Autodesk\Forge\Client\ApiException on non-2xx response
     * @return \Autodesk\Forge\Client\Model\IndexList
     */
    public function createIndex($projectId, $versionId)
    {
        list($response) = $this->createIndexWithHttpInfo($projectId, $versionId);
        return $response;
    }

    /**
     * Operation createIndexWithHttpInfo
     *
     *  
     *
     * @param string $projectId ACC Id of the project
     * @param string $versionId ACC Id of the model version
     * @throws \Autodesk\Forge\Client\ApiException on non-2xx response
     * @return \Autodesk\Forge\Client\Model\IndexList, HTTP status code, HTTP response headers (array of Index)
     */
    public function createIndexWithHttpInfo($projectId, $versionId)
    {
        // verify the required parameter 'projectId' is set
        if ($projectId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $projectId when calling createIndex');
        }
        // verify the required parameter 'versionId' is set
        if ($versionId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $versionId when calling createIndex');
        }
        // parse inputs
        $resourcePath = "/construction/index/v2/projects/{projectId}/indexes:batch-status";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($projectId !== null) {
            $resourcePath = str_replace(
                "{" . "projectId" . "}",
                $this->apiClient->getSerializer()->toPathValue($projectId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($versionId)) {
            $_tempBody = [
                'versions' => [[
                    'versionUrn' => $versionId
                ]]
            ];
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
                '\Autodesk\Forge\Client\Model\IndexList',
                '/construction/index/v2/projects/{projectId}/indexes:batch-status'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Forge\Client\Model\IndexList', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\IndexList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\Reason', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getIndex
     * 
     * @throws \Autodesk\Forge\Client\ApiException on non-2xx response
     * @return \Autodesk\Forge\Client\Model\Index
     */
    public function getIndex($projectId, $indexId)
    {
        list($response) = $this->getIndexWithHttpInfo($projectId, $indexId);
        return $response;
    }

    /**
     * Operation getIndexWithHttpInfo
     *
     * 
     *
     * @param string $projectId ACC Id of the project
     * @param string $indexId ACC Id of the index
     * @throws \Autodesk\Forge\Client\ApiException on non-2xx response
     * @return \Autodesk\Forge\Client\Model\Index, HTTP status code, HTTP response headers (array of Index)
     */
    public function getIndexWithHttpInfo($projectId, $indexId)
    {
        // verify the required parameter 'projectId' is set
        if ($projectId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $projectId when calling createBucket');
        }
        // verify the required parameter 'indexId' is set
        if ($indexId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $indexId when calling createBucket');
        }
        // parse inputs
        $resourcePath = "/construction/index/v2/projects/{projectId}/indexes/{indexId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];

        // path params
        if ($projectId !== null) {
            $resourcePath = str_replace(
                "{" . "projectId" . "}",
                $this->apiClient->getSerializer()->toPathValue($projectId),
                $resourcePath
            );
        }

        if ($indexId !== null) {
            $resourcePath = str_replace(
                "{" . "indexId" . "}",
                $this->apiClient->getSerializer()->toPathValue($indexId),
                $resourcePath
            );
        }

        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                null,
                $headerParams,
                '\Autodesk\Forge\Client\Model\Index',
                '/construction/index/v2/projects/{projectId}/indexes/{indexId}'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Forge\Client\Model\Index', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\Index', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\Reason', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getIndexFields
     * 
     * @throws \Autodesk\Forge\Client\ApiException on non-2xx response
     * @return \Autodesk\Forge\Client\Model\Field[]
     */
    public function getIndexFields($projectId, $indexId)
    {
        list($response) = $this->getIndexFieldsWithHttpInfo($projectId, $indexId);
        return $response;
    }

    /**
     * Operation getIndexFieldsWithHttpInfo
     *
     * 
     *
     * @param string $projectId ACC Id of the project
     * @param string $indexId ACC Id of the index
     * @throws \Autodesk\Forge\Client\ApiException on non-2xx response
     * @return \Autodesk\Forge\Client\Model\Field[], HTTP status code, HTTP response headers (array of Index)
     */
    public function getIndexFieldsWithHttpInfo($projectId, $indexId)
    {
        // verify the required parameter 'projectId' is set
        if ($projectId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $projectId when calling createBucket');
        }
        // verify the required parameter 'indexId' is set
        if ($indexId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $indexId when calling createBucket');
        }
        // parse inputs
        $resourcePath = "/construction/index/v2/projects/{projectId}/indexes/{indexId}/fields";
        $queryParams = [];
        $headerParams = [];

        // path params
        if ($projectId !== null) {
            $resourcePath = str_replace(
                "{" . "projectId" . "}",
                $this->apiClient->getSerializer()->toPathValue($projectId),
                $resourcePath
            );
        }

        if ($indexId !== null) {
            $resourcePath = str_replace(
                "{" . "indexId" . "}",
                $this->apiClient->getSerializer()->toPathValue($indexId),
                $resourcePath
            );
        }

        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                null,
                $headerParams,
                '\Autodesk\Forge\Client\Model\Field[]',
                '/construction/index/v2/projects/{projectId}/indexes/{indexId}/fields'
            );

            $separator = "\r\n";
            $line = strtok($response, $separator);

            $propertyList = [];
            while ($line !== false) {
                $propertyList[] = (object) json_decode($line, true);
                $line = strtok($separator);
            }

            return [
                $this->apiClient->getSerializer()->deserialize($propertyList, '\Autodesk\Forge\Client\Model\Field[]', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\Field[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\Reason', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation createIndexQuery
     * 
     * @throws \Autodesk\Forge\Client\ApiException on non-2xx response
     * @return \Autodesk\Forge\Client\Model\IndexQuery
     */
    public function createIndexQuery($projectId, $indexId, $query = null)
    {
        list($response) = $this->createIndexQueryWithHttpInfo($projectId, $indexId, $query);
        return $response;
    }

    /**
     * Operation createIndexQueryWithHttpInfo
     *
     * 
     *
     * @param string $projectId ACC Id of the project
     * @param string $indexId ACC Id of the index
     * @throws \Autodesk\Forge\Client\ApiException on non-2xx response
     * @return \Autodesk\Forge\Client\Model\IndexQuery, HTTP status code, HTTP response headers (array of Index)
     */
    public function createIndexQueryWithHttpInfo($projectId, $indexId, $query)
    {
        // verify the required parameter 'projectId' is set
        if ($projectId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $projectId when calling createBucket');
        }
        // verify the required parameter 'indexId' is set
        if ($indexId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $indexId when calling createBucket');
        }
        // parse inputs
        $resourcePath = "/construction/index/v2/projects/{projectId}/indexes/{indexId}/queries";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($projectId !== null) {
            $resourcePath = str_replace(
                "{" . "projectId" . "}",
                $this->apiClient->getSerializer()->toPathValue($projectId),
                $resourcePath
            );
        }
        if ($indexId !== null) {
            $resourcePath = str_replace(
                "{" . "indexId" . "}",
                $this->apiClient->getSerializer()->toPathValue($indexId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (!isset($query)) {
            $_tempBody = [
                'query' => [
                    '$gt' => [
                        ['$count' => 's.views'],
                        0
                    ]
                ]
            ];
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
                '\Autodesk\Forge\Client\Model\IndexQuery',
                '/construction/index/v2/projects/{projectId}/indexes/{indexId}/queries'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Forge\Client\Model\IndexQuery', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\IndexQuery', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\Reason', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getIndexQuery
     * 
     * @throws \Autodesk\Forge\Client\ApiException on non-2xx response
     * @return \Autodesk\Forge\Client\Model\IndexQuery
     */
    public function getIndexQuery($projectId, $indexId, $queryId)
    {
        list($response) = $this->getIndexQueryWithHttpInfo($projectId, $indexId, $queryId);
        return $response;
    }

    /**
     * Operation getIndexQueryWithHttpInfo
     *
     * 
     *
     * @param string $projectId ACC Id of the project
     * @param string $indexId ACC Id of the index
     * @param string $queryId ACC Id of the index
     * @throws \Autodesk\Forge\Client\ApiException on non-2xx response
     * @return \Autodesk\Forge\Client\Model\IndexQuery, HTTP status code, HTTP response headers (array of IndexQuery)
     */
    public function getIndexQueryWithHttpInfo($projectId, $indexId, $queryId)
    {
        // verify the required parameter 'projectId' is set
        if ($projectId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $projectId when calling getIndexQuery');
        }
        // verify the required parameter 'indexId' is set
        if ($indexId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $indexId when calling getIndexQuery');
        }
        // verify the required parameter 'queryId' is set
        if ($queryId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $queryId when calling getIndexQuery');
        }
        // parse inputs
        $resourcePath = "/construction/index/v2/projects/{projectId}/indexes/{indexId}/queries/{queryId}";
        $queryParams = [];
        $headerParams = [];

        // path params
        if ($projectId !== null) {
            $resourcePath = str_replace(
                "{" . "projectId" . "}",
                $this->apiClient->getSerializer()->toPathValue($projectId),
                $resourcePath
            );
        }
        if ($indexId !== null) {
            $resourcePath = str_replace(
                "{" . "indexId" . "}",
                $this->apiClient->getSerializer()->toPathValue($indexId),
                $resourcePath
            );
        }
        if ($queryId !== null) {
            $resourcePath = str_replace(
                "{" . "queryId" . "}",
                $this->apiClient->getSerializer()->toPathValue($queryId),
                $resourcePath
            );
        }

        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                null,
                $headerParams,
                '\Autodesk\Forge\Client\Model\IndexQuery',
                '/construction/index/v2/projects/{projectId}/indexes/{indexId}/queries/{queryId}'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Forge\Client\Model\IndexQuery', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\IndexQuery', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\Reason', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getIndexQueryResults
     * 
     * @throws \Autodesk\Forge\Client\ApiException on non-2xx response
     * @return \Autodesk\Forge\Client\Model\IndexQuery
     */
    public function getIndexQueryResults($projectId, $indexId, $queryId)
    {
        list($response) = $this->getIndexQueryResultsWithHttpInfo($projectId, $indexId, $queryId);
        return $response;
    }

    /**
     * Operation getIndexQueryResultsWithHttpInfo
     *
     * 
     *
     * @param string $projectId ACC Id of the project
     * @param string $indexId ACC Id of the index
     * @param string $queryId ACC Id of the index
     * @throws \Autodesk\Forge\Client\ApiException on non-2xx response
     * @return \Autodesk\Forge\Client\Model\IndexQuery, HTTP status code, HTTP response headers (array of IndexQuery)
     */
    public function getIndexQueryResultsWithHttpInfo($projectId, $indexId, $queryId)
    {
        // verify the required parameter 'projectId' is set
        if ($projectId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $projectId when calling getIndexQuery');
        }
        // verify the required parameter 'indexId' is set
        if ($indexId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $indexId when calling getIndexQuery');
        }
        // verify the required parameter 'queryId' is set
        if ($queryId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $queryId when calling getIndexQuery');
        }
        // parse inputs
        $resourcePath = "/construction/index/v2/projects/{projectId}/indexes/{indexId}/queries/{queryId}/properties";
        $queryParams = [];
        $headerParams = [];

        // path params
        if ($projectId !== null) {
            $resourcePath = str_replace(
                "{" . "projectId" . "}",
                $this->apiClient->getSerializer()->toPathValue($projectId),
                $resourcePath
            );
        }
        if ($indexId !== null) {
            $resourcePath = str_replace(
                "{" . "indexId" . "}",
                $this->apiClient->getSerializer()->toPathValue($indexId),
                $resourcePath
            );
        }
        if ($queryId !== null) {
            $resourcePath = str_replace(
                "{" . "queryId" . "}",
                $this->apiClient->getSerializer()->toPathValue($queryId),
                $resourcePath
            );
        }

        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                null,
                $headerParams,
                '\Autodesk\Forge\Client\Model\IndexQuery',
                '/construction/index/v2/projects/{projectId}/indexes/{indexId}/queries/{queryId}/properties'
            );

            $separator = "\r\n";
            $line = strtok($response, $separator);

            $objectList = [];
            while ($line !== false) {
                $objectList[] = (object) json_decode($line, true);
                $line = strtok($separator);
            }

            return [
                $objectList,
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\IndexQuery', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\Reason', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    public function getIndexManifest($projectId, $indexId)
    {
        list($response) = $this->getIndexManifestWithHttpInfo($projectId, $indexId);
        return $response;
    }

    /**
     * Operation getIndexManifestWithHttpInfo
     *
     * 
     *
     * @param string $projectId ACC Id of the project
     * @param string $indexId ACC Id of the index
     * @throws \Autodesk\Forge\Client\ApiException on non-2xx response
     * @return \Autodesk\Forge\Client\Model\IndexManifest, HTTP status code, HTTP response headers (array of IndexManifest)
     */
    public function getIndexManifestWithHttpInfo($projectId, $indexId)
    {
        // verify the required parameter 'projectId' is set
        if ($projectId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $projectId when calling getIndexManifest');
        }
        // verify the required parameter 'indexId' is set
        if ($indexId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $indexId when calling getIndexManifest');
        }
        // parse inputs
        $resourcePath = "/construction/index/v2/projects/{projectId}/indexes/{indexId}/manifest";
        $queryParams = [];
        $headerParams = [];

        // path params
        if ($projectId !== null) {
            $resourcePath = str_replace(
                "{" . "projectId" . "}",
                $this->apiClient->getSerializer()->toPathValue($projectId),
                $resourcePath
            );
        }
        if ($indexId !== null) {
            $resourcePath = str_replace(
                "{" . "indexId" . "}",
                $this->apiClient->getSerializer()->toPathValue($indexId),
                $resourcePath
            );
        }

        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                null,
                $headerParams,
                '\Autodesk\Forge\Client\Model\IndexManifest',
                '/construction/index/v2/projects/{projectId}/indexes/{indexId}/manifest'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Forge\Client\Model\IndexManifest', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\IndexManifest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Forge\Client\Model\Reason', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
