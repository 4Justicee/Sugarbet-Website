(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
    typeof define === 'function' && define.amd ? define(factory) :
    (global = typeof globalThis !== 'undefined' ? globalThis : global || self, (global.FormValidation = global.FormValidation || {}, global.FormValidation.locales = global.FormValidation.locales || {}, global.FormValidation.locales.es_ES = factory()));
})(this, (function () { 'use strict';

    /**
     * Spanish language package
     * Translated by @vadail
     */

    var es_ES = {
        base64: {
            default: 'Por favor introduce un valor v  lido en base 64',
        },
        between: {
            default: 'Por favor introduce un valor entre %s y %s',
            notInclusive: 'Por favor introduce un valor s  lo entre %s and %s',
        },
        bic: {
            default: 'Por favor introduce un n  mero BIC v  lido',
        },
        callback: {
            default: 'Por favor introduce un valor v  lido',
        },
        choice: {
            between: 'Por favor elija de %s a %s opciones',
            default: 'Por favor introduce un valor v  lido',
            less: 'Por favor elija %s opciones como m  nimo',
            more: 'Por favor elija %s optiones como m  ximo',
        },
        color: {
            default: 'Por favor introduce un color v  lido',
        },
        creditCard: {
            default: 'Por favor introduce un n  mero v  lido de tarjeta de cr  dito',
        },
        cusip: {
            default: 'Por favor introduce un n  mero CUSIP v  lido',
        },
        date: {
            default: 'Por favor introduce una fecha v  lida',
            max: 'Por favor introduce una fecha previa al %s',
            min: 'Por favor introduce una fecha posterior al %s',
            range: 'Por favor introduce una fecha entre el %s y el %s',
        },
        different: {
            default: 'Por favor introduce un valor distinto',
        },
        digits: {
            default: 'Por favor introduce s  lo d  gitos',
        },
        ean: {
            default: 'Por favor introduce un n  mero EAN v  lido',
        },
        ein: {
            default: 'Por favor introduce un n  mero EIN v  lido',
        },
        emailAddress: {
            default: 'Por favor introduce un email v  lido',
        },
        file: {
            default: 'Por favor elija un archivo v  lido',
        },
        greaterThan: {
            default: 'Por favor introduce un valor mayor o igual a %s',
            notInclusive: 'Por favor introduce un valor mayor que %s',
        },
        grid: {
            default: 'Por favor introduce un n  mero GRId v  lido',
        },
        hex: {
            default: 'Por favor introduce un valor hexadecimal v  lido',
        },
        iban: {
            countries: {
                AD: 'Andorra',
                AE: 'Emiratos   rabes Unidos',
                AL: 'Albania',
                AO: 'Angola',
                AT: 'Austria',
                AZ: 'Azerbaiy  n',
                BA: 'Bosnia-Herzegovina',
                BE: 'B  lgica',
                BF: 'Burkina Faso',
                BG: 'Bulgaria',
                BH: 'Bar  in',
                BI: 'Burundi',
                BJ: 'Ben  n',
                BR: 'Brasil',
                CH: 'Suiza',
                CI: 'Costa de Marfil',
                CM: 'Camer  n',
                CR: 'Costa Rica',
                CV: 'Cabo Verde',
                CY: 'Cyprus',
                CZ: 'Rep  blica Checa',
                DE: 'Alemania',
                DK: 'Dinamarca',
                DO: 'Rep  blica Dominicana',
                DZ: 'Argelia',
                EE: 'Estonia',
                ES: 'Espa  a',
                FI: 'Finlandia',
                FO: 'Islas Feroe',
                FR: 'Francia',
                GB: 'Reino Unido',
                GE: 'Georgia',
                GI: 'Gibraltar',
                GL: 'Groenlandia',
                GR: 'Grecia',
                GT: 'Guatemala',
                HR: 'Croacia',
                HU: 'Hungr  a',
                IE: 'Irlanda',
                IL: 'Israel',
                IR: 'Iran',
                IS: 'Islandia',
                IT: 'Italia',
                JO: 'Jordania',
                KW: 'Kuwait',
                KZ: 'Kazajist  n',
                LB: 'L  bano',
                LI: 'Liechtenstein',
                LT: 'Lituania',
                LU: 'Luxemburgo',
                LV: 'Letonia',
                MC: 'M  naco',
                MD: 'Moldavia',
                ME: 'Montenegro',
                MG: 'Madagascar',
                MK: 'Macedonia',
                ML: 'Mal  ',
                MR: 'Mauritania',
                MT: 'Malta',
                MU: 'Mauricio',
                MZ: 'Mozambique',
                NL: 'Pa  ses Bajos',
                NO: 'Noruega',
                PK: 'Pakist  n',
                PL: 'Poland',
                PS: 'Palestina',
                PT: 'Portugal',
                QA: 'Catar',
                RO: 'Rumania',
                RS: 'Serbia',
                SA: 'Arabia Saudita',
                SE: 'Suecia',
                SI: 'Eslovenia',
                SK: 'Eslovaquia',
                SM: 'San Marino',
                SN: 'Senegal',
                TL: 'Timor Oriental',
                TN: 'T  nez',
                TR: 'Turqu  a',
                VG: 'Islas V  rgenes Brit  nicas',
                XK: 'Rep  blica de Kosovo',
            },
            country: 'Por favor introduce un n  mero IBAN v  lido en %s',
            default: 'Por favor introduce un n  mero IBAN v  lido',
        },
        id: {
            countries: {
                BA: 'Bosnia Herzegovina',
                BG: 'Bulgaria',
                BR: 'Brasil',
                CH: 'Suiza',
                CL: 'Chile',
                CN: 'China',
                CZ: 'Rep  blica Checa',
                DK: 'Dinamarca',
                EE: 'Estonia',
                ES: 'Espa  a',
                FI: 'Finlandia',
                HR: 'Croacia',
                IE: 'Irlanda',
                IS: 'Islandia',
                LT: 'Lituania',
                LV: 'Letonia',
                ME: 'Montenegro',
                MK: 'Macedonia',
                NL: 'Pa  ses Bajos',
                PL: 'Poland',
                RO: 'Romania',
                RS: 'Serbia',
                SE: 'Suecia',
                SI: 'Eslovenia',
                SK: 'Eslovaquia',
                SM: 'San Marino',
                TH: 'Tailandia',
                TR: 'Turqu  a',
                ZA: 'Sud  frica',
            },
            country: 'Por favor introduce un n  mero v  lido de identificaci  n en %s',
            default: 'Por favor introduce un n  mero de identificaci  n v  lido',
        },
        identical: {
            default: 'Por favor introduce el mismo valor',
        },
        imei: {
            default: 'Por favor introduce un n  mero IMEI v  lido',
        },
        imo: {
            default: 'Por favor introduce un n  mero IMO v  lido',
        },
        integer: {
            default: 'Por favor introduce un n  mero v  lido',
        },
        ip: {
            default: 'Por favor introduce una direcci  n IP v  lida',
            ipv4: 'Por favor introduce una direcci  n IPv4 v  lida',
            ipv6: 'Por favor introduce una direcci  n IPv6 v  lida',
        },
        isbn: {
            default: 'Por favor introduce un n  mero ISBN v  lido',
        },
        isin: {
            default: 'Por favor introduce un n  mero ISIN v  lido',
        },
        ismn: {
            default: 'Por favor introduce un n  mero ISMN v  lido',
        },
        issn: {
            default: 'Por favor introduce un n  mero ISSN v  lido',
        },
        lessThan: {
            default: 'Por favor introduce un valor menor o igual a %s',
            notInclusive: 'Por favor introduce un valor menor que %s',
        },
        mac: {
            default: 'Por favor introduce una direcci  n MAC v  lida',
        },
        meid: {
            default: 'Por favor introduce un n  mero MEID v  lido',
        },
        notEmpty: {
            default: 'Por favor introduce un valor',
        },
        numeric: {
            default: 'Por favor introduce un n  mero decimal v  lido',
        },
        phone: {
            countries: {
                AE: 'Emiratos   rabes Unidos',
                BG: 'Bulgaria',
                BR: 'Brasil',
                CN: 'China',
                CZ: 'Rep  blica Checa',
                DE: 'Alemania',
                DK: 'Dinamarca',
                ES: 'Espa  a',
                FR: 'Francia',
                GB: 'Reino Unido',
                IN: 'India',
                MA: 'Marruecos',
                NL: 'Pa  ses Bajos',
                PK: 'Pakist  n',
                RO: 'Rumania',
                RU: 'Rusa',
                SK: 'Eslovaquia',
                TH: 'Tailandia',
                US: 'Estados Unidos',
                VE: 'Venezuela',
            },
            country: 'Por favor introduce un n  mero v  lido de tel  fono en %s',
            default: 'Por favor introduce un n  mero v  lido de tel  fono',
        },
        promise: {
            default: 'Por favor introduce un valor v  lido',
        },
        regexp: {
            default: 'Por favor introduce un valor que coincida con el patr  n',
        },
        remote: {
            default: 'Por favor introduce un valor v  lido',
        },
        rtn: {
            default: 'Por favor introduce un n  mero RTN v  lido',
        },
        sedol: {
            default: 'Por favor introduce un n  mero SEDOL v  lido',
        },
        siren: {
            default: 'Por favor introduce un n  mero SIREN v  lido',
        },
        siret: {
            default: 'Por favor introduce un n  mero SIRET v  lido',
        },
        step: {
            default: 'Por favor introduce un paso v  lido de %s',
        },
        stringCase: {
            default: 'Por favor introduce s  lo caracteres en min  scula',
            upper: 'Por favor introduce s  lo caracteres en may  scula',
        },
        stringLength: {
            between: 'Por favor introduce un valor con una longitud entre %s y %s caracteres',
            default: 'Por favor introduce un valor con una longitud v  lida',
            less: 'Por favor introduce menos de %s caracteres',
            more: 'Por favor introduce m  s de %s caracteres',
        },
        uri: {
            default: 'Por favor introduce una URI v  lida',
        },
        uuid: {
            default: 'Por favor introduce un n  mero UUID v  lido',
            version: 'Por favor introduce una versi  n UUID v  lida para %s',
        },
        vat: {
            countries: {
                AT: 'Austria',
                BE: 'B  lgica',
                BG: 'Bulgaria',
                BR: 'Brasil',
                CH: 'Suiza',
                CY: 'Chipre',
                CZ: 'Rep  blica Checa',
                DE: 'Alemania',
                DK: 'Dinamarca',
                EE: 'Estonia',
                EL: 'Grecia',
                ES: 'Espa  a',
                FI: 'Finlandia',
                FR: 'Francia',
                GB: 'Reino Unido',
                GR: 'Grecia',
                HR: 'Croacia',
                HU: 'Hungr  a',
                IE: 'Irlanda',
                IS: 'Islandia',
                IT: 'Italia',
                LT: 'Lituania',
                LU: 'Luxemburgo',
                LV: 'Letonia',
                MT: 'Malta',
                NL: 'Pa  ses Bajos',
                NO: 'Noruega',
                PL: 'Polonia',
                PT: 'Portugal',
                RO: 'Ruman  a',
                RS: 'Serbia',
                RU: 'Rusa',
                SE: 'Suecia',
                SI: 'Eslovenia',
                SK: 'Eslovaquia',
                VE: 'Venezuela',
                ZA: 'Sud  frica',
            },
            country: 'Por favor introduce un n  mero IVA v  lido en %s',
            default: 'Por favor introduce un n  mero IVA v  lido',
        },
        vin: {
            default: 'Por favor introduce un n  mero VIN v  lido',
        },
        zipCode: {
            countries: {
                AT: 'Austria',
                BG: 'Bulgaria',
                BR: 'Brasil',
                CA: 'Canad  ',
                CH: 'Suiza',
                CZ: 'Rep  blica Checa',
                DE: 'Alemania',
                DK: 'Dinamarca',
                ES: 'Espa  a',
                FR: 'Francia',
                GB: 'Reino Unido',
                IE: 'Irlanda',
                IN: 'India',
                IT: 'Italia',
                MA: 'Marruecos',
                NL: 'Pa  ses Bajos',
                PL: 'Poland',
                PT: 'Portugal',
                RO: 'Ruman  a',
                RU: 'Rusa',
                SE: 'Suecia',
                SG: 'Singapur',
                SK: 'Eslovaquia',
                US: 'Estados Unidos',
            },
            country: 'Por favor introduce un c  digo postal v  lido en %s',
            default: 'Por favor introduce un c  digo postal v  lido',
        },
    };

    return es_ES;

}));