<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Organization File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* Organization class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Organization extends DirectoryObject
{

     /**
     * Gets the assignedPlans
    * The collection of service plans associated with the tenant. Not nullable.
     *
     * @return array|null The assignedPlans
     */
    public function getAssignedPlans()
    {
        if (array_key_exists("assignedPlans", $this->_propDict)) {
           return $this->_propDict["assignedPlans"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignedPlans
    * The collection of service plans associated with the tenant. Not nullable.
    *
    * @param AssignedPlan[] $val The assignedPlans
    *
    * @return Organization
    */
    public function setAssignedPlans($val)
    {
        $this->_propDict["assignedPlans"] = $val;
        return $this;
    }

    /**
    * Gets the businessPhones
    * Telephone number for the organization. Although this is a string collection, only one number can be set for this property.
    *
    * @return array|null The businessPhones
    */
    public function getBusinessPhones()
    {
        if (array_key_exists("businessPhones", $this->_propDict)) {
            return $this->_propDict["businessPhones"];
        } else {
            return null;
        }
    }

    /**
    * Sets the businessPhones
    * Telephone number for the organization. Although this is a string collection, only one number can be set for this property.
    *
    * @param string[] $val The businessPhones
    *
    * @return Organization
    */
    public function setBusinessPhones($val)
    {
        $this->_propDict["businessPhones"] = $val;
        return $this;
    }

    /**
    * Gets the city
    * City name of the address for the organization.
    *
    * @return string|null The city
    */
    public function getCity()
    {
        if (array_key_exists("city", $this->_propDict)) {
            return $this->_propDict["city"];
        } else {
            return null;
        }
    }

    /**
    * Sets the city
    * City name of the address for the organization.
    *
    * @param string $val The city
    *
    * @return Organization
    */
    public function setCity($val)
    {
        $this->_propDict["city"] = $val;
        return $this;
    }

    /**
    * Gets the country
    * Country/region name of the address for the organization.
    *
    * @return string|null The country
    */
    public function getCountry()
    {
        if (array_key_exists("country", $this->_propDict)) {
            return $this->_propDict["country"];
        } else {
            return null;
        }
    }

    /**
    * Sets the country
    * Country/region name of the address for the organization.
    *
    * @param string $val The country
    *
    * @return Organization
    */
    public function setCountry($val)
    {
        $this->_propDict["country"] = $val;
        return $this;
    }

    /**
    * Gets the countryLetterCode
    * Country or region abbreviation for the organization in ISO 3166-2 format.
    *
    * @return string|null The countryLetterCode
    */
    public function getCountryLetterCode()
    {
        if (array_key_exists("countryLetterCode", $this->_propDict)) {
            return $this->_propDict["countryLetterCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countryLetterCode
    * Country or region abbreviation for the organization in ISO 3166-2 format.
    *
    * @param string $val The countryLetterCode
    *
    * @return Organization
    */
    public function setCountryLetterCode($val)
    {
        $this->_propDict["countryLetterCode"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    * Timestamp of when the organization was created. The value cannot be modified and is automatically populated when the organization is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * Timestamp of when the organization was created. The value cannot be modified and is automatically populated when the organization is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Organization
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the defaultUsageLocation
    * Two-letter ISO 3166 country code indicating the default service usage location of an organization.
    *
    * @return string|null The defaultUsageLocation
    */
    public function getDefaultUsageLocation()
    {
        if (array_key_exists("defaultUsageLocation", $this->_propDict)) {
            return $this->_propDict["defaultUsageLocation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultUsageLocation
    * Two-letter ISO 3166 country code indicating the default service usage location of an organization.
    *
    * @param string $val The defaultUsageLocation
    *
    * @return Organization
    */
    public function setDefaultUsageLocation($val)
    {
        $this->_propDict["defaultUsageLocation"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    * The display name for the tenant.
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The display name for the tenant.
    *
    * @param string $val The displayName
    *
    * @return Organization
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the marketingNotificationEmails
    * Not nullable.
    *
    * @return array|null The marketingNotificationEmails
    */
    public function getMarketingNotificationEmails()
    {
        if (array_key_exists("marketingNotificationEmails", $this->_propDict)) {
            return $this->_propDict["marketingNotificationEmails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the marketingNotificationEmails
    * Not nullable.
    *
    * @param string[] $val The marketingNotificationEmails
    *
    * @return Organization
    */
    public function setMarketingNotificationEmails($val)
    {
        $this->_propDict["marketingNotificationEmails"] = $val;
        return $this;
    }

    /**
    * Gets the onPremisesLastSyncDateTime
    * The time and date at which the tenant was last synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @return \DateTime|null The onPremisesLastSyncDateTime
    */
    public function getOnPremisesLastSyncDateTime()
    {
        if (array_key_exists("onPremisesLastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["onPremisesLastSyncDateTime"], "\DateTime") || is_null($this->_propDict["onPremisesLastSyncDateTime"])) {
                return $this->_propDict["onPremisesLastSyncDateTime"];
            } else {
                $this->_propDict["onPremisesLastSyncDateTime"] = new \DateTime($this->_propDict["onPremisesLastSyncDateTime"]);
                return $this->_propDict["onPremisesLastSyncDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the onPremisesLastSyncDateTime
    * The time and date at which the tenant was last synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The onPremisesLastSyncDateTime
    *
    * @return Organization
    */
    public function setOnPremisesLastSyncDateTime($val)
    {
        $this->_propDict["onPremisesLastSyncDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the onPremisesSyncEnabled
    * true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced. Nullable. null if this object has never been synced from an on-premises directory (default).
    *
    * @return bool|null The onPremisesSyncEnabled
    */
    public function getOnPremisesSyncEnabled()
    {
        if (array_key_exists("onPremisesSyncEnabled", $this->_propDict)) {
            return $this->_propDict["onPremisesSyncEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onPremisesSyncEnabled
    * true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced. Nullable. null if this object has never been synced from an on-premises directory (default).
    *
    * @param bool $val The onPremisesSyncEnabled
    *
    * @return Organization
    */
    public function setOnPremisesSyncEnabled($val)
    {
        $this->_propDict["onPremisesSyncEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the partnerTenantType
    *
    * @return PartnerTenantType|null The partnerTenantType
    */
    public function getPartnerTenantType()
    {
        if (array_key_exists("partnerTenantType", $this->_propDict)) {
            if (is_a($this->_propDict["partnerTenantType"], "\Microsoft\Graph\Model\PartnerTenantType") || is_null($this->_propDict["partnerTenantType"])) {
                return $this->_propDict["partnerTenantType"];
            } else {
                $this->_propDict["partnerTenantType"] = new PartnerTenantType($this->_propDict["partnerTenantType"]);
                return $this->_propDict["partnerTenantType"];
            }
        }
        return null;
    }

    /**
    * Sets the partnerTenantType
    *
    * @param PartnerTenantType $val The partnerTenantType
    *
    * @return Organization
    */
    public function setPartnerTenantType($val)
    {
        $this->_propDict["partnerTenantType"] = $val;
        return $this;
    }

    /**
    * Gets the postalCode
    * Postal code of the address for the organization.
    *
    * @return string|null The postalCode
    */
    public function getPostalCode()
    {
        if (array_key_exists("postalCode", $this->_propDict)) {
            return $this->_propDict["postalCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the postalCode
    * Postal code of the address for the organization.
    *
    * @param string $val The postalCode
    *
    * @return Organization
    */
    public function setPostalCode($val)
    {
        $this->_propDict["postalCode"] = $val;
        return $this;
    }

    /**
    * Gets the preferredLanguage
    * The preferred language for the organization. Should follow ISO 639-1 Code; for example, en.
    *
    * @return string|null The preferredLanguage
    */
    public function getPreferredLanguage()
    {
        if (array_key_exists("preferredLanguage", $this->_propDict)) {
            return $this->_propDict["preferredLanguage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the preferredLanguage
    * The preferred language for the organization. Should follow ISO 639-1 Code; for example, en.
    *
    * @param string $val The preferredLanguage
    *
    * @return Organization
    */
    public function setPreferredLanguage($val)
    {
        $this->_propDict["preferredLanguage"] = $val;
        return $this;
    }

    /**
    * Gets the privacyProfile
    * The privacy profile of an organization.
    *
    * @return PrivacyProfile|null The privacyProfile
    */
    public function getPrivacyProfile()
    {
        if (array_key_exists("privacyProfile", $this->_propDict)) {
            if (is_a($this->_propDict["privacyProfile"], "\Microsoft\Graph\Model\PrivacyProfile") || is_null($this->_propDict["privacyProfile"])) {
                return $this->_propDict["privacyProfile"];
            } else {
                $this->_propDict["privacyProfile"] = new PrivacyProfile($this->_propDict["privacyProfile"]);
                return $this->_propDict["privacyProfile"];
            }
        }
        return null;
    }

    /**
    * Sets the privacyProfile
    * The privacy profile of an organization.
    *
    * @param PrivacyProfile $val The privacyProfile
    *
    * @return Organization
    */
    public function setPrivacyProfile($val)
    {
        $this->_propDict["privacyProfile"] = $val;
        return $this;
    }


     /**
     * Gets the provisionedPlans
    * Not nullable.
     *
     * @return array|null The provisionedPlans
     */
    public function getProvisionedPlans()
    {
        if (array_key_exists("provisionedPlans", $this->_propDict)) {
           return $this->_propDict["provisionedPlans"];
        } else {
            return null;
        }
    }

    /**
    * Sets the provisionedPlans
    * Not nullable.
    *
    * @param ProvisionedPlan[] $val The provisionedPlans
    *
    * @return Organization
    */
    public function setProvisionedPlans($val)
    {
        $this->_propDict["provisionedPlans"] = $val;
        return $this;
    }

    /**
    * Gets the securityComplianceNotificationMails
    *
    * @return array|null The securityComplianceNotificationMails
    */
    public function getSecurityComplianceNotificationMails()
    {
        if (array_key_exists("securityComplianceNotificationMails", $this->_propDict)) {
            return $this->_propDict["securityComplianceNotificationMails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the securityComplianceNotificationMails
    *
    * @param string[] $val The securityComplianceNotificationMails
    *
    * @return Organization
    */
    public function setSecurityComplianceNotificationMails($val)
    {
        $this->_propDict["securityComplianceNotificationMails"] = $val;
        return $this;
    }

    /**
    * Gets the securityComplianceNotificationPhones
    *
    * @return array|null The securityComplianceNotificationPhones
    */
    public function getSecurityComplianceNotificationPhones()
    {
        if (array_key_exists("securityComplianceNotificationPhones", $this->_propDict)) {
            return $this->_propDict["securityComplianceNotificationPhones"];
        } else {
            return null;
        }
    }

    /**
    * Sets the securityComplianceNotificationPhones
    *
    * @param string[] $val The securityComplianceNotificationPhones
    *
    * @return Organization
    */
    public function setSecurityComplianceNotificationPhones($val)
    {
        $this->_propDict["securityComplianceNotificationPhones"] = $val;
        return $this;
    }

    /**
    * Gets the state
    * State name of the address for the organization.
    *
    * @return string|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            return $this->_propDict["state"];
        } else {
            return null;
        }
    }

    /**
    * Sets the state
    * State name of the address for the organization.
    *
    * @param string $val The state
    *
    * @return Organization
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }

    /**
    * Gets the street
    * Street name of the address for organization.
    *
    * @return string|null The street
    */
    public function getStreet()
    {
        if (array_key_exists("street", $this->_propDict)) {
            return $this->_propDict["street"];
        } else {
            return null;
        }
    }

    /**
    * Sets the street
    * Street name of the address for organization.
    *
    * @param string $val The street
    *
    * @return Organization
    */
    public function setStreet($val)
    {
        $this->_propDict["street"] = $val;
        return $this;
    }

    /**
    * Gets the technicalNotificationMails
    * Not nullable.
    *
    * @return array|null The technicalNotificationMails
    */
    public function getTechnicalNotificationMails()
    {
        if (array_key_exists("technicalNotificationMails", $this->_propDict)) {
            return $this->_propDict["technicalNotificationMails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the technicalNotificationMails
    * Not nullable.
    *
    * @param string[] $val The technicalNotificationMails
    *
    * @return Organization
    */
    public function setTechnicalNotificationMails($val)
    {
        $this->_propDict["technicalNotificationMails"] = $val;
        return $this;
    }

    /**
    * Gets the tenantType
    *
    * @return string|null The tenantType
    */
    public function getTenantType()
    {
        if (array_key_exists("tenantType", $this->_propDict)) {
            return $this->_propDict["tenantType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantType
    *
    * @param string $val The tenantType
    *
    * @return Organization
    */
    public function setTenantType($val)
    {
        $this->_propDict["tenantType"] = $val;
        return $this;
    }


     /**
     * Gets the verifiedDomains
    * The collection of domains associated with this tenant. Not nullable.
     *
     * @return array|null The verifiedDomains
     */
    public function getVerifiedDomains()
    {
        if (array_key_exists("verifiedDomains", $this->_propDict)) {
           return $this->_propDict["verifiedDomains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the verifiedDomains
    * The collection of domains associated with this tenant. Not nullable.
    *
    * @param VerifiedDomain[] $val The verifiedDomains
    *
    * @return Organization
    */
    public function setVerifiedDomains($val)
    {
        $this->_propDict["verifiedDomains"] = $val;
        return $this;
    }

    /**
    * Gets the mobileDeviceManagementAuthority
    * Mobile device management authority. Possible values are: unknown, intune, sccm, office365.
    *
    * @return MdmAuthority|null The mobileDeviceManagementAuthority
    */
    public function getMobileDeviceManagementAuthority()
    {
        if (array_key_exists("mobileDeviceManagementAuthority", $this->_propDict)) {
            if (is_a($this->_propDict["mobileDeviceManagementAuthority"], "\Microsoft\Graph\Model\MdmAuthority") || is_null($this->_propDict["mobileDeviceManagementAuthority"])) {
                return $this->_propDict["mobileDeviceManagementAuthority"];
            } else {
                $this->_propDict["mobileDeviceManagementAuthority"] = new MdmAuthority($this->_propDict["mobileDeviceManagementAuthority"]);
                return $this->_propDict["mobileDeviceManagementAuthority"];
            }
        }
        return null;
    }

    /**
    * Sets the mobileDeviceManagementAuthority
    * Mobile device management authority. Possible values are: unknown, intune, sccm, office365.
    *
    * @param MdmAuthority $val The mobileDeviceManagementAuthority
    *
    * @return Organization
    */
    public function setMobileDeviceManagementAuthority($val)
    {
        $this->_propDict["mobileDeviceManagementAuthority"] = $val;
        return $this;
    }

    /**
    * Gets the branding
    * Branding for the organization. Nullable.
    *
    * @return OrganizationalBranding|null The branding
    */
    public function getBranding()
    {
        if (array_key_exists("branding", $this->_propDict)) {
            if (is_a($this->_propDict["branding"], "\Microsoft\Graph\Model\OrganizationalBranding") || is_null($this->_propDict["branding"])) {
                return $this->_propDict["branding"];
            } else {
                $this->_propDict["branding"] = new OrganizationalBranding($this->_propDict["branding"]);
                return $this->_propDict["branding"];
            }
        }
        return null;
    }

    /**
    * Sets the branding
    * Branding for the organization. Nullable.
    *
    * @param OrganizationalBranding $val The branding
    *
    * @return Organization
    */
    public function setBranding($val)
    {
        $this->_propDict["branding"] = $val;
        return $this;
    }


     /**
     * Gets the certificateBasedAuthConfiguration
    * Navigation property to manage certificate-based authentication configuration. Only a single instance of certificateBasedAuthConfiguration can be created in the collection.
     *
     * @return array|null The certificateBasedAuthConfiguration
     */
    public function getCertificateBasedAuthConfiguration()
    {
        if (array_key_exists("certificateBasedAuthConfiguration", $this->_propDict)) {
           return $this->_propDict["certificateBasedAuthConfiguration"];
        } else {
            return null;
        }
    }

    /**
    * Sets the certificateBasedAuthConfiguration
    * Navigation property to manage certificate-based authentication configuration. Only a single instance of certificateBasedAuthConfiguration can be created in the collection.
    *
    * @param CertificateBasedAuthConfiguration[] $val The certificateBasedAuthConfiguration
    *
    * @return Organization
    */
    public function setCertificateBasedAuthConfiguration($val)
    {
        $this->_propDict["certificateBasedAuthConfiguration"] = $val;
        return $this;
    }


     /**
     * Gets the extensions
    * The collection of open extensions defined for the organization. Read-only. Nullable.
     *
     * @return array|null The extensions
     */
    public function getExtensions()
    {
        if (array_key_exists("extensions", $this->_propDict)) {
           return $this->_propDict["extensions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the extensions
    * The collection of open extensions defined for the organization. Read-only. Nullable.
    *
    * @param Extension[] $val The extensions
    *
    * @return Organization
    */
    public function setExtensions($val)
    {
        $this->_propDict["extensions"] = $val;
        return $this;
    }

}
