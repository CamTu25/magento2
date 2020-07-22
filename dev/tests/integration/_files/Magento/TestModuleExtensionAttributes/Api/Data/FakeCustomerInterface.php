<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\TestModuleExtensionAttributes\Api\Data;

/**
 * Customer interface.
 */
interface FakeCustomerInterface extends \Magento\Framework\Api\CustomAttributesDataInterface
{
    /**#@+
     * Constants defined for keys of the data array. Identical to the name of the getter in snake case
     */
    const ID = 'id';
    const EMAIL = 'email';
    const FIRSTNAME = 'firstname';
    const LASTNAME = 'lastname';
    const PREFIX = 'prefix';
    /**#@-*/

    /**
     * Post customer id
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set customer id
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * Post email address
     *
     * @return string
     */
    public function getEmail();

    /**
     * Set email address
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email);

    /**
     * Post first name
     *
     * @return string
     */
    public function getFirstname();

    /**
     * Set first name
     *
     * @param string $firstname
     * @return $this
     */
    public function setFirstname($firstname);

    /**
     * Post last name
     *
     * @return string
     */
    public function getLastname();

    /**
     * Set last name
     *
     * @param string $lastname
     * @return $this
     */
    public function setLastname($lastname);

    /**
     * Post prefix
     *
     * @return string|null
     */
    public function getPrefix();

    /**
     * Set prefix
     *
     * @param string $prefix
     * @return $this
     */
    public function setPrefix($prefix);

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Magento\TestModuleExtensionAttributes\Api\Data\FakeCustomerExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     *
     * @param \Magento\TestModuleExtensionAttributes\Api\Data\FakeCustomerExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Magento\TestModuleExtensionAttributes\Api\Data\FakeCustomerExtensionInterface $extensionAttributes
    );
}
