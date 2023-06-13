E-Comprocessing Gateway Module for Prestashop
=============================

This is a Payment Module for Prestashop that gives you the ability to process payments through E-Comprocessing's Payment Gateway - Genesis.

Requirements
------------

* Prestashop 1.6.x - 8.0.x (Tested up to __8.0.0__)
* [GenesisPHP v1.21.6](https://github.com/GenesisGateway/genesis_php/releases/tag/1.21.6) - (Integrated in Module)

GenesisPHP Requirements
------------

* PHP version 5.5.9 or newer
* PHP Extensions:
  * [BCMath](https://php.net/bcmath)
  * [CURL](https://php.net/curl) (required, only if you use the curl network interface)
  * [Filter](https://php.net/filter)
  * [Hash](https://php.net/hash)
  * [XMLReader](https://php.net/xmlreader)
  * [XMLWriter](https://php.net/xmlwriter)
  * [JSON](https://www.php.net/manual/en/book.json)
  * [OpenSSL](https://www.php.net/manual/en/book.openssl.php)

Installation (Manual)
------------
* Create a folder, named `ecomprocessing` under `modules` folder of your PrestaShop installation
* Upload the contents of the main folder to the newly created folder
* Login into your ```Prestashop Admin Panel```
* Navigate to ```Modules``` -> ```Payment```
* Locate ```E-Comprocessing Payment Gateway``` in the list and click ```Install```
* Tweak the settings to your liking and click the ```Save``` button when ready
* You can find the new payment methods in the ```Checkout``` section in your Store Front
* Clear the cache via ```Advanced Parameters``` -> ```Performance``` -> ```Clear cache```

Installation (Upload via Admin Panel)
------------
__Recommended if you do not have FTP account to upload the plugin code directly to your Prestashop__

* Download the Source code of the Plugin as zip file
* Decompress the zip archive

**Option 1:**

* Rename the folder to `ecomprocessing`
* Compress `ecomprocessing` folder as `ecomprocessing.zip`

**Option 2: /only on Linux or macOS/**

* Start your favourite shell, navigate to decompressed files and execute `composer pack`

**Common actions:**

* Login into your ```Prestashop Admin Panel```
* Navigate to ```Modules and Services``` in the main menu
* Click the button ```Upload a module``` or ```Add a new module``` (depending on the version of Prestashop) and choose the manually created ```zip``` file.
* If you are using Prestashop 1.7.x, then the plugin will be automatically installed. If you are using an older version of Prestashop, find our ```E-Comprocessing Payment Gateway``` Module below and install it
* After the Module is installed, you could ```Configure``` the newly installed ```E-Comprocessing Payment Gateway``` to your needs and click ```Save``` button when ready
* You can find the new payment methods in the ```Checkout``` section in your Store Front
* Clear the cache via ```Advanced Parameters``` -> ```Performance``` -> ```Clear cache```

Installation (Upload via Admin Panel)
------------

__Note__: If you have payment restrictions in place, you'll have to add the newly installed payment method to the ```Currencies``` / ```Countries``` / ```Groups``` you wish to appear on.

You're now ready to process payments through our gateway.

__Note__: If you have trouble with your credentials or terminal configuration, get in touch with our [support] team

[support]: mailto:tech-support@e-comprocessing.com

Supported Transactions
------------
* ```E-Comprocessing Checkout``` Payment Method
    * __Apple Pay__ 
    * __Argencard__
    * __Aura__
    * __Authorize__
    * __Authorize (3D-Secure)__
    * __Baloto__
    * __Bancomer__
    * __Bancontact__
    * __Banco de Occidente__
    * __Banco do Brasil__
    * __BitPay__
    * __Boleto__
    * __Bradesco__
    * __Cabal__
    * __CashU__
    * __Cencosud__
    * __Davivienda__
    * __Efecty__
    * __Elo__
    * __eps__
    * __eZeeWallet__
    * __Fashioncheque__
    * __GiroPay__
    * __Google Pay__
    * __iDeal__
    * __iDebit__
    * __InstaDebit__
    * __InstantTransfer__
    * __InitRecurringSale__
    * __InitRecurringSale (3D-Secure)__
    * __Intersolve__
    * __Itau__
    * __Klarna__
    * __Multibanco__
    * __MyBank__
    * __Naranja__
    * __Nativa__
    * __Neosurf__
    * __Neteller__
    * __Online Banking__
      * __Interac Combined Pay-in (CPI)__ 
      * __Bancontact (BTC)__ 
    * __OXXO__
    * __P24__
    * __Pago Facil__
    * __PayPal__
    * __PaySafeCard__
    * __PayU__
    * __Pix__
    * __POLi__
    * __Post Finance__
    * __PPRO__
        * __eps__
        * __GiroPay__
        * __Ideal__
        * __Przelewy24__
        * __SafetyPay__
        * __TrustPay__
        * __BCMC__
        * __MyBank__
    * __PSE__
    * __RapiPago__
    * __Redpagos__
    * __SafetyPay__
    * __Sale__
    * __Sale (3D-Secure)__
    * __Santander__
    * __Sepa Direct Debit__
    * __SOFORT__
    * __Tarjeta Shopping__
    * __TCS__
    * __Trustly__
    * __TrustPay__
    * __UPI__
    * __WebMoney__
    * __WebPay__
    * __WeChat__
