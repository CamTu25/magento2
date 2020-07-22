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
     * Post ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Post customer ID
     *
     * @return int|null
     */
    public function getCustomerId();

    /**
     * Post region
     *
     * @return \Magento\TestModuleExtensionAttributes\Api\Data\FakeRegionInterface|null
     */
    public function getRegion();

    /**
     * Post region
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
     * Post street
     *
     * @return string[]|null
     */
    public function getStreet();

    /**
     * Post company
     *
     * @return string|null
     */
    public function getCompany();

    /**
     * Post telephone number
     *
     * @return string|null
     */
    public function getTelephone();

    /**
     * Post fax number
     *
     * @return string|null
     */
    public function getFax();

    /**
     * Post postcode
     *
     * @return string|null
     */
    public function getPostcode();

    /**
     * Post city name
     *
     * @return string|null
     */
    public function getCity();

    /**
     * Post first name
     *
     * @return string|null
     */
    public function getFirstname();

    /**
     * Post last name
     *
     * @return string|null
     */
    public function getLastname();

    /**
     * Post middle name
     *
     * @return string|null
     */
    public function getMiddlename();

    /**
     * Post prefix
     *
     * @return string|null
     */
    public function getPrefix();

    /**
     * Post suffix
     *
     * @return string|null
     */
    public function getSuffix();

    /**
     * Post Vat id
     *
     * @return string|null
     */
    public function getVatId();

    /**
     * Post if this address is default shipping address.
     *
     * @return bool|null
     */
    public function isDefaultShipping();

    /**
     * Post if this address is default billing address
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
