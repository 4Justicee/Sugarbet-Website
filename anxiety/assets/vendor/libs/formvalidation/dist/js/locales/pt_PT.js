(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
    typeof define === 'function' && define.amd ? define(factory) :
    (global = typeof globalThis !== 'undefined' ? globalThis : global || self, (global.FormValidation = global.FormValidation || {}, global.FormValidation.locales = global.FormValidation.locales || {}, global.FormValidation.locales.pt_PT = factory()));
})(this, (function () { 'use strict';

    /**
     * Portuguese (Portugal) language package
     * Translated by @rtbfreitas
     */

    var pt_PT = {
        base64: {
            default: 'Por favor insira um c  digo base 64 v  lido',
        },
        between: {
            default: 'Por favor insira um valor entre %s e %s',
            notInclusive: 'Por favor insira um valor estritamente entre %s e %s',
        },
        bic: {
            default: 'Por favor insira um n  mero BIC v  lido',
        },
        callback: {
            default: 'Por favor insira um valor v  lido',
        },
        choice: {
            between: 'Por favor escolha de %s a %s op    es',
            default: 'Por favor insira um valor v  lido',
            less: 'Por favor escolha %s op    es no m  nimo',
            more: 'Por favor escolha %s op    es no m  ximo',
        },
        color: {
            default: 'Por favor insira uma cor v  lida',
        },
        creditCard: {
            default: 'Por favor insira um n  mero de cart  o de cr  dito v  lido',
        },
        cusip: {
            default: 'Por favor insira um n  mero CUSIP v  lido',
        },
        date: {
            default: 'Por favor insira uma data v  lida',
            max: 'Por favor insira uma data anterior a %s',
            min: 'Por favor insira uma data posterior a %s',
            range: 'Por favor insira uma data entre %s e %s',
        },
        different: {
            default: 'Por favor insira valores diferentes',
        },
        digits: {
            default: 'Por favor insira somente d  gitos',
        },
        ean: {
            default: 'Por favor insira um n  mero EAN v  lido',
        },
        ein: {
            default: 'Por favor insira um n  mero EIN v  lido',
        },
        emailAddress: {
            default: 'Por favor insira um email v  lido',
        },
        file: {
            default: 'Por favor escolha um arquivo v  lido',
        },
        greaterThan: {
            default: 'Por favor insira um valor maior ou igual a %s',
            notInclusive: 'Por favor insira um valor maior do que %s',
        },
        grid: {
            default: 'Por favor insira uma GRID v  lida',
        },
        hex: {
            default: 'Por favor insira um hexadecimal v  lido',
        },
        iban: {
            countries: {
                AD: 'Andorra',
                AE: 'Emirados   rabes',
                AL: 'Alb  nia',
                AO: 'Angola',
                AT: '  ustria',
                AZ: 'Azerbaij  o',
                BA: 'B  snia-Herzegovina',
                BE: 'B  lgica',
                BF: 'Burkina Faso',
                BG: 'Bulg  ria',
                BH: 'Bahrain',
                BI: 'Burundi',
                BJ: 'Benin',
                BR: 'Brasil',
                CH: 'Su    a',
                CM: 'Camar  es',
                CR: 'Costa Rica',
                CV: 'Cabo Verde',
                CY: 'Chipre',
                CZ: 'Rep  blica Checa',
                DE: 'Alemanha',
                DK: 'Dinamarca',
                DO: 'Rep  blica Dominicana',
                DZ: 'Arg  lia',
                EE: 'Est  nia',
                ES: 'Espanha',
                FI: 'Finl  ndia',
                FO: 'Ilhas Faro  ',
                FR: 'Fran  a',
                GB: 'Reino Unido',
                GE: 'Georgia',
                GI: 'Gibraltar',
                GL: 'Groenl  ndia',
                GR: 'Gr  cia',
                GT: 'Guatemala',
                HR: 'Cro  cia',
                HU: 'Hungria',
                IC: 'Costa do Marfim',
                IE: 'Ireland',
                IL: 'Israel',
                IR: 'Ir  o',
                IS: 'Isl  ndia',
                JO: 'Jordan',
                KW: 'Kuwait',
                KZ: 'Cazaquist  o',
                LB: 'L  bano',
                LI: 'Liechtenstein',
                LT: 'Litu  nia',
                LU: 'Luxemburgo',
                LV: 'Let  nia',
                MC: 'M  naco',
                MD: 'Mold  via',
                ME: 'Montenegro',
                MG: 'Madagascar',
                MK: 'Maced  nia',
                ML: 'Mali',
                MR: 'Maurit  nia',
                MT: 'Malta',
                MU: 'Maur  cio',
                MZ: 'Mo  ambique',
                NL: 'Pa  ses Baixos',
                NO: 'Noruega',
                PK: 'Paquist  o',
                PL: 'Pol  nia',
                PS: 'Palestino',
                PT: 'Portugal',
                QA: 'Qatar',
                RO: 'Rom  nia',
                RS: 'S  rvia',
                SA: 'Ar  bia Saudita',
                SE: 'Su  cia',
                SI: 'Eslov  nia',
                SK: 'Eslov  quia',
                SM: 'San Marino',
                SN: 'Senegal',
                TI: 'It  lia',
                TL: 'Timor Leste',
                TN: 'Tun  sia',
                TR: 'Turquia',
                VG: 'Ilhas Virgens Brit  nicas',
                XK: 'Rep  blica do Kosovo',
            },
            country: 'Por favor insira um n  mero IBAN v  lido em %s',
            default: 'Por favor insira um n  mero IBAN v  lido',
        },
        id: {
            countries: {
                BA: 'B  snia e Herzegovina',
                BG: 'Bulg  ria',
                BR: 'Brasil',
                CH: 'Su    a',
                CL: 'Chile',
                CN: 'China',
                CZ: 'Rep  blica Checa',
                DK: 'Dinamarca',
                EE: 'Est  nia',
                ES: 'Espanha',
                FI: 'Finl  ndia',
                HR: 'Cro  cia',
                IE: 'Irlanda',
                IS: 'Isl  ndia',
                LT: 'Litu  nia',
                LV: 'Let  nia',
                ME: 'Montenegro',
                MK: 'Maced  nia',
                NL: 'Holanda',
                PL: 'Pol  nia',
                RO: 'Rom  nia',
                RS: 'S  rvia',
                SE: 'Su  cia',
                SI: 'Eslov  nia',
                SK: 'Eslov  quia',
                SM: 'San Marino',
                TH: 'Tail  ndia',
                TR: 'Turquia',
                ZA: '  frica do Sul',
            },
            country: 'Por favor insira um n  mero de indentifica    o v  lido em %s',
            default: 'Por favor insira um c  digo de identifica    o v  lido',
        },
        identical: {
            default: 'Por favor, insira o mesmo valor',
        },
        imei: {
            default: 'Por favor insira um IMEI v  lido',
        },
        imo: {
            default: 'Por favor insira um IMO v  lido',
        },
        integer: {
            default: 'Por favor insira um n  mero inteiro v  lido',
        },
        ip: {
            default: 'Por favor insira um IP v  lido',
            ipv4: 'Por favor insira um endere  o de IPv4 v  lido',
            ipv6: 'Por favor insira um endere  o de IPv6 v  lido',
        },
        isbn: {
            default: 'Por favor insira um ISBN v  lido',
        },
        isin: {
            default: 'Por favor insira um ISIN v  lido',
        },
        ismn: {
            default: 'Por favor insira um ISMN v  lido',
        },
        issn: {
            default: 'Por favor insira um ISSN v  lido',
        },
        lessThan: {
            default: 'Por favor insira um valor menor ou igual a %s',
            notInclusive: 'Por favor insira um valor menor do que %s',
        },
        mac: {
            default: 'Por favor insira um endere  o MAC v  lido',
        },
        meid: {
            default: 'Por favor insira um MEID v  lido',
        },
        notEmpty: {
            default: 'Por favor insira um valor',
        },
        numeric: {
            default: 'Por favor insira um n  mero real v  lido',
        },
        phone: {
            countries: {
                AE: 'Emirados   rabes',
                BG: 'Bulg  ria',
                BR: 'Brasil',
                CN: 'China',
                CZ: 'Rep  blica Checa',
                DE: 'Alemanha',
                DK: 'Dinamarca',
                ES: 'Espanha',
                FR: 'Fran  a',
                GB: 'Reino Unido',
                IN: '  ndia',
                MA: 'Marrocos',
                NL: 'Pa  ses Baixos',
                PK: 'Paquist  o',
                RO: 'Rom  nia',
                RU: 'R  ssia',
                SK: 'Eslov  quia',
                TH: 'Tail  ndia',
                US: 'EUA',
                VE: 'Venezuela',
            },
            country: 'Por favor insira um n  mero de telefone v  lido em %s',
            default: 'Por favor insira um n  mero de telefone v  lido',
        },
        promise: {
            default: 'Por favor insira um valor v  lido',
        },
        regexp: {
            default: 'Por favor insira um valor correspondente ao padr  o',
        },
        remote: {
            default: 'Por favor insira um valor v  lido',
        },
        rtn: {
            default: 'Por favor insira um n  mero v  lido RTN',
        },
        sedol: {
            default: 'Por favor insira um n  mero v  lido SEDOL',
        },
        siren: {
            default: 'Por favor insira um n  mero v  lido SIREN',
        },
        siret: {
            default: 'Por favor insira um n  mero v  lido SIRET',
        },
        step: {
            default: 'Por favor insira um passo v  lido %s',
        },
        stringCase: {
            default: 'Por favor, digite apenas caracteres min  sculos',
            upper: 'Por favor, digite apenas caracteres mai  sculos',
        },
        stringLength: {
            between: 'Por favor insira um valor entre %s e %s caracteres',
            default: 'Por favor insira um valor com comprimento v  lido',
            less: 'Por favor insira menos de %s caracteres',
            more: 'Por favor insira mais de %s caracteres',
        },
        uri: {
            default: 'Por favor insira um URI v  lido',
        },
        uuid: {
            default: 'Por favor insira um n  mero v  lido UUID',
            version: 'Por favor insira uma vers  o %s  UUID v  lida',
        },
        vat: {
            countries: {
                AT: '  ustria',
                BE: 'B  lgica',
                BG: 'Bulg  ria',
                BR: 'Brasil',
                CH: 'Su    a',
                CY: 'Chipre',
                CZ: 'Rep  blica Checa',
                DE: 'Alemanha',
                DK: 'Dinamarca',
                EE: 'Est  nia',
                EL: 'Gr  cia',
                ES: 'Espanha',
                FI: 'Finl  ndia',
                FR: 'Fran  a',
                GB: 'Reino Unido',
                GR: 'Gr  cia',
                HR: 'Cro  cia',
                HU: 'Hungria',
                IE: 'Irlanda',
                IS: 'Isl  ndia',
                IT: 'It  lia',
                LT: 'Litu  nia',
                LU: 'Luxemburgo',
                LV: 'Let  nia',
                MT: 'Malta',
                NL: 'Holanda',
                NO: 'Norway',
                PL: 'Pol  nia',
                PT: 'Portugal',
                RO: 'Rom  nia',
                RS: 'S  rvia',
                RU: 'R  ssia',
                SE: 'Su  cia',
                SI: 'Eslov  nia',
                SK: 'Eslov  quia',
                VE: 'Venezuela',
                ZA: '  frica do Sul',
            },
            country: 'Por favor insira um n  mero VAT v  lido em %s',
            default: 'Por favor insira um VAT v  lido',
        },
        vin: {
            default: 'Por favor insira um VIN v  lido',
        },
        zipCode: {
            countries: {
                AT: '  ustria',
                BG: 'Bulg  ria',
                BR: 'Brasil',
                CA: 'Canad  ',
                CH: 'Su    a',
                CZ: 'Rep  blica Checa',
                DE: 'Alemanha',
                DK: 'Dinamarca',
                ES: 'Espanha',
                FR: 'Fran  a',
                GB: 'Reino Unido',
                IE: 'Irlanda',
                IN: '  ndia',
                IT: 'It  lia',
                MA: 'Marrocos',
                NL: 'Holanda',
                PL: 'Pol  nia',
                PT: 'Portugal',
                RO: 'Rom  nia',
                RU: 'R  ssia',
                SE: 'Su  cia',
                SG: 'Cingapura',
                SK: 'Eslov  quia',
                US: 'EUA',
            },
            country: 'Por favor insira um c  digo postal v  lido em %s',
            default: 'Por favor insira um c  digo postal v  lido',
        },
    };

    return pt_PT;

}));
