{**
 * Copyright (C) 2015-2024 E-Comprocessing Ltd.
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
 * @copyright   2015-2024 E-Comprocessing Ltd.
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU General Public License, version 2 (GPL-2.0)
 *}
{if $ecomprocessing['transactions']['tree'] && version_compare($ecomprocessing['presta']['version'], '1.7.2', '>=')}

    <section class="box">
        <h3>
            <img src="{$ecomprocessing['presta']['url']|escape:'htmlall':'UTF-8'}modules/{$ecomprocessing['name']['module']|escape:'htmlall':'UTF-8'}/logo.png" alt="" style="width:16px;" />
            <span>{l s='E-Comprocessing Transactions' mod='ecomprocessing'}</span>
        </h3>

        <table class="table table-hover tree">
            <thead class="thead-default">
            <tr>
                <th>{l s='Id'       mod='ecomprocessing'}</th>
                <th>{l s='Type'     mod='ecomprocessing'}</th>
                <th>{l s='Date'     mod='ecomprocessing'}</th>
                <th>{l s='Amount'   mod='ecomprocessing'}</th>
                <th>{l s='Status'   mod='ecomprocessing'}</th>
                <th class="slim-message">{l s='Message'  mod='ecomprocessing'}</th>
            </tr>
            </thead>
            <tbody>
            {foreach from=$ecomprocessing['transactions']['tree'] item=transaction}
                <tr class="treegrid-{$transaction['id_unique']|escape:'htmlall':'UTF-8'} {if $transaction['id_parent']}treegrid-parent-{$transaction['id_parent']|escape:'htmlall':'UTF-8'}{/if}">
                    <td class="text-left">
                        {$transaction['id_unique']|escape:'htmlall':'UTF-8'}
                    </td>
                    <td class="text-left">
                        {$transaction['type']|escape:'htmlall':'UTF-8'}
                    </td>
                    <td class="text-left">
                        {$transaction['date_add']|escape:'htmlall':'UTF-8'}
                    </td>
                    <td class="text-right">
                        {$transaction['amount']|escape:'htmlall':'UTF-8'}
                    </td>
                    <td class="text-left">
                        {$transaction['status']|escape:'htmlall':'UTF-8'}
                    </td>
                    <td class="text-left">
                        {$transaction['message']|escape:'htmlall':'UTF-8'}
                    </td>
                </tr>
            {/foreach}
            </tbody>
        </table>
    </section>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.tree').treegrid({
                expanderExpandedClass:  'fa fa-chevron-circle-down',
                expanderCollapsedClass: 'fa fa-chevron-circle-right'
            });
        });
    </script>

    <style type="text/css">
        .bootstrap .tooltip-inner {
            padding: 5px 20px;
        }
        .slim-message {
            width:15%;
        }
    </style>

{/if}
