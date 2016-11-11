$(document).on("ready", function(){
    $.widget( "custom.catcomplete", $.ui.autocomplete, {
        _create: function() {
            this._super();
            this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
        },
        _renderMenu: function( ul, items ) {
            var that = this;
            $.each( items, function( index, item ) {
                var li;
                li = that._renderItemData( ul, item );
            });
        }
    });
    $( ".correo" ).catcomplete({
        minLength: 3,
        delay: 100,
        autoFocus: true,
        matchContains: true,
        source: function( request, response ) {
            $.ajax({
                type: "GET",
                url: ("/callsearch").trim(),
                dataType: "json",
                data: {
                    q: encodeURIComponent(request.term)
                },
                success: function( data ) {
                    response(data);
                }
            });
        },
        select: function(event, ui){
            $(this).val(ui.item.label);
            $('#costumer_id').val(ui.item.costumer);

        }
    });
});