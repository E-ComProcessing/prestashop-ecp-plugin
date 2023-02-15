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

    {capture name=path}
        <a href="{$ecomprocessing['checkout']['links']['back']|escape:'htmlall':'UTF-8'}" title="{l s='Go back to the Checkout' mod='ecomprocessing'}">
            {l s='Checkout' mod='ecomprocessing'}
        </a>
        <span class="navigation-pipe">
        {$navigationPipe|escape:'htmlall':'UTF-8'}
    </span>
        {l s='E-Comprocessing Secure Checkout' mod='ecomprocessing'}
    {/capture}

    {include file="$tpl_dir./breadcrumb.tpl"}

    <h2>{l s='Order summary' mod='ecomprocessing'}</h2>

    {assign var='current_step' value='payment'}
    {include file="$tpl_dir./order-steps.tpl"}

    {if $ecomprocessing['checkout']['product_count'] <= 0}
        <p class="warning">{l s='Your shopping cart is empty.' mod='ecomprocessing'}</p>
    {else}
        <style type="text/css">
            #module-ecomprocessing-checkout #center-column {
                width: 737px;
            }
        </style>

        {if $ecomprocessing['checkout']['error']}
            <div class="row row-spacer">
                <div class="alert alert-warning alert-dismissable error-wrapper" style="width:75%;margin:15px auto;">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {$ecomprocessing['checkout']['error']|escape:'htmlall':'UTF-8'}
                </div>
            </div>
        {/if}

        <h3>{l s='E-Comprocessing Secure Checkout' mod='ecomprocessing'}</h3>
        <form action="{$ecomprocessing['checkout']['links']['confirm']|escape:'htmlall':'UTF-8'}" method="POST" name="">
            <input type="hidden" name="checkout" value="confirmed" />
            <input type="hidden" name="submit{$ecomprocessing['name']['module']|escape:'htmlall':'UTF-8'}Checkout" value="true" />

            <p>
                <img src="{$ecomprocessing['path']|escape:'htmlall':'UTF-8'}/views/img/logos/ecomprocessing.png" alt="{l s='E-Comprocessing Checkout' mod='ecomprocessing'}" width="128" style="float:left;margin: 0 10px 5px 0;" />
                {l s='You have chosen to pay via E-Comprocessing Secure Checkout' mod='ecomprocessing'}
            </p>
            <p style="margin-top:20px;">
                {l s='Here is a short summary of your order:' mod='ecomprocessing'}
                <br/><br/>
                - {l s='The total amount of your order is' mod='ecomprocessing'}
                <span id="amount" class="price">{displayPrice price=$ecomprocessing['checkout']['total']}</span>
                {if $use_taxes == 1}
                    {l s='(tax incl.)' mod='ecomprocessing'}
                {/if}
            </p>
            <p>
                {l s='You will be redirected to our E-Comprocessing\'s website, where you can safely enter your payment details and complete this order.' mod='ecomprocessing'}
                <br /><br />
                <b>{l s='Please confirm your order by clicking "I confirm my order".' mod='ecomprocessing'}</b>
            </p>
            <p class="cart_navigation" id="cart_navigation">
                <input type="submit" value="{l s='I confirm my order' mod='ecomprocessing'}" class="exclusive_large" />
                <a href="{$ecomprocessing['checkout']['links']['back']|escape:'htmlall':'UTF-8'}" class="button_large">{l s='Other payment methods' mod='ecomprocessing'}</a>
            </p>
        </form>
    {/if}

{/if}

{if version_compare($ecomprocessing['presta']['version'], '1.6', '>=') && version_compare($ecomprocessing['presta']['version'], '1.7', '<') }

    {capture name=path}{l s='E-Comprocessing Checkout' mod='ecomprocessing'}{/capture}

    <h1 class="page-heading">{l s='Order summary' mod='ecomprocessing'}</h1>

    {assign var='current_step' value='payment'}
    {include file="$tpl_dir./order-steps.tpl"}

    {if isset($nbProducts) && $nbProducts <= 0}
        <p class="alert alert-warning">{l s='Your shopping cart is empty.' mod='ecomprocessing'}</p>
    {else}

    {if $ecomprocessing['checkout']['error']}
        <div class="row row-spacer" style="margin:0;">
            <div class="alert alert-warning alert-dismissable error-wrapper">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {$ecomprocessing['checkout']['error']|escape:'htmlall':'UTF-8'}
            </div>
        </div>
    {/if}

        <form action="{$ecomprocessing['checkout']['links']['confirm']|escape:'htmlall':'UTF-8'}" method="post">
            <input type="hidden" name="checkout" value="confirmed" />
            <input type="hidden" name="submit{$ecomprocessing['name']['module']|escape:'htmlall':'UTF-8'}Checkout" value="true" />

            <div class="box cheque-box">
                <h3 class="page-subheading">{l s='E-Comprocessing Checkout' mod='ecomprocessing'}</h3>
                <p>
                    <strong class="dark">
                        {l s='You have chosen to pay via E-Comprocessing\'s Secure Checkout.' mod='ecomprocessing'}
                        <br/>
                        {l s='Here is a short summary of your order:' mod='ecomprocessing'}
                    </strong>
                </p>
                <p style="margin-top:20px;">
                    - {l s='The total amount of your order comes to:' mod='ecomprocessing'}
                    <span id="amount" class="price">{displayPrice price=$ecomprocessing['checkout']['total']}</span>
                    {if $use_taxes == 1}
                        {l s='(tax incl.)' mod='ecomprocessing'}
                    {/if}
                </p>
                <p>
                    - {l s='You will be redirected to our E-Comprocessing\'s website, where you can safely enter your payment details and complete this order.' mod='ecomprocessing'}
                    <br />
                    - <b>{l s='Please confirm your order by clicking "I confirm my order".' mod='ecomprocessing'}</b>
                </p>
            </div>

            <p class="cart_navigation clearfix" id="cart_navigation">
                <a href="{$ecomprocessing['checkout']['links']['back']|escape:'htmlall':'UTF-8'}" class="button-exclusive btn btn-default">
                    <i class="icon-chevron-left"></i>{l s='Other payment methods' mod='ecomprocessing'}
                </a>
                <button type="submit" class="button btn btn-default button-medium">
                    <span>{l s='I confirm my order' mod='ecomprocessing'}<i class="icon-chevron-right right"></i></span>
                </button>
            </p>
        </form>
    {/if}

{/if}
