M.mod_data = {};

M.mod_data.init_view = function(Y) {
    Y.io("entryform.php", {
    method: "POST",
    data: "value=1",
    on:{
        success: function(data, result) {
        console.log(result.responseText);
        var vals = [];
        try {
          vals = Y.JSON.parse(result.responseText);
        } 
        catch (e) {
          alert("JSON Parse failed");
          return;
        }
        var node = Y.one("#field_"+vals.id);
        node.set('value', vals.name);
        console.log('success');
        },
        failure: function(id, result) {
        }
    }
    });
};

