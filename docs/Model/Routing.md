# Routing

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**routes** | [**\Optile\Model\Route[]**](Route.md) | List of available payment routes. | 
**strategy** | **string** | Name (code) of routing strategy used to sort available routes. Currently supported strategies:   * &#x60;LEAST_COST&#x60; - Use the route with lower transaction costs (based on contract pricing configuration).   * &#x60;FIXED&#x60; - Fixed-order strategy. Use the route that has the lowest &#x60;order&#x60; number.   * &#x60;ACTIVE&#x60; - Active-active strategy. Routes are chosen randomly based on their &#x60;weight&#x60;.  See Merchant Configuration API for further details. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


