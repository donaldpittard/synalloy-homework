(function ($, window, document) {
    var $customerTable = $('#customer-table').DataTable({
        ajax: '/api/customers'
    });
}(jQuery, window, document));