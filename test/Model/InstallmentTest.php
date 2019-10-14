<?php
/**
 * InstallmentTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Optile
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Server Payment API
 *
 * RESTful API for payments via optile Open Payment Gateway (OPG) for server to server communication. Calls to this API require authorization.  ## Current version   * API service version: `1.1.289`   * API model version: `1.20.87`
 *
 * OpenAPI spec version: 1.1.289
 * Contact: support@optile.net
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Optile;

/**
 * InstallmentTest Class Doc Comment
 *
 * @category    Class
 * @description Information or hint about installment schema preferred by customer. It can be passed with a &#x60;CHARGE&#x60; request in case of native integration scenario, otherwise it should be provided during &#x60;LIST&#x60; initialization.  Note: Either &#x60;count&#x60; or &#x60;planId&#x60; must be provided. Most PSPs require &#x60;planId&#x60;.
 * @package     Optile
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InstallmentTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "Installment"
     */
    public function testInstallment()
    {
    }

    /**
     * Test attribute "count"
     */
    public function testPropertyCount()
    {
    }

    /**
     * Test attribute "plan_id"
     */
    public function testPropertyPlanId()
    {
    }
}