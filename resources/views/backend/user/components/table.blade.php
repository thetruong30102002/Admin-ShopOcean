<h4>{{ $tableHeading }}</h4>
<table class="table mt-4">
    <thead class="thead-dark">
        <tr>
            <th scope="col"><input type="checkbox" value="" id="checkAll" class="input-checkbox"></th>
            <th scope="col"><strong> Ảnh đại diện</strong></th>
            <th scope="col"><strong> Thông tin thành viên</strong></th>
            <th scope="col"><strong> Địa chỉ</strong></th>
            <th scope="col"><strong> Tình trạng</strong></th>
            <th scope="col" class="text-center"><strong> Thao tác</strong></th>
        </tr>
    </thead>
    <tbody>
        @if (isset($users) && is_object($users))
            @foreach ($users as $user)
                <tr>
                    <th scope="row"><input type="checkbox" value="" id="checkAll"
                            class="input-checkbox checkBoxItem"></th>
                    <td>
                        <img src="https://kenh14cdn.com/203336854389633024/2022/12/19/worldcupmessi-16714134707591286548462.jpeg"
                            alt="">
                    </td>
                    <td>
                        <div class="user-item name"><strong> Họ và tên:</strong> {{ $user->name }}</div>
                        <div class="user-item email"><strong> Email:</strong> {{ $user->email }}</div>
                        <div class="user-item phone"><strong> Phone:</strong> {{ $user->phone }}</div>
                    </td>
                    <td>
                        <div class=""><strong> Địa chỉ:</strong> {{ $user->address }}</div>
                        <div class=""><strong> Phường:</strong> {{ $user->address }}</div>
                        <div class=""><strong> Quận:</strong> {{ $user->address }}</div>
                        <div class=""><strong> Thành phố:</strong> {{ $user->address }}</div>
                    </td>
                    <td class="text-center">
                        <div class="form-check form-switch">
                            <input class="form-check-input p-2" type="checkbox" role="switch"
                                id="flexSwitchCheckChecked" checked>
                        </div>
                    </td>
                    <td class="text-center">
                        <a href="" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
{{ $users->links() }}
