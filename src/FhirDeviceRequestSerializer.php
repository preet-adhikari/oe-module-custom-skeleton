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
use OpenEMR\FHIR\R4\FHIRElement\FHIRAnnotation;
use OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept;
use OpenEMR\FHIR\R4\FHIRElement\FHIRCoding;
use OpenEMR\FHIR\R4\FHIRElement\FHIRIdentifier;
use OpenEMR\FHIR\R4\FHIRElement\FHIRInstant;
use OpenEMR\FHIR\R4\FHIRElement\FHIRUri;

class FhirDeviceRequestSerializer
{
    public static function serialize(FHIRDeviceRequest $object)
    {
        return $object->jsonSerialize();
    }

    public static function deserialize($fhirJson)
    {
        $identifiers = $fhirJson['identifier'] ?? [];
        $instantiatesUris = $fhirJson['instantiatesUri'] ?? [];
        $reasonCode = $fhirJson['reasonCode'] ?? [];
        $note = $fhirJson['note'] ?? [];


        unset($fhirJson['identifier']);
        unset($fhirJson['instantiatesUri']);
        unset($fhirJson['reasonCode']);
        unset($fhirJson['note']);


        $deviceRequest = new FHIRDeviceRequest($fhirJson);


        foreach ($identifiers as $item)
        {
            $obj = new FHIRIdentifier($item);
            $type = $item['type'] ?? [];
            $coding = $type['coding'] ?? [];
            unset($type['coding']);
            $codeableConcept = new FHIRCodeableConcept($type);
            foreach($coding as $codingItem)
            {
                $codingItem = new FHIRCoding($codingItem);
                $codeableConcept->addCoding($codingItem);
            }
            $obj->setType($codeableConcept);
            $deviceRequest->addIdentifier($obj);
        }

        foreach($instantiatesUris as $item)
        {
            $obj = new FHIRUri($item);
            $deviceRequest->addInstantiatesUri($obj);
        }

        foreach($reasonCode as $item)
        {
            $coding = $item['coding'] ?? [];
            $text = $item['text'] ?? [];
            unset($item['coding']);
            unset($item['text']);
            $codeableConcept = new FHIRCodeableConcept($item);
            foreach ($coding as $codingItem)
            {
                $codingItem = new FHIRCoding($codingItem);
                $codeableConcept->addCoding($codingItem);
            }
            $codeableConcept->setText($text);
            $deviceRequest->addReasonCode($codeableConcept);
        }

        foreach($note as $item)
        {
            $obj = new FHIRAnnotation($item);
            $deviceRequest->addNote($obj);
        }

        return $deviceRequest;
    }
}