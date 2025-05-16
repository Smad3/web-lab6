window.onload = function () {
    var timer = document.getElementById('count');
    sec = 0;
    var time = setTimeout(function run() {
        sec++;
        if (sec >= 30) {
            window.location.href = 'index.php';
        } else {
            timer.textContent = (3 - sec / 10).toLocaleString(undefined, { minimumFractionDigits: 1 });
            setTimeout(run, 100);
        }
    }, 100);
};