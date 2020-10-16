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

{if version_compare($ecomprocessing['presta']['version'], '1.5', '>=') && version_compare($ecomprocessing['presta']['version'], '1.6', '<') }
    <div class="row" class="payment-method-{$ecomprocessing['name']['module']}">
        {if $ecomprocessing['payment']['methods']['checkout']}
            <div id="payment-method-{$ecomprocessing['name']['module']}-checkout" class="payment_module">
                <a class="payment_module_link" href="{$ecomprocessing['payment']['urls']['checkout']}">
                    <img src="{$ecomprocessing['path']}/assets/img/logos/ecomprocessing_checkout.png"
                         alt="{l s="E-Comprocessing Logo" mod="ecomprocessing"}" style="width:224px;"/>
                    {l s="Pay safely with E-Comprocessing" mod="ecomprocessing"}
                </a>
            </div>
        {/if}
    </div>

    <style type="text/css">
        .payment-method-{$ecomprocessing['name']['module']} {
            margin-bottom: 16px;
        }
    </style>
{/if}

{if version_compare($ecomprocessing['presta']['version'], '1.6', '>=') && version_compare($ecomprocessing['presta']['version'], '1.7', '<') }
    <div class="payment-method-{$ecomprocessing['name']['module']}">
        {if $ecomprocessing['payment']['methods']['checkout']}
            <div id="payment-method-{$ecomprocessing['name']['module']}-checkout">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <p class="payment_module">
                            <a class="payment_module_link" href="{$ecomprocessing['payment']['urls']['checkout']}">
                                <img src="{$ecomprocessing['path']}/assets/img/logos/ecomprocessing_checkout.png"
                                     alt="{l s="E-Comprocessing Logo" mod="ecomprocessing"}"/>
                                <span>{l s="Pay safely with E-Comprocessing" mod="ecomprocessing"}</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        {/if}
    </div>
    <style type="text/css">
        .payment-method-{$ecomprocessing['name']['module']} {
            margin-bottom: 16px;
        }

        #payment-method-{$ecomprocessing['name']['module']}-checkout a.payment_module_link {
            padding-left: 33px;
        }

        #payment-method-{$ecomprocessing['name']['module']}-checkout a.payment_module_link span {
            padding-left: 8px;
        }

        #payment-method-{$ecomprocessing['name']['module']}-checkout a.payment_module_link::after {
            line-height: 0;
            top: 50% !important;
        }
    </style>
{/if}

{if version_compare($ecomprocessing['presta']['version'], '1.7', '>=') && version_compare($ecomprocessing['presta']['version'], '1.8', '<') }
    <div class="payment-method-{$ecomprocessing['name']['module']}">
        {if $ecomprocessing['payment']['methods']['checkout']}
            {if $ecomprocessing['payment']['errors']['checkout']}
                <div class="row row-spacer" style="margin-bottom: 10pt;">
                    <div class="alert alert-warning alert-dismissable error-wrapper">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {$ecomprocessing['payment']['errors']['checkout']|escape:html:'UTF-8'}
                    </div>
                </div>
            {/if}

            <div id="payment-method-{$ecomprocessing['name']['module']}-checkout">
                <div class="payment-method-container">
                    <div class="row">
                        <img src="{$ecomprocessing['path']}/assets/img/logos/ecomprocessing_checkout.png"
                             alt="{l s="E-Comprocessing Logo" mod="ecomprocessing"}"/>
                        <span>{l s="Pay safely with E-Comprocessing" mod="ecomprocessing"}</span>
                    </div>
                    <div class="row">
                        <p>
                            {l s="You will be redirected to E-Comprocessing, where you can safely enter your payment details and complete this order." mod='ecomprocessing'}
                        </p>
                    </div>
                </div>
            </div>
        {/if}
    </div>
    {include file='module:ecomprocessing/views/templates/hook/payment/footer.tpl'}
{/if}

<style type="text/css">
    #payment-method-{$ecomprocessing['name']['module']}-checkout {
        position: relative;
    }

    #payment-method-{$ecomprocessing['name']['module']}-checkout.payment_module {
        padding-bottom: 20px;
    }

    #payment-method-{$ecomprocessing['name']['module']}-checkout .center-wrapper {
        position: relative;
        display: block;
        top: 50%;
        margin-top: -1000px;
        height: 2000px;
        text-align: center;
        line-height: 2000px;
    }

    #payment-method-{$ecomprocessing['name']['module']}-checkout .center-wrapper .wrap {
        line-height: 0;
    }

    #payment-method-{$ecomprocessing['name']['module']}-checkout .center-wrapper .wrap img {
        width: 85%;
        max-width: 350px;
        vertical-align: middle;
    }

    #payment-method-{$ecomprocessing['name']['module']}-checkout a.payment_module_link {
        line-height: 50px;
    }

    #payment-method-{$ecomprocessing['name']['module']}-checkout a.payment_module_link:after {
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
