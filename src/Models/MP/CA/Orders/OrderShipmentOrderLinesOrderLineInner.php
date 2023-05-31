<?php

/**
 * OrderShipmentOrderLinesOrderLineInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */

/**
 * Order Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\CA\Orders;

use Walmart\Models\BaseModel;

/**
 * OrderShipmentOrderLinesOrderLineInner Class Doc Comment
 *
 * @category Class

 * @description Information about one order line shipment

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class OrderShipmentOrderLinesOrderLineInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OrderShipment_orderLines_orderLine_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'lineNumber' => 'string',
        'shipFromCountry' => 'string',
        'orderLineStatuses' => '\Walmart\Models\MP\CA\Orders\OrderShipmentOrderLinesOrderLineInnerOrderLineStatuses'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'lineNumber' => null,
        'shipFromCountry' => null,
        'orderLineStatuses' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'lineNumber' => false,
        'shipFromCountry' => false,
        'orderLineStatuses' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'lineNumber' => 'lineNumber',
        'shipFromCountry' => 'shipFromCountry',
        'orderLineStatuses' => 'orderLineStatuses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'lineNumber' => 'setLineNumber',
        'shipFromCountry' => 'setShipFromCountry',
        'orderLineStatuses' => 'setOrderLineStatuses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'lineNumber' => 'getLineNumber',
        'shipFromCountry' => 'getShipFromCountry',
        'orderLineStatuses' => 'getOrderLineStatuses'
    ];


    public const SHIP_FROM_COUNTRY_AF = 'AF';

    public const SHIP_FROM_COUNTRY_AX = 'AX';

    public const SHIP_FROM_COUNTRY_AL = 'AL';

    public const SHIP_FROM_COUNTRY_DZ = 'DZ';

    public const SHIP_FROM_COUNTRY__AS = 'AS';

    public const SHIP_FROM_COUNTRY_AD = 'AD';

    public const SHIP_FROM_COUNTRY_AO = 'AO';

    public const SHIP_FROM_COUNTRY_AI = 'AI';

    public const SHIP_FROM_COUNTRY_AQ = 'AQ';

    public const SHIP_FROM_COUNTRY_AG = 'AG';

    public const SHIP_FROM_COUNTRY_AR = 'AR';

    public const SHIP_FROM_COUNTRY_AM = 'AM';

    public const SHIP_FROM_COUNTRY_AW = 'AW';

    public const SHIP_FROM_COUNTRY_AU = 'AU';

    public const SHIP_FROM_COUNTRY_AT = 'AT';

    public const SHIP_FROM_COUNTRY_AZ = 'AZ';

    public const SHIP_FROM_COUNTRY_BS = 'BS';

    public const SHIP_FROM_COUNTRY_BH = 'BH';

    public const SHIP_FROM_COUNTRY_BD = 'BD';

    public const SHIP_FROM_COUNTRY_BB = 'BB';

    public const SHIP_FROM_COUNTRY_BY = 'BY';

    public const SHIP_FROM_COUNTRY_BE = 'BE';

    public const SHIP_FROM_COUNTRY_BZ = 'BZ';

    public const SHIP_FROM_COUNTRY_BJ = 'BJ';

    public const SHIP_FROM_COUNTRY_BM = 'BM';

    public const SHIP_FROM_COUNTRY_BT = 'BT';

    public const SHIP_FROM_COUNTRY_BO = 'BO';

    public const SHIP_FROM_COUNTRY_BQ = 'BQ';

    public const SHIP_FROM_COUNTRY_BA = 'BA';

    public const SHIP_FROM_COUNTRY_BW = 'BW';

    public const SHIP_FROM_COUNTRY_BV = 'BV';

    public const SHIP_FROM_COUNTRY_BR = 'BR';

    public const SHIP_FROM_COUNTRY_IO = 'IO';

    public const SHIP_FROM_COUNTRY_BN = 'BN';

    public const SHIP_FROM_COUNTRY_BG = 'BG';

    public const SHIP_FROM_COUNTRY_BF = 'BF';

    public const SHIP_FROM_COUNTRY_BI = 'BI';

    public const SHIP_FROM_COUNTRY_KH = 'KH';

    public const SHIP_FROM_COUNTRY_CM = 'CM';

    public const SHIP_FROM_COUNTRY_CA = 'CA';

    public const SHIP_FROM_COUNTRY_CV = 'CV';

    public const SHIP_FROM_COUNTRY_KY = 'KY';

    public const SHIP_FROM_COUNTRY_CF = 'CF';

    public const SHIP_FROM_COUNTRY_TD = 'TD';

    public const SHIP_FROM_COUNTRY_CL = 'CL';

    public const SHIP_FROM_COUNTRY_CN = 'CN';

    public const SHIP_FROM_COUNTRY_CX = 'CX';

    public const SHIP_FROM_COUNTRY_CC = 'CC';

    public const SHIP_FROM_COUNTRY_CO = 'CO';

    public const SHIP_FROM_COUNTRY_KM = 'KM';

    public const SHIP_FROM_COUNTRY_CG = 'CG';

    public const SHIP_FROM_COUNTRY_CD = 'CD';

    public const SHIP_FROM_COUNTRY_CK = 'CK';

    public const SHIP_FROM_COUNTRY_CR = 'CR';

    public const SHIP_FROM_COUNTRY_CI = 'CI';

    public const SHIP_FROM_COUNTRY_HR = 'HR';

    public const SHIP_FROM_COUNTRY_CU = 'CU';

    public const SHIP_FROM_COUNTRY_CW = 'CW';

    public const SHIP_FROM_COUNTRY_CY = 'CY';

    public const SHIP_FROM_COUNTRY_CZ = 'CZ';

    public const SHIP_FROM_COUNTRY_DK = 'DK';

    public const SHIP_FROM_COUNTRY_DJ = 'DJ';

    public const SHIP_FROM_COUNTRY_DM = 'DM';

    public const SHIP_FROM_COUNTRY__DO = 'DO';

    public const SHIP_FROM_COUNTRY_EC = 'EC';

    public const SHIP_FROM_COUNTRY_EG = 'EG';

    public const SHIP_FROM_COUNTRY_SV = 'SV';

    public const SHIP_FROM_COUNTRY_GQ = 'GQ';

    public const SHIP_FROM_COUNTRY_ER = 'ER';

    public const SHIP_FROM_COUNTRY_EE = 'EE';

    public const SHIP_FROM_COUNTRY_ET = 'ET';

    public const SHIP_FROM_COUNTRY_FK = 'FK';

    public const SHIP_FROM_COUNTRY_FO = 'FO';

    public const SHIP_FROM_COUNTRY_FJ = 'FJ';

    public const SHIP_FROM_COUNTRY_FI = 'FI';

    public const SHIP_FROM_COUNTRY_FR = 'FR';

    public const SHIP_FROM_COUNTRY_GF = 'GF';

    public const SHIP_FROM_COUNTRY_PF = 'PF';

    public const SHIP_FROM_COUNTRY_TF = 'TF';

    public const SHIP_FROM_COUNTRY_GA = 'GA';

    public const SHIP_FROM_COUNTRY_GM = 'GM';

    public const SHIP_FROM_COUNTRY_GE = 'GE';

    public const SHIP_FROM_COUNTRY_DE = 'DE';

    public const SHIP_FROM_COUNTRY_GH = 'GH';

    public const SHIP_FROM_COUNTRY_GI = 'GI';

    public const SHIP_FROM_COUNTRY_GR = 'GR';

    public const SHIP_FROM_COUNTRY_GL = 'GL';

    public const SHIP_FROM_COUNTRY_GD = 'GD';

    public const SHIP_FROM_COUNTRY_GP = 'GP';

    public const SHIP_FROM_COUNTRY_GU = 'GU';

    public const SHIP_FROM_COUNTRY_GT = 'GT';

    public const SHIP_FROM_COUNTRY_GG = 'GG';

    public const SHIP_FROM_COUNTRY_GN = 'GN';

    public const SHIP_FROM_COUNTRY_GW = 'GW';

    public const SHIP_FROM_COUNTRY_GY = 'GY';

    public const SHIP_FROM_COUNTRY_HT = 'HT';

    public const SHIP_FROM_COUNTRY_HM = 'HM';

    public const SHIP_FROM_COUNTRY_VA = 'VA';

    public const SHIP_FROM_COUNTRY_HN = 'HN';

    public const SHIP_FROM_COUNTRY_HK = 'HK';

    public const SHIP_FROM_COUNTRY_HU = 'HU';

    public const SHIP_FROM_COUNTRY_IS = 'IS';

    public const SHIP_FROM_COUNTRY_IN = 'IN';

    public const SHIP_FROM_COUNTRY_ID = 'ID';

    public const SHIP_FROM_COUNTRY_IR = 'IR';

    public const SHIP_FROM_COUNTRY_IQ = 'IQ';

    public const SHIP_FROM_COUNTRY_IE = 'IE';

    public const SHIP_FROM_COUNTRY_IM = 'IM';

    public const SHIP_FROM_COUNTRY_IL = 'IL';

    public const SHIP_FROM_COUNTRY_IT = 'IT';

    public const SHIP_FROM_COUNTRY_JM = 'JM';

    public const SHIP_FROM_COUNTRY_JP = 'JP';

    public const SHIP_FROM_COUNTRY_JE = 'JE';

    public const SHIP_FROM_COUNTRY_JO = 'JO';

    public const SHIP_FROM_COUNTRY_KZ = 'KZ';

    public const SHIP_FROM_COUNTRY_KE = 'KE';

    public const SHIP_FROM_COUNTRY_KI = 'KI';

    public const SHIP_FROM_COUNTRY_KP = 'KP';

    public const SHIP_FROM_COUNTRY_KR = 'KR';

    public const SHIP_FROM_COUNTRY_KW = 'KW';

    public const SHIP_FROM_COUNTRY_KG = 'KG';

    public const SHIP_FROM_COUNTRY_LA = 'LA';

    public const SHIP_FROM_COUNTRY_LV = 'LV';

    public const SHIP_FROM_COUNTRY_LB = 'LB';

    public const SHIP_FROM_COUNTRY_LS = 'LS';

    public const SHIP_FROM_COUNTRY_LR = 'LR';

    public const SHIP_FROM_COUNTRY_LY = 'LY';

    public const SHIP_FROM_COUNTRY_LI = 'LI';

    public const SHIP_FROM_COUNTRY_LT = 'LT';

    public const SHIP_FROM_COUNTRY_LU = 'LU';

    public const SHIP_FROM_COUNTRY_MO = 'MO';

    public const SHIP_FROM_COUNTRY_MK = 'MK';

    public const SHIP_FROM_COUNTRY_MG = 'MG';

    public const SHIP_FROM_COUNTRY_MW = 'MW';

    public const SHIP_FROM_COUNTRY_MY = 'MY';

    public const SHIP_FROM_COUNTRY_MV = 'MV';

    public const SHIP_FROM_COUNTRY_ML = 'ML';

    public const SHIP_FROM_COUNTRY_MT = 'MT';

    public const SHIP_FROM_COUNTRY_MH = 'MH';

    public const SHIP_FROM_COUNTRY_MQ = 'MQ';

    public const SHIP_FROM_COUNTRY_MR = 'MR';

    public const SHIP_FROM_COUNTRY_MU = 'MU';

    public const SHIP_FROM_COUNTRY_YT = 'YT';

    public const SHIP_FROM_COUNTRY_MX = 'MX';

    public const SHIP_FROM_COUNTRY_FM = 'FM';

    public const SHIP_FROM_COUNTRY_MD = 'MD';

    public const SHIP_FROM_COUNTRY_MC = 'MC';

    public const SHIP_FROM_COUNTRY_MN = 'MN';

    public const SHIP_FROM_COUNTRY_ME = 'ME';

    public const SHIP_FROM_COUNTRY_MS = 'MS';

    public const SHIP_FROM_COUNTRY_MA = 'MA';

    public const SHIP_FROM_COUNTRY_MZ = 'MZ';

    public const SHIP_FROM_COUNTRY_MM = 'MM';

    public const SHIP_FROM_COUNTRY_NA = 'NA';

    public const SHIP_FROM_COUNTRY_NR = 'NR';

    public const SHIP_FROM_COUNTRY_NP = 'NP';

    public const SHIP_FROM_COUNTRY_NL = 'NL';

    public const SHIP_FROM_COUNTRY_NC = 'NC';

    public const SHIP_FROM_COUNTRY_NZ = 'NZ';

    public const SHIP_FROM_COUNTRY_NI = 'NI';

    public const SHIP_FROM_COUNTRY_NE = 'NE';

    public const SHIP_FROM_COUNTRY_NG = 'NG';

    public const SHIP_FROM_COUNTRY_NU = 'NU';

    public const SHIP_FROM_COUNTRY_NF = 'NF';

    public const SHIP_FROM_COUNTRY_MP = 'MP';

    public const SHIP_FROM_COUNTRY_NO = 'NO';

    public const SHIP_FROM_COUNTRY_OM = 'OM';

    public const SHIP_FROM_COUNTRY_PK = 'PK';

    public const SHIP_FROM_COUNTRY_PW = 'PW';

    public const SHIP_FROM_COUNTRY_PS = 'PS';

    public const SHIP_FROM_COUNTRY_PA = 'PA';

    public const SHIP_FROM_COUNTRY_PG = 'PG';

    public const SHIP_FROM_COUNTRY_PY = 'PY';

    public const SHIP_FROM_COUNTRY_PE = 'PE';

    public const SHIP_FROM_COUNTRY_PH = 'PH';

    public const SHIP_FROM_COUNTRY_PN = 'PN';

    public const SHIP_FROM_COUNTRY_PL = 'PL';

    public const SHIP_FROM_COUNTRY_PT = 'PT';

    public const SHIP_FROM_COUNTRY_PR = 'PR';

    public const SHIP_FROM_COUNTRY_QA = 'QA';

    public const SHIP_FROM_COUNTRY_RE = 'RE';

    public const SHIP_FROM_COUNTRY_RO = 'RO';

    public const SHIP_FROM_COUNTRY_RU = 'RU';

    public const SHIP_FROM_COUNTRY_RW = 'RW';

    public const SHIP_FROM_COUNTRY_BL = 'BL';

    public const SHIP_FROM_COUNTRY_SH = 'SH';

    public const SHIP_FROM_COUNTRY_KN = 'KN';

    public const SHIP_FROM_COUNTRY_LC = 'LC';

    public const SHIP_FROM_COUNTRY_MF = 'MF';

    public const SHIP_FROM_COUNTRY_PM = 'PM';

    public const SHIP_FROM_COUNTRY_VC = 'VC';

    public const SHIP_FROM_COUNTRY_WS = 'WS';

    public const SHIP_FROM_COUNTRY_SM = 'SM';

    public const SHIP_FROM_COUNTRY_ST = 'ST';

    public const SHIP_FROM_COUNTRY_SA = 'SA';

    public const SHIP_FROM_COUNTRY_SN = 'SN';

    public const SHIP_FROM_COUNTRY_RS = 'RS';

    public const SHIP_FROM_COUNTRY_SC = 'SC';

    public const SHIP_FROM_COUNTRY_SL = 'SL';

    public const SHIP_FROM_COUNTRY_SG = 'SG';

    public const SHIP_FROM_COUNTRY_SX = 'SX';

    public const SHIP_FROM_COUNTRY_SK = 'SK';

    public const SHIP_FROM_COUNTRY_SI = 'SI';

    public const SHIP_FROM_COUNTRY_SB = 'SB';

    public const SHIP_FROM_COUNTRY_SO = 'SO';

    public const SHIP_FROM_COUNTRY_ZA = 'ZA';

    public const SHIP_FROM_COUNTRY_GS = 'GS';

    public const SHIP_FROM_COUNTRY_SS = 'SS';

    public const SHIP_FROM_COUNTRY_ES = 'ES';

    public const SHIP_FROM_COUNTRY_LK = 'LK';

    public const SHIP_FROM_COUNTRY_SD = 'SD';

    public const SHIP_FROM_COUNTRY_SR = 'SR';

    public const SHIP_FROM_COUNTRY_SJ = 'SJ';

    public const SHIP_FROM_COUNTRY_SZ = 'SZ';

    public const SHIP_FROM_COUNTRY_SE = 'SE';

    public const SHIP_FROM_COUNTRY_CH = 'CH';

    public const SHIP_FROM_COUNTRY_SY = 'SY';

    public const SHIP_FROM_COUNTRY_TW = 'TW';

    public const SHIP_FROM_COUNTRY_TJ = 'TJ';

    public const SHIP_FROM_COUNTRY_TZ = 'TZ';

    public const SHIP_FROM_COUNTRY_TH = 'TH';

    public const SHIP_FROM_COUNTRY_TL = 'TL';

    public const SHIP_FROM_COUNTRY_TG = 'TG';

    public const SHIP_FROM_COUNTRY_TK = 'TK';

    public const SHIP_FROM_COUNTRY_TO = 'TO';

    public const SHIP_FROM_COUNTRY_TT = 'TT';

    public const SHIP_FROM_COUNTRY_TN = 'TN';

    public const SHIP_FROM_COUNTRY_TR = 'TR';

    public const SHIP_FROM_COUNTRY_TM = 'TM';

    public const SHIP_FROM_COUNTRY_TC = 'TC';

    public const SHIP_FROM_COUNTRY_TV = 'TV';

    public const SHIP_FROM_COUNTRY_UG = 'UG';

    public const SHIP_FROM_COUNTRY_UA = 'UA';

    public const SHIP_FROM_COUNTRY_AE = 'AE';

    public const SHIP_FROM_COUNTRY_GB = 'GB';

    public const SHIP_FROM_COUNTRY_US = 'US';

    public const SHIP_FROM_COUNTRY_UM = 'UM';

    public const SHIP_FROM_COUNTRY_UY = 'UY';

    public const SHIP_FROM_COUNTRY_UZ = 'UZ';

    public const SHIP_FROM_COUNTRY_VU = 'VU';

    public const SHIP_FROM_COUNTRY_VE = 'VE';

    public const SHIP_FROM_COUNTRY_VN = 'VN';

    public const SHIP_FROM_COUNTRY_VG = 'VG';

    public const SHIP_FROM_COUNTRY_VI = 'VI';

    public const SHIP_FROM_COUNTRY_WF = 'WF';

    public const SHIP_FROM_COUNTRY_EH = 'EH';

    public const SHIP_FROM_COUNTRY_YE = 'YE';

    public const SHIP_FROM_COUNTRY_ZM = 'ZM';

    public const SHIP_FROM_COUNTRY_ZW = 'ZW';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShipFromCountryAllowableValues()
    {
        return [
            self::SHIP_FROM_COUNTRY_AF,
            self::SHIP_FROM_COUNTRY_AX,
            self::SHIP_FROM_COUNTRY_AL,
            self::SHIP_FROM_COUNTRY_DZ,
            self::SHIP_FROM_COUNTRY__AS,
            self::SHIP_FROM_COUNTRY_AD,
            self::SHIP_FROM_COUNTRY_AO,
            self::SHIP_FROM_COUNTRY_AI,
            self::SHIP_FROM_COUNTRY_AQ,
            self::SHIP_FROM_COUNTRY_AG,
            self::SHIP_FROM_COUNTRY_AR,
            self::SHIP_FROM_COUNTRY_AM,
            self::SHIP_FROM_COUNTRY_AW,
            self::SHIP_FROM_COUNTRY_AU,
            self::SHIP_FROM_COUNTRY_AT,
            self::SHIP_FROM_COUNTRY_AZ,
            self::SHIP_FROM_COUNTRY_BS,
            self::SHIP_FROM_COUNTRY_BH,
            self::SHIP_FROM_COUNTRY_BD,
            self::SHIP_FROM_COUNTRY_BB,
            self::SHIP_FROM_COUNTRY_BY,
            self::SHIP_FROM_COUNTRY_BE,
            self::SHIP_FROM_COUNTRY_BZ,
            self::SHIP_FROM_COUNTRY_BJ,
            self::SHIP_FROM_COUNTRY_BM,
            self::SHIP_FROM_COUNTRY_BT,
            self::SHIP_FROM_COUNTRY_BO,
            self::SHIP_FROM_COUNTRY_BQ,
            self::SHIP_FROM_COUNTRY_BA,
            self::SHIP_FROM_COUNTRY_BW,
            self::SHIP_FROM_COUNTRY_BV,
            self::SHIP_FROM_COUNTRY_BR,
            self::SHIP_FROM_COUNTRY_IO,
            self::SHIP_FROM_COUNTRY_BN,
            self::SHIP_FROM_COUNTRY_BG,
            self::SHIP_FROM_COUNTRY_BF,
            self::SHIP_FROM_COUNTRY_BI,
            self::SHIP_FROM_COUNTRY_KH,
            self::SHIP_FROM_COUNTRY_CM,
            self::SHIP_FROM_COUNTRY_CA,
            self::SHIP_FROM_COUNTRY_CV,
            self::SHIP_FROM_COUNTRY_KY,
            self::SHIP_FROM_COUNTRY_CF,
            self::SHIP_FROM_COUNTRY_TD,
            self::SHIP_FROM_COUNTRY_CL,
            self::SHIP_FROM_COUNTRY_CN,
            self::SHIP_FROM_COUNTRY_CX,
            self::SHIP_FROM_COUNTRY_CC,
            self::SHIP_FROM_COUNTRY_CO,
            self::SHIP_FROM_COUNTRY_KM,
            self::SHIP_FROM_COUNTRY_CG,
            self::SHIP_FROM_COUNTRY_CD,
            self::SHIP_FROM_COUNTRY_CK,
            self::SHIP_FROM_COUNTRY_CR,
            self::SHIP_FROM_COUNTRY_CI,
            self::SHIP_FROM_COUNTRY_HR,
            self::SHIP_FROM_COUNTRY_CU,
            self::SHIP_FROM_COUNTRY_CW,
            self::SHIP_FROM_COUNTRY_CY,
            self::SHIP_FROM_COUNTRY_CZ,
            self::SHIP_FROM_COUNTRY_DK,
            self::SHIP_FROM_COUNTRY_DJ,
            self::SHIP_FROM_COUNTRY_DM,
            self::SHIP_FROM_COUNTRY__DO,
            self::SHIP_FROM_COUNTRY_EC,
            self::SHIP_FROM_COUNTRY_EG,
            self::SHIP_FROM_COUNTRY_SV,
            self::SHIP_FROM_COUNTRY_GQ,
            self::SHIP_FROM_COUNTRY_ER,
            self::SHIP_FROM_COUNTRY_EE,
            self::SHIP_FROM_COUNTRY_ET,
            self::SHIP_FROM_COUNTRY_FK,
            self::SHIP_FROM_COUNTRY_FO,
            self::SHIP_FROM_COUNTRY_FJ,
            self::SHIP_FROM_COUNTRY_FI,
            self::SHIP_FROM_COUNTRY_FR,
            self::SHIP_FROM_COUNTRY_GF,
            self::SHIP_FROM_COUNTRY_PF,
            self::SHIP_FROM_COUNTRY_TF,
            self::SHIP_FROM_COUNTRY_GA,
            self::SHIP_FROM_COUNTRY_GM,
            self::SHIP_FROM_COUNTRY_GE,
            self::SHIP_FROM_COUNTRY_DE,
            self::SHIP_FROM_COUNTRY_GH,
            self::SHIP_FROM_COUNTRY_GI,
            self::SHIP_FROM_COUNTRY_GR,
            self::SHIP_FROM_COUNTRY_GL,
            self::SHIP_FROM_COUNTRY_GD,
            self::SHIP_FROM_COUNTRY_GP,
            self::SHIP_FROM_COUNTRY_GU,
            self::SHIP_FROM_COUNTRY_GT,
            self::SHIP_FROM_COUNTRY_GG,
            self::SHIP_FROM_COUNTRY_GN,
            self::SHIP_FROM_COUNTRY_GW,
            self::SHIP_FROM_COUNTRY_GY,
            self::SHIP_FROM_COUNTRY_HT,
            self::SHIP_FROM_COUNTRY_HM,
            self::SHIP_FROM_COUNTRY_VA,
            self::SHIP_FROM_COUNTRY_HN,
            self::SHIP_FROM_COUNTRY_HK,
            self::SHIP_FROM_COUNTRY_HU,
            self::SHIP_FROM_COUNTRY_IS,
            self::SHIP_FROM_COUNTRY_IN,
            self::SHIP_FROM_COUNTRY_ID,
            self::SHIP_FROM_COUNTRY_IR,
            self::SHIP_FROM_COUNTRY_IQ,
            self::SHIP_FROM_COUNTRY_IE,
            self::SHIP_FROM_COUNTRY_IM,
            self::SHIP_FROM_COUNTRY_IL,
            self::SHIP_FROM_COUNTRY_IT,
            self::SHIP_FROM_COUNTRY_JM,
            self::SHIP_FROM_COUNTRY_JP,
            self::SHIP_FROM_COUNTRY_JE,
            self::SHIP_FROM_COUNTRY_JO,
            self::SHIP_FROM_COUNTRY_KZ,
            self::SHIP_FROM_COUNTRY_KE,
            self::SHIP_FROM_COUNTRY_KI,
            self::SHIP_FROM_COUNTRY_KP,
            self::SHIP_FROM_COUNTRY_KR,
            self::SHIP_FROM_COUNTRY_KW,
            self::SHIP_FROM_COUNTRY_KG,
            self::SHIP_FROM_COUNTRY_LA,
            self::SHIP_FROM_COUNTRY_LV,
            self::SHIP_FROM_COUNTRY_LB,
            self::SHIP_FROM_COUNTRY_LS,
            self::SHIP_FROM_COUNTRY_LR,
            self::SHIP_FROM_COUNTRY_LY,
            self::SHIP_FROM_COUNTRY_LI,
            self::SHIP_FROM_COUNTRY_LT,
            self::SHIP_FROM_COUNTRY_LU,
            self::SHIP_FROM_COUNTRY_MO,
            self::SHIP_FROM_COUNTRY_MK,
            self::SHIP_FROM_COUNTRY_MG,
            self::SHIP_FROM_COUNTRY_MW,
            self::SHIP_FROM_COUNTRY_MY,
            self::SHIP_FROM_COUNTRY_MV,
            self::SHIP_FROM_COUNTRY_ML,
            self::SHIP_FROM_COUNTRY_MT,
            self::SHIP_FROM_COUNTRY_MH,
            self::SHIP_FROM_COUNTRY_MQ,
            self::SHIP_FROM_COUNTRY_MR,
            self::SHIP_FROM_COUNTRY_MU,
            self::SHIP_FROM_COUNTRY_YT,
            self::SHIP_FROM_COUNTRY_MX,
            self::SHIP_FROM_COUNTRY_FM,
            self::SHIP_FROM_COUNTRY_MD,
            self::SHIP_FROM_COUNTRY_MC,
            self::SHIP_FROM_COUNTRY_MN,
            self::SHIP_FROM_COUNTRY_ME,
            self::SHIP_FROM_COUNTRY_MS,
            self::SHIP_FROM_COUNTRY_MA,
            self::SHIP_FROM_COUNTRY_MZ,
            self::SHIP_FROM_COUNTRY_MM,
            self::SHIP_FROM_COUNTRY_NA,
            self::SHIP_FROM_COUNTRY_NR,
            self::SHIP_FROM_COUNTRY_NP,
            self::SHIP_FROM_COUNTRY_NL,
            self::SHIP_FROM_COUNTRY_NC,
            self::SHIP_FROM_COUNTRY_NZ,
            self::SHIP_FROM_COUNTRY_NI,
            self::SHIP_FROM_COUNTRY_NE,
            self::SHIP_FROM_COUNTRY_NG,
            self::SHIP_FROM_COUNTRY_NU,
            self::SHIP_FROM_COUNTRY_NF,
            self::SHIP_FROM_COUNTRY_MP,
            self::SHIP_FROM_COUNTRY_NO,
            self::SHIP_FROM_COUNTRY_OM,
            self::SHIP_FROM_COUNTRY_PK,
            self::SHIP_FROM_COUNTRY_PW,
            self::SHIP_FROM_COUNTRY_PS,
            self::SHIP_FROM_COUNTRY_PA,
            self::SHIP_FROM_COUNTRY_PG,
            self::SHIP_FROM_COUNTRY_PY,
            self::SHIP_FROM_COUNTRY_PE,
            self::SHIP_FROM_COUNTRY_PH,
            self::SHIP_FROM_COUNTRY_PN,
            self::SHIP_FROM_COUNTRY_PL,
            self::SHIP_FROM_COUNTRY_PT,
            self::SHIP_FROM_COUNTRY_PR,
            self::SHIP_FROM_COUNTRY_QA,
            self::SHIP_FROM_COUNTRY_RE,
            self::SHIP_FROM_COUNTRY_RO,
            self::SHIP_FROM_COUNTRY_RU,
            self::SHIP_FROM_COUNTRY_RW,
            self::SHIP_FROM_COUNTRY_BL,
            self::SHIP_FROM_COUNTRY_SH,
            self::SHIP_FROM_COUNTRY_KN,
            self::SHIP_FROM_COUNTRY_LC,
            self::SHIP_FROM_COUNTRY_MF,
            self::SHIP_FROM_COUNTRY_PM,
            self::SHIP_FROM_COUNTRY_VC,
            self::SHIP_FROM_COUNTRY_WS,
            self::SHIP_FROM_COUNTRY_SM,
            self::SHIP_FROM_COUNTRY_ST,
            self::SHIP_FROM_COUNTRY_SA,
            self::SHIP_FROM_COUNTRY_SN,
            self::SHIP_FROM_COUNTRY_RS,
            self::SHIP_FROM_COUNTRY_SC,
            self::SHIP_FROM_COUNTRY_SL,
            self::SHIP_FROM_COUNTRY_SG,
            self::SHIP_FROM_COUNTRY_SX,
            self::SHIP_FROM_COUNTRY_SK,
            self::SHIP_FROM_COUNTRY_SI,
            self::SHIP_FROM_COUNTRY_SB,
            self::SHIP_FROM_COUNTRY_SO,
            self::SHIP_FROM_COUNTRY_ZA,
            self::SHIP_FROM_COUNTRY_GS,
            self::SHIP_FROM_COUNTRY_SS,
            self::SHIP_FROM_COUNTRY_ES,
            self::SHIP_FROM_COUNTRY_LK,
            self::SHIP_FROM_COUNTRY_SD,
            self::SHIP_FROM_COUNTRY_SR,
            self::SHIP_FROM_COUNTRY_SJ,
            self::SHIP_FROM_COUNTRY_SZ,
            self::SHIP_FROM_COUNTRY_SE,
            self::SHIP_FROM_COUNTRY_CH,
            self::SHIP_FROM_COUNTRY_SY,
            self::SHIP_FROM_COUNTRY_TW,
            self::SHIP_FROM_COUNTRY_TJ,
            self::SHIP_FROM_COUNTRY_TZ,
            self::SHIP_FROM_COUNTRY_TH,
            self::SHIP_FROM_COUNTRY_TL,
            self::SHIP_FROM_COUNTRY_TG,
            self::SHIP_FROM_COUNTRY_TK,
            self::SHIP_FROM_COUNTRY_TO,
            self::SHIP_FROM_COUNTRY_TT,
            self::SHIP_FROM_COUNTRY_TN,
            self::SHIP_FROM_COUNTRY_TR,
            self::SHIP_FROM_COUNTRY_TM,
            self::SHIP_FROM_COUNTRY_TC,
            self::SHIP_FROM_COUNTRY_TV,
            self::SHIP_FROM_COUNTRY_UG,
            self::SHIP_FROM_COUNTRY_UA,
            self::SHIP_FROM_COUNTRY_AE,
            self::SHIP_FROM_COUNTRY_GB,
            self::SHIP_FROM_COUNTRY_US,
            self::SHIP_FROM_COUNTRY_UM,
            self::SHIP_FROM_COUNTRY_UY,
            self::SHIP_FROM_COUNTRY_UZ,
            self::SHIP_FROM_COUNTRY_VU,
            self::SHIP_FROM_COUNTRY_VE,
            self::SHIP_FROM_COUNTRY_VN,
            self::SHIP_FROM_COUNTRY_VG,
            self::SHIP_FROM_COUNTRY_VI,
            self::SHIP_FROM_COUNTRY_WF,
            self::SHIP_FROM_COUNTRY_EH,
            self::SHIP_FROM_COUNTRY_YE,
            self::SHIP_FROM_COUNTRY_ZM,
            self::SHIP_FROM_COUNTRY_ZW,
        ];
    }

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('lineNumber', $data ?? [], null);
        $this->setIfExists('shipFromCountry', $data ?? [], null);
        $this->setIfExists('orderLineStatuses', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['lineNumber'] === null) {
            $invalidProperties[] = "'lineNumber' can't be null";
        }
        if ($this->container['shipFromCountry'] === null) {
            $invalidProperties[] = "'shipFromCountry' can't be null";
        }
        $allowedValues = $this->getShipFromCountryAllowableValues();
        if (!is_null($this->container['shipFromCountry']) && !in_array($this->container['shipFromCountry'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shipFromCountry', must be one of '%s'",
                $this->container['shipFromCountry'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['orderLineStatuses'] === null) {
            $invalidProperties[] = "'orderLineStatuses' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets lineNumber
     *
     * @return string
    
     */
    public function getLineNumber()
    {
        return $this->container['lineNumber'];
    }

    /**
     * Sets lineNumber
     *
     * @param string $lineNumber orderLine number
     *
     * @return self
    
     */
    public function setLineNumber($lineNumber)
    {
        if (is_null($lineNumber)) {
            throw new \InvalidArgumentException('non-nullable lineNumber cannot be null');
        }

        $this->container['lineNumber'] = $lineNumber;
        return $this;
    }

    /**
     * Gets shipFromCountry
     *
     * @return string
    
     */
    public function getShipFromCountry()
    {
        return $this->container['shipFromCountry'];
    }

    /**
     * Sets shipFromCountry
     *
     * @param string $shipFromCountry The ship from country is associated with the details for each individual item in the purchase order
     *
     * @return self
    
     */
    public function setShipFromCountry($shipFromCountry)
    {
        if (is_null($shipFromCountry)) {
            throw new \InvalidArgumentException('non-nullable shipFromCountry cannot be null');
        }
        $allowedValues = $this->getShipFromCountryAllowableValues();
        if (!in_array($shipFromCountry, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shipFromCountry', must be one of '%s'",
                    $shipFromCountry,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['shipFromCountry'] = $shipFromCountry;
        return $this;
    }

    /**
     * Gets orderLineStatuses
     *
     * @return \Walmart\Models\MP\CA\Orders\OrderShipmentOrderLinesOrderLineInnerOrderLineStatuses
    
     */
    public function getOrderLineStatuses()
    {
        return $this->container['orderLineStatuses'];
    }

    /**
     * Sets orderLineStatuses
     *
     * @param \Walmart\Models\MP\CA\Orders\OrderShipmentOrderLinesOrderLineInnerOrderLineStatuses $orderLineStatuses orderLineStatuses
     *
     * @return self
    
     */
    public function setOrderLineStatuses($orderLineStatuses)
    {
        if (is_null($orderLineStatuses)) {
            throw new \InvalidArgumentException('non-nullable orderLineStatuses cannot be null');
        }

        $this->container['orderLineStatuses'] = $orderLineStatuses;
        return $this;
    }
}
