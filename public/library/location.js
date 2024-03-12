(function ($) {
    "use strict";
    var HT = {};

    HT.province = () => {
        $(document).on("change", ".province", function () {
            let _this = $(this);
            let province_id = _this.val();
            $.ajax({
                url: "ajax/location/getLocation",
                type: "GET",
                data: {
                    'province_id': province_id,
                },
                dataType: "json",
                success: function (res) {
                    $('.districts').html(res.html);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log("Lỗi " + textStatus + " " + errorThrown);
                },
            });
        });
    };
    HT.district = () => {
        $(document).on("change", ".districts", function () {
            let _this = $(this);
            let district_id = _this.val();
            $.ajax({
                url: "ajax/location/getWard",
                type: "GET",
                data: {
                    'district_id': district_id,
                },
                dataType: "json",
                success: function (res) {
                    $('.wards').html(res.html);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log("Lỗi " + textStatus + " " + errorThrown);
                },
            });
        });
    };

    HT.getLocationWhenDocumentReload = () =>{
        if(province_id != ''){
            $(".province").val(province_id).trigger('change');
        }
    }
    
    $(document).ready(function () {
        HT.province();
        HT.district();
        HT.getLocationWhenDocumentReload();
    });
})(jQuery);
