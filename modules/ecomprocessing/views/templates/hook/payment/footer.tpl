{*
 * Copyright (C) 2018 E-Comprocessing Ltd.
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
 * @copyright   2018 E-Comprocessing Ltd.
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU General Public License, version 2 (GPL-2.0)
 *}

{if version_compare($ecomprocessing['presta']['version'], '1.7', '>=')}
    <script type="text/javascript">
        {if $ecomprocessing['payment']['option']['selected_id'] != ''}
            $(document).ready(function() {
                setTimeout(function() {
                    var paymentOptionAdditionalInfoContainer = $('#{$ecomprocessing['payment']['option']['selected_id']}-additional-information');
                    if (!paymentOptionAdditionalInfoContainer.is(':visible')) {
                        paymentOptionAdditionalInfoContainer.slideDown('slow');
                    }
                }, 3000);
            });
        {/if}
        function doBeforeSubmitEComprocessingCheckoutPaymentForm(sender) {
            var submitBtnIdPrefix = 'pay-with-';
            var submitBtnId = $(sender).find('button[type="submit"]').attr('id');
            var paymentOptionId = submitBtnId.substr(submitBtnId.indexOf(submitBtnIdPrefix) + submitBtnIdPrefix.length);
            $('<input>').attr(
                {
                    type: 'hidden',
                    name: 'select_payment_option',
                    value: paymentOptionId
                }
            ).appendTo(sender);

            return true;
        }
        function doBeforeSubmitEComprocessingDirectPaymentForm(sender) {
            doBeforeSubmitEComprocessingCheckoutPaymentForm(sender);

            $('#payment-method-ecomprocessing-direct').find('form.payment-form').find('input').each(function(index) {
                $('<input>').attr(
                    {
                        type: 'hidden',
                        name: $(this).attr('name'),
                        value: $(this).val()
                    }
                ).appendTo(sender);
            });
            return true;
        }
    </script>

    <style type="text/css">
        .payment-method-{$ecomprocessing['name']['module']} {
            margin-bottom: 16px;
        }

        .payment-method-{$ecomprocessing['name']['module']} div.alert {
            width: 95%;
            margin: 0 auto;
        }
    </style>

{/if}