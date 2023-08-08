<?php
/**
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @author      emerchantpay
 * @copyright   Copyright (C) 2015-2023 emerchantpay Ltd.
 * @license     http://opensource.org/licenses/MIT The MIT License
 */

namespace Genesis\API\Constants\Transaction\Parameters\OnlineBanking;

use Genesis\Utils\Common;

/**
 * Class PayoutBankParameters
 * @package Genesis\API\Constants\Transaction\Parameters\OnlineBanking
 */
class PayoutBankParameters
{
    /**
     * Available Currencies and Bank Names for OnlineBanking\Payout
     *
     * @var array $names
     */
    private static $names = [
        'CNY' => [
            '中国银行', '中国交通银行', '中信银行', '上海浦发银行', '中国农业银行', '中国渤海银行', '上海银行', '中国工商银行',
            '东亚银行', '上海农商银行', '中国建设银行', '中国兴业银行', '平安银行', '广发银行', '北京农商银行', '宁波银行',
            '光大银行', '北京银行', '大连银行', '尧都农商银行', '徽商银行', '华夏银行', '南京银行', '广州银行', '浙商银行',
            '招商银行', '民生银行', '汉口银行', '晋商银行', '杭州银行', '深圳发展银行', '江苏银行', '成都银行', '珠海农商银行',
            '顺德农村商业银行', '中国邮政银行', '银联通道'
        ],
        'MYR' => [
            '423', 'CIMB Clicks Bank', 'Hong Leong Bank', 'May Bank', 'Public Bank', 'RHB Bank'
        ],
        'THB' => [
            'Bangkok Bank', 'Kasikorn Bank', 'Krungsri (Bank of Ayudhya Public Company Limited)', 'Krung Thai Bank',
            'Siam Commercial Bank', 'UOBT'
        ],
        'IDR' => [
            'Bank Central Asia', 'Bank Rakyat Indonesia', 'Bank Negara Indonesia', 'BTN Bank', 'CIMB Clicks Indonesia',
            'Danamon Bank', 'Mandiri Bank', 'Permata Bank'
        ],
        'INR' => [
            'ABHYUDAYA COOP BANK', 'THE ROYAL BANK OF SCOTLAND', 'ABU DHABI COMMERCIAL BANK',
            'THE AKOLA DISTRICT CENTRAL COOPERATIVE BANK', 'AIRTEL PAYMENTS BANK LIMITED',
            'AKOLA JANATA COMMERCIAL COOPERATIVE BANK', 'ALLAHABAD BANK', 'THE AHMEDABAD MERC COOP BANK',
            'ANDHRA BANK', 'AUSTRALIA & NEW ZEALAND BANK', 'THE ANDHRA PRADESH STATE COOP BANK',
            'ANDHRA PRAGATI GRAMEEN BANK', 'THE A.P. MAHESH CO-OP URBAN BANK', 'APNA SAHAKARI BANK LTD',
            'ALMORA URBAN CO-OPERATIVE BANK LTD.', 'BASSEIN CATHOLIC CO-OP BANK', 'BANK OF BARODA', 'BARCLAYS BANK',
            'BANK OF BAHREIN & KUWAIT', 'THE BHARAT COOPERATIVE BANK', 'BANK OF CEYLON', 'BANDHAN BANK LIMITED',
            'DENA BANK', 'BANK OF INDIA', 'BHARATIYA MAHILA BANK LIMITED', 'B N PARIBAS BANK', 'BANK OF AMERICA',
            'BANK OF TOKYO-MITSUBISHI', 'CENTRAL BANK OF INDIA', 'CITIZEN CREDIT COOP BANK', 'JP MORGAN CHASE BANK',
            'CITI BANK', 'CITY UNION BANK', 'CAPITAL LOCAL AREA BANK LTD.', 'CANARA BANK', 'CORPORATION BANK',
            'THE COSMOS CO-OP. BANK', 'CREDIT SUISSE AG?', 'CREDIT AGRICOLE CORP N INVSMNT BK',
            'CHHATRAPATI RAJARSHISHAHU COOP BANK', 'CATHOLIC SYRIAN BANK', 'COMMONWEALTH BK OF AUSTRALIA',
            'CHINATRUST COMMERCIAL BANK', 'DEVELOPMENT BANK OF SINGAPORE', 'DEVELOPMENT CREDIT BANK',
            'DEOGIRI NAGARI SAHAKARI BANK LTD. AURANGABAD', 'DEUTSCHE BANK', 'DICGC',
            'THE DELHI STATE COOPERATIVE BANK LIMITED', 'DHANALAXMI BANK', 'DOMBIVLI NAGARI SAHAKARI BANK LTD',
            'DOHA BANK QSC', 'EXPORT IMPORT BANK OF INDIA', 'EQUITAS SMALL FINANCE BANK LIMITED', 'THE FEDERAL BANK',
            'FIRSTRAND BANK', 'THE GREATER BOMBAY CO-OP. BANK LTD',
            'THE GADCHIROLI DISTRICT CENTRAL COOPERATIVE BANK LIMITED', 'GURGAON GRAMIN BANK LTD.',
            'THE GUJARAT STATE CO-OPERATIVE BANK', 'THE HASTI COOP BANK LTD', 'HDFC BANK LTD.',
            'HIMACHAL PRADESH STATE COOPERATIVE BANK LTD', 'HONG KONG & SHANGHAI BANK', 'Woori',
            'PT BANK MAYBANK INDONESIA TBK', 'IDBI BANK', 'INDUSTRIAL BANK OF KOREA',
            'INDUSTRIAL AND COMMERCIAL BANK OF CHINA LIMITED', 'ICICI BANK LTD.', 'IDFC BANK LIMITED',
            'INDIAN BANK', 'IDUKKI DISTRICT CO OPERATIVE BANK LTD', 'INDUS-IND BANK', 'INDIAN OVERSEAS BANK',
            'THE JAMMU & KASHMIR BANK', 'JANSEVA SHAHKARI BANK LTD. PUNE', 'JANASEVA SAHAKARI BANK BORIVLI LIMITED',
            'JALGAON JANATA SAHAKARI', 'THE JALGAON PEOPELS COOPERATIVE BANK LIMITED', 'JANKALYAN SHAKARI BANK',
            'JANATA SAHAKARI BANK LTD (PUNE)', 'THE KANGRA CENTRAL COOPERATIVE BANK', 'KALLAPPANNA AWADE ICH JANATA S',
            'THE KANGRA COOPERATIVE BANK LTD', 'KARNATAKA BANK', 'KAPOLE BANK', 'THE KALUPUR COMM COOP BANK',
            'THE KALYAN JANATA SAHAKARI BANK', 'KOTAK MAHINDRA BANK', 'KERALA GRAMIN BANK',
            'THE KURMANCHAL NAGAR SAHAKARI BANK LIMITED', 'THE KARNATAKA STATE COOP APEX BANK', 'KEB Hana Bank',
            'THE KARAD URBAN COOP BANK LTD', 'KARUR VYSYA BANK', 'KARNATAKA GRAMIN VIKAS BANK',
            'THE LAKSHMI VILAS BANK', 'BANK OF MAHARASHTRA', 'Maharashtra Gramin Bank', 'MAHANAGAR COOP BANK',
            'MUMBAI DISTRICT CENTRAL CO-OP BANK', 'MIZUHO CORPORATE BANK LTD', 'Maharashtra State Cooperative Bank',
            'MASHREQ BANK', 'THE MEHSANA URBAN COOPERATIVE BANK', 'THE MUNICIPAL CO OPERATIVE BANK LTD',
            'NATIONAL AUSTRALIA BANK LIMITED', 'NATIONAL BANK OF ABU DHABI PJSC', 'NAGPUR NAGRIK (NNSB LTD*)',
            'NEW INDIA CO-OPERATIVE BANK', 'NKGSB BANK', 'THE NASIK MERCHANTS CO-OP BANK LTD.',
            'NORTH MALBAR GRAMIN BANK', 'NUTAN NAGARIK SAHAKARI BANK', 'THE BANK OF NOVA SCOTIA',
            'THE NAINITAL BANK LTD', 'NAGAR URBAN CO OPERATIVE BANK', 'OMAN INTERNATIONAL BANK',
            'ORIENTAL BANK OF COMMERCE', 'PARSIK JANATA SAHAKARI BANK', 'PRAGATHI KRISHNA GRAMIN BANK',
            'PUNJAB AND MAHARASHTRA CO-OP BANK', 'PRIME CO OPERATIVE BANK LTD', 'PRATHAMA BANK', 'PUNJAB AND SIND BANK',
            'THE PANDHARPUR URBAN CO OP. BANK LTD. PANDHARPUR', 'PUNJAB NATIONAL BANK', 'RABOBANK INTERNATIONAL (CCRB)',
            'THE RATNAKAR BANK', 'RESERVE BANK OF INDIA', 'RAJKOT NAGARIK SAHAKARI BANK LTD',
            'RAJGURUNAGAR SAHAKARI BANK LIMITED', 'THE RAJASTHAN STATE CO-OP BANK', 'SBERBANK',
            'SAHEBRAO DESHMUKH COOPERATIVE BANK LIMITED', 'STATE BANK OF BIKANER AND JAIPUR', 'STATE BANK OF HYDERABAD',
            'STATE BANK OF INDIA', 'STATE BANK OF MYSORE', 'SAMARTH SAHAKARI BANK LTD', 'STATE BANK OF TRAVANCORE',
            'STANDARD CHARTERED BANK', 'THE SURAT DISTRICT CO-OP BAN', 'SHINHAN BANK', 'SHIKSHAK SAHAKARI BANK LIMITED',
            'SOUTH INDIAN BANK', 'SOLAPUR JANATA SAHAKARI BANK LIMITED', 'SUMITOMO MITSUI BANKING CORPORATION',
            'SHIVALIK MERCANTILE CO OPERATIVE BANK LTD', 'SOCIETE GENERALE', 'THE SURAT PEOPLE?S CO-OP BANK',
            'THE SARASWAT CO-OPERATIVE BANK', 'STATE BANK OF PATIALA', 'STATE BANK OF MAURITIUS',
            'SURAT NATIONAL COOPERATIVE BANK LIMITED', 'THE SUTEX COOPERATIVE BANK',
            'THE SEVA VIKAS COOPERATIVE BANK LIMITED', 'THE SHAMRAO VITHAL COOP BANK', 'SYNDICATE BANK',
            'THANE BHARAT SAHAKARI BANK LTD', 'THE THANE DISTRICT CENTRAL COOPERATIVE BANK LIMITED',
            'TUMKUR GRAIN MERCHANTS CO-OP BANK', 'THE THANE JANATA SAHAKARI BANK', 'TAMILNADU MERC. BANK',
            'THE TAMILDADU STATE APEX COOP BANK', 'UNION BANK OF INDIA', 'UBS AG', 'UCO BANK',
            'UNITED OVERSEAS BANK LIMITED', 'UNITED BANK OF INDIA', 'AXIS BANK', 'THE VARACHHA CO-OP. BANK LTD.',
            'VIJAYA BANK', 'THE VISHWESHWAR SAHAKARI BANK LTD', 'VASAI VIKAS SAHAKARI BANK', 'ING VYSYA BANK',
            'THE WEST BENGAL STATE CO-OP BANK', 'WESTPAC BANKING CORPORATION', 'YES BANK',
            'THE ZOROASTRIAN COOPERATIVE BANK LIMITED', 'ZILA SAHAKRI BANK LIMITED GHAZIABAD',
            'Paytm Payments Bank Ltd.'
        ],
        'ARS' => [
            'CVU Account', 'Banco de Galicia Y Buenos Aires', 'Banco de La Nacion Argentina',
            'Banco de La Provincia de Buenos Aires', 'Industrial and Commercial Bank of China (ICBC) Argentina',
            'BBVA', 'Banco de La Provincia de Cordoba', 'Banco Supervielle S.A.', 'Banco de La Ciudad de Buenos Aires',
            'Banco Patagonia Sudameris', 'Banco Hipotecario', 'Banco de San Juan', 'Banco Municipal de Rosario',
            'Banco Santander', 'Banco Del Chubut', 'Banco de Santa Cruz', 'Banco de La Pampa Sociedad de Economia M',
            'Banco de Corrientes', 'Banco Provincia Del Neuquen', 'Brubank S.A.U.', 'Banco B. I. Creditanstalt',
            'HSBC Bank Argentina', 'J P Morgan Chase Bank Sucursal Buenos Aires', 'Banco Credicoop Coop. L',
            'Banco de Valores', 'Banco Roela', 'Banco Mariva', 'Banco Itau', 'Bank Of America, National Associa',
            'Bnp Paribas', 'Banco Provincia de Tierra Del Fuego', 'Banco de La Republica Oriental Del Uruguay',
            'Banco Saenz', 'Banco Meridian', 'Banco Macro', 'Banco Comafi', 'Banco de Inversion Y Comercio Exterior',
            'Banco Piano', 'Banco Julio', 'Nuevo Banco de La Rioja', 'Banco Del Sol', 'Nuevo Banco Del Chaco',
            'BANCO VOII S.A.', 'Banco de Formosa', 'Banco CMF', 'Banco de Santiago Del Estero',
            'Nuevo Banco Industrial de Azul', 'Deutsche Bank', 'Nuevo Banco de Santa Fe', 'Banco Cetelem Argentina',
            'Banco de Servicios Financieros', 'Banco Cofidis', 'Banco Bradesco Argentina',
            'Banco de Servicios Y Transacciones', 'RCI Banque Argentina', 'Bacs Banco de Credito Y Securitizacion',
            'Banco Mas Ventas', 'Wilobank S.A.', 'Nuevo Banco Bisel', 'Banco Columbia', 'Banco Bica S.A.',
            'Banco Coinag S.A.', 'Banco de Comercio S.A.', 'Banco Sucredito Regional S.A.U.', 'Banco Dino S.A.',
            'Bank of Chine Limited Sucursal Buenos Aires'
        ],
        'BRL' => [
            'BANCO DO BRASIL S.A.', 'BANCO DA AMAZONIA S.A.', 'BANCO DO NORDESTE DO BRASIL S.A.',
            'BANCO NACIONAL DE DESENVOLVIMENTO ECONOMICO E SOCIAL', 'CREDICOAMO CREDITO RURAL COOPERATIVA',
            'CREDIT SUISSE HEDGING-GRIFFO CORRETORA DE VALORES S.A', 'BANCO INBURSA S.A.',
            'STATE STREET BRASIL S.A. - BANCO COMERCIAL',
            'UBS BRASIL CORRETORA DE CÂMBIO, TÍTULOS E VALORES MOBILIÁRIOS S.A.',
            'COOPERATIVA DE CRÉDITO MÚTUO DOS DESPACHANTES DE TRÂNSITO DE SANTA CATARINA E RI',
            'BNY MELLON BANCO S.A.', 'BANCO TRICURY S.A.', 'BANESTES S.A. BANCO DO ESTADO DO ESPIRITO SANTO',
            'BANCO BANDEPE S.A.', 'BANCO ALFA S.A.', 'BANCO ITAÚ CONSIGNADO S.A.', 'BANCO SANTANDER (BRASIL) S.A.',
            'BANCO BRADESCO BBI S.A.', 'BANCO DO ESTADO DO PARÁ S.A.', 'BANCO CARGILL S.A.',
            'BANCO DO ESTADO DO RIO GRANDE DO SUL S.A.', 'BANCO DO ESTADO DE SERGIPE S.A.',
            'CONFIDENCE CORRETORA DE CÂMBIO S.A.', 'HIPERCARD BANCO MÚLTIPLO S.A.', 'BANCO BRADESCARD S.A.',
            'GOLDMAN SACHS DO BRASIL BANCO MULTIPLO S.A.', 'BANCO ANDBANK (BRASIL) S.A.', 'BANCO MORGAN STANLEY S.A.',
            'BANCO CREFISA S.A.', 'BRB - BANCO DE BRASILIA S.A.', 'BANCO J. SAFRA S.A.', 'BANCO ABN AMRO S.A.',
            'BANCO KDB DO BRASIL S.A.', 'BANCO INTER S.A.', 'HAITONG BANCO DE INVESTIMENTO DO BRASIL S.A.',
            'PICPAY BANK - BANCO MÚLTIPLO S.A', 'B&T CORRETORA DE CAMBIO LTDA.', 'BANCOSEGURO S.A.',
            'BANCO TOPÁZIO S.A.', 'BANCO DA CHINA BRASIL S.A.', 'UNIPRIME DO BRASIL - COOPERATIVA DE CRÉDITO',
            'COOPERATIVA CENTRAL DE CRÉDITO - AILOS', 'BANCO RANDON S.A.', 'CREDISAN COOPERATIVA DE CRÉDITO',
            'PÓLOCRED SOCIEDADE DE CRÉDITO AO MICROEMPREENDEDOR E À EMPRESA DE PEQUENO PORT', 'BANCO FINAXIS S.A.',
            'TRAVELEX BANCO DE CÂMBIO S.A.', 'BANCO B3 S.A.', 'CREDISIS - CENTRAL DE COOPERATIVAS DE CRÉDITO LTDA.',
            'CREDIALIANÇA COOPERATIVA DE CRÉDITO RURAL',
            'UNIPRIME CENTRAL NACIONAL - CENTRAL NACIONAL DE COOPERATIVA DE CREDITO',
            'PLANNER CORRETORA DE VALORES S.A.',
            'RENASCENCA DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA',
            'XP INVESTIMENTOS CORRETORA DE CÂMBIO,TÍTULOS E VALORES MOBILIÁRIOS S/A', 'CAIXA ECONOMICA FEDERAL',
            'LECCA CRÉDITO, FINANCIAMENTO E INVESTIMENTO S/A', 'BANCO BOCOM BBM S.A.',
            'OLIVEIRA TRUST DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIARIOS S.A.',
            'NEON CORRETORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.',
            'CENTRAL COOPERATIVA DE CRÉDITO NO ESTADO DO ESPÍRITO SANTO - CECOOP',
            'ADVANCED CORRETORA DE CÂMBIO LTDA', 'BANCO WESTERN UNION DO BRASIL S.A.', 'BANCO RODOBENS S.A.',
            'BANCO AGIBANK S.A.', 'BANCO BRADESCO BERJ S.A.', 'BANCO WOORI BANK DO BRASIL S.A.', 'BANCO GENIAL S.A.',
            'BR PARTNERS BANCO DE INVESTIMENTO S.A.', 'CODEPE CORRETORA DE VALORES E CÂMBIO S.A.',
            'MS BANK S.A. BANCO DE CÂMBIO', 'UBS BRASIL BANCO DE INVESTIMENTO S.A.',
            'CARUANA S.A. - SOCIEDADE DE CRÉDITO, FINANCIAMENTO E INVESTIMENTO',
            'TULLETT PREBON BRASIL CORRETORA DE VALORES E CÂMBIO LTDA', 'ICBC DO BRASIL BANCO MÚLTIPLO S.A.',
            'CONFEDERAÇÃO NACIONAL DAS COOPERATIVAS CENTRAIS DE CRÉDITO E ECONOMIA FAMILIAR E',
            'BGC LIQUIDEZ DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA',
            'CONFEDERAÇÃO NACIONAL DAS COOPERATIVAS CENTRAIS UNICRED LTDA. - UNICRED DO BRASI',
            'GET MONEY CORRETORA DE CÂMBIO S.A.', 'INTESA SANPAOLO BRASIL S.A. - BANCO MÚLTIPLO',
            'NU INVEST CORRETORA DE VALORES S.A.', 'BROKER BRASIL CORRETORA DE CÂMBIO LTDA.',
            'TREVISO CORRETORA DE CÂMBIO S.A.', 'BEXS BANCO DE CÂMBIO S/A',
            'LEVYCAM - CORRETORA DE CAMBIO E VALORES LTDA.', 'GUITTA CORRETORA DE CAMBIO LTDA.',
            'FACTA FINANCEIRA S.A. - CRÉDITO FINANCIAMENTO E INVESTIMENTO',
            'ICAP DO BRASIL CORRETORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
            'CASA DO CRÉDITO S.A. SOCIEDADE DE CRÉDITO AO MICROEMPREENDEDOR',
            'COMMERZBANK BRASIL S.A. - BANCO MÚLTIPLO',
            'BRL TRUST DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.',
            'PEFISA S.A. - CRÉDITO, FINANCIAMENTO E INVESTIMENTO', 'GUIDE INVESTIMENTOS S.A. CORRETORA DE VALORES',
            'CM CAPITAL MARKETS CORRETORA DE CÂMBIO, TÍTULOS E VALORES MOBILIÁRIOS LTDA',
            'SOCRED S.A. - SOCIEDADE DE CRÉDITO AO MICROEMPREENDEDOR E À EMPRESA DE PEQUENO P',
            'BANCO ITAÚ BBA S.A.', 'ATIVA INVESTIMENTOS S.A. CORRETORA DE TÍTULOS, CÂMBIO E VALORES',
            'HS FINANCEIRA S/A CREDITO, FINANCIAMENTO E INVESTIMENTOS',
            'SERVICOOP - COOPERATIVA DE CRÉDITO DOS SERVIDORES PÚBLICOS ESTADUAIS E MUNICIPAI',
            'NOVA FUTURA CORRETORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
            'PARMETAL DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA', 'VALOR SOCIEDADE DE CRÉDITO DIRETO S.A.',
            'FAIR CORRETORA DE CAMBIO S.A.', 'STONE INSTITUIÇÃO DE PAGAMENTO S.A.', 'BANCO BTG PACTUAL S.A.',
            'BANCO ORIGINAL S.A.', 'BANCO ARBI S.A.', 'BANCO JOHN DEERE S.A.', 'BANCO BS2 S.A.',
            'BANCO CRÉDIT AGRICOLE BRASIL S.A.', 'BANCO FIBRA S.A.', 'BANCO CIFRA S.A.', 'BANCO BRADESCO S.A.',
            'BANCO CLASSICO S.A.', 'BANCO MASTER S/A', 'BANCO ABC BRASIL S.A.', 'BANCO INVESTCRED UNIBANCO S.A.',
            'BCV - BANCO DE CRÉDITO E VAREJO S.A.', 'BEXS CORRETORA DE CÂMBIO S/A', 'PARANÁ BANCO S.A.',
            'MONEYCORP BANCO DE CÂMBIO S.A.', 'NU PAGAMENTOS S.A. - INSTITUIÇÃO DE PAGAMENTO', 'BANCO FATOR S.A.',
            'BANCO CEDULA S.A.', 'BARI COMPANHIA HIPOTECÁRIA', 'BANCO HSBC S.A.', 'SAGITUR CORRETORA DE CÂMBIO S.A.',
            'IB CORRETORA DE CÂMBIO, TÍTULOS E VALORES MOBILIÁRIOS S.A.', 'AGK CORRETORA DE CAMBIO S.A.',
            'COOPERATIVA DE CRÉDITO RURAL DE SÃO MIGUEL DO OESTE - SULCREDI/SÃO MIGUEL',
            'BMP SOCIEDADE DE CRÉDITO AO MICROEMPREENDEDOR E A EMPRESA DE PEQUENO PORTE LTDA.', 'BANCO SENFF S.A.',
            'GENIAL INVESTIMENTOS CORRETORA DE VALORES MOBILIÁRIOS S.A.',
            'PRIMACREDI COOPERATIVA DE CRÉDITO DE PRIMAVERA DO LESTE',
            'WILL FINANCEIRA S.A. CRÉDITO, FINANCIAMENTO E INVESTIMENTO', 'COOPERATIVA DE CRÉDITO RURAL COOPAVEL',
            'RB INVESTIMENTOS DISTRIBUIDORA DE TITULOS E VALORES MOBILIARIOS LIMITADA',
            'FRENTE CORRETORA DE CÂMBIO LTDA.', 'UNIPRIME OURO - COOPERATIVA DE CRÉDITO DE OURO',
            'CAROL DISTRIBUIDORA DE TITULOS E VALORES MOBILIARIOS LTDA.', 'EFX CORRETORA DE CÂMBIO LTDA.',
            'PAGSEGURO INTERNET INSTITUIÇÃO DE PAGAMENTO S.A.',
            'BS2 DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.',
            'LASTRO RDV DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.', 'OZ CORRETORA DE CÂMBIO S.A.',
            'VIP\'S CORRETORA DE CÂMBIO LTDA.', 'BANCO AFINZ S.A. - BANCO MÚLTIPLO', 'BANCO DE LA NACION ARGENTINA',
            'DOCK INSTITUIÇÃO DE PAGAMENTO S.A.', 'PORTOPAR DISTRIBUIDORA DE TITULOS E VALORES MOBILIARIOS LTDA.',
            'TERRA INVESTIMENTOS DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
            'CAMBIONET CORRETORA DE CÂMBIO LTDA.', 'VORTX DISTRIBUIDORA DE TITULOS E VALORES MOBILIARIOS LTDA.',
            'DOURADA CORRETORA DE CÂMBIO LTDA.',
            'HSCM - SOCIEDADE DE CRÉDITO AO MICROEMPREENDEDOR E À EMPRESA DE PEQUENO PORTE LT',
            'AMAZÔNIA CORRETORA DE CÂMBIO LTDA.', 'BANCO BMG S.A.',
            'OM DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA',
            'CHINA CONSTRUCTION BANK (BRASIL) BANCO MÚLTIPLO S/A',
            'CREFAZ SOCIEDADE DE CRÉDITO AO MICROEMPREENDEDOR E A EMPRESA DE PEQUENO PORTE LT',
            'COOPERATIVA DE CRÉDITO RURAL DE ABELARDO LUZ - SULCREDI/CREDILUZ',
            'MERCADO PAGO INSTITUIÇÃO DE PAGAMENTO LTDA.', 'CARTOS SOCIEDADE DE CRÉDITO DIRETO S.A.',
            'ÓRAMA DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.',
            'PARATI - CREDITO, FINANCIAMENTO E INVESTIMENTO S.A.',
            'COOPERATIVA DE ECONOMIA E CRÉDITO MÚTUO DOS FABRICANTES DE CALÇADOS DE SAPIRANGA',
            'QI SOCIEDADE DE CRÉDITO DIRETO S.A.',
            'BANCO BARI DE INVESTIMENTOS E FINANCIAMENTOS S.A.',
            'FRAM CAPITAL DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.',
            'ACESSO SOLUÇÕES DE PAGAMENTO S.A. - INSTITUIÇÃO DE PAGAMENTO', 'BANCO BESA S.A.', 'BANCO DIGIO S.A.',
            'BANCO C6 S.A.', 'SUPERDIGITAL INSTITUIÇÃO DE PAGAMENTO S.A.', 'ITAÚ UNIBANCO S.A.',
            'CREDITAS SOCIEDADE DE CRÉDITO DIRETO S.A.',
            'FFA SOCIEDADE DE CRÉDITO AO MICROEMPREENDEDOR E À EMPRESA DE PEQUENO PORTE LTDA.', 'BANCO XP S.A.',
            'AL5 S.A. CRÉDITO, FINANCIAMENTO E INVESTIMENTO',
            'COOPERATIVA DE CRÉDITO RURAL DE PEQUENOS AGRICULTORES E DA REFORMA AGRÁRIA DO CE',
            'TORO CORRETORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.', 'ÓTIMO SOCIEDADE DE CRÉDITO DIRETO S.A.',
            'MIDWAY S.A. - CRÉDITO, FINANCIAMENTO E INVESTIMENTO', 'ZEMA CRÉDITO, FINANCIAMENTO E INVESTIMENTO S/A',
            'TRINUS CAPITAL DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.',
            'CIELO S.A. - INSTITUIÇÃO DE PAGAMENTO', 'SINGULARE CORRETORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.',
            'EFÍ S.A. - INSTITUIÇÃO DE PAGAMENTO', 'SIMPAUL CORRETORA DE CAMBIO E VALORES MOBILIARIOS S.A.',
            'BANCO SOCIETE GENERALE BRASIL S.A.', 'VITREO DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.',
            'BANCO CSF S.A.', 'BANCO MIZUHO DO BRASIL S.A.', 'WARREN CORRETORA DE VALORES MOBILIÁRIOS E CÂMBIO LTDA.',
            'UP.P SOCIEDADE DE EMPRÉSTIMO ENTRE PESSOAS S.A.', 'REALIZE CRÉDITO, FINANCIAMENTO E INVESTIMENTO S.A.',
            'BANCO J.P. MORGAN S.A.', 'BMS SOCIEDADE DE CRÉDITO DIRETO S.A.',
            'BANCO BRASILEIRO DE CRÉDITO SOCIEDADE ANÔNIMA',
            'COOPERFORTE - COOPERATIVA DE ECONOMIA E CRÉDITO MÚTUO DE FUNCIONÁRIOS DE INSTITU',
            'PICPAY INSTITUIÇÃO DE PAGAMENTO S.A.', 'BANCO MERCEDES-BENZ DO BRASIL S.A.',
            'FIDÚCIA SOCIEDADE DE CRÉDITO AO MICROEMPREENDEDOR E À EMPRESA DE PEQUENO PORTE L',
            'EBANX INSTITUICAO DE PAGAMENTOS LTDA.',
            'GLOBAL FINANÇAS SOCIEDADE DE CRÉDITO AO MICROEMPREENDEDOR E À EMPRESA DE PEQUENO',
            'COOPERATIVA DE ECONOMIA E CREDITO MUTUO DOS TRABALHADORES PORTUARIOS DA GRANDE V',
            'NU FINANCEIRA S.A. - SOCIEDADE DE CRÉDITO, FINANCIAMENTO E INVESTIMENTO', 'BANCO TOYOTA DO BRASIL S.A.',
            'BANCO MERCANTIL DO BRASIL S.A.', 'BANCO GM S.A.',
            'COOPERATIVA DE CREDITO RURAL DE IBIAM - SULCREDI/IBIAM',
            'BANCO VOLKSWAGEN S.A.', 'BANCO BRADESCO FINANCIAMENTOS S.A.',
            'F.D\'GOLD - DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.', 'HUB INSTITUIÇÃO DE PAGAMENTO S.A.',
            'LISTO SOCIEDADE DE CREDITO DIRETO S.A.', 'IDEAL CORRETORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.',
            'KIRTON BANK S.A. - BANCO MÚLTIPLO',
            'COOPERATIVA DE CRÉDITO, POUPANÇA E SERVIÇOS FINANCEIROS DO CENTRO OESTE - CREDIT',
            'IUGU INSTITUIÇÃO DE PAGAMENTO S.A.',
            'COBUCCIO S/A - SOCIEDADE DE CRÉDITO, FINANCIAMENTO E INVESTIMENTOS',
            'CORA SOCIEDADE DE CRÉDITO DIRETO S.A.', 'SUMUP SOCIEDADE DE CRÉDITO DIRETO S.A.',
            'ACCREDITO - SOCIEDADE DE CRÉDITO DIRETO S.A.',
            'ÍNDIGO INVESTIMENTOS DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
            'BONUSPAGO SOCIEDADE DE CRÉDITO DIRETO S.A.', 'PLANNER SOCIEDADE DE CRÉDITO DIRETO S.A.',
            'VIA CERTA FINANCIADORA S.A. - CRÉDITO, FINANCIAMENTO E INVESTIMENTOS', 'SOCIAL BANK BANCO MÚLTIPLO S/A',
            'BANCO BV S.A.', 'LEND SOCIEDADE DE CRÉDITO DIRETO S.A.', 'LAMARA SOCIEDADE DE CRÉDITO DIRETO S.A.',
            'ZIPDIN SOLUÇÕES DIGITAIS SOCIEDADE DE CRÉDITO DIRETO S/A', 'NUMBRS SOCIEDADE DE CRÉDITO DIRETO S.A.',
            'LAR COOPERATIVA DE CRÉDITO - LAR CREDI', 'BANCO SAFRA S.A.',
            'COLUNA S/A DISTRIBUIDORA DE TITULOS E VALORES MOBILIÁRIOS',
            'SOCINAL S.A. - CRÉDITO, FINANCIAMENTO E INVESTIMENTO',
            'BIORC FINANCEIRA - CRÉDITO, FINANCIAMENTO E INVESTIMENTO S.A.',
            'COOPERATIVA DE CREDITO DOS SERVIDORES DA UNIVERSIDADE FEDERAL DO ESPIRITO SANTO',
            'CREDSYSTEM SOCIEDADE DE CRÉDITO DIRETO S.A.', 'CREDIARE S.A. - CRÉDITO, FINANCIAMENTO E INVESTIMENTO',
            'COOPERATIVA DE CREDITO RURAL SEARA - CREDISEARA',
            'BR-CAPITAL DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.',
            'DELCRED SOCIEDADE DE CRÉDITO DIRETO S.A.',
            'TRUSTEE DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
            'ID CORRETORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.', 'CREDIBRF - COOPERATIVA DE CRÉDITO',
            'MAGNETIS - DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA',
            'CREDIHOME SOCIEDADE DE CRÉDITO DIRETO S.A.', 'TRINUS SOCIEDADE DE CRÉDITO DIRETO S.A.',
            'PLANTAE S.A. - CRÉDITO, FINANCIAMENTO E INVESTIMENTO',
            'MIRAE ASSET WEALTH MANAGEMENT (BRAZIL) CORRETORA DE CÂMBIO, TÍTULOS E VALORES MO',
            'HEMERA DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
            'DM SOCIEDADE DE CRÉDITO DIRETO S.A.', 'FITBANK INSTITUIÇÃO DE PAGAMENTOS ELETRÔNICOS S.A.',
            'J17 - SOCIEDADE DE CRÉDITO DIRETO S/A', 'CREDIFIT SOCIEDADE DE CRÉDITO DIRETO S.A.',
            'MÉRITO DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
            'FÊNIX DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.', 'BANCO MUFG BRASIL S.A.',
            'UY3 SOCIEDADE DE CRÉDITO DIRETO S/A',
            'HEDGE INVESTMENTS DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
            'COOPERATIVA DE CRÉDITO MÚTUO DE SERVIDORES PÚBLICOS DO ESTADO DE SÃO PAULO - CRE',
            'UNAVANTI SOCIEDADE DE CRÉDITO DIRETO S/A', 'ASAAS GESTÃO FINANCEIRA INSTITUIÇÃO DE PAGAMENTO S.A.',
            'STARK SOCIEDADE DE CRÉDITO DIRETO S.A.', 'AZUMI DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
            'BANCO SUMITOMO MITSUI BRASILEIRO S.A.', 'CAPITAL CONSIG SOCIEDADE DE CRÉDITO DIRETO S.A.',
            'MASTER S/A CORRETORA DE CÂMBIO, TÍTULOS E VALORES MOBILIÁRIOS',
            'PORTOSEG S.A. - CREDITO, FINANCIAMENTO E INVESTIMENTO',
            'LIGA INVEST DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA',
            'CDC SOCIEDADE DE CRÉDITO DIRETO S.A.',
            'COOPERATIVA DE ECONOMIA E CREDITO MUTUO DOS SERVIDORES PUBLICOS DE PINHÃO - CRES',
            'BANCO CAIXA GERAL - BRASIL S.A.', 'BANCO YAMAHA MOTOR DO BRASIL S.A.', 'CITIBANK N.A.',
            'GAZINCRED S.A. SOCIEDADE DE CRÉDITO, FINANCIAMENTO E INVESTIMENTO', 'BANCO ITAUBANK S.A.',
            'SUPERLÓGICA SOCIEDADE DE CRÉDITO DIRETO S.A.', 'SBCASH SOCIEDADE DE CRÉDITO DIRETO S.A.',
            'MAF DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.', 'DEUTSCHE BANK S.A. - BANCO ALEMAO',
            'JPMORGAN CHASE BANK, NATIONAL ASSOCIATION', 'BANCO DE LA PROVINCIA DE BUENOS AIRES',
            'BANCO CREDIT SUISSE (BRASIL) S.A.', 'RJI CORRETORA DE TITULOS E VALORES MOBILIARIOS LTDA',
            'SOCIEDADE DE CRÉDITO, FINANCIAMENTO E INVESTIMENTO EFÍ S.A.',
            'AVENUE SECURITIES DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
            'CELCOIN INSTITUICAO DE PAGAMENTO S.A.', 'FFCRED SOCIEDADE DE CRÉDITO DIRETO S.A..',
            'MAGNUM SOCIEDADE DE CRÉDITO DIRETO S.A.',
            'FINVEST DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
            'ATF CREDIT SOCIEDADE DE CRÉDITO DIRETO S.A.',
            'FC FINANCEIRA S.A. - CRÉDITO, FINANCIAMENTO E INVESTIMENTO',
            'MERCADO CRÉDITO SOCIEDADE DE CRÉDITO, FINANCIAMENTO E INVESTIMENTO S.A.',
            'LIONS TRUST DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
            'PEAK SOCIEDADE DE EMPRÉSTIMO ENTRE PESSOAS S.A.', 'HR DIGITAL - SOCIEDADE DE CRÉDITO DIRETO S/A',
            'INTERCAM CORRETORA DE CÂMBIO LTDA.', 'MONETARIE SOCIEDADE DE CRÉDITO DIRETO S.A.',
            'ATICCA - SOCIEDADE DE CRÉDITO DIRETO S.A.', 'PINBANK BRASIL INSTITUIÇÃO DE PAGAMENTO S.A.',
            'MARÚ SOCIEDADE DE CRÉDITO DIRETO S.A.', 'NEON PAGAMENTOS S.A. - INSTITUIÇÃO DE PAGAMENTO',
            'SENSO CORRETORA DE CAMBIO E VALORES MOBILIARIOS S.A', 'BANCO LUSO BRASILEIRO S.A.',
            'BANCO INDUSTRIAL DO BRASIL S.A.', 'BANCO VR S.A.', 'BANCO PAULISTA S.A.', 'BANCO GUANABARA S.A.',
            'OMNI BANCO S.A.', 'BANCO PAN S.A.', 'BANCO C6 CONSIGNADO S.A.', 'BANCO LETSBANK S.A.',
            'BANCO RENDIMENTO S.A.', 'BANCO TRIANGULO S.A.', 'BANCO SOFISA S.A.', 'BANCO PINE S.A.',
            'BANCO VOITER S.A.', 'BANCO DIGIMAIS S.A.', 'BANCO VOTORANTIM S.A.', 'BANCO DAYCOVAL S.A.',
            'BANCO OURINVEST S.A.', 'BANCO RNX S.A.', 'BANCO CETELEM S.A.', 'BANCO RIBEIRAO PRETO S.A.',
            'BANCO SEMEAR S.A.', 'BANCO CITIBANK S.A.', 'BANCO MODAL S.A.', 'BANCO RABOBANK INTERNATIONAL BRASIL S.A.',
            'BANCO COOPERATIVO SICREDI S.A.', 'SCOTIABANK BRASIL S.A. BANCO MÚLTIPLO',
            'BANCO BNP PARIBAS BRASIL S.A.', 'NOVO BANCO CONTINENTAL S.A. - BANCO MÚLTIPLO', 'BANCO SISTEMA S.A.',
            'BANK OF AMERICA MERRILL LYNCH BANCO MÚLTIPLO S.A.', 'BANCO COOPERATIVO SICOOB S.A. - BANCO SICOOB',
            'BANCO KEB HANA DO BRASIL S.A.'
        ],
        'CAD' => [
            'Interac e-Transfer Outbound Pay-out', 'eCashout Pay-out'
        ],
        'CLP' => [
            'Banco de Chile', 'Banco Internacional', 'Banco del Estado de Chile', 'Scotiabank Chile',
            'Banco Crédito e Inversiones', 'Banco Bice', 'HSBC Bank', 'Banco Santander- Santiago', 'Itau Corpbanca',
            'Banco Security', 'Banco Falabella', 'Banco Ripley', 'Banco Consorcio', 'BBVA Chile',
            'Banco del Desarrollo', 'Coopeuch', 'Prepago los Héroes', 'Tenpo Prepago'
        ],
        'COP' => [
            'BANCO DE BOGOTA', 'BANCO POPULAR', 'BANCO SANTANDER', 'BANCOLOMBIA', 'HSBC', 'BANCO SUDAMERIS', 'BBVA',
            'ITAU', 'BANCO COLPATRIA', 'BANCO DE OCCIDENTE', 'BANCOLDEX S.A.', 'BANCO CAJA SOCIAL BCSC',
            'BANCO AGRARIO', 'BANCO MUNDO MUJER', 'BANCO DAVIVIENDA', 'BANCO AV VILLAS', 'BANCO W S.A',
            'BANCO PROCREDIT', 'BANCAMIA S.A', 'BANCO PICHINCHA', 'BANCOOMEVA', 'BANCO FALABELLA S.A',
            'BANCO FINANDINA S.A.', 'BANCO MULTIBANK S.A.', 'BANCO SERFINANZA S.A.', 'COOPCENTRAL S.A',
            'COOPERATIVA FINANCIERA DE ANTIOQUIA', 'COTRAFA COOPERATIVA FINANCIERA', 'CONFIAR', 'FINANCIERA JURISCOOP',
            'COLTEFINANCIERA S.A.', 'NEQUI'
        ],
        'MXN' => [
            'BANAMEX', 'BANCOMEXT', 'BANOBRAS', 'BBVA BANCOMER', 'SANTANDER', 'BANJERCITO', 'HSBC', 'BAJIO', 'IXE',
            'INBURSA', 'INTERACCIONES', 'MIFEL', 'SCOTIABANK', 'BANREGIO', 'INVEX', 'BANSI', 'AFIRME', 'BANORTE',
            'THE ROYAL BANK', 'AMERICAN EXPRESS', 'BAMSA', 'TOKYO', 'JP MORGAN', 'BMONEX', 'VE POR MAS', 'ING',
            'DEUTSCHE', 'CREDIT SUISSE', 'AZTECA', 'AUTOFIN', 'BARCLAYS', 'COMPARTAMOS', 'BANCO FAMSA', 'BMULTIVA',
            'ACTINVER', 'WALMART', 'NAFIN', 'INTERBANCO', 'BANCOPPEL', 'ABC CAPITAL', 'UBS BANK', 'CONSUBANCO',
            'VOLKSWAGEN', 'CIBANCO', 'BBASE', 'BANSEFI', 'HIPOTECARIA FEDERAL', 'MONEXCB', 'GBM', 'MASARI', 'VALUE',
            'ESTRUCTURADORES', 'TIBER', 'VECTOR', 'B&B', 'ACCIVAL', 'MERRILL LYNCH', 'FINAMEX', 'VALMEX', 'UNICA',
            'MAPFRE', 'PROFUTURO', 'CB ACTINVER', 'OACTIN', 'SKANDIA', 'CBDEUTSCHE', 'ZURICH', 'ZURICHVI', 'SU CASITA',
            'CB INTERCAM', 'CI BOLSA', 'BULLTICK CB', 'STERLING', 'FINCOMUN', 'HDI SEGUROS', 'ORDER', 'AKALA',
            'CB JPMORGAN', 'REFORMA', 'STP', 'TELECOMM', 'EVERCORE', 'SKANDIA', 'SEGMTY', 'ASEA', 'KUSPIT',
            'SOFIEXPRESS', 'UNAGRA', 'OPCIONES EMPRESARIALES DEL NOROESTE', 'LIBERTAD', 'CLS', 'INDEVAL'
        ],
        'PEN' => [
            'Banco Central de Reserva', 'Banco de Crédito del Perú', 'Interbank', 'Citibank', 'Scotiabank',
            'BBVA Continental', 'Banco de la Nación', 'Banco de Comercio', 'Banco Financiero',
            'Banco Interamericano de Finanzas (BIF)', 'Crediscotia Financiera', 'Mi Banco', 'Banco GNB Perú S.A.',
            'Banco Falabella', 'Santander', 'Caja Metropolitana de Lima',
            'Caja Municipal de Ahorro y Crédito Piura SAC', 'Caja Municipal de Ahorro y Crédito Trujillo',
            'Caja Municipal de Ahorro y Crédito Arequipa', 'Caja Municipal de Ahorro y Crédito Sullana',
            'Caja Municipal de Ahorro y Crédito Cuzco', 'Caja Municipal de Ahorro y Crédito Huancayo',
            'Caja Municipal de Ahorro y Crédito Tacna'
        ],
        'UYU' => [
            'BROU - Banco de la República Oriental del Uruguay', 'Banco Hipotecario del Uruguay', 'Banco Bandes',
            'Banco ITAU', 'Scotiabank', 'Banco Santander', 'Banco Bilbao Vizcaya Argentaria', 'HSBC Bank',
            'Banque Heritage', 'Citibank N.A. Sucursal', 'Banco de la Nación Argentina'
        ]
    ];

    /**
     * Get allowed Bank Names per Currency
     *
     * @param $currency
     * @return array
     */
    public static function getBankNamesPerCurrency($currency)
    {
        $currency = strtoupper($currency);

        if (array_key_exists($currency, self::$names)) {
            return self::$names[$currency];
        }

        return [];
    }

    /**
     * Get allowed currencies for OnlineBanking\Payout
     *
     * @return array
     */
    public static function getAllowedCurrencies()
    {
        return Common::getArrayKeys(self::$names);
    }
}