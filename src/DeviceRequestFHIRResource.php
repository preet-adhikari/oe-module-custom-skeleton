<?php

/**
 * Represents a custom FHIR resource that is used for example purposes only.  It is NOT in the FHIR specification
 *
 * @package   OpenEMR
 * @link      http://www.open-emr.org
 *
 * @author    Stephen Nielson <stephen@nielson.org>
 * @copyright Copyright (c) 2022 Stephen Nielson <stephen@nielson.org>
 * @license   https://github.com/openemr/openemr/blob/master/LICENSE GNU General Public License 3
 */

namespace OpenEMR\Modules\DeviceRequest;

use OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept;
use OpenEMR\FHIR\R4\FHIRResource\FHIRDomainResource;
use OpenEMR\FHIR\R4\FHIRElement\FHIRReference; 
use OpenEMR\FHIR\R4\FHIRElement\FHIRUri;
use OpenEMR\FHIR\R4\FHIRResource\FHIRDeviceRequest;
use OpenEMR\FHIR\R4\FHIRElement\FHIRIdentifier;
use OpenEMR\FHIR\R4\FHIRElement\FHIRCanonical;
use OpenEMR\FHIR\R4\FHIRElement\FHIRDateTime;
use OpenEMR\FHIR\R4\FHIRResource\FHIRTiming;
use OpenEMR\FHIR\R4\FHIRElement\FHIRAnnotation;
use OpenEMR\FHIR\R4\FHIRElement\FHIRCode;


class DeviceRequestFHIRResource extends FHIRDomainResource
{
    /**
     * The patient or group present at the encounter.
     * @var FHIRReference
     */
    public $patient = null;
    
    /**
     * identifier
     *
     * @var FHIRIdentifier
     */
    public $identifier = null;
    
    /**
     * instantiatesUri
     *
     * @var FHIRUri
     */
    public $instantiatesUri = null;
        
    /**
     * valueCodeableConcept
     *
     * @var undefined
     */
    public $valueCodeableConcept = null;

     /**
     * code
     *
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

     /**
     * valueQuantity
     *
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * valueRange
     *
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRRange
     */
    public $valueRange = null;
    
    /**
     * valueBoolean
     *
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRBoolean
     */
    public $valueBoolean = null;
    
    /**
     * groupIdentifier
     *
     * @var FHIRIdentifier
     */
    public $groupIdentifier = null;

     /**
     * performerType
     *
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public $performerType = null;

     /**
     * reasonCode
     *
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCode = null;
    
    /**
     * instantiatesCanonical
     *
     * @var FHIRCanonical
     */
    public $instantiatesCanonical = null;

    /**
     * subject
     *
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * basedOn
     *
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public $basedOn = null;

    /**
     * priorRequest
     *
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public $priorRequest = null;

    /**
     * encounter
     *
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * reasonReference
     *
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * insurance
     *
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public $insurance = null;

    /**
     * supportingInfo
     *
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public $supportingInfo = null;

    /**
     * relevantHistory
     *
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public $relevantHistory = null;
    
    /**
     * occurrenceDateTime
     *
     * @var FHIRDateTime
     */
    public $occurrenceDateTime = null;

    /**
     * occurrencePeriod
     *
     * @var FHIRPeriod
     */
    public $occurrencePeriod = null;

    /**
     * occurrenceDateTime
     *
     * @var FHIRTiming
     */
    public $occurrenceTiming = null;

      /**
     * authoredOn
     *
     * @var FHIRDateTime
     */
    public $authoredOn = null;

      /**
     * requester
     *
     * @var FHIRReference
     */
    public $requester = null;


      /**
     * performer
     *
     * @var FHIRReference
     */
    public $performer = null;    

     /**
     * note
     *
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
    * The status of the request.
    * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRCode
    */
    public $status = null;

    /**
     * Whether the request is a proposal, plan, or an original order.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRCode
     */
    public $intent = null;

    /**
     * Indicates how quickly the DeviceRequest should be addressed with respect to other requests.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRCode
     */
    public $priority = null;

