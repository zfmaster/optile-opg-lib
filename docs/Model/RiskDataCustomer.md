# RiskDataCustomer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_attempts_last_day** | **int** | Number of transactions (successful and abandoned) for this customer account with the merchant across all payment accounts in the previous 24 hours. | [optional] 
**payment_attempts_last_year** | **int** | Number of transactions (successful and abandoned) for this customer account with the merchant across all payment accounts in the previous year. | [optional] 
**card_registration_attempts_last_day** | **int** | Number of Add Card attempts in the last 24 hours. | [optional] 
**purchases_last_six_months** | **int** | Number of purchases with this customer account during the previous six months. | [optional] 
**suspicious_activity** | **bool** | Indicates if the merchant knows of suspicious activities by the consumer (e.g. previous fraud). | [optional] 
**account** | [**\Optile\Model\CustomerAccount**](CustomerAccount.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


