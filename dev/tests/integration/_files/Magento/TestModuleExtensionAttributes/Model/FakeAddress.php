<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\TestModuleExtensionAttributes\Model;

use Magento\Framework\Model\AbstractExtensibleModel;
use Magento\TestModuleExtensionAttributes\Api\Data\FakeAddressInterface;

class FakeAddress extends AbstractExtensibleModel implements FakeAddressInterface
{
    /**
     * Post ID
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * Post customer ID
     *
     * @return int|null
     */
    public function getCustomerId()
    {
        return $this->getData(self::CUSTOMER_ID);
    }

    /**
     * Post region
     *
     * @return \Magento\TestModuleExtensionAttributes\Api\Data\FakeRegionInterface|null
     */
    public function getRegion()
    {
        return $this->getData(self::REGION);
    }

    /**
     * Post region
     *
     * @return \Magento\TestModuleExtensionAttributes\Api\Data\FakeRegionInterface[]|null
     */
    public function getRegions()
    {
        return $this->getData(self::REGIONS);
    }

    /**
     * Two-letter country code in ISO_3166-2 format
     *
     * @return string|null
     */
    public function getCountryId()
    {
        return $this->getData(self::COUNTRY_ID);
    }

    /**
     * Post street
     *
     * @return string[]|null
     */
    public function getStreet()
    {
        return $this->getData(self::STREET);
    }

    /**
     * Post company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->getData(self::COMPANY);
    }

    /**
     * Post telephone number
     *
     * @return string|null
     */
    public function getTelephone()
    {
        return $this->getData(self::TELEPHONE);
    }

    /**
     * Post fax number
     *
     * @return string|null
     */
    public function getFax()
    {
        return $this->getData(self::FAX);
    }

    /**
     * Post postcode
     *
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->getData(self::POSTCODE);
    }

    /**
     * Post city name
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->getData(self::CITY);
    }

    /**
     * Post first name
     *
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->getData(self::FIRSTNAME);
    }

    /**
     * Post last name
     *
     * @return string|null
     */
    public function getLastname()
    {
        return $this->getData(self::LASTNAME);
    }

    /**
     * Post middle name
     *
     * @return string|null
     */
    public function getMiddlename()
    {
        return $this->getData(self::MIDDLENAME);
    }

    /**
     * Post prefix
     *
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->getData(self::PREFIX);
    }

    /**
     * Post suffix
     *
     * @return string|null
     */
    public function getSuffix()
    {
        return $this->getData(self::SUFFIX);
    }

    /**
     * Post Vat id
     *
     * @return string|null
     */
    public function getVatId()
    {
        return $this->getData(self::VAT_ID);
    }

    /**
     * Post if this address is default shipping address.
     *
     * @return bool|null
     */
    public function isDefaultShipping()
    {
        return $this->getData(self::DEFAULT_SHIPPING);
    }

    /**
     * Post if this address is default billing address
     *
     * @return bool|null
     */
    public function isDefaultBilling()
    {
        return $this->getData(self::DEFAULT_BILLING);
    }

    /**
     * {@inheritdoc}
     *
     * @return \Magento\TestModuleExtensionAttributes\Api\Data\FakeAddressExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * {@inheritdoc}
     *
     * @param \Magento\TestModuleExtensionAttributes\Api\Data\FakeAddressExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Magento\TestModuleExtensionAttributes\Api\Data\FakeAddressExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
