var ComponentsFormTools = function () {

    var handleTwitterTypeaheadModal = function() {
        // Example #3
        var parts = new Bloodhound({
          datumTokenizer: function(d) { return d.tokens; },
          queryTokenizer: Bloodhound.tokenizers.whitespace,
          remote: {
              url: 'getallPart?query=%QUERY',
              filter: function (parts) {
                  // Map the remote source JSON array to a JavaScript object array
                  return $.map(parts.result, function (part) {
                      return {
                          value: part.partnumber
                      };
                  });
              }
          }
        });
         
        parts.initialize();
         
        $('#a_txtPart').typeahead(null, {
          name: 'a_txtPart',
          displayKey: 'value',
          hint: (App.isRTL() ? false : true),
          source: parts.ttAdapter()
        });
    }

    
    return {
        autoComplete : function(controll, url) {
          // Example #3
          var parts = new Bloodhound({
            datumTokenizer: function(d) { return d.tokens; },
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
                url: url + '?query=%QUERY',
                filter: function (parts) {
                    // Map the remote source JSON array to a JavaScript object array
                    return $.map(parts.result, function (part) {
                        return {
                            value: part.partnumber
                        };
                    });
                }
            }
          });
           
          parts.initialize();
           
          $(controll).typeahead(null, {
            name: 'a_txtPart',
            displayKey: 'value',
            hint: (App.isRTL() ? false : true),
            source: parts.ttAdapter()
          });
        },
        //main function to initiate the module
        init: function () {
            handleTwitterTypeaheadModal();
        }
    };

}();