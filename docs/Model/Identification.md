# Identification

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**long_id** | **string** | Globally unique operation identifier assigned by OPG platform. | 
**short_id** | **string** | Short identifier assigned by OPG platform to operation. Unlike &#x60;longId&#x60; this identifier is not guaranteed to be unique. | 
**transaction_id** | **string** | Original transaction ID provided by merchant during &#x60;LIST&#x60; session initialization, or during recurring &#x60;CHARGE&#x60;. | 
**psp_id** | **string** | ID assigned by PSP if successful communication with PSP took place in scope of this operation. | [optional] 
**institution_id** | **string** | ID assigned by financial institution if successful communication with institution took place in scope of this operation. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


