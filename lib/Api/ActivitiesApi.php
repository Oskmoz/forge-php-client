<?php
/**
 * ActivitiesApi
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
 * ActivitiesApi Class Doc Comment
 *
 * @category Class
 * @package  Autodesk\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActivitiesApi extends AbstractApi
{
    /**
     * Operation createActivity
     *
     * Creates a new Activity.
     *
     * @param \Autodesk\Client\Model\Activity $activity (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\Activity
     */
    public function createActivity($activity)
    {
        list($response) = $this->createActivityWithHttpInfo($activity);
        return $response;
    }

    /**
     * Operation createActivityWithHttpInfo
     *
     * Creates a new Activity.
     *
     * @param \Autodesk\Client\Model\Activity $activity (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\Activity, HTTP status code, HTTP response headers (array of strings)
     */
    public function createActivityWithHttpInfo($activity)
    {
        // verify the required parameter 'activity' is set
        if ($activity === null) {
            throw new \InvalidArgumentException('Missing the required parameter $activity when calling createActivity');
        }
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/Activities";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($activity)) {
            $_tempBody = $activity;
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
                '\Autodesk\Client\Model\Activity',
                '/autocad.io/us-east/v2/Activities'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\Activity',
                    $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\Activity', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteActivity
     *
     * Removes a specific Activity.
     *
     * @param string $id (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return void
     */
    public function deleteActivity($id)
    {
        list($response) = $this->deleteActivityWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteActivityWithHttpInfo
     *
     * Removes a specific Activity.
     *
     * @param string $id (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteActivityWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteActivity');
        }
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/Activities(&#39;{id}&#39;)";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/autocad.io/us-east/v2/Activities(&#39;{id}&#39;)'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation deleteActivityHistory
     *
     * Removes the version history of the specified Activity.
     *
     * @param string $id (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return void
     */
    public function deleteActivityHistory($id)
    {
        list($response) = $this->deleteActivityHistoryWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteActivityHistoryWithHttpInfo
     *
     * Removes the version history of the specified Activity.
     *
     * @param string $id (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteActivityHistoryWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteActivityHistory');
        }
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/Activities(&#39;{id}&#39;)/Operations.DeleteHistory";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/autocad.io/us-east/v2/Activities(&#39;{id}&#39;)/Operations.DeleteHistory'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getActivity
     *
     * Returns the details of a specific Activity.
     *
     * @param string $id (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\Activity
     */
    public function getActivity($id)
    {
        list($response) = $this->getActivityWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getActivityWithHttpInfo
     *
     * Returns the details of a specific Activity.
     *
     * @param string $id (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\Activity, HTTP status code, HTTP response headers (array of strings)
     */
    public function getActivityWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getActivity');
        }
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/Activities(&#39;{id}&#39;)";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                '\Autodesk\Client\Model\Activity',
                '/autocad.io/us-east/v2/Activities(&#39;{id}&#39;)'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\Activity',
                    $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\Activity', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getActivityVersions
     *
     * Returns all old versions of a specified Activity.
     *
     * @param string $id (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\DesignAutomationActivities
     */
    public function getActivityVersions($id)
    {
        list($response) = $this->getActivityVersionsWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getActivityVersionsWithHttpInfo
     *
     * Returns all old versions of a specified Activity.
     *
     * @param string $id (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\DesignAutomationActivities, HTTP status code, HTTP response headers (array of strings)
     */
    public function getActivityVersionsWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getActivityVersions');
        }
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/Activities(&#39;{id}&#39;)/Operations.GetVersions";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                '\Autodesk\Client\Model\DesignAutomationActivities',
                '/autocad.io/us-east/v2/Activities(&#39;{id}&#39;)/Operations.GetVersions'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response,
                    '\Autodesk\Client\Model\DesignAutomationActivities', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\DesignAutomationActivities', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAllActivities
     *
     * Returns the details of all Activities.
     *
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\DesignAutomationActivities
     */
    public function getAllActivities()
    {
        list($response) = $this->getAllActivitiesWithHttpInfo();
        return $response;
    }

    /**
     * Operation getAllActivitiesWithHttpInfo
     *
     * Returns the details of all Activities.
     *
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\DesignAutomationActivities, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllActivitiesWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/Activities";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

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
                '\Autodesk\Client\Model\DesignAutomationActivities',
                '/autocad.io/us-east/v2/Activities'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response,
                    '\Autodesk\Client\Model\DesignAutomationActivities', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Autodesk\Client\Model\DesignAutomationActivities', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation patchActivity
     *
     * Updates an Activity by specifying only the changed attributes.
     *
     * @param string $id (required)
     * @param \Autodesk\Client\Model\ActivityOptional $activity (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return void
     */
    public function patchActivity($id, $activity)
    {
        list($response) = $this->patchActivityWithHttpInfo($id, $activity);
        return $response;
    }

    /**
     * Operation patchActivityWithHttpInfo
     *
     * Updates an Activity by specifying only the changed attributes.
     *
     * @param string $id (required)
     * @param \Autodesk\Client\Model\ActivityOptional $activity (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchActivityWithHttpInfo($id, $activity)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling patchActivity');
        }
        // verify the required parameter 'activity' is set
        if ($activity === null) {
            throw new \InvalidArgumentException('Missing the required parameter $activity when calling patchActivity');
        }
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/Activities(&#39;{id}&#39;)";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($activity)) {
            $_tempBody = $activity;
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
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/autocad.io/us-east/v2/Activities(&#39;{id}&#39;)'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation setActivityVersion
     *
     * Sets the Activity to the specified version.
     *
     * @param string $id (required)
     * @param \Autodesk\Client\Model\ActivityVersion $activity_version (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return void
     */
    public function setActivityVersion($id, $activity_version)
    {
        list($response) = $this->setActivityVersionWithHttpInfo($id, $activity_version);
        return $response;
    }

    /**
     * Operation setActivityVersionWithHttpInfo
     *
     * Sets the Activity to the specified version.
     *
     * @param string $id (required)
     * @param \Autodesk\Client\Model\ActivityVersion $activity_version (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function setActivityVersionWithHttpInfo($id, $activity_version)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling setActivityVersion');
        }
        // verify the required parameter 'activity_version' is set
        if ($activity_version === null) {
            throw new \InvalidArgumentException('Missing the required parameter $activity_version when calling setActivityVersion');
        }
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/Activities(&#39;{id}&#39;)/Operations.SetVersion";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($activity_version)) {
            $_tempBody = $activity_version;
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
                null,
                '/autocad.io/us-east/v2/Activities(&#39;{id}&#39;)/Operations.SetVersion'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
