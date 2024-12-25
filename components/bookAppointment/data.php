<?php


    $bookAppointmentForm = [
        'title' => 'BOOK ',
        'titleSpan' => 'APPOINTMENT',
        'formRow1' => [
            'formGroup1' => [
                'label' => 'Patient Name ',
                'labelFor' => 'inputPatientName',
                'inputName' => 'patientName',
                'inputType' => 'text',
                'inputClass' => 'form-control',
                'inputId' => 'inputPatientName',
                'inputPlaceholder' => 'John Smith',
            ],
            'formGroup2' => [
                'label' => "Doctor's Name",
                'labelFor' => 'inputDoctorName',
                'selectName' => 'doctorName',
                'selectClass' => 'form-control wide',
                'selectId' => 'inputDoctorName',
                'selectOptions' => [
                    'option1' => [
                        'optionValue' => 'Je Ga',
                        'optionTitle' => 'Jennifer Garcia'
                    ],
                    'option2' => [
                        'optionValue' => 'Li Wi',
                        'optionTitle' => 'Linda Williams'
                    ],
                    'option3' => [
                        'optionValue' => 'Je Mi',
                        'optionTitle' => 'Jennifer Miller'
                    ],
                    'option4' => [
                        'optionValue' => 'Li Ro',
                        'optionTitle' => 'Linda Rodriguez'
                    ],
                    'option5' => [
                        'optionValue' => 'Ma Jo',
                        'optionTitle' => 'Mary Jones'
                    ],
                    'option6' => [
                        'optionValue' => 'Ma Ga',
                        'optionTitle' => 'Mary Garcia'
                    ],
                    'option7' => [
                        'optionValue' => 'Jo Mi',
                        'optionTitle' => 'John Miller'
                    ],
                    'option8' => [
                        'optionValue' => 'Ja Ro',
                        'optionTitle' => 'James Rodriguez'
                    ],
                    'option9' => [
                        'optionValue' => 'Wi Jo',
                        'optionTitle' => 'William Johnson'
                    ],
                    'option10' => [
                        'optionValue' => 'Mi Da',
                        'optionTitle' => 'Michael Davis'
                    ]
                ]
            ],
            'formGroup3' => [
                'label' => "Department's Name",
                'labelFor' => 'inputDepartmentName',
                'selectName' => 'departmentName',
                'selectClass' => 'form-control wide',
                'selectId' => 'inputDepartmentName',
                'selectOptions' => [
                    'option1' => [
                        'optionValue' => 'On',
                        'optionTitle' => 'Oncology'
                    ],
                    'option2' => [
                        'optionValue' => 'Ca',
                        'optionTitle' => 'Cardiology'
                    ],
                    'option3' => [
                        'optionValue' => 'De',
                        'optionTitle' => 'Dermatology'
                    ],
                    'option4' => [
                        'optionValue' => 'Pe',
                        'optionTitle' => 'Pediatrics'
                    ]
                ]
            ]
        ],
        'formRow2' => [
            'formGroup1' => [
                'label' => 'Phone Number',
                'labelFor' => 'inputPhone',
                'inputName' => 'phoneNumber',
                'inputType' => 'number',
                'inputClass' => 'form-control',
                'inputId' => 'inputPhone',
                'inputPlaceholder' => 'XXXXXXXXXX'
            ],
            'formGroup2' => [
                'label' => 'Symptoms',
                'labelFor' => 'inputSymptoms',
                'inputName' => 'symptoms',
                'inputType' => 'text',
                'inputClass' => 'form-control',
                'inputId' => 'inputSymptoms',
                'inputPlaceholder' => 'Describe your symptoms'
            ],
            'formGroup3' => [
                'label' => 'Choose Date ',
                'labelFor' => 'inputDate',
                'inputGroupClass' => 'input-group date',
                'inputGroupId' => 'inputDate',
                'inputDateFormat' => 'mm-dd-yyyy',
                'inputGroup' => [
                    'inputName' => 'date',
                    'inputType' => 'text',
                    'inputClass' => 'form-control',
                    'inputSpanClass' => "input-group-addon date_icon",
                    'inputSpan' => [
                        'iconClass' => "fa fa-calendar",
                        'aria-hidden' => 'true'
                    ]
                ]
            ]
        ],
        'buttonBoxClass' => 'btn-box',
        'buttonTitle' => 'Submit Now',
        'buttonType' => 'submit',
        'buttonClass' => 'btn '
    ];    


?>