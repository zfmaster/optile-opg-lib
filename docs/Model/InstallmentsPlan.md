# InstallmentsPlan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of this installments plan. | [optional] 
**description** | **string** | Description of the installments plan. | [optional] 
**number_of_installments** | **int** | Number of installments in the installments plan. | [optional] 
**schedule** | [**\Optile\Model\InstallmentItem[]**](InstallmentItem.md) | Collection of particular installment with payment date and amount. | [optional] 
**due_days** | **int[]** | Collection of possible payment days like 1, 15, 28, etc. | [optional] 
**currency** | **string** | 3-letter currency code (ISO 4217) of all payment amounts within current installments plan. | [optional] 
**interest_amount** | **double** | The interest amount in major units. | [optional] 
**installment_setup_fee** | **double** | The fee for setting up the installment plan in major units. | [optional] 
**installment_periodic_fee** | **double** | The constant periodic fee for each installment in major units. Should be supplied only when it is the same for every installment. | [optional] 
**installment_fee** | **double** | The total fee for the installment payment (or service-charge-amount) in major units. It should match the sum of all installment periodic fees and the installment set-up fee. | [optional] 
**total_amount** | **double** | The total transaction amount in major units (including original amount, all fees and the interest). | [optional] 
**nominal_interest_rate** | **double** | The interest rate per year in percentages (Nominalzins or Sollzins). | [optional] 
**effective_interest_rate** | **double** | The effective interest rate per year in percentages (Effektivzins). | [optional] 
**credit_information_url** | **string** | URL to the Credit Information document. | [optional] 
**terms_and_conditions_url** | **string** | URL to terms and conditions information document. | [optional] 
**data_privacy_consent_url** | **string** | URL to the data privacy consent document. | [optional] 
**logo_url** | **string** | URL to the installment plan logo. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


