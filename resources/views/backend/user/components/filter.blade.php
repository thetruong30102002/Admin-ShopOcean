<form action="{{ route('user.index') }}" method="get">
    <div class="filter">
        <div class="perpage">
            <div class="">
                @php
                    $perpage = request('perpage') ?: old('perpage');
                @endphp
                <select name="perpage" class="form-control input-sm perpage filter mr10" style="width:170px">
                    @for ($i = 20; $i <= 200; $i += 20)
                        <option {{ $perpage == $i ? 'selected' : '' }} value='{{ $i }}'>{{ $i }}
                            bản ghi</option>
                    @endfor
                </select>
                <div class="action mt-4">
                    <div class="uk-flex uk-flex-middle">
                        @php
                            $userCatelogue = ['Chọn nhóm thành viên', 'Quản trị viên', 'Cộng tác viên'];
                            $user_catelogue_id = request('user_catelogue_id') ?: old('user_catelogue_id');
                        @endphp
                        <select name="user_catelogue_id" class=" mr10" style="padding:4px">

                            @foreach($userCatelogue as $key =>$item)
                            <option {{ $key == old('user_catelogue_id',
                            (isset($user_catelogue_id)) ? 
                            $user_catelogue_id : '') ? 'selected': ''}}
                            value="{{$key}}">{{$item}}</option>
                            @endforeach
                        </select>
                        <div class="uk-search uk-flex uk-flex-middle mr10">
                            <div class="input-group">
                                <input type="text" name='keyword' value="{{ request('keyword') ?: old('keyword') }}"
                                    placeholder="Nhập từ khóa bạn muốn tìm kiếm" class='form-control'
                                    style="width: 300px">
                                <span class="input-group-btn">
                                    <button type="submit" name='search' value="search"
                                        class="btn btn-primary mb10 btn-sm">
                                        Tìm kiếm
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col text-right ">
            <a href="{{ route('user.create') }}" class="btn btn-danger"><i class="fa-solid fa-user-plus"></i> Thêm mới
                thành viên</a>
        </div>
    </div>
</form>
{{-- <div class="row">
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
    <div class="col text-right ">
        <a href="{{ route('user.create') }}" class="btn btn-danger"><i class="fa-solid fa-user-plus"></i>Thêm mới
            thành viên</a>
    </div>
</div> --}}
