function setCaretPosition(elemId, caretPos) {
    let elem, range;
    elem = document.getElementById(elemId);

    if (elem != null) {
        if (elem.createTextRange) {
            range = elem.createTextRange();
            range.move('character', caretPos);
            range.select();
        }
        else {
            if (elem.selectionStart) {
                elem.focus();
                elem.setSelectionRange(caretPos, caretPos);
            }
            else
                elem.focus();
        }
    }
}
function getSelectionStart(o) {
    let r;
    if (o.createTextRange) {
        r = document.selection.createRange().duplicate();
        r.moveEnd('character', o.value.length);
        if (r.text == '') return o.value.length;
        return o.value.lastIndexOf(r.text);
    } else {
        return o.selectionStart;
    }
}
function removePeriod(nStr, remove) {
    if (nStr != '') {
        tamp = nStr.split(remove);
        nStr = '';
        for (let kembali = 0; kembali < tamp.length; kembali++) {
            nStr += tamp[kembali];
        }
    }
    return nStr;
}
function addPeriodType(nStr, addSeparator = ',') {
    nStr += '';
    nStr = removePeriod(nStr, addSeparator);
    nStr += '';
    x = nStr.split(addSeparator);
    x1 = x[0];
    x2 = x.length > 1 ? addSeparator + x[1] : '';
    let rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + addSeparator + '$2');
    }
    return x1 + x2;
}


//
//    $(document).on('change', ".uang", function (e) {
//        let id = $(this).attr('id');
//        let locationMouse = getSelectionStart(document.getElementById(id));
//        let input = document.getElementById(id).value;
//        let output = addPeriodType(input, addSeparator);
//        let posAwal = input.length;
//        let posAkhir = output.length;
//        if ((posAwal - posAkhir) == 1) {
//            locationMouse--;
//        } else if ((posAkhir - posAwal) == 1) {
//            locationMouse++;
//        }
//        document.getElementById(id).value = output;
//        setCaretPosition(id, locationMouse);
//    });

function removePeriod(nStr, remove) {
    if (nStr != '') {
        tamp = nStr.split(remove);
        nStr = '';
        for (let kembali = 0; kembali < tamp.length; kembali++) {
            nStr += tamp[kembali]
        }
    }
    return nStr;
}

function addPeriod(nStr, add) {
    let desimalText
    nStr += '';
    nStr = removePeriod(nStr, add);
    nStr += '';
    let desimalnya = nStr.split(".");
    if (desimalnya.length > 1) {
        desimalText = desimalnya[1];
        nStr = desimalnya[0]
    }
    else {
        desimalText = "00"
    }
    nStr += '';
    x = nStr.split(add);
    x1 = x[0];
    x2 = x.length > 1 ? add + x[1] : '';
    let rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + add + '$2')
    }
    return x1 + x2 + '.' + desimalText
}

function formatUang(text, depan, simbol, desimal) {
    let desimalnya = text.split(".");
    if (desimalnya.length > 1) {
        let desimalText = desimalnya[1];
    } else {
        let desimalText = "00";
    }
    let text_temp = desimalnya[0];

    let tamp = text_temp;
    let len = tamp.length;
    let count = 1;
    let temp = "";

    if (desimal == 1) {
        for (let awal = len - 1; awal >= 0; awal--) {
            if ((count - 1) % 3 == 0 && count - 1 > 0) {
                temp += ",";
            }
            temp += tamp[awal];
            count += 1;
        }
        len = temp.length;
        tamp = "";
        for (let awal = len - 1; awal >= 0; awal--) {
            tamp += temp[awal];
        }
        tamp += "." + desimalText;
    } else {
        for (let awal = len - 1; awal >= 0; awal--) {
            if ((count - 1) % 3 == 0 && count - 1 > 0) {
                temp += ".";
            }
            temp += tamp[awal];
            count += 1;
        }
        len = temp.length;
        tamp = "";
        for (let awal = len - 1; awal >= 0; awal--) {
            tamp += temp[awal];
        }
    }
    if (depan == 1) {
        return simbol + " " + tamp;
    } else {
        return tamp + " " + simbol;
    }
}


$(document).ready(function () {
    $(document).on('keyup', ".gii-money", function (e) {
        let id, locationMouse, input, output, posAwal, posAkhir;
        if ((e.keyCode < 37 || e.keyCode > 40)) {
            if (e.keyCode != 9) {
                id = $(this).attr('id');
                locationMouse = getSelectionStart(document.getElementById(id));
                input = document.getElementById(id).value;
                output = addPeriodType(input, ',');
                posAwal = input.length;
                posAkhir = output.length;
                if ((posAwal - posAkhir) == 1) {
                    locationMouse--;
                } else if ((posAkhir - posAwal) == 1) {
                    locationMouse++;
                }
                document.getElementById(id).value = output;
                setCaretPosition(id, locationMouse);
            }
        }
    });
    $(document).on('keypress', ".gii-numeric-only", function (e) {
        if (e.keyCode == 9) {
            $(this).select();
        }
        if ((e.charCode >= 48 && e.charCode <= 57) || (e.charCode == 0))
            return true;
        else
            return false
    });
    $(document).on('keypress', ".gii-numeric-decimal-only", function (e) {
        if (e.keyCode == 9) {
            $(this).select();
        }
        if ((e.charCode >= 48 && e.charCode <= 57) || (e.charCode == 0) || (e.charCode == 46))
            return true;
        else
            return false
    });
    $(document).on('blur', ".gii-numeric-decimal-only", function (e) {
        let value, hasil;
        if ($(this).val() != '') {
            value = removePeriod($(this).val(), ',');
            hasil = parseFloat(value);

            if (typeof default_value_price !== 'undefined' && default_value_price) {
                hasil = hasil.toFixed(default_value_price);
            }

            // hasil = parseFloat(value).toFixed(2);
            $(this).val(addPeriod(hasil, ','));
        }
        if (e.keyCode == 9) {
            $(this).select();
        }
    });
    $(document).on('keypress', ".gii-numeric-minus-only", function (e) {
        if ((e.charCode >= 48 && e.charCode <= 57) || (e.charCode == 0) || (e.charCode == 45))
            return true;
        else
            return false;
    });
});
