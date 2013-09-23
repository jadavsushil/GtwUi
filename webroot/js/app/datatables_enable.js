require(['jquery', 'ui/app/datatables_bootstrap'],function($) {
    $(document).ready(function() {
        var datatableid = '#' + $('#data-table-ref').val();   
        $(datatableid).dataTable();
        
        $(datatableid+'_filter').addClass('col-md-6');
        $(datatableid+'_filter label').contents().unwrap().filter(function() {
            return this.nodeType === 3;
        }).remove();
        $(datatableid+'_filter input').addClass('form-control');
        $(datatableid+'_filter').parent().prepend('<label class="control-label col-md-6">Search</label>');
        $(datatableid+'-loader').hide();
        $(datatableid).show();
    });
});