//Js obfuscated
var _0x40bf = ["use strict", "action", "submit", "attr", "form#wrapped", ":radio", "is", ":checkbox", "next", "insertBefore", "insertAfter", "validate", "#wrapped", ".submit", "length", "val", "input#website", "isMovingForward", ":input", "find", "step", "state", "wizard", "valid", "#wizard_container", "progressbar", "#progressbar", "value", "percentComplete", "(", "stepsComplete", "/", "stepsPossible", ")", "text", "#location", "select:hidden", ".nice-select", "#question_1", "question_1", "name", ":checked", "push", "each", "input[name*=\'", "\']", ", ", "join", "#question_2", "question_2", "#question_3", "question_3", "#additional_message", "additional_message"];
jQuery(function (_0xaf12x1) {
    _0x40bf[0];
    _0xaf12x1(_0x40bf[4])[_0x40bf[3]](_0x40bf[1], _0x40bf[2]);
    _0xaf12x1(_0x40bf[24])[_0x40bf[22]]({
        stepsWrapper: _0x40bf[12],
        submit: _0x40bf[13],
        beforeSelect: function (_0xaf12x4, _0xaf12x5) {
            if (_0xaf12x1(_0x40bf[16])[_0x40bf[15]]()[_0x40bf[14]] != 0) {
                return false
            };
            if (!_0xaf12x5[_0x40bf[17]]) {
                return true
            };
            var _0xaf12x6 = _0xaf12x1(this)[_0x40bf[22]](_0x40bf[21])[_0x40bf[20]][_0x40bf[19]](_0x40bf[18]);
            return !_0xaf12x6[_0x40bf[14]] || !!_0xaf12x6[_0x40bf[23]]()
        }
    })[_0x40bf[11]]({
        errorPlacement: function (_0xaf12x2, _0xaf12x3) {
            if (_0xaf12x3[_0x40bf[6]](_0x40bf[5]) || _0xaf12x3[_0x40bf[6]](_0x40bf[7])) {
                _0xaf12x2[_0x40bf[9]](_0xaf12x3[_0x40bf[8]]())
            } else {
                _0xaf12x2[_0x40bf[10]](_0xaf12x3)
            }
        }
    });
    _0xaf12x1(_0x40bf[26])[_0x40bf[25]]();
    _0xaf12x1(_0x40bf[24])[_0x40bf[22]]({
        afterSelect: function (_0xaf12x4, _0xaf12x5) {
            _0xaf12x1(_0x40bf[26])[_0x40bf[25]](_0x40bf[27], _0xaf12x5[_0x40bf[28]]);
            _0xaf12x1(_0x40bf[35])[_0x40bf[34]](_0x40bf[29] + _0xaf12x5[_0x40bf[30]] + _0x40bf[31] + _0xaf12x5[_0x40bf[32]] + _0x40bf[33])
        }
    });
    _0xaf12x1(_0x40bf[12])[_0x40bf[11]]({
        ignore: [],
        rules: {
            select: {
                required: true
            }
        },
        errorPlacement: function (_0xaf12x2, _0xaf12x3) {
            if (_0xaf12x3[_0x40bf[6]](_0x40bf[36])) {
                _0xaf12x2[_0x40bf[10]](_0xaf12x3[_0x40bf[8]](_0x40bf[37]))
            } else {
                _0xaf12x2[_0x40bf[10]](_0xaf12x3)
            }
        }
    })
});
function getVals(_0xaf12x8, _0xaf12x9) {
    switch (_0xaf12x9) {
    case _0x40bf[39]:
        var _0xaf12xa = $(_0xaf12x8)[_0x40bf[15]]();
        $(_0x40bf[38])[_0x40bf[34]](_0xaf12xa);
        break;
    case _0x40bf[49]:
        var _0xaf12xb = $(_0xaf12x8)[_0x40bf[3]](_0x40bf[40]);
        var _0xaf12xa = [];
        $(_0x40bf[44] + _0xaf12xb + _0x40bf[45])[_0x40bf[43]](function () {
            if (jQuery(this)[_0x40bf[6]](_0x40bf[41])) {
                _0xaf12xa[_0x40bf[42]]($(this)[_0x40bf[15]]())
            }
        });
        $(_0x40bf[48])[_0x40bf[34]](_0xaf12xa[_0x40bf[47]](_0x40bf[46]));
        break;
    case _0x40bf[51]:
        var _0xaf12xa = $(_0xaf12x8)[_0x40bf[15]]();
        $(_0x40bf[50])[_0x40bf[34]](_0xaf12xa);
        break;
    case _0x40bf[53]:
        var _0xaf12xa = $(_0xaf12x8)[_0x40bf[15]]();
        $(_0x40bf[52])[_0x40bf[34]](_0xaf12xa);
        break
    }
}