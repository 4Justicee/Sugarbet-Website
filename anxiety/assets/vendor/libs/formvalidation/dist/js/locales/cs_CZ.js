(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
    typeof define === 'function' && define.amd ? define(factory) :
    (global = typeof globalThis !== 'undefined' ? globalThis : global || self, (global.FormValidation = global.FormValidation || {}, global.FormValidation.locales = global.FormValidation.locales || {}, global.FormValidation.locales.cs_CZ = factory()));
})(this, (function () { 'use strict';

    /**
     * Czech language package
     * Translated by @AdwinTrave. Improved by @cuchac, @budik21
     */

    var cs_CZ = {
        base64: {
            default: 'Pros  m zadejte spr  vn   base64',
        },
        between: {
            default: 'Pros  m zadejte hodnotu mezi %s a %s',
            notInclusive: 'Pros  m zadejte hodnotu mezi %s a %s (v  etn   t  chto     sel)',
        },
        bic: {
            default: 'Pros  m zadejte spr  vn   BIC     slo',
        },
        callback: {
            default: 'Pros  m zadejte spr  vnou hodnotu',
        },
        choice: {
            between: 'Pros  m vyberte mezi %s a %s',
            default: 'Pros  m vyberte spr  vnou hodnotu',
            less: 'Hodnota mus   b  t minim  ln   %s',
            more: 'Hodnota nesm   b  t v  ce jak %s',
        },
        color: {
            default: 'Pros  m zadejte spr  vnou barvu',
        },
        creditCard: {
            default: 'Pros  m zadejte spr  vn       slo kreditn   karty',
        },
        cusip: {
            default: 'Pros  m zadejte spr  vn   CUSIP     slo',
        },
        date: {
            default: 'Pros  m zadejte spr  vn   datum',
            max: 'Pros  m zadejte datum po %s',
            min: 'Pros  m zadejte datum p  ed %s',
            range: 'Pros  m zadejte datum v rozmez   %s a   %s',
        },
        different: {
            default: 'Pros  m zadejte jinou hodnotu',
        },
        digits: {
            default: 'Toto pole m    e obsahovat pouze     sla',
        },
        ean: {
            default: 'Pros  m zadejte spr  vn   EAN     slo',
        },
        ein: {
            default: 'Pros  m zadejte spr  vn   EIN     slo',
        },
        emailAddress: {
            default: 'Pros  m zadejte spr  vnou emailovou adresu',
        },
        file: {
            default: 'Pros  m vyberte soubor',
        },
        greaterThan: {
            default: 'Pros  m zadejte hodnotu v  t     nebo rovnu %s',
            notInclusive: 'Pros  m zadejte hodnotu v  t     ne   %s',
        },
        grid: {
            default: 'Pros  m zadejte spr  vn   GRId     slo',
        },
        hex: {
            default: 'Pros  m zadejte spr  vn   hexadecim  ln       slo',
        },
        iban: {
            countries: {
                AD: 'Andorru',
                AE: 'Spojen   arabsk   emir  ty',
                AL: 'Albanii',
                AO: 'Angolu',
                AT: 'Rakousko',
                AZ: '  zerbajd    n',
                BA: 'Bosnu a Herzegovinu',
                BE: 'Belgii',
                BF: 'Burkinu Faso',
                BG: 'Bulharsko',
                BH: 'Bahrajn',
                BI: 'Burundi',
                BJ: 'Benin',
                BR: 'Braz  lii',
                CH: '  v  carsko',
                CI: 'Pob  e     slonoviny',
                CM: 'Kamerun',
                CR: 'Kostariku',
                CV: 'Cape Verde',
                CY: 'Kypr',
                CZ: '  eskou republiku',
                DE: 'N  mecko',
                DK: 'D  nsko',
                DO: 'Dominik  nskou republiku',
                DZ: 'Al    rsko',
                EE: 'Estonsko',
                ES: '  pan  lsko',
                FI: 'Finsko',
                FO: 'Faersk   ostrovy',
                FR: 'Francie',
                GB: 'Velkou Brit  nii',
                GE: 'Gruzii',
                GI: 'Gibraltar',
                GL: 'Gr  nsko',
                GR: '  ecko',
                GT: 'Guatemalu',
                HR: 'Chorvatsko',
                HU: 'Ma  arsko',
                IE: 'Irsko',
                IL: 'Israel',
                IR: 'Ir  n',
                IS: 'Island',
                IT: 'It  lii',
                JO: 'Jordansko',
                KW: 'Kuwait',
                KZ: 'Kazachst  n',
                LB: 'Libanon',
                LI: 'Lichten  tejnsko',
                LT: 'Litvu',
                LU: 'Lucembursko',
                LV: 'Loty  sko',
                MC: 'Monaco',
                MD: 'Moldavsko',
                ME: '  ernou Horu',
                MG: 'Madagaskar',
                MK: 'Makedonii',
                ML: 'Mali',
                MR: 'Maurit  nii',
                MT: 'Maltu',
                MU: 'Mauritius',
                MZ: 'Mosambik',
                NL: 'Nizozemsko',
                NO: 'Norsko',
                PK: 'Pakist  n',
                PL: 'Polsko',
                PS: 'Palestinu',
                PT: 'Portugalsko',
                QA: 'Katar',
                RO: 'Rumunsko',
                RS: 'Srbsko',
                SA: 'Saudskou Ar  bii',
                SE: '  v  dsko',
                SI: 'Slovinsko',
                SK: 'Slovensko',
                SM: 'San Marino',
                SN: 'Senegal',
                TL: 'V  chodn   Timor',
                TN: 'Tunisko',
                TR: 'Turecko',
                VG: 'Britsk   Panensk   ostrovy',
                XK: 'Republic of Kosovo',
            },
            country: 'Pros  m zadejte spr  vn   IBAN     slo pro %s',
            default: 'Pros  m zadejte spr  vn   IBAN     slo',
        },
        id: {
            countries: {
                BA: 'Bosnu a Hercegovinu',
                BG: 'Bulharsko',
                BR: 'Braz  lii',
                CH: '  v  carsko',
                CL: 'Chile',
                CN: '    nu',
                CZ: '  eskou Republiku',
                DK: 'D  nsko',
                EE: 'Estonsko',
                ES: '  pan  lsko',
                FI: 'Finsko',
                HR: 'Chorvatsko',
                IE: 'Irsko',
                IS: 'Island',
                LT: 'Litvu',
                LV: 'Loty  sko',
                ME: '  ernou horu',
                MK: 'Makedonii',
                NL: 'Nizozem  ',
                PL: 'Polsko',
                RO: 'Rumunsko',
                RS: 'Srbsko',
                SE: '  v  dsko',
                SI: 'Slovinsko',
                SK: 'Slovensko',
                SM: 'San Marino',
                TH: 'Thajsko',
                TR: 'Turecko',
                ZA: 'Ji  n   Afriku',
            },
            country: 'Pros  m zadejte spr  vn   rodn       slo pro %s',
            default: 'Pros  m zadejte spr  vn   rodn       slo',
        },
        identical: {
            default: 'Pros  m zadejte stejnou hodnotu',
        },
        imei: {
            default: 'Pros  m zadejte spr  vn   IMEI     slo',
        },
        imo: {
            default: 'Pros  m zadejte spr  vn   IMO     slo',
        },
        integer: {
            default: 'Pros  m zadejte cel       slo',
        },
        ip: {
            default: 'Pros  m zadejte spr  vnou IP adresu',
            ipv4: 'Pros  m zadejte spr  vnou IPv4 adresu',
            ipv6: 'Pros  m zadejte spr  vnou IPv6 adresu',
        },
        isbn: {
            default: 'Pros  m zadejte spr  vn   ISBN     slo',
        },
        isin: {
            default: 'Pros  m zadejte spr  vn   ISIN     slo',
        },
        ismn: {
            default: 'Pros  m zadejte spr  vn   ISMN     slo',
        },
        issn: {
            default: 'Pros  m zadejte spr  vn   ISSN     slo',
        },
        lessThan: {
            default: 'Pros  m zadejte hodnotu men     nebo rovno %s',
            notInclusive: 'Pros  m zadejte hodnotu men     ne   %s',
        },
        mac: {
            default: 'Pros  m zadejte spr  vnou MAC adresu',
        },
        meid: {
            default: 'Pros  m zadejte spr  vn   MEID     slo',
        },
        notEmpty: {
            default: 'Toto pole nesm   b  t pr  zdn  ',
        },
        numeric: {
            default: 'Pros  m zadejte     selnou hodnotu',
        },
        phone: {
            countries: {
                AE: 'Spojen   arabsk   emir  ty',
                BG: 'Bulharsko',
                BR: 'Braz  lii',
                CN: '    nu',
                CZ: '  eskou Republiku',
                DE: 'N  mecko',
                DK: 'D  nsko',
                ES: '  pan  lsko',
                FR: 'Francii',
                GB: 'Velkou Brit  nii',
                IN: 'Indie',
                MA: 'Maroko',
                NL: 'Nizozemsko',
                PK: 'P  kist  n',
                RO: 'Rumunsko',
                RU: 'Rusko',
                SK: 'Slovensko',
                TH: 'Thajsko',
                US: 'Spojen   St  ty Americk  ',
                VE: 'Venezuelu',
            },
            country: 'Pros  m zadejte spr  vn   telefon       slo pro %s',
            default: 'Pros  m zadejte spr  vn   telefon       slo',
        },
        promise: {
            default: 'Pros  m zadejte spr  vnou hodnotu',
        },
        regexp: {
            default: 'Pros  m zadejte hodnotu spl  uj  c   zad  n  ',
        },
        remote: {
            default: 'Pros  m zadejte spr  vnou hodnotu',
        },
        rtn: {
            default: 'Pros  m zadejte spr  vn   RTN     slo',
        },
        sedol: {
            default: 'Pros  m zadejte spr  vn   SEDOL     slo',
        },
        siren: {
            default: 'Pros  m zadejte spr  vn   SIREN     slo',
        },
        siret: {
            default: 'Pros  m zadejte spr  vn   SIRET     slo',
        },
        step: {
            default: 'Pros  m zadejte spr  vn   krok %s',
        },
        stringCase: {
            default: 'Pouze mal   p  smena jsou povoleny v tomto poli',
            upper: 'Pouze velk   p  smena jsou povoleny v tomto poli',
        },
        stringLength: {
            between: 'Pros  m zadejte hodnotu mezi %s a %s znaky',
            default: 'Toto pole nesm   b  t pr  zdn  ',
            less: 'Pros  m zadejte hodnotu men     ne   %s znak  ',
            more: 'Pros  m zadajte hodnotu dlh  iu ako %s znakov',
        },
        uri: {
            default: 'Pros  m zadejte spr  vnou URI',
        },
        uuid: {
            default: 'Pros  m zadejte spr  vn   UUID     slo',
            version: 'Pros  m zadejte spr  vn   UUID verze %s',
        },
        vat: {
            countries: {
                AT: 'Rakousko',
                BE: 'Belgii',
                BG: 'Bulharsko',
                BR: 'Braz  lii',
                CH: '  v  carsko',
                CY: 'Kypr',
                CZ: '  eskou Republiku',
                DE: 'N  mecko',
                DK: 'D  nsko',
                EE: 'Estonsko',
                EL: '  ecko',
                ES: '  pan  lsko',
                FI: 'Finsko',
                FR: 'Francii',
                GB: 'Velkou Brit  nii',
                GR: '  ecko',
                HR: 'Chorvatsko',
                HU: 'Ma  arsko',
                IE: 'Irsko',
                IS: 'Island',
                IT: 'It  lii',
                LT: 'Litvu',
                LU: 'Lucembursko',
                LV: 'Loty  sko',
                MT: 'Maltu',
                NL: 'Nizozem  ',
                NO: 'Norsko',
                PL: 'Polsko',
                PT: 'Portugalsko',
                RO: 'Rumunsko',
                RS: 'Srbsko',
                RU: 'Rusko',
                SE: '  v  dsko',
                SI: 'Slovinsko',
                SK: 'Slovensko',
                VE: 'Venezuelu',
                ZA: 'Ji  n   Afriku',
            },
            country: 'Pros  m zadejte spr  vn   VAT     slo pro %s',
            default: 'Pros  m zadejte spr  vn   VAT     slo',
        },
        vin: {
            default: 'Pros  m zadejte spr  vn   VIN     slo',
        },
        zipCode: {
            countries: {
                AT: 'Rakousko',
                BG: 'Bulharsko',
                BR: 'Braz  lie',
                CA: 'Kanadu',
                CH: '  v  carsko',
                CZ: '  eskou Republiku',
                DE: 'N  mecko',
                DK: 'D  nsko',
                ES: '  pan  lsko',
                FR: 'Francii',
                GB: 'Velkou Brit  nii',
                IE: 'Irsko',
                IN: 'Indie',
                IT: 'It  lii',
                MA: 'Maroko',
                NL: 'Nizozem  ',
                PL: 'Polsko',
                PT: 'Portugalsko',
                RO: 'Rumunsko',
                RU: 'Rusko',
                SE: '  v  dsko',
                SG: 'Singapur',
                SK: 'Slovensko',
                US: 'Spojen   St  ty Americk  ',
            },
            country: 'Pros  m zadejte spr  vn   PS   pro %s',
            default: 'Pros  m zadejte spr  vn   PS  ',
        },
    };

    return cs_CZ;

}));