    /**
     * A code or string that identifies the device detail being asserted.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public $codeCodeableConcept = null;

    /**
     * A code or string that identifies the device detail being asserted.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public $codeReference = null;





    // ----------------------------------------------------------------------------------------- //
    // Getters and Setters for the resource parameters
    /**
     * @return FHIRReference
     */
    public function getPatient(): FHIRReference
    {
        return $this->patient;
    }

    /**
     * @param FHIRReference $patient
     * @return DeviceRequestFHIRResource
     */
    public function setPatient(FHIRReference $patient): DeviceRequestFHIRResource
    {
        $this->patient = $patient;
        return $this;
    }

    
    public function getIdentifier(): FHIRIdentifier
    {
        return $this->identifier;
    }

    /**
     * @param FHIRIdentifier $identifier
     * 
     */
    public function setIdentifier(FHIRIdentifier $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Getter for instantiatesUri
     *
     * @return FHIRUri
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }

    /**
     * Setter for instantiatesUri
     *
     * @param FHIRUri $instantiatesUri
     * @return $this
     */
    public function setInstantiatesUri($instantiatesUri)
    {
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    
        
    /**
     * setValueCodeableConcept
     *
     * @param  mixed $valueCodeableConcept
     * @return void
     */
    public function setValueCodeableConcept(FHIRCodeableConcept $valueCodeableConcept)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }
    
