<div class="content-wrapper">
    @include('backend.user.components.breadcrumb', ['title' => $config['seo']['create']['title']])
    <form action="{{route('user.destroy',$user->id) }}" class="form-horizontal mt-4" style="width: 1400px;margin: 0 auto" method="POST">
        @csrf
        @method('delete')
        <div class="d-flex">
            <div class="mt-2">
                <h4>Thông tin chung</h4>
                <p>-Bạn có muốn xóa thành viên có email là: {{ $user->email }}</p>
                <p>-Lưu ý: không thể khôi phục thành viên sau khi bị xóa.</p>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="" style="width: 70%;">
                <div class="form-group d-flex ">
                    <div class="col-sm-6">
                        <label for="" class="col-sm-3 control-label">Email<span
                                class="text-danger">(*)</span></label>
                        <input type="text" class="form-control" name="email" id="email"
                            value="{{ old('email', $user->email ?? '') }}" autocomplete="off" readonly>
                    </div>
                    <div class="col-sm-6">
                        <label for="" class="col-sm-3 control-label">Họ tên <span
                                class="text-danger">(*)</span></label>
                        <input type="text" class="form-control" name="name"
                            value="{{ old('name', $user->name ?? '') }}" autocomplete="off" readonly>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-danger">Xóa dữ liệu</button>
                    </div>
                </div>
            </div> <!-- form-group // -->
    </form>
</div>
</div>
