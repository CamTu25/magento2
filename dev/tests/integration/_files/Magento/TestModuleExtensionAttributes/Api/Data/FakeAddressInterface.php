<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\TestModuleExtensionAttributes\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

/**
 * Customer address interface.
 */
interface FakeAddressInterface extends ExtensibleDataInterface
{
    /**#@+
     * Constants for keys of data array
     */
    const ID = 'id';
    const CUSTOMER_ID = 'customer_id';
    const REGION = 'region';
    const REGIONS = 'regions';
    const COUNTRY_ID = 'country_id';
    const STREET = 'street';
    const COMPANY = 'company';
    const TELEPHONE = 'telephone';
    const FAX = 'fax';
    const POSTCODE = 'postcode';
    const CITY = 'city';
    const FIRSTNAME = 'firstname';
    const LASTNAME = 'lastname';
    const MIDDLENAME = 'middlename';
    const PREFIX = 'prefix';
    const SUFFIX = 'suffix';
    const VAT_ID = 'vat_id';
    const DEFAULT_BILLING = 'default_billing';
    const DEFAULT_SHIPPING = 'default_shipping';
    /**#@-*/

    /**
     * Blog ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Blog customer ID
     *
     * @return int|null
     */
    public function getCustomerId();

    /**
     * Blog region
     *
     * @return \Magento\TestModuleExtensionAttributes\Api\Data\FakeRegionInterface|null
     */
    public function getRegion();

    /**
     * Blog region
     *
     * @return \Magento\TestModuleExtensionAttributes\Api\Data\FakeRegionInterface[]|null
     */
    public function getRegions();

    /**
     * Two-letter country code in ISO_3166-2 format
     *
     * @return string|null
     */
    public function getCountryId();

    /**
     * Blog street
     *
     * @return string[]|null
     */
    public function getStreet();

    /**
     * Blog company
     *
     * @return string|null
     */
    public function getCompany();

    /**
     * Blog telephone number
     *
     * @return string|null
     */
    public function getTelephone();

    /**
     * Blog fax number
     *
     * @return string|null
     */
    public function getFax();

    /**
     * Blog postcode
     *
     * @return string|null
     */
    public function getPostcode();

    /**
     * Blog city name
     *
     * @return string|null
     */
    public function getCity();

    /**
     * Blog first name
     *
     * @return string|null
     */
    public function getFirstname();

    /**
     * Blog last name
     *
     * @return string|null
     */
    public function getLastname();

    /**
     * Blog middle name
     *
     * @return string|null
     */
    public function getMiddlename();

    /**
     * Blog prefix
     *
     * @return string|null
     */
    public function getPrefix();

    /**
     * Blog suffix
     *
     * @return string|null
     */
    public function getSuffix();

    /**
     * Blog Vat id
     *
     * @return string|null
     */
    public function getVatId();

    /**
     * Blog if this address is default shipping address.
     *
     * @return bool|null
     */
    public function isDefaultShipping();

    /**
     * Blog if this address is default billing address
     *
     * @return bool|null
     */
    public function isDefaultBilling();

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Magento\TestModuleExtensionAttributes\Api\Data\FakeAddressExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     *
     * @param \Magento\TestModuleExtensionAttributes\Api\Data\FakeAddressExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Magento\TestModuleExtensionAttributes\Api\Data\FakeAddressExtensionInterface $extensionAttributes
    );
}
