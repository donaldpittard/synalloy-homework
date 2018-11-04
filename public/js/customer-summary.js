(function ($, window, document) {
    console.log(document.getElementById('sales-trends'));

    var ctx = document.getElementById('sales-trends').getContext('2d');
    var data = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November'],
        datasets: [
            {x: 1, y: 1}
        ]
    };
    var options = {};
    var salesTrend = new Chart(ctx, {
        type: 'line',
        data: data,
        options: options
    });
}(jQuery, window, document));