    /**
     * getValueCodeableConcept
     *
     * @return void
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

     /**
     * setValueCode
     *
     * @param  \OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setCode(\OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * getCode
     *
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    
    /**
     * setValueQuantity
     *
     * @param  \OpenEMR\FHIR\R4\FHIRElement\FHIRQuantity $valueQuantity
     * @return $this
     */
    public function setValueQuantity(\OpenEMR\FHIR\R4\FHIRElement\FHIRQuantity $valueQuantity)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * getValueQuantity
     *
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * setValueRange
     *
     * @param  \OpenEMR\FHIR\R4\FHIRElement\FHIRRange $valueRange
     * @return $this
     */
    public function setValueRange(\OpenEMR\FHIR\R4\FHIRElement\FHIRRange $valueRange)
    {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * getValueRange
     *
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRRange
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

       /**
     * setValueBoolean
     *
     * @param  \OpenEMR\FHIR\R4\FHIRElement\FHIRBoolean $valueBoolean
     * @return $this
     */
    public function setValueBoolean(\OpenEMR\FHIR\R4\FHIRElement\FHIRBoolean $valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * getValueBoolean
     *
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    
    /**
     * @param FHIRIdentifier $groupIdentifier
     */
    public function setGroupIdentifier(FHIRIdentifier $groupIdentifier)
    {   
        $this->groupIdentifier = $groupIdentifier;
        return $this;
    }

     /**
     * @return FHIRIdentifier
     */
    public function getGroupIdentifier()
    {
        return $this->groupIdentifier;
    }

     /**
     * setValueCode
     *
     * @param  \OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setPerformerType(\OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept $performerType)
    {
        $this->performerType = $performerType;
        return $this;
    }

    /**
     * getCode
     *
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getPerformerType()
    {
        return $this->performerType;
    }

      /**
     * setReasonCode
     *
     * @param  \OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function setReasonCode(\OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept $reasonCode)
    {
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * getReasonCode
     *
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    public function setInstantiatesCanonical(FHIRCanonical $instantiatesCanonical)
    {
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }

      /**
     * setSubject
     *
     * @param  \OpenEMR\FHIR\R4\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject(\OpenEMR\FHIR\R4\FHIRElement\FHIRReference $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * getSubject
     *
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

     /**
     * setBasedOn
     *
     * @param  \OpenEMR\FHIR\R4\FHIRElement\FHIRReference $basedOn
     * @return $this
     */
    public function setBasedOn(\OpenEMR\FHIR\R4\FHIRElement\FHIRReference $basedOn)
    {
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * getBasedOn
     *
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

      /**
     * setPriorRequest
     *
     * @param  \OpenEMR\FHIR\R4\FHIRElement\FHIRReference $priorRequest
     * @return $this
     */
    public function setPriorRequest(\OpenEMR\FHIR\R4\FHIRElement\FHIRReference $priorRequest)
    {
        $this->priorRequest = $priorRequest;
        return $this;
    }

    /**
     * getPriorRequest
     *
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getPriorRequest()
    {
        return $this->priorRequest;
    }

    /**
     * setEncounter
     *
     * @param  \OpenEMR\FHIR\R4\FHIRElement\FHIRReference $encounter
     * @return $this
     */
    public function setEncounter(\OpenEMR\FHIR\R4\FHIRElement\FHIRReference $encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * getEncounter
     *
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * setReasonReference
     *
     * @param  \OpenEMR\FHIR\R4\FHIRElement\FHIRReference $reasonReference
     * @return $this
     */
    public function setReasonReference(\OpenEMR\FHIR\R4\FHIRElement\FHIRReference $reasonReference)
    {
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * getReasonReference
     *
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

     /**
     * setInsurance
     *
     * @param  \OpenEMR\FHIR\R4\FHIRElement\FHIRReference $insurance
     * @return $this
     */
    public function setInsurance(\OpenEMR\FHIR\R4\FHIRElement\FHIRReference $insurance)
    {
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * getInsurance
     *
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

     /**
     * setSupportingInfo
     *
     * @param  \OpenEMR\FHIR\R4\FHIRElement\FHIRReference $supportingInfo
     * @return $this
     */
    public function setSupportingInfo(\OpenEMR\FHIR\R4\FHIRElement\FHIRReference $supportingInfo)
    {
        $this->supportingInfo = $supportingInfo;
        return $this;
    }

    /**
     * getSupportingInfo
     *
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
    }

     /**
     * setRelevantHistory
     *
     * @param  \OpenEMR\FHIR\R4\FHIRElement\FHIRReference $relevantHistory
     * @return $this
     */
    public function setRelevantHistory(\OpenEMR\FHIR\R4\FHIRElement\FHIRReference $relevantHistory)
    {
        $this->relevantHistory = $relevantHistory;
        return $this;
    }

    /**
     * getRelevantHistory
     *
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getRelevantHistory()
    {
        return $this->relevantHistory;
    }
 
      /**
     * setOccurrenceDateTime
     *
     * @param  \OpenEMR\FHIR\R4\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @return $this
     */

    public function setOccurrenceDateTime(FHIRDateTime $occurrenceDateTime)
    {
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    } 

    /**
     * getOccurrenceDateTime
     *
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }

      /**
     * setOccurrencePeriod
     *
     * @param  \OpenEMR\FHIR\R4\FHIRElement\FHIRDateTime $occurrencePeriod
     * @return $this
     */

     public function setOccurrencePeriod(FHIRDateTime $occurrencePeriod)
     {
         $this->occurrencePeriod = $occurrencePeriod;
         return $this;
     } 
 
     /**
      * getOccurrencePeriod
      *
      * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRPeriod
      */
     public function getOccurrencePeriod()
     {
         return $this->occurrencePeriod;
     }

       /**
     * setOccurrenceTiming
     *
     * @param  \OpenEMR\FHIR\R4\FHIRResource\FHIRTiming $occurrenceTiming
     * @return $this
     */

     public function setOccurrenceTiming(FHIRDateTime $occurrenceTiming)
     {
         $this->occurrenceTiming = $occurrenceTiming;
         return $this;
     } 
 
     /**
      * getOccurrenceTiming
      *
      * @return \OpenEMR\FHIR\R4\FHIRResource\FHIRTiming
      */
     public function getOccurrenceTiming()
     {
         return $this->occurrenceTiming;
     }
    
      /**
     * setAuthoredOn
     *
     * @param  \OpenEMR\FHIR\R4\FHIRElement\FHIRDateTime $authoredOn
     * @return $this
     */

    public function setAuthoredOn(FHIRDateTime $authoredOn)
    {
        $this->authoredOn = $authoredOn;
        return $this;
    } 

    /**
     * getAuthoredOn
     *
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRDateTime
     */
    public function getAuthoredOn()
    {
        return $this->authoredOn;
    }

     /**
     * setRequester
     *
     * @param  \OpenEMR\FHIR\R4\FHIRElement\FHIRReference $requester
     * @return $this
     */
    public function setRequester(\OpenEMR\FHIR\R4\FHIRElement\FHIRReference $requester)
    {
        $this->requester = $requester;
        return $this;
    }

    /**
     * getRequester
     *
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * setPerformer
     *
     * @param  \OpenEMR\FHIR\R4\FHIRElement\FHIRReference $performer
     * @return $this
     */
    public function setPerformer(\OpenEMR\FHIR\R4\FHIRElement\FHIRReference $performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * getPerformer
     *
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }

     /**
     * setNote
     *
     * @param  \OpenEMR\FHIR\R4\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function setNote(\OpenEMR\FHIR\R4\FHIRElement\FHIRAnnotation $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * getNote
     *
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set the status of the request.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRCode $status
     * @return $this
     */
    public function setStatus(FHIRCode $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get the status of the request.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the intent of the request.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRCode $intent
     * @return $this
     */
    public function setIntent(FHIRCode $intent)
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * Get the intent of the request.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRCode
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * Set the priority of the request.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRCode $priority
     * @return $this
     */
    public function setPriority(FHIRCode $priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Get the priority of the request.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRCode
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set the code as a CodeableConcept.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept $codeCodeableConcept
     * @return $this
     */
    public function setCodeCodeableConcept(FHIRCodeableConcept $codeCodeableConcept)
    {
        $this->codeCodeableConcept = $codeCodeableConcept;
        return $this;
    }

    /**
     * Get the code as a CodeableConcept.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getCodeCodeableConcept()
    {
        return $this->codeCodeableConcept;
    }

    /**
     * Set the code as a Reference.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRReference $codeReference
     * @return $this
     */
    public function setCodeReference(FHIRReference $codeReference)
    {
        $this->codeReference = $codeReference;
        return $this;
    }

    /**
     * Get the code as a Reference.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRReference
     */
    public function getCodeReference()
    {
        return $this->codeReference;
    }

    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = 'DeviceRequestResource';
        $json['patient'] = $this->patient;
        $json['identifier'] = $this->identifier;
        $json['instatiatesCanonical'] = $this->instantiatesCanonical;
        $json['instantiatesUri'] = $this->instantiatesUri;
        $json['basedOn'] = $this->basedOn;
        $json['priorRequest'] = $this->priorRequest;
        $json['groupIdentifier'] = $this->groupIdentifier;
        $json['status'] = $this->status;
        $json['intent'] = $this->intent;
        $json['priority'] = $this->priority;
        $json['codeReference'] = $this->codeReference;
        $json['codeCodeableConcept'] = $this->codeCodeableConcept;
        $json['priority'] = $this->priority;
        $json['DeviceRequest.Parameter'] = $this->code;
        $json['DeviceRequest.Parameter'] = $this->valueCodeableConcept;
        $json['DeviceRequest.Parameter'] = $this->valueQuantity;
        $json['DeviceRequest.Parameter'] = $this->valueRange;
        $json['DeviceRequest.Parameter'] = $this->valueBoolean;
        $json['subject'] = $this->subject;
        $json['encounter'] = $this->encounter;
        $json['occurrenceDateTime'] = $this->occurrenceDateTime;
        $json['occurrencePeriod'] = $this->occurrencePeriod;
        $json['occurrenceTiming'] = $this->occurrenceTiming;
        $json['authoredOn'] = $this->authoredOn;
        $json['requester'] = $this->requester;
        $json['performerType'] = $this->performerType;
        $json['performer'] = $this->performer;
        $json['reasonCode'] = $this->reasonCode;
        $json['reasonReference'] = $this->reasonReference;
        $json['insurance'] = $this->insurance;
        $json['supportingInfo'] = $this->supportingInfo;
        $json['note'] = $this->note;
        $json['relevantHistory'] = $this->relevantHistory;


        
        return $json;
    }
}
