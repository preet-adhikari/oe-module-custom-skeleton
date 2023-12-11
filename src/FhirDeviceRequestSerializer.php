<?php
/**
 * FhirDeviceRequestSerializer.php
 * @package openemr
 * @link      http://www.open-emr.org
 * @author    Preet Adhikari <blazin.preet@gmail.com>
 * @copyright Copyright (c) 2023 Preet Adhikari <blazin.preet@gmail.com>
 * @license   https://github.com/openemr/openemr/blob/master/LICENSE GNU General Public License 3
 */
namespace OpenEMR\Modules\FHIRDeviceRequest;

use OpenEMR\FHIR\R4\FHIRDomainResource\FHIRDeviceRequest;

class FhirDeviceRequestSerializer
{
    public static function serialize(FHIRDeviceRequest $object)
    {
        return $object->jsonSerialize();
    }

    public static function deserialize($fhirJson)
    {
        //Creating the deserializer
    }
}