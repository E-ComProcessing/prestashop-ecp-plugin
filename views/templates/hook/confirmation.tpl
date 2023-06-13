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

<style type="text/css">
    #center_column a {
        text-decoration:underline;
    }
</style>

{if $ecomprocessing['confirmation']['status'] == 'success'}
    <p>
        {l s='Your payment on' mod='ecomprocessing'} <span class="bold">{$ecomprocessing['name']['store']|escape:'htmlall':'UTF-8'}</span> {l s='is complete.' mod='ecomprocessing'}
        <br /><br /><span class="bold">{l s='Your order will be sent very soon.' mod='ecomprocessing'}</span>
        <br /><br />{l s='For any questions or for further information, please contact our' mod='ecomprocessing'} <a href="{$link->getPageLink('contact', true)|escape:'htmlall':'UTF-8'}" target="_blank">{l s='customer support' mod='ecomprocessing'}</a>.
    </p>
{elseif $ecomprocessing['confirmation']['status'] == 'pending'}
    <p>
        {l s='Your payment on' mod='ecomprocessing'} <span class="bold">{$ecomprocessing['name']['store']|escape:'htmlall':'UTF-8'}</span> {l s='is pending processing.' mod='ecomprocessing'}
        <br /><br /><span class="bold">{l s='Your order will be sent as soon as we cler your payment.' mod='ecomprocessing'}</span>
        <br /><br />{l s='For any questions or for further information, please contact our' mod='ecomprocessing'} <a href="{$link->getPageLink('contact', true)|escape:'htmlall':'UTF-8'}" target="_blank">{l s='customer support' mod='ecomprocessing'}</a>.
    </p>
{else}
    <p>
        {l s='Your payment on' mod='ecomprocessing'} <span class="bold">{$ecomprocessing['name']['store']|escape:'htmlall':'UTF-8'}</span> {l s='was unsuccessful.' mod='ecomprocessing'}
        <br /><br /><span class="bold">{l s='Please check your input and try again or contact us, if the problem persists.' mod='ecomprocessing'}</span>
        <br /><br />{l s='For any questions or for further information, please contact our' mod='ecomprocessing'} <a href="{$link->getPageLink('contact', true)|escape:'htmlall':'UTF-8'}" target="_blank">{l s='customer support' mod='ecomprocessing'}</a>.
    </p>
{/if}
