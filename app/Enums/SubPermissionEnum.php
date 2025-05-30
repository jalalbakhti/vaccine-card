<?php

namespace App\Enums;

enum SubPermissionEnum: int
{
    // User
    // epi
    case user_information = 1;
    case user_password = 2;
    case user_permission = 3;
    case user_profile_activity = 4;
    case user_issued_certificate = 5;
    case user_issued_certificate_payment = 6;
    // finance
    public const USERS = [
        // both
        1 => "account_information",
        2 => "update_account_password",
        3 => "permissions",
        4 => "profile_activity",
        // epi
        5 => "issued_certificate",
        // finance
        6 => "issued_certificate_payment",
    ];
        // Vaccine Certificate
    case vaccine_certificate_person_info = 11;
    case vaccine_certificate_vaccination_info = 12;
    case vaccine_certificate_card_issuing = 13;
    public const VACCINE_CERTIFICATE = [
        11 => "person_info",
        12 => "vaccination_info",
        13 => "card_issuing",
    ];
        // configurations
    case configuration_job = 21;
    case configuration_destination = 22;
    case configuration_vaccine_type = 23;
    case configuration_vaccine_center = 24;
    public const CONFIGURATIONS = [
        21 => "job",
        22 => "destination",
        23 => "vaccine_type",
        24 => "vaccine_center",
    ];
        // Certificate Payment
    case certificate_payment_info = 31;
    public const CERTIFICATE_PAYMENT = [
        31 => "payment_info",
    ];
        // Activity
    case user_activity = 41;
    case self_activity = 42;
    public const ACTIVITY = [
        41 => "user_activity",
        42 => "self_activity",
    ];
}
