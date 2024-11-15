(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
    typeof define === 'function' && define.amd ? define(factory) :
    (global = typeof globalThis !== 'undefined' ? globalThis : global || self, (global.FormValidation = global.FormValidation || {}, global.FormValidation.locales = global.FormValidation.locales || {}, global.FormValidation.locales.ca_ES = factory()));
})(this, (function () { 'use strict';

    /**
     * Catalan language package
     * Translated by @ArnauAregall
     */

    var ca_ES = {
        base64: {
            default: 'Si us plau introdueix un valor v  lid en base 64',
        },
        between: {
            default: 'Si us plau introdueix un valor entre %s i %s',
            notInclusive: 'Si us plau introdueix un valor compr  s entre %s i %s',
        },
        bic: {
            default: 'Si us plau introdueix un nombre BIC v  lid',
        },
        callback: {
            default: 'Si us plau introdueix un valor v  lid',
        },
        choice: {
            between: 'Si us plau escull entre %s i %s opcions',
            default: 'Si us plau introdueix un valor v  lid',
            less: 'Si us plau escull %s opcions com a m  nim',
            more: 'Si us plau escull %s opcions com a m  xim',
        },
        color: {
            default: 'Si us plau introdueix un color v  lid',
        },
        creditCard: {
            default: 'Si us plau introdueix un nombre v  lid de targeta de cr  dit',
        },
        cusip: {
            default: 'Si us plau introdueix un nombre CUSIP v  lid',
        },
        date: {
            default: 'Si us plau introdueix una data v  lida',
            max: 'Si us plau introdueix una data anterior %s',
            min: 'Si us plau introdueix una data posterior a %s',
            range: 'Si us plau introdueix una data compresa entre %s i %s',
        },
        different: {
            default: 'Si us plau introdueix un valor diferent',
        },
        digits: {
            default: 'Si us plau introdueix nom  s d  gits',
        },
        ean: {
            default: 'Si us plau introdueix un nombre EAN v  lid',
        },
        ein: {
            default: 'Si us plau introdueix un nombre EIN v  lid',
        },
        emailAddress: {
            default: 'Si us plau introdueix una adre  a electr  nica v  lida',
        },
        file: {
            default: 'Si us plau selecciona un arxiu v  lid',
        },
        greaterThan: {
            default: 'Si us plau introdueix un valor m  s gran o igual a %s',
            notInclusive: 'Si us plau introdueix un valor m  s gran que %s',
        },
        grid: {
            default: 'Si us plau introdueix un nombre GRId v  lid',
        },
        hex: {
            default: 'Si us plau introdueix un valor hexadecimal v  lid',
        },
        iban: {
            countries: {
                AD: 'Andorra',
                AE: 'Emirats   rabs Units',
                AL: 'Alb  nia',
                AO: 'Angola',
                AT: '  ustria',
                AZ: 'Azerbaidjan',
                BA: 'B  snia i Hercegovina',
                BE: 'B  lgica',
                BF: 'Burkina Faso',
                BG: 'Bulg  ria',
                BH: 'Bahrain',
                BI: 'Burundi',
                BJ: 'Ben  n',
                BR: 'Brasil',
                CH: 'Su  ssa',
                CI: "Costa d'Ivori",
                CM: 'Camerun',
                CR: 'Costa Rica',
                CV: 'Cap Verd',
                CY: 'Xipre',
                CZ: 'Rep  blica Txeca',
                DE: 'Alemanya',
                DK: 'Dinamarca',
                DO: 'Rep  blica Dominicana',
                DZ: 'Alg  ria',
                EE: 'Est  nia',
                ES: 'Espanya',
                FI: 'Finl  ndia',
                FO: 'Illes F  roe',
                FR: 'Fran  a',
                GB: 'Regne Unit',
                GE: 'Ge  rgia',
                GI: 'Gibraltar',
                GL: 'Grenl  ndia',
                GR: 'Gr  cia',
                GT: 'Guatemala',
                HR: 'Cro  cia',
                HU: 'Hongria',
                IE: 'Irlanda',
                IL: 'Israel',
                IR: 'Iran',
                IS: 'Isl  ndia',
                IT: 'It  lia',
                JO: 'Jord  nia',
                KW: 'Kuwait',
                KZ: 'Kazajist  n',
                LB: 'L  ban',
                LI: 'Liechtenstein',
                LT: 'Litu  nia',
                LU: 'Luxemburg',
                LV: 'Let  nia',
                MC: 'M  naco',
                MD: 'Mold  via',
                ME: 'Montenegro',
                MG: 'Madagascar',
                MK: 'Maced  nia',
                ML: 'Malo',
                MR: 'Maurit  nia',
                MT: 'Malta',
                MU: 'Maurici',
                MZ: 'Mo  ambic',
                NL: 'Pa  sos Baixos',
                NO: 'Noruega',
                PK: 'Pakistan',
                PL: 'Pol  nia',
                PS: 'Palestina',
                PT: 'Portugal',
                QA: 'Qatar',
                RO: 'Romania',
                RS: 'S  rbia',
                SA: 'Ar  bia Saudita',
                SE: 'Su  cia',
                SI: 'Eslov  nia',
                SK: 'Eslov  quia',
                SM: 'San Marino',
                SN: 'Senegal',
                TL: 'Timor Oriental',
                TN: 'Tun  sia',
                TR: 'Turquia',
                VG: 'Illes Verges Brit  niques',
                XK: 'Rep  blica de Kosovo',
            },
            country: 'Si us plau introdueix un nombre IBAN v  lid a %s',
            default: 'Si us plau introdueix un nombre IBAN v  lid',
        },
        id: {
            countries: {
                BA: 'B  snia i Hercegovina',
                BG: 'Bulg  ria',
                BR: 'Brasil',
                CH: 'Su  ssa',
                CL: 'Xile',
                CN: 'Xina',
                CZ: 'Rep  blica Checa',
                DK: 'Dinamarca',
                EE: 'Est  nia',
                ES: 'Espanya',
                FI: 'Finlpandia',
                HR: 'Crop  cia',
                IE: 'Irlanda',
                IS: 'Isl  ndia',
                LT: 'Lituania',
                LV: 'Let  nia',
                ME: 'Montenegro',
                MK: 'Maced  nia',
                NL: 'Pa  sos Baixos',
                PL: 'Pol  nia',
                RO: 'Romania',
                RS: 'S  rbia',
                SE: 'Su  cia',
                SI: 'Eslov  nia',
                SK: 'Eslov  quia',
                SM: 'San Marino',
                TH: 'Tail  ndia',
                TR: 'Turquia',
                ZA: 'Sud-  frica',
            },
            country: "Si us plau introdueix un nombre d'identificaci   v  lid a %s",
            default: "Si us plau introdueix un nombre d'identificaci   v  lid",
        },
        identical: {
            default: 'Si us plau introdueix exactament el mateix valor',
        },
        imei: {
            default: 'Si us plau introdueix un nombre IMEI v  lid',
        },
        imo: {
            default: 'Si us plau introdueix un nombre IMO v  lid',
        },
        integer: {
            default: 'Si us plau introdueix un nombre v  lid',
        },
        ip: {
            default: 'Si us plau introdueix una direcci   IP v  lida',
            ipv4: 'Si us plau introdueix una direcci   IPV4 v  lida',
            ipv6: 'Si us plau introdueix una direcci   IPV6 v  lida',
        },
        isbn: {
            default: 'Si us plau introdueix un nombre ISBN v  lid',
        },
        isin: {
            default: 'Si us plau introdueix un nombre ISIN v  lid',
        },
        ismn: {
            default: 'Si us plau introdueix un nombre ISMN v  lid',
        },
        issn: {
            default: 'Si us plau introdueix un nombre ISSN v  lid',
        },
        lessThan: {
            default: 'Si us plau introdueix un valor menor o igual a %s',
            notInclusive: 'Si us plau introdueix un valor menor que %s',
        },
        mac: {
            default: 'Si us plau introdueix una adre  a MAC v  lida',
        },
        meid: {
            default: 'Si us plau introdueix nombre MEID v  lid',
        },
        notEmpty: {
            default: 'Si us plau introdueix un valor',
        },
        numeric: {
            default: 'Si us plau introdueix un nombre decimal v  lid',
        },
        phone: {
            countries: {
                AE: 'Emirats   rabs Units',
                BG: 'Bulg  ria',
                BR: 'Brasil',
                CN: 'Xina',
                CZ: 'Rep  blica Checa',
                DE: 'Alemanya',
                DK: 'Dinamarca',
                ES: 'Espanya',
                FR: 'Fran  a',
                GB: 'Regne Unit',
                IN: '  ndia',
                MA: 'Marroc',
                NL: 'Pa  sos Baixos',
                PK: 'Pakistan',
                RO: 'Romania',
                RU: 'R  ssia',
                SK: 'Eslov  quia',
                TH: 'Tail  ndia',
                US: 'Estats Units',
                VE: 'Vene  uela',
            },
            country: 'Si us plau introdueix un tel  fon v  lid a %s',
            default: 'Si us plau introdueix un tel  fon v  lid',
        },
        promise: {
            default: 'Si us plau introdueix un valor v  lid',
        },
        regexp: {
            default: 'Si us plau introdueix un valor que coincideixi amb el patr  ',
        },
        remote: {
            default: 'Si us plau introdueix un valor v  lid',
        },
        rtn: {
            default: 'Si us plau introdueix un nombre RTN v  lid',
        },
        sedol: {
            default: 'Si us plau introdueix un nombre SEDOL v  lid',
        },
        siren: {
            default: 'Si us plau introdueix un nombre SIREN v  lid',
        },
        siret: {
            default: 'Si us plau introdueix un nombre SIRET v  lid',
        },
        step: {
            default: 'Si us plau introdueix un pas v  lid de %s',
        },
        stringCase: {
            default: 'Si us plau introdueix nom  s car  cters en min  scula',
            upper: 'Si us plau introdueix nom  s car  cters en maj  scula',
        },
        stringLength: {
            between: 'Si us plau introdueix un valor amb una longitud compresa entre %s i %s car  cters',
            default: 'Si us plau introdueix un valor amb una longitud v  lida',
            less: 'Si us plau introdueix menys de %s car  cters',
            more: 'Si us plau introdueix m  s de %s car  cters',
        },
        uri: {
            default: 'Si us plau introdueix una URI v  lida',
        },
        uuid: {
            default: 'Si us plau introdueix un nom UUID v  lid',
            version: 'Si us plau introdueix una versi   UUID v  lida per %s',
        },
        vat: {
            countries: {
                AT: '  ustria',
                BE: 'B  lgica',
                BG: 'Bulg  ria',
                BR: 'Brasil',
                CH: 'Su  ssa',
                CY: 'Xipre',
                CZ: 'Rep  blica Checa',
                DE: 'Alemanya',
                DK: 'Dinamarca',
                EE: 'Est  nia',
                EL: 'Gr  cia',
                ES: 'Espanya',
                FI: 'Finl  ndia',
                FR: 'Fran  a',
                GB: 'Regne Unit',
                GR: 'Gr  cia',
                HR: 'Cro  cia',
                HU: 'Hongria',
                IE: 'Irlanda',
                IS: 'Isl  ndia',
                IT: 'It  lia',
                LT: 'Litu  nia',
                LU: 'Luxemburg',
                LV: 'Let  nia',
                MT: 'Malta',
                NL: 'Pa  sos Baixos',
                NO: 'Noruega',
                PL: 'Pol  nia',
                PT: 'Portugal',
                RO: 'Romania',
                RS: 'S  rbia',
                RU: 'R  ssia',
                SE: 'Su  cia',
                SI: 'Eslov  nia',
                SK: 'Eslov  quia',
                VE: 'Vene  uela',
                ZA: 'Sud-  frica',
            },
            country: "Si us plau introdueix una quantitat d' IVA v  lida a %s",
            default: "Si us plau introdueix una quantitat d'IVA v  lida",
        },
        vin: {
            default: 'Si us plau introdueix un nombre VIN v  lid',
        },
        zipCode: {
            countries: {
                AT: '  ustria',
                BG: 'Bulg  ria',
                BR: 'Brasil',
                CA: 'Canad  ',
                CH: 'Su  ssa',
                CZ: 'Rep  blica Checa',
                DE: 'Alemanya',
                DK: 'Dinamarca',
                ES: 'Espanya',
                FR: 'Fran  a',
                GB: 'Rege Unit',
                IE: 'Irlanda',
                IN: '  ndia',
                IT: 'It  lia',
                MA: 'Marroc',
                NL: 'Pa  sos Baixos',
                PL: 'Pol  nia',
                PT: 'Portugal',
                RO: 'Romania',
                RU: 'R  ssia',
                SE: 'Su  cia',
                SG: 'Singapur',
                SK: 'Eslov  quia',
                US: 'Estats Units',
            },
            country: 'Si us plau introdueix un codi postal v  lid a %s',
            default: 'Si us plau introdueix un codi postal v  lid',
        },
    };

    return ca_ES;

}));
