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

<div class="payment-method-{$ecomprocessing['name']['module']|escape:'htmlall':'UTF-8'}">
    {if $ecomprocessing['payment']['methods']['checkout']}
        {if $ecomprocessing['payment']['errors']['checkout']}
            <div class="row row-spacer" style="margin-bottom: 10pt;">
                <div class="alert alert-warning alert-dismissable error-wrapper">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {$ecomprocessing['payment']['errors']['checkout']|escape:'htmlall':'UTF-8'}
                </div>
            </div>
        {/if}

        <div id="payment-method-{$ecomprocessing['name']['module']|escape:'htmlall':'UTF-8'}-checkout">
            <div class="payment-method-container">
                <div class="row">
                    <img src="{$ecomprocessing['path']|escape:'htmlall':'UTF-8'}/views/img/logos/ecomprocessing_checkout.png"
                         alt="{l s='ecomprocessing Logo' mod='ecomprocessing'}"/>
                    <span>{l s='Pay safely with E-Comprocessing' mod='ecomprocessing'}</span>
                </div>
                <div class="row">
                    <p>
                        {l s='You will be redirected to E-Comprocessing, where you can safely enter your payment details and complete this order.' mod='ecomprocessing'}
                    </p>
                </div>
            </div>
        </div>
    {/if}
</div>
{include file='module:ecomprocessing/views/templates/hook/payment/footer.tpl'}

<style>
    #payment-method-{$ecomprocessing['name']['module']|escape:'htmlall':'UTF-8'}-checkout {
        position: relative;
    }

    #payment-method-{$ecomprocessing['name']['module']|escape:'htmlall':'UTF-8'}-checkout.payment_module {
        padding-bottom: 20px;
    }

    #payment-method-{$ecomprocessing['name']['module']|escape:'htmlall':'UTF-8'}-checkout .center-wrapper {
        position: relative;
        display: block;
        top: 50%;
        margin-top: -1000px;
        height: 2000px;
        text-align: center;
        line-height: 2000px;
    }

    #payment-method-{$ecomprocessing['name']['module']|escape:'htmlall':'UTF-8'}-checkout .center-wrapper .wrap {
        line-height: 0;
    }

    #payment-method-{$ecomprocessing['name']['module']|escape:'htmlall':'UTF-8'}-checkout .center-wrapper .wrap img {
        width: 85%;
        max-width: 350px;
        vertical-align: middle;
    }

    #payment-method-{$ecomprocessing['name']['module']|escape:'htmlall':'UTF-8'}-checkout a.payment_module_link {
        line-height: 50px;
    }

    #payment-method-{$ecomprocessing['name']['module']|escape:'htmlall':'UTF-8'}-checkout a.payment_module_link:after {
        display: block;
        content: "\f054";
        position: absolute;
        right: 15px;
        top: 25%;
        margin-top: 0;
        font-family: 'FontAwesome', sans-serif;
        font-size: 25px;
        height: 22px;
        width: 14px;
        color: #777777;
    }
</style>
