(function ($, window, document) {
    var $customerTable = $('#customer-table').DataTable({
        ajax: '/api/customers',
        responsive: true
    });
}(jQuery, window, document));