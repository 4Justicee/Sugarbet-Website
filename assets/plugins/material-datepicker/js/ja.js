//! moment.js locale configuration
//! locale : Japanese [ja]
//! author : LI Long : https://github.com/baryon

;(function (global, factory) {
   typeof exports === 'object' && typeof module !== 'undefined'
       && typeof require === 'function' ? factory(require('../moment')) :
   typeof define === 'function' && define.amd ? define(['../moment'], factory) :
   factory(global.moment)
}(this, (function (moment) { 'use strict';


var ja = moment.defineLocale('ja', {
    months : '1   _2   _3   _4   _5   _6   _7   _8   _9   _10   _11   _12   '.split('_'),
    monthsShort : '1   _2   _3   _4   _5   _6   _7   _8   _9   _10   _11   _12   '.split('_'),
    weekdays : '         _         _         _         _         _         _         '.split('_'),
    weekdaysShort : '   _   _   _   _   _   _   '.split('_'),
    weekdaysMin : '   _   _   _   _   _   _   '.split('_'),
    longDateFormat : {
        LT : 'HH:mm',
        LTS : 'HH:mm:ss',
        L : 'YYYY/MM/DD',
        LL : 'YYYY   M   D   ',
        LLL : 'YYYY   M   D    HH:mm',
        LLLL : 'YYYY   M   D    HH:mm dddd',
        l : 'YYYY/MM/DD',
        ll : 'YYYY   M   D   ',
        lll : 'YYYY   M   D    HH:mm',
        llll : 'YYYY   M   D    HH:mm dddd'
    },
    meridiemParse: /      |      /i,
    isPM : function (input) {
        return input === '      ';
    },
    meridiem : function (hour, minute, isLower) {
        if (hour < 12) {
            return '      ';
        } else {
            return '      ';
        }
    },
    calendar : {
        sameDay : '[      ] LT',
        nextDay : '[      ] LT',
        nextWeek : '[      ]dddd LT',
        lastDay : '[      ] LT',
        lastWeek : '[      ]dddd LT',
        sameElse : 'L'
    },
    dayOfMonthOrdinalParse : /\d{1,2}   /,
    ordinal : function (number, period) {
        switch (period) {
            case 'd':
            case 'D':
            case 'DDD':
                return number + '   ';
            default:
                return number;
        }
    },
    relativeTime : {
        future : '%s   ',
        past : '%s   ',
        s : '      ',
        ss : '%d   ',
        m : '1   ',
        mm : '%d   ',
        h : '1      ',
        hh : '%d      ',
        d : '1   ',
        dd : '%d   ',
        M : '1      ',
        MM : '%d      ',
        y : '1   ',
        yy : '%d   '
    }
});

return ja;

})));
