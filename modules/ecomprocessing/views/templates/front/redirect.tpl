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

{if $ecomprocessing['redirect']['status'] == 'failure'}

    {capture name=path}{l s='Payment Status'}{/capture}

    <div id="center_column" class="center_column">
        <h1 class="page-heading bottom-indent">
            {l s='Your payment was unsuccessful' mod='ecomprocessing'}
        </h1>

        <div class="row">
            <div class="col-xs-12">
                <p>
                    {l s='Please check your input and try again!' mod='ecomprocessing'}

                    <br /><br />{l s='If the problem persists, you can contact our' mod='ecomprocessing'}
                    <a href="{$ecomprocessing['redirect']['url']['support']}">{l s='customer support' mod='ecomprocessing'}</a>.
                </p>
            </div>
        </div>
    </div>

{/if}

{if $ecomprocessing['redirect']['status'] == 'cancel'}

    {capture name=path}{l s='Payment Status'}{/capture}

    <div id="center_column" class="center_column">
        <h1 class="page-heading bottom-indent">
            {l s='Your payment was successfully cancelled' mod='ecomprocessing'}
        </h1>

        <div class="row">
            <div class="col-xs-12">
                <p>
                    {l s='You have successfully cancelled your order.' mod='ecomprocessing'}

                    <br/><br/>{l s='You can redo your ' mod='ecomprocessing'}
                    <a href="{$ecomprocessing['redirect']['url']['order']}">{l s='order' mod='ecomprocessing'}</a>
                    {l s=' with different details or review your order' mod='ecomprocessing'}
                    <a href="{$ecomprocessing['redirect']['url']['history']}">{l s='history' mod='ecomprocessing'}</a>.
                </p>
            </div>
        </div>
    </div>

{/if}