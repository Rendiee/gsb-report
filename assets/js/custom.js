$("#listemotif").change(function () {
        if ($(this).val() == 9) {
            $("#text-motif-autre").append("<input id='motif-autre' class='w-25 bg-white border-0 m-0' type='text' name='motif-autre'>");
            $("#txtOther").attr("disabled", "disabled");
            alert('test');
        } else {
            $("#text-motif-autre").remove("#motif-autre");
            $("#txtOther").removeAttr("disabled");
            alert('test2');
        }
    });