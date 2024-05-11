import jQuery from 'jquery';
import DataTable from 'datatables.net-dt';

;(function (global, $) {
    'use strict';
    console.log("Document ready");


    let table = new DataTable('#myTable', {
        ajax: null,

    });

})(this, jQuery);

