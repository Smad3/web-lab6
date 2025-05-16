window.onload = function () {
    var re = /^[0-9-]+$/;
    var result_out = document.getElementById('res');
    document.getElementById("run").onclick = function (e) {
        var formcal = document.forms.calc;
        a = formcal.a_in.value;
        b = formcal.b_in.value;
        op = formcal.oper.value;
        console.log(a, op, b);
        if (re.test(a) & op == "sqrt") {
            if (a > 0) {
                result_out.textContent = Math.sqrt(a);
            } else {
                result_out.textContent = "Input number lower than 0.";
            }
        } else if (re.test(a) & re.test(a)) {
            if (op == "/" & b == 0) {
                result_out.textContent = "Error div by 0.";
            } else if (op == "^") {
                result_out.textContent = Math.pow(a, b);
            } else {
                result_out.textContent = eval(a + op + b);
            };
        } else {
            result_out.textContent = "Error input.";
        };
    };
};
