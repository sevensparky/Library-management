function deleteMultiple(route) {
    var allVals = [];
    $(".sub-checkbox:checked").each(function () {
        allVals.push($(this).attr('data-id'));
    });
    if (allVals.length <= 0) {
        alert("یک سطر انتخاب کنید");
    } else {
        WRN_PROFILE_DELETE = "آیا مطمئن هستید که می خواهید این سطر را حذف کنید؟";
        var check = confirm(WRN_PROFILE_DELETE);
        if (check == true) {
            $("<form action='"+ route +"' method='post'>" +
                "<input type='hidden' name='_token' value='"+ $('meta[name="_token"]').attr('content') +"' /> "+
                "<input type='hidden' name='_method' value='delete'> " +
                "<input type='hidden' name='ids' value='" + allVals + "'>" +
                "</form>").appendTo('body').submit();

            $.each(allVals, function (index, value) {
                $('table tr').filter("[data-row-id='" + value + "']").remove();
            });
        }
    }
}