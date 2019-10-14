# Product

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Identifier for this product given by the merchant. Not validated for uniqueness by OPG. May appear on customer invoice. | [optional] 
**name** | **string** | Human readable name of this product. May appear on customer invoice. | 
**amount** | **double** | Total price of this product record with respect to &#x60;quantity&#x60; field. For example, if single item of product costs &#x60;10.00&#x60; and &#x60;quantity&#x60; indicates &#x60;2&#x60; items in this product record, the value of this field must be &#x60;20.00&#x60;.  The sum of all product amounts should match the &#x60;amount&#x60; field in &#x60;payment&#x60; object. | [optional] 
**net_amount** | **double** | Total net price of this product record with respect to the &#x60;quantity&#x60; field. For example, if single item of product costs &#x60;10.00&#x60; and &#x60;quantity&#x60; indicates &#x60;2&#x60; items in this product record, the value of this field must be &#x60;20.00&#x60;. | [optional] 
**tax_amount** | **double** | Total tax amount (e.g. VAT amount) of this product record. | [optional] 
**tax_rate_percentage** | **double** | Tax rate percentage (e.g. VAT tax rate) for this product record. | [optional] 
**currency** | **string** | Currency of the &#x60;amount&#x60; field. Value format is according to ISO-4217 form, e.g. \&quot;EUR\&quot;, \&quot;USD\&quot;. If undefined the currency will be taken from &#x60;payment&#x60; object. | [optional] 
**quantity** | **int** | Product quantity. By default is &#x60;1&#x60;. | [optional] 
**planned_shipping_date** | [**\DateTime**](\DateTime.md) | Date (or time stamp) of planned shipment for this product record. | [optional] 
**product_description_url** | **string** | URL to product description page. This URL can be used by PSP to build an order-friendly payment page during checkout or during future communication with customer about this order or product. | [optional] 
**product_image_url** | **string** | URL to product image. This URL can be used by PSP to build an order-friendly payment page during checkout or during future communication with customer about this order or product. | [optional] 
**description** | **string** | Product description in free form (no markup supported). | [optional] 
**shipping_address_id** | **string** | Shipping address ID to deliver this product to. If undefined, the product is delivered to the address described by &#x60;customer.addresses.shipping&#x60; property. | [optional] 
**type** | **string** | Defines a type of the product:   * &#x60;PHYSICAL&#x60; - Physical product   * &#x60;DIGITAL&#x60; - Digital product   * &#x60;SERVICE&#x60; - Service   * &#x60;TAX&#x60; - The type which should be used in the case when the tax information about shopping card should be provided as a separate order line (common case for USA market)   * &#x60;OTHER&#x60; - Other types not listed above | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


