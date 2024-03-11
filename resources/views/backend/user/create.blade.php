<div class="content-wrapper">
    @include('backend.user.components.breadcrumb', ['title' => $config['seo']['create']['title']])
    <form action="designer-finish.html" class="form-horizontal mt-4" role="form" style="width: 1400px;margin: 0 auto">
        <div class="d-flex">
            <div class="mt-2">
                <h4>Thông tin chung</h4>
                <p>-Nhập thông tin chung của người sử dụng</p>
                <p>-Lưu ý: Những dấu <span class="text-danger">(*)</span> là bắt buộc</p>
            </div>
            <div class="" style="width: 70%;">
                <div class="form-group d-flex ">
                    <div class="col-sm-6">
                        <label for="" class="col-sm-3 control-label">Email <span
                                class="text-danger">(*)</span></label>
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                    <div class="col-sm-6">
                        <label for="" class="col-sm-3 control-label">Họ tên <span
                                class="text-danger">(*)</span></label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                </div>
                <div class="form-group d-flex ">
                    <div class="col-sm-6">
                        <label class="col-sm-3 control-label" style="display: inline">Nhóm thành viên <span
                                class="text-danger">(*)</span></label>
                        <select class="form-control" name="user_catelogue_id" id="">
                            <option value="0" selected>[Chọn nhóm thành viên]</option>
                            <option value="1">Quản trị viên</option>
                            <option value="2">Cộng tác viên</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="col-sm-3 control-label">Ngày sinh </label>
                        <input type="text" class="form-control" name="birtday" id="birtday">
                    </div>
                </div>
                <div class="form-group d-flex ">
                    <div class="col-sm-6">
                        <label for="" class="col-sm-3 control-label">Mật khẩu <span
                                class="text-danger">(*)</span></label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="col-sm-6">
                        <label for="" class="col-sm-3 control-label" style="display: inline">Nhập lại mật khẩu
                            <span class="text-danger">(*)</span></label>
                        <input type="password" class="form-control" name="re_password" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <label for="" class="col-sm-3 control-label">Ảnh đại diện</span></label>
                        <input type="text" class="form-control" name="image">
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="d-flex mt-4">
            <div class="mt-2">
                <h4>Thông tin liên hệ</h4>
                <p>Nhập thông tin liên hệ của người sử dụng</p>
            </div>
            <div class="" style="width: 70%;">
                <div class="form-group d-flex ">
                    <div class="col-sm-6">
                        <label class="col-sm-3 control-label " style="display: inline">Thành phố </label>
                        {{-- setupSelect2 --}}
                        <select class="form-control setupSelect2  province" name="province_id" >
                            <option value="0" selected>[Chọn thành phố]</option>
                            @if (isset($provinces))
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->code }}">{{ $province->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="col-sm-3 control-label" style="display: inline">Quận/Huyện</label>
                        <select class="form-control districts setupSelect2 " name="district_id" >
                            <option value="0" selected>[Chọn quận/huyện]</option>
                        </select>
                    </div>
                </div>
                <div class="form-group d-flex ">
                    <div class="col-sm-6">
                        <label class="col-sm-3 control-label" style="display: inline">Phường/Xã </label>
                        <select class="form-control setupSelect2" name="ward_id" >
                            <option value="0" selected>[Phường/Xã]</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="col-sm-3 control-label">Địa chỉ </label>
                        <input type="text" class="form-control" name="address" id="address">
                    </div>
                </div>
                <div class="form-group d-flex ">
                    <div class="col-sm-6">
                        <label for="" class="col-sm-3 control-label" style="display: inline">Số điện
                            thoại</label>
                        <input type="text" class="form-control" name="phone" id="phone">
                    </div>
                    <div class="col-sm-6">
                        <label for="" class="col-sm-3 control-label" style="display: inline">Ghi chú</label>
                        <input type="text" class="form-control" name="description" id="description">
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-success">Thêm mới</button>
            </div>
        </div> <!-- form-group // -->
    </form>
</div>

<script>
    
</script>
