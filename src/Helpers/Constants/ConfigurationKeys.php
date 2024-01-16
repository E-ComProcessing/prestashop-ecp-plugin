<?php
/**
 * Copyright (C) 2018-2023 E-Comprocessing Ltd.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * @author      E-Comprocessing
 * @copyright   2018-2023 E-Comprocessing Ltd.
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU General Public License, version 2 (GPL-2.0)
 */

namespace Ecomprocessing\Genesis\Helpers\Constants;

if (!defined('_PS_VERSION_')) {
    exit;
}

class ConfigurationKeys
{
    /**
     * Configurable module settings
     */
    const SETTING_ECOMPROCESSING_USERNAME = 'ECOMPROCESSING_USERNAME';
    const SETTING_ECOMPROCESSING_PASSWORD = 'ECOMPROCESSING_PASSWORD';
    const SETTING_ECOMPROCESSING_ENVIRONMENT = 'ECOMPROCESSING_ENVIRONMENT';
    const SETTING_ECOMPROCESSING_CHECKOUT = 'ECOMPROCESSING_CHECKOUT';
    const SETTING_ECOMPROCESSING_CHECKOUT_TRX_TYPES = 'ECOMPROCESSING_CHECKOUT_TRX_TYPES';
    const SETTING_ECOMPROCESSING_ALLOW_PARTIAL_CAPTURE = 'ECOMPROCESSING_ALLOW_PARTIAL_CAPTURE';
    const SETTING_ECOMPROCESSING_ALLOW_PARTIAL_REFUND = 'ECOMPROCESSING_ALLOW_PARTIAL_REFUND';
    const SETTING_ECOMPROCESSING_ALLOW_VOID = 'ECOMPROCESSING_ALLOW_VOID';
    const SETTING_ECOMPROCESSING_ADD_JQUERY_CHECKOUT = 'ECOMPROCESSING_ADD_JQUERY_CHECKOUT';
    const SETTING_ECOMPROCESSING_WPF_TOKENIZATION = 'ECOMPROCESSING_WPF_TOKENIZATION';
    const SETTING_ECOMPROCESSING_CHECKOUT_BANK_CODES = 'ECOMPROCESSING_CHECKOUT_BANK_CODES';
    const SETTING_ECOMPROCESSING_THREEDS_ALLOWED = 'ECOMPROCESSING_THREEDS_ALLOWED';
    const SETTING_ECOMPROCESSING_THREEDS_CHALLENGE_INDICATOR = 'ECOMPROCESSING_THREEDS_CHALLENGE_INDICATOR';
    const SETTING_ECOMPROCESSING_SCA_EXEMPTION = 'ECOMPROCESSING_SCA_EXEMPTION';
    const SETTING_ECOMPROCESSING_SCA_EXEMPTION_AMOUNT = 'ECOMPROCESSING_SCA_EXEMPTION_AMOUNT';
    const SETTING_ECOMPROCESSING_IFRAME_ALLOWED = 'SETTING_ECOMPROCESSING_IFRAME_ALLOWED';
    const SETTING_ECOMPROCESSING_WEB_PAYMENT_FORM_ID = 'ECOMPROCESSING_WEB_PAYMENT_FORM_ID';
}
