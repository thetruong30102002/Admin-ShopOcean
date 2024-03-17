<div class="row">
    <div class="col">
        <form action="{{ route('user.index') }}" method="get">
            <div class="d-flex uk-flex-middle">
                <select name="user_catalogue_id" id="" style="border-radius: 5px;">
                    <option value="0" selected>Chọn nhóm thành viên</option>
                    <option value="1">Quản trị viên</option>
                </select>
                <div class="input-group" style="width:500px">
                    <input type="text" name="keyword" value="{{ request('keyword') ?: old('keyword') }}"
                        placeholder="Nhập từ khóa bạn muốn tìm kiếm..." class="form-control">
                    <span class="iput-froup-btn align-self-center">
                        <button type="submit" name="search" value="search" class="btn btn-primary mb0 btn-sm"
                            style="padding: 9px">
                            Tìm kiếm
                        </button>
                    </span>
                </div>
            </div>
        </form>
    </div>
    <div class="col">
        <a href="{{ route('user.create') }}" class="btn btn-success"><i class="fa-solid fa-user-plus"></i>Thêm mới
            thành viên</a>
    </div>
</div